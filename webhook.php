<?php
// --------- CONFIG -----------
$webhook_secret = "lits_webhook_2025_secret";  // Same secret you entered in Razorpay Dashboard
include('./dbConnection.php');

// --------- READ RAW PAYLOAD ----------
$payload = file_get_contents("php://input");
$signature = $_SERVER['HTTP_X_RAZORPAY_SIGNATURE'] ?? "";

// ---------- FUNCTION: VERIFY SIGNATURE ----------
function verify_signature($payload, $signature, $secret) {
    $expected = hash_hmac('sha256', $payload, $secret);
    return hash_equals($expected, $signature);
}

// ---------- LOG WEBHOOK REQUEST ----------
file_put_contents("webhook_logs.txt", date("Y-m-d H:i:s") . " | PAYLOAD: $payload\n\n", FILE_APPEND);

// ---------- VERIFY SIGNATURE ----------
if (!verify_signature($payload, $signature, $webhook_secret)) {
    http_response_code(400);
    echo "Invalid signature";
    exit;
}

$data = json_decode($payload, true);
$event = $data['event'];

// -------------- PROCESS WEBHOOK EVENTS --------------
/*
IMPORTANT TOKEN EVENTS FOR eMANDATE:

token.confirmed
token.rejected
token.paused
token.cancelled
token.cancellation_initiated
token.service_provider.activated
token.service_provider.failed
token.service_provider.cancelled
token.service_provider.deactivated
*/

if (strpos($event, 'token.') === 0) {

    $token_id  = $data['payload']['token']['entity']['id'] ?? null;
    $customer_id = $data['payload']['token']['entity']['customer_id'] ?? null;
    $status = $data['payload']['token']['entity']['status'] ?? null;

    // UPDATE STATUS INSIDE DATABASE
    if ($token_id && $customer_id) {
        $stmt = $conn->prepare("UPDATE mandates SET mandate_token=?, mandate_status=? WHERE razorpay_customer_id=? LIMIT 1");
        $stmt->bind_param("sss", $token_id, $status, $customer_id);
        $stmt->execute();
    }

    file_put_contents("webhook_logs.txt",
        "TOKEN EVENT: $event | TOKEN: $token_id | CUSTOMER: $customer_id | STATUS: $status\n",
        FILE_APPEND
    );
}

// -------------- PAYMENT EVENTS (optional) --------------
if ($event === "payment.captured") {

    $payment_id = $data['payload']['payment']['entity']['id'];
    $amount = $data['payload']['payment']['entity']['amount'];
    $email = $data['payload']['payment']['entity']['email'];

    file_put_contents("webhook_logs.txt",
        "PAYMENT CAPTURED: $payment_id | Amount: $amount | Email: $email\n",
        FILE_APPEND
    );
}

// -------------- RESPONSE TO RAZORPAY --------------
http_response_code(200);
echo "Webhook received OK";
?>
