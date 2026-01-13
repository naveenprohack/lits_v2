<?php
require_once('tcpdf/config/tcpdf_config.php');
require_once('tcpdf/tcpdf.php'); // Path to your tcpdf library
include('./dbConnection.php');
session_start();

if (!isset($_SESSION['stuLogEmail'])) {
    echo "<script> location.href='loginorsignup.php'; </script>";
    exit();
}

if (isset($_GET['oid']) && isset($_GET['rp_payment_id'])) {
    $razorpay_order_id = $_GET['oid'];
    $razorpay_payment_id = $_GET['rp_payment_id'];

    // Fetch payment details from the database
    $sql = "SELECT * FROM payments WHERE razorpay_order_id = '$razorpay_order_id' AND razorpay_payment_id = '$razorpay_payment_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $payment = $result->fetch_assoc();
    } else {
        echo "Invalid payment details.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}

// Generate PDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Lits');
$pdf->SetTitle('Payment Receipt');
$pdf->SetSubject('Payment Receipt');
$pdf->SetKeywords('Payment, Receipt, TCPDF, PHP');

// Set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' - Payment Receipt', PDF_HEADER_STRING);

// Set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Set font
$pdf->SetFont('helvetica', '', 10);

// Add a page
$pdf->AddPage();

// Content
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Template</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./stylebill.css">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
</head>
<body>
  <div class="container mt-5 p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="receipt-container shadow-lg p-4 rounded" id="receipt-container" style="background: #f9f9f9; border-radius: 10px;">
                <div class="receipt" id="receipt">
                    <!-- Header Section -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <img src="./image/Logo.png" alt="LITS Logo" class="img-fluid" style="max-width: 150px;">
                        </div>
                        <div class="col-md-6 text-end">
                            <h2 class="fw-bold text-primary mb-0">Learn Institute of Technology</h2>
                            <p class="text-muted mb-0">(AN ISO CERTIFIED INSTITUTION)</p>
                        </div>
                    </div>

                    <!-- Receipt Details Section -->
                    <div class="details mb-4">
                        <p><strong class="text-muted">Receipt No:</strong> <span id="receiptNo" class="text-dark">000000</span></p>
                        <p><strong class="text-muted">Name:</strong> <span id="receiptName" class="text-dark">' . $payment['billing_name'] . '</span></p>
                        <p><strong class="text-muted">Due Date:</strong> <span id="receiptDueDate" class="text-dark">dd/mm/yyyy</span></p>
                        <p><strong class="text-muted">Course:</strong> <span id="receiptCourse" class="text-dark">c_name</span></p>
                        <p><strong class="text-muted">Email:</strong> <span id="receiptEmail" class="text-dark">' . $payment['billing_email'] . '</span></p>
                        <p><strong class="text-muted">Payment ID:</strong> <span id="paymentId" class="text-dark">' . $payment['razorpay_payment_id'] . '</span></p>
                        <p><strong class="text-muted">Order ID:</strong> <span id="orderId" class="text-dark">' . $payment['razorpay_order_id'] . '</span></p>
                    </div>

                    <!-- Fee Breakdown Table -->
                    <table class="table table-bordered table-striped table-hover mb-4" style="border-radius: 8px; border-color: #ddd;">
                        <thead class="table-light">
                            <tr>
                                <th>Particulars</th>
                                <th>Amount (INR)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Registration Fee:</td>
                                <td><span id="receiptRegistrationFee" class="text-dark">₹ 00</span></td>
                            </tr>
                            <tr>
                                <td>Tuition Fee:</td>
                                <td><span id="receiptTuitionFee" class="text-dark">₹ ' . $payment['payAmount'] . '</span></td>
                            </tr>
                            <tr>
                                <td>Examination Fee:</td>
                                <td><span id="receiptExaminationFee" class="text-muted">-</span></td>
                            </tr>
                            <tr>
                                <td>Other Fee:</td>
                                <td><span id="receiptOtherFee" class="text-muted">-</span></td>
                            </tr>
                            <tr class="font-weight-bold">
                                <td><strong>Total:</strong></td>
                                <td><strong><span id="receiptTotal" class="text-success">₹ ' . $payment['payAmount'] . '</span></strong></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Footer Section -->
                    <div class="footer text-center mt-4">
                        <p class="text-muted mb-3">(Fees once paid will not be refunded under any circumstances.)</p>
                        <div class="signatures d-flex justify-content-between align-items-center">
                            <div class="candidate-sign">
                                <p class="fw-bold">Candidate Signature</p>
                            </div>
                            <div class="authorized-sign" style="position:relative;">
                                <p class="fw-bold">For LITS</p>
                                <p>Authorized Signatory</p>
                                <img src="./image/sig.png" alt="Signature" class="img-fluid" style="width: 120px; height: 60px;">
                                <img src="./image/sign.png" alt="Signature" class="img-fluid" style="position:absolute; top:30px; right:20px; width: 80px; height: 80px;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Buttons for Printing and Downloading -->
                <div class="text-center mt-3">
                    <button onclick="printReceipt()" class="btn btn-success px-4 py-2" style="border-radius: 30px;">Print Receipt</button>
                    <button onclick="downloadReceipt()" class="btn btn-danger px-4 py-2 ms-3" style="border-radius: 30px;">Download PDF</button>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
    <script src="./script.js"></script>
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>


';

// Print HTML content into PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF document
$pdf->Output('payment_receipt.pdf', 'D');

?>
