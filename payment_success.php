<?php
include('./dbConnection.php');

// Razorpay sends these 3 variables in the URL after success
$payment_id = $_GET['razorpay_payment_id'] ?? null;
$subscription_id = $_GET['razorpay_subscription_id'] ?? null;
$signature = $_GET['razorpay_signature'] ?? null;

if ($payment_id && $subscription_id) {
    // 1. Update the mandate status to 'active'
    // We use the subscription_id (which is the auth_link_id in your table)
    $stmt = $conn->prepare("UPDATE mandates SET status = 'active' WHERE auth_link_id = ?");
    $stmt->bind_param("s", $subscription_id);
    
    if ($stmt->execute()) {
        $status_msg = "Mandate Successfully Activated!";
        $icon = "bi-check-circle-fill text-success";
    } else {
        $status_msg = "Database update failed.";
        $icon = "bi-exclamation-triangle-fill text-danger";
    }
} else {
    $status_msg = "Invalid Response or Payment Cancelled.";
    $icon = "bi-x-circle-fill text-danger";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Status | LITS Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <style>
        body { background: #f8fafc; font-family: sans-serif; display: flex; align-items: center; justify-content: center; height: 100vh; }
        .receipt-card { background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); text-align: center; max-width: 400px; }
        .icon { font-size: 3rem; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="receipt-card">
        <div class="icon"><i class="<?= $icon ?>"></i></div>
        <h4><?= $status_msg ?></h4>
        <p class="text-muted small">Subscription ID: <?= htmlspecialchars($subscription_id) ?></p>
        <hr>
        <a href="mandate_console.php" class="btn btn-primary w-100">Back to Console</a>
    </div>
</body>
</html>