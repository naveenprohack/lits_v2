<?php
include('./dbConnection.php');

if (!isset($_GET['id'])) {
    die("Invalid Job ID");
}

$jobId = $_GET['id'];

$sql = "DELETE FROM job_posts WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $jobId);

if ($stmt->execute()) {
    echo "<script>alert('Job deleted successfully'); window.location='admin_job_posts.php';</script>";
} else {
    echo "Delete Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
