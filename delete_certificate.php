<?php
include('./dbConnection.php');

$id = $_GET['id'];

$conn->query("DELETE FROM certificates WHERE id=$id");

echo "<script>alert('Deleted Successfully'); window.location='certificate_list.php';</script>";
?>
