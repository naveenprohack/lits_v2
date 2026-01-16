<?php
session_start();
include("db.php");

// Allow only admin
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Validate ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid Result ID");
}

$resultId = $_GET['id'];

// Prepare delete query
$sql = "DELETE FROM results WHERE result_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $resultId);

if ($stmt->execute()) {
    echo "<script>alert('Result deleted successfully'); window.location='dashboard.php?page=result_view';</script>";
} else {
    echo "Delete Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
