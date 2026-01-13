<?php
ob_start(); // Prevents "Headers already sent" errors
include("../db.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 1. SECURITY: Check Admin Session
if (!isset($_SESSION['admin'])) {
    header("Location: ../admin_login.php");
    exit();
}
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $reminder = mysqli_real_escape_string($conn, $_POST['reminder']);

    // reminder_time should be a DATETIME column in your DB
    $sql = "UPDATE enquiry SET reminder_time = '$reminder' WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
}
?>