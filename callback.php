<?php
include("config.php");

// Razorpay callback sends JSON
$input = file_get_contents("php://input");
$data  = json_decode($input, true);

// Log callback (optional)
file_put_contents("callback_log.txt", date("Y-m-d H:i:s") . "\n" . $input . "\n\n", FILE_APPEND);

if (!$data) {
    die("Invalid Callback Data");
}

$mandate_id = $data['payload']['payment_link']['entity']['id'] ?? '';
$status     = $data['payload']['payment_link']['entity']['status'] ?? '';
$payment_id = $data['payload']['payment']['entity']['id'] ?? '';
$amount     = $data['payload']['payment']['entity']['amount'] / 100 ?? 0;

if ($mandate_id == "") {
    die("Mandate ID missing");
}

// Convert Razorpay statuses to readable format
switch ($status) {
    case "paid":
        $final_status = "Active";
        break;
    case "created":
        $final_status = "Pending";
        break;
    case "failed":
        $final_status = "Failed";
        break;
    default:
        $final_status = "Pending";
}

//
// 1️⃣ Update Mandate Status
//
$update = $conn->prepare("UPDATE mandates SET status=? WHERE mandate_id=?");
$update->bind_param("ss", $final_status, $mandate_id);
$update->execute();

//
// 2️⃣ Insert Transaction
//
if ($payment_id != "") {
    $insert_txn = $conn->prepare("INSERT INTO transactions (payment_id, mandate_id, amount, status) VALUES (?, ?, ?, ?)");
    $insert_txn->bind_param("ssds", $payment_id, $mandate_id, $amount, $final_status);
    $insert_txn->execute();
}

//
// 3️⃣ Redirect user (optional)
//
header("Location: success.php");
exit;
?>
