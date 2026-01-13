<?php
/**
 * enquiry.php - Securely saves lead to Database and sends Email
 */

// 1. Set Header for JSON Response
header('Content-Type: application/json');

// 2. Database & Email Configuration
include('./dbConnection.php'); // Ensure this file defines $conn
$admin_email = "naveen@mailinator.com"; 
$website_name = "Learn Institute Of Technology Service";

// 3. Initialize Response
$response = ['status' => 'error', 'message' => 'Something went wrong.'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 4. Sanitize Input Data
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $phone   = mysqli_real_escape_string($conn, $_POST['phone']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // 5. Basic Validation
    if (empty($name) || empty($phone) || empty($message)) {
        $response['message'] = "Please fill in all required fields.";
    } else {
        
        // 6. Insert into Database Table
        $sql = "INSERT INTO enquiry (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            
            // 7. Success in DB, now attempt to send Email
            $subject = "New Lead: " . $name;
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: LITS Enrollment <noreply@litsedu.com>" . "\r\n";

            $email_body = "
            <html>
            <body style='font-family: Arial, sans-serif; color: #333;'>
                <div style='max-width: 600px; padding: 20px; border: 1px solid #ddd;'>
                    <h2 style='color: #0ca6a3;'>New Student Inquiry</h2>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Phone:</strong> $phone</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Message:</strong> $message</p>
                    <p style='font-size: 11px; color: #999;'>Sent from Website Popup</p>
                </div>
            </body>
            </html>";

            // We don't block the response if mail fails; the DB record is more important.
            // @mail($admin_email, $subject, $email_body, $headers);

            $response['status'] = 'success';
            $response['message'] = 'Your inquiry has been saved!';
            
        } else {
            $response['message'] = "Database Error: " . $conn->error;
        }
    }
}

// Close connection
$conn->close();

// Return JSON to the AJAX call
echo json_encode($response);
exit();