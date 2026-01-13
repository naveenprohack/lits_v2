
<?php
include('./dbConnection.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    if ($action == 'payOrder') {
        // Fetch form data
        $billing_name = trim($_POST['billing_name']);
        $billing_email = trim($_POST['billing_email']);
        $billing_mobile = trim($_POST['billing_mobile']);
        $payAmount = trim($_POST['payAmount']);

        // Validate form data
        if (empty($billing_name) || empty($billing_mobile) || empty($payAmount)) {
            echo json_encode(['res' => 'error', 'message' => 'All fields are required.']);
            exit();
        }

        // Razorpay API credentials (should be stored securely, e.g., in environment variables)
            $key_id = 'rzp_live_ryxLCctilGE3So';
        $key_secret = 'YTsrOc9SVjS6yXAB4BrxYdE9';






        // Create an order using Razorpay API
        $api_url = 'https://api.razorpay.com/v1/orders';
        
        $data = [
            'amount' => $payAmount * 100, // amount in paise
            'currency' => 'INR',
            'payment_capture' => 1 ,// auto-capture
            
            'notes' => [
        'offer_code' => 'offer_Q49qaunBBgueEC', // Offer code applied
        'discount' => '1', // Discount (flat or percentage, handled on frontend or by your logic)
    ]
        ];

        $ch = curl_init($api_url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id . ':' . $key_secret);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $response = curl_exec($ch);
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_error = curl_error($ch);
        curl_close($ch);
        $responseData = json_decode($response, true);

        if ($http_status !== 200) {
            error_log("Razorpay API request failed. HTTP Status: $http_status. Error: $curl_error. Response: $response");
            echo json_encode(['res' => 'error', 'message' => 'Razorpay API request failed. Please try again later.']);
            exit();
        }

        if (isset($responseData['id'])) {
            $order_id = $responseData['id'];
            echo json_encode([
                'res' => 'success',
                'razorpay_key' => $key_id,
                'userData' => [
                    'name' => $billing_name,
                    'email' => $billing_email,
                    'mobile' => $billing_mobile,
                    'amount' => $payAmount * 100,
                    'description' => 'Payment for services',
                    'rpay_order_id' => $order_id
                ]
            ]);
        } else {
            error_log("Failed to create Razorpay order. Response: $response");
            echo json_encode(['res' => 'error', 'message' => 'Failed to create order. Please try again.']);
        }
    } elseif ($action == 'verifyPayment') {
        // Verify payment and store in DB
        $razorpay_payment_id = trim($_POST['razorpay_payment_id']);
        $razorpay_order_id = trim($_POST['razorpay_order_id']);
        $billing_name = trim($_POST['billing_name']);
        $billing_email = trim($_POST['billing_email']);
        $billing_mobile = trim($_POST['billing_mobile']);
        $payAmount = trim($_POST['payAmount']);

        // Store payment details in DB
        $sql = "INSERT INTO payments (billing_name, billing_email, billing_mobile, payAmount, razorpay_payment_id, razorpay_order_id, payment_status)
                VALUES (?, ?, ?, ?, ?, ?, 'Success')";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param('ssssss', $billing_name, $billing_email, $billing_mobile, $payAmount, $razorpay_payment_id, $razorpay_order_id);
            if ($stmt->execute()) {
                echo json_encode(['status' => 'success']);
            } else {
                error_log("Database insertion failed: " . $stmt->error);
                echo json_encode(['status' => 'error', 'message' => 'Database insertion failed. Please try again.']);
            }
            $stmt->close();
        } else {
            error_log("Failed to prepare SQL statement: " . $conn->error);
            echo json_encode(['status' => 'error', 'message' => 'Failed to prepare database operation. Please try again.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid action.']);
    }
}
?>
