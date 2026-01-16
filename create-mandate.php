
<?php
session_start();
if (!isset($_SESSION['admin'])) { 
    header("Location: login.php"); 
    exit(); 
}
include('./dbConnection.php');

// Razorpay Keys - ALERT: Please move these to a config file later!
// $key_id = "rzp_live_S3RSyBq3cGEddg";
// $key_secret = "URN8XC3KpXRA9cG04SG7Sgq8";
$key_id = "rzp_test_S3Iib9arNfoOPv";
$key_secret = "d9j2TUjcyIg8FnRTH3kUK0LI";

/**
 * Creates or retrieves a customer in Razorpay
 */
function create_customer($name, $email, $phone, $key_id, $key_secret){
    $url = "https://api.razorpay.com/v1/customers";
    $data = json_encode([
        "name" => $name,
        "email" => $email,
        "contact" => $phone,
        "fail_existing" => 0 // Returns existing ID if email/phone exists
    ]);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "$key_id:$key_secret");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

/**
 * Creates the Auth Link for the Mandate
 */
function create_mandate($customer_id, $name, $email, $phone, $amount, $account, $ifsc, $key_id, $key_secret){
    $url = "https://api.razorpay.com/v1/subscription_registration/auth_links";
    // $data = [
    //         "customer_id"=> $customer_id,
    //         "type"=> "link",
    //         "amount"=> $amount,
    //         "currency"=> "INR",
    //         "description"=> "Registration Link for eMandate",
    //         "customer" => [
    //             "name" => $name,
    //             "email" => $email,
    //             "contact" => $phone
    //         ],
    //         "subscription_registration"=> [
    //             "method"=> "emandate",
    //             "auth_type"=> "netbanking",
    //             "max_amount"=> 50000,
    //             "expire_at"=> 1893456000
    //         ]
    //     ];
        $data = [
            "customer_id"=> $customer_id,
            "type"=> "link",
            "amount"=> $amount,
            "currency"=> "INR",
            "description"=> "Registration Link for eMandate",
            
            // --- ADDED CALLBACK DETAILS HERE ---
            "callback_url" => "http://localhost/lits_v2/public_html/payment_success.php",
            "callback_method" => "get", 
            // -----------------------------------
            
            "customer" => [
                "name" => $name,
                "email" => $email,
                "contact" => $phone
            ],
            "subscription_registration"=> [
                "method"=> "emandate",
                "auth_type"=> "netbanking",
                "max_amount"=> 50000,
                "expire_at"=> 1893456000,
                "bank_account" => [
                    "account_number" => $account,
                    "ifsc_code" => $ifsc
                ]
            ],
            "redirect" => true
        ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "$key_id:$key_secret");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

// Logic to handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $amount  = intval($_POST['amount']) * 100; // to paise
    $account = $_POST['account_number'];
    $ifsc    = $_POST['ifsc'];

    $customer = create_customer($name, $email, $phone, $key_id, $key_secret);
    if(isset($customer['id'])){
        $customer_id = $customer['id'];
        $mandate = create_mandate($customer_id, $name, $email, $phone, $amount, $account, $ifsc, $key_id, $key_secret);

        if(isset($mandate['short_url'])){
            // INSERT INTO DATABASE
            $stmt = $conn->prepare("INSERT INTO mandates (customer_name, customer_email, customer_phone, amount, account_number, ifsc, auth_link_id, auth_link_url, razorpay_customer_id, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssissssss", $name, $email, $phone, $amount, $account, $ifsc, $mandate['id'], $mandate['short_url'], $customer_id, $mandate['status']);
            $stmt->execute();
            $success_msg = $mandate['short_url'];
        } else {
            $error_msg = $mandate['error']['description'] ?? "Mandate Link Failed";
        }
    } else {
        $error_msg = $customer['error']['description'] ?? "Customer Creation Failed";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eMandate System | LITS Admin</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">

    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f8fafc; 
            color: #1e293b;
        }

        .page-header { padding: 30px 0; }
        
        /* Form Card */
        .creation-card {
            background: white;
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 24px;
            padding: 35px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
            margin-bottom: 40px;
        }

        .form-label {
            font-weight: 700;
            font-size: 0.75rem;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 8px;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            background-color: #fcfdfe;
        }

        /* Status Badges */
        .status-badge {
            font-size: 0.7rem;
            font-weight: 700;
            padding: 5px 12px;
            border-radius: 100px;
            text-transform: uppercase;
        }
        .status-issued { background: #eff6ff; color: #2563eb; }
        .status-pending { background: #fffbeb; color: #d97706; }

        /* Modern Table */
        .table-container {
            background: white;
            border-radius: 20px;
            border: 1px solid rgba(0,0,0,0.05);
            overflow: hidden;
        }

        .table thead th {
            background: #f1f5f9;
            color: #64748b;
            font-size: 0.7rem;
            text-transform: uppercase;
            padding: 15px 20px;
            border: none;
        }

        .table tbody td {
            padding: 15px 20px;
            font-size: 0.9rem;
            vertical-align: middle;
            border-color: #f1f5f9;
        }

        .btn-copy {
            background: #f1f5f9;
            border: none;
            color: #64748b;
            padding: 5px 10px;
            border-radius: 8px;
            font-size: 0.8rem;
            transition: 0.2s;
        }
        .btn-copy:hover { background: #e2e8f0; color: #1e293b; }
    </style>
</head>
<body>

<div class="container py-5">
    
    <div class="page-header d-flex justify-content-between align-items-center">
        <div>
            <h2 class="fw-800 mb-1 tracking-tight">eMandate Console</h2>
            <p class="text-muted small fw-bold text-uppercase mb-0">Razorpay Direct NACH Integration</p>
        </div>
        <div class="d-flex gap-2">
            <span class="badge bg-success-subtle text-success p-2 px-3 rounded-pill small">
                <i class="bi bi-circle-fill me-1" style="font-size: 0.5rem;"></i> Live Mode
            </span>
        </div>
    </div>

    <?php if(isset($success_msg)): ?>
        <div class="alert alert-success border-0 shadow-sm rounded-4 p-4 mb-4 animate__animated animate__fadeIn">
            <div class="d-flex align-items-center gap-3">
                <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="bi bi-check-lg fs-4"></i>
                </div>
                <div>
                    <h6 class="fw-800 mb-1">Mandate Link Generated!</h6>
                    <p class="small mb-0">Share this URL with the customer to complete authorization.</p>
                </div>
            </div>
            <div class="mt-3 bg-white p-2 rounded-3 d-flex align-items-center justify-content-between border">
                <code class="text-primary fw-bold ms-2"><?= $success_msg ?></code>
                <button class="btn btn-primary btn-sm rounded-2 px-3" onclick="copyToClipboard('<?= $success_msg ?>')">Copy Link</button>
            </div>
        </div>
    <?php endif; ?>

    <div class="creation-card">
        <h5 class="fw-800 mb-4"><i class="bi bi-plus-circle-fill me-2 text-primary"></i>Setup New Instruction</h5>
        <form method="POST">
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Customer Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Jane Doe" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="jane@example.com" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Mobile Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="+91 00000 00000" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Max Limit (₹)</label>
                    <input type="number" name="amount" class="form-control" placeholder="5000" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Bank Account Number</label>
                    <input type="text" name="account_number" class="form-control" placeholder="0000 0000 0000" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">IFSC Code</label>
                    <input type="text" name="ifsc" class="form-control" placeholder="HDFC0001234" required>
                </div>
                <div class="col-12 text-end mt-4">
                    <button type="submit" class="btn btn-primary px-5 py-2 fw-bold rounded-3">
                        <i class="bi bi-lightning-charge-fill me-2"></i>Generate Mandate
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="table-container shadow-sm">
        <div class="p-4 border-bottom d-flex justify-content-between align-items-center">
            <h6 class="fw-800 mb-0">Registration Logs</h6>
            <button class="btn btn-sm btn-outline-secondary rounded-pill px-3" onclick="window.location.reload()">
                <i class="bi bi-arrow-clockwise me-1"></i> Refresh
            </button>
        </div>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Mandate Value</th>
                        <th>Account Details</th>
                        <th>Status</th>
                        <th>Auth Link</th>
                        <th>Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = $conn->query("SELECT * FROM mandates ORDER BY id DESC LIMIT 10");
                    while($row = $res->fetch_assoc()){
                        ?>
                        <tr>
                            <td>
                                <div class="fw-bold text-dark"><?= htmlspecialchars($row['customer_name']) ?></div>
                                <div class="text-muted" style="font-size: 0.75rem;"><?= htmlspecialchars($row['customer_email']) ?></div>
                            </td>
                            <td>
                                <div class="fw-bold">₹<?= number_format($row['amount']/100, 2) ?></div>
                                <small class="text-muted">NACH Debit</small>
                            </td>
                            <td>
                                <div class="small fw-semibold"><?= htmlspecialchars($row['ifsc']) ?></div>
                                <div class="text-muted" style="font-size: 0.75rem;"><?= htmlspecialchars($row['account_number']) ?></div>
                            </td>
                            <td>
                                <span class="status-badge <?= ($row['status'] == 'issued') ? 'status-issued' : 'status-pending' ?>">
                                    <?= htmlspecialchars($row['status']) ?>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="<?= $row['auth_link_url'] ?>" target="_blank" class="btn-copy">Open</a>
                                    <button class="btn-copy" onclick="copyToClipboard('<?= $row['auth_link_url'] ?>')" title="Copy Link">
                                        <i class="bi bi-clipboard"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="text-muted small">
                                <?= date('d M, H:i', strtotime($row['created_at'])) ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text);
    alert('Link copied to clipboard!');
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>