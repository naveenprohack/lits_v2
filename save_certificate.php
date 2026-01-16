<?php
include('./dbConnection.php');

require_once('tcpdf/config/tcpdf_config.php');
require_once('tcpdf/tcpdf.php'); // Path to your TCPDF library

// POST Data
$name   = $_POST['student_name'];
$course = $_POST['course_name'];
$start  = $_POST['start_date'];
$end    = $_POST['end_date'];
$topics = $_POST['topics'];
$grade  = $_POST['grade'];
$branch = $_POST['branch'];
$issue  = $_POST['issue_date'];

// Generate Certificate ID and PDF filename
$cert_id = "LITS-" . strtoupper(substr(md5(time()), 0, 8));
$pdf_name = $cert_id . ".pdf";

// Folder to save certificates
$folder = $_SERVER['DOCUMENT_ROOT'] . '/certificates';

// 1️⃣ Create folder if it doesn't exist
if (!file_exists($folder)) {
    mkdir($folder, 0755, true); // 0755 permissions are safe for GoDaddy
}

// 2️⃣ Check folder is writable
if (!is_writable($folder)) {
    die("Error: The folder 'certificates' is not writable. Please check permissions.");
}

// 3️⃣ Create PDF
$pdf = new TCPDF('P', 'mm', 'A4');

// Disable header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Remove margins & auto page break
$pdf->SetMargins(0, 0, 0, true);
$pdf->SetAutoPageBreak(false, 0);

// Add a page
$pdf->AddPage();

// Get full A4 dimensions
$page_width  = $pdf->getPageWidth();   // 210mm
$page_height = $pdf->getPageHeight();  // 297mm

// Full-page background image
$pdf->Image(
    $_SERVER['DOCUMENT_ROOT'] . '/templates/certificate_template.png', // image path
    0, 0,                   // X, Y
    $page_width, $page_height, // width, height
    '', '', '', false, 300, '', false, false, 0, false, false, false
);

// Serial No (Left top)
$pdf->SetFont('helvetica', '', 12);
$pdf->SetXY(20, 50);
$pdf->Cell(0, 10, "S NO : $cert_id", 0, 1);

// Reg No (Right top)
$pdf->SetXY(130, 50);
$pdf->Cell(0, 10, "Reg. No : $cert_id", 0, 1);

// Student Name
$pdf->SetFont('times', 'B', 22);
$pdf->SetXY(50, 120);
$pdf->Cell(110, 10, $name, 0, 1, 'C');

// Dates
$pdf->SetFont('times', '', 16);
$pdf->SetXY(50, 115);
$pdf->Cell(110, 10, "From : $start    To : $end", 0, 1, 'C');

// Course Name
$pdf->SetXY(50, 135);
$pdf->Cell(110, 10, $course, 0, 1, 'C');

// Topics
$pdf->SetFont('times', 'B', 14);
$pdf->SetXY(30, 155);
$pdf->MultiCell(150, 8, strtoupper($topics), 0, 'C');

// Grade
$pdf->SetFont('times', 'B', 18);
$pdf->SetXY(50, 178);
$pdf->Cell(110, 10, "Grade : $grade", 0, 1, 'C');

// Branch
$pdf->SetFont('times', '', 14);
$pdf->SetXY(30, 200);
$pdf->Cell(150, 8, "Branch : $branch", 0, 1, 'L');

// Issue Date
$pdf->SetXY(30, 210);
$pdf->Cell(150, 8, "Date of Issue : $issue", 0, 1, 'L');

// Save PDF to folder
$filepath = $folder . '/' . $pdf_name;
$pdf->Output($filepath, 'F'); // 'F' = save to file

// Insert into DB
$stmt = $conn->prepare("INSERT INTO certificates 
(cert_id, student_name, course_name, start_date, end_date, topics, grade, branch, issue_date, pdf_file)
VALUES (?,?,?,?,?,?,?,?,?,?)");

$stmt->bind_param("ssssssssss", $cert_id, $name, $course, $start, $end, $topics, $grade, $branch, $issue, $pdf_name);
$stmt->execute();

// Success message
echo "<script>alert('Certificate Generated Successfully'); window.location='dashboard.php?page=certificate';</script>";
?>
