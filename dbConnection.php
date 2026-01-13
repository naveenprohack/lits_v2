<?php
$db_host = "localhost:3306";
$db_user = "root";
$db_password = "";
$db_name = "stu_details";


// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
} 
// else {
//   echo"connected";
//   }
?>