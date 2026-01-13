<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = $_POST['firstname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Save data to database (example: using MySQLi)
 $db_host = "localhost:3306";
$db_user = "logesh";
$db_password = "Logesh@2001";
$db_name = "stu_details";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO contactdata (firstname, phone, email, subject, message)
            VALUES ('$firstname',, '$phone', '$email', '$subject', '$message')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        $success = true; // Set success flag to true
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
