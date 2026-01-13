<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit;
}

include("config.php");
include("razorpay/Razorpay.php"); // Razorpay SDK

use Razorpay\Api\Api;

$api = new Api("YOUR_KEY_ID", "YOUR_KEY_SECRET");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $customer_name = $_POST['customer_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'] * 100; // Convert to paise
    $first_charge = $_POST['first_charge'] * 100;
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    try {
        // Create Razorpay eMandate
        $mandate = $api->paymentLink->create([
            "customer" => [
                "name"  => $customer_name,
                "email" => $email,
                "contact" => $phone
            ],
            "type" => "link",
            "amount" => $first_charge,
            "currency" => "INR",
            "description" => "eNACH Mandate Setup",

            "subscription" => [
                "period" => "monthly",
                "type"   => "linked",
                "amount" => $amount,
                "start_at" => strtotime($start_date),
                "end_at"   => strtotime($end_date)
            ],

            "notify" => [
                "sms" => true,
                "email" => true
            ],

            "callback_url" => "https://yourwebsite.com/callback.php",
            "callback_method" => "post"
        ]);

        $mandate_id = $mandate['id'];
        $mandate_link = $mandate['short_url'];

        // Save to database
        $stmt = $conn->prepare("INSERT INTO mandates
        (mandate_id, customer_name, email, phone, amount, status, mandate_link)
        VALUES (?, ?, ?, ?, ?, 'Pending', ?)");
        $stmt->bind_param("ssssds", $mandate_id, $customer_name, $email, $phone, $_POST['amount'], $mandate_link);
        $stmt->execute();

        $message = "Mandate Created Successfully! <br>
                    <a href='$mandate_link' target='_blank' class='btn btn-sm btn-primary mt-2'>Open Link</a>";

    } catch (Exception $e) {
        $message = "<div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
    }
}

?>

<?php include("includes/header.php"); ?>

<div class="container mt-4">
    <h3>Create New Mandate</h3>
    <hr>

    <?php if ($message) echo "<div class='alert alert-info'>$message</div>"; ?>

    <form method="POST" class="row g-3">

        <div class="col-md-6">
            <label class="form-label">Customer Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Customer Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Monthly Amount (₹)</label>
            <input type="number" min="1" name="amount" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">First Charge Amount (₹)</label>
            <input type="number" min="1" name="first_charge" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Start Date</label>
            <input type="date" name="start_date" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">End Date</label>
            <input type="date" name="end_date" class="form-control" required>
        </div>

        <div class="col-md-12">
            <button class="btn btn-primary">Generate Mandate</button>
        </div>

    </form>
</div>

<?php include("includes/footer.php"); ?>
