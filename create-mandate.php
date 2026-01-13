<?php
session_start();
if (!isset($_SESSION['admin'])) { 
    header("Location: login.php"); 
    exit(); 
}

include 'db.php';

// Razorpay Keys
$key_id = "rzp_test_S3Iib9arNfoOPv";
$key_secret = "d9j2TUjcyIg8FnRTH3kUK0LI";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name       = $_POST['customer_name'];
    $email      = $_POST['customer_email'];
    $contact    = $_POST['customer_contact'];
    $amount     = intval($_POST['amount']) * 100;
    $max_amount = intval($_POST['max_amount']) * 100;
    $auth_type  = $_POST['auth_type'];

    /* ----------------------------------
       STEP 1: Create Customer in Razorpay
       ---------------------------------- */

    $customer_payload = json_encode([
        "name"    => $name,
        "email"   => $email,
        "contact" => $contact
    ]);

    $ch1 = curl_init("https://api.razorpay.com/v1/customers");

    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch1, CURLOPT_USERPWD, "$key_id:$key_secret");
    curl_setopt($ch1, CURLOPT_POST, true);
    curl_setopt($ch1, CURLOPT_POSTFIELDS, $customer_payload);
    curl_setopt($ch1, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);

    $customer_response = curl_exec($ch1);
    $customer_code = curl_getinfo($ch1, CURLINFO_HTTP_CODE);
    curl_close($ch1);

    file_put_contents("debug_customer_response.txt", $customer_response);

    $customer_result = json_decode($customer_response, true);

    if ($customer_code != 200) {
        $error = "Customer Create Error → " . ($customer_result["error"]["description"] ?? "Unknown error");
        goto end_process;
    }

    $customer_id = $customer_result["id"];

    /* ----------------------------------
       STEP 2: Create NACH Mandate
       ---------------------------------- */

    $mandate_payload = json_encode([
        "customer_id" => $customer_id,
        "type"        => "nach",
        "recurring"   => 1,
        "amount"      => $amount,
        "currency"    => "INR",
        "nach" => [
            "max_amount" => $max_amount,
            "auth_type"  => $auth_type,
            "debit_type" => "variable"
        ],
        "callback_url" => "https://litsedu.com/admin/callback.php"
    ]);

    $ch2 = curl_init("https://api.razorpay.com/v1/mandates");

    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch2, CURLOPT_USERPWD, "$key_id:$key_secret");
    curl_setopt($ch2, CURLOPT_POST, true);
    curl_setopt($ch2, CURLOPT_POSTFIELDS, $mandate_payload);
    curl_setopt($ch2, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);

    $response = curl_exec($ch2);
    $http_code = curl_getinfo($ch2, CURLINFO_HTTP_CODE);
    $curl_error = curl_error($ch2);
    curl_close($ch2);

    file_put_contents("debug_mandate_response.txt", $response);

    $result = json_decode($response, true);

    /* ----------------------------------
       DEBUG PRINT (temporary)
       ---------------------------------- */
    echo "<pre>";
    echo "HTTP CODE: $http_code\n";
    echo "RAZORPAY RESPONSE:\n$response\n";
    echo "</pre>";

    if ($curl_error) {
        $error = "CURL ERROR → $curl_error";
    } 
    elseif ($http_code != 200) {
        $error = "Mandate Error → " . ($result["error"]["description"] ?? "Unknown error");
    } 
    else {
        // SUCCESS
        $mandate_id = $result["id"];
        $short_url  = $result["short_url"];
        $status     = $result["status"];

        $stmt = $conn->prepare("INSERT INTO mandates 
            (mandate_id, customer_name, customer_email, customer_contact, mandate_url, status, max_amount)
            VALUES (?, ?, ?, ?, ?, ?, ?)"
        );

        $stmt->bind_param("ssssssi", 
            $mandate_id, $name, $email, $contact, 
            $short_url, $status, $max_amount
        );
        $stmt->execute();

        $success = "Mandate Created Successfully!";
        $link = $short_url;
    }

}

end_process:

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
