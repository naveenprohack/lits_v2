<?php
session_start();
if (!isset($_SESSION['admin'])) { header("Location: login.php"); exit(); }

include 'db.php';

// Razorpay API Keys
$key_id = "rzp_live_ryxLCctilGE3So";
$key_secret = "YTsrOc9SVjS6yXAB4BrxYdE9";

// When form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['customer_name'];
    $email = $_POST['customer_email'];
    $contact = $_POST['customer_contact'];
    $amount = $_POST['amount'] * 100; // in paise
    $max_amount = $_POST['max_amount'] * 100;
    $auth_type = $_POST['auth_type']; // netbanking / aadhaar

    // API Payload
    $data = [
        "customer" => [
            "name" => $name,
            "email" => $email,
            "contact" => $contact,
        ],
        "type" => "nach",
        "recurring" => 1,
        "amount" => $amount,
        "currency" => "INR",
        "nach" => [
            "max_amount" => $max_amount,
            "auth_type" => $auth_type,
            "debit_type" => "variable"
        ],
        "callback_url" => "https://litsedu.com/admin/callback.php"
    ];

    $payload = json_encode($data);

    // cURL Request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.razorpay.com/v1/mandates");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "$key_id:$key_secret");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);

    if (isset($result["id"])) {

        // Save mandate in DB
        $stmt = $conn->prepare("INSERT INTO mandates (mandate_id, customer_name, customer_email, customer_contact, mandate_url, status, max_amount) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssi", 
            $result["id"], 
            $name, 
            $email, 
            $contact,
            $result["short_url"],
            $result["status"],
            $max_amount
        );
        $stmt->execute();

        $success = "Mandate created successfully!";
        $link = $result["short_url"];
    } else {
        $error = "Error creating mandate: " . $result["error"]["description"];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create eNACH Mandate</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container mt-4">
    <h3>Create New eNACH Mandate</h3>

    <?php if (!empty($success)): ?>
        <div class="alert alert-success">
            <?= $success ?><br>
            <b>Mandate Link:</b> <a href="<?= $link ?>" target="_blank"><?= $link ?></a>
        </div>
    <?php endif; ?>

    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <div class="card p-4 shadow">

        <form method="post">

            <h5 class="mb-3">Customer Details</h5>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label>Customer Name</label>
                    <input type="text" name="customer_name" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label>Email</label>
                    <input type="email" name="customer_email" class="form-control">
                </div>

                <div class="col-md-4 mb-3">
                    <label>Contact</label>
                    <input type="text" name="customer_contact" class="form-control" required>
                </div>
            </div>

            <h5 class="mt-4 mb-3">Mandate Details</h5>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label>First Debit Amount (₹)</label>
                    <input type="number" name="amount" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label>Maximum Debit Amount (₹)</label>
                    <input type="number" name="max_amount" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label>Authentication Type</label>
                    <select name="auth_type" class="form-control">
                        <option value="netbanking">NetBanking</option>
                        <option value="aadhaar">Aadhaar eSign</option>
                    </select>
                </div>
            </div>

            <button class="btn btn-primary mt-3">Create Mandate</button>

        </form>

    </div>
</div>

</body>
</html>
