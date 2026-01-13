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
$allowed_statuses = ['follow_up', 'completed', 'not_interested', 'wrong_category', 'junk'];

if(isset($_POST['id']) && (isset($_POST['status']) || isset($_POST['note']))){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    if(isset($_POST['status'])){
        $status = $_POST['status'];
        if (!in_array($status, $allowed_statuses)) {
            echo json_encode(['status' => 'error', 'msg' => 'Invalid Status Value']);
            exit;
        }
        $sql = "UPDATE enquiry SET status = '$status' WHERE id = $id";
    }
    if (isset($_POST['note'])) {
        $note = mysqli_real_escape_string($conn, $_POST['note']);
        $sql = "UPDATE enquiry SET admin_note = '$note' WHERE id = '$id'";
    }
   if(mysqli_query($conn, $sql)){
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'msg' => 'DB Error']);
    }
}
?>