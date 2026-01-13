



<?php
// Retrieve parameters passed from payment confirmation page
$orderID = $_GET['oid']; // Order ID
$paymentID = $_GET['rp_payment_id']; // Payment ID
$signature = $_GET['rp_signature']; // Signature
// Other relevant parameters...

// Generate bill HTML
$billHTML = '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bill</title>
<style>
    /* Add CSS styles for bill formatting */
    /* Example styles */
    body {
        font-family: Arial, sans-serif;
    }
    .bill-container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
    }
</style>
</head>
<body>
    <div class="bill-container">
        <h2>Invoice</h2>
        <p><strong>Order ID:</strong> ' . $orderID . '</p>
        <p><strong>Payment ID:</strong> ' . $paymentID . '</p>
        <!-- Add other bill details here -->
    </div>
</body>
</html>
';

// Display bill in browser
echo $billHTML;

// Alternatively, you can save the bill HTML to a file or generate a PDF
// Example:
// file_put_contents('bill.html', $billHTML);
// Then you can provide a link to download the bill HTML file or convert it to PDF using libraries like Dompdf, TCPDF, etc.
?>


