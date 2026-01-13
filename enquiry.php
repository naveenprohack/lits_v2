<?php
// Include database connection file
include('dbConnection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate the inputs
    if (!empty($name) && !empty($phone) && !empty($message)) {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO enquiry (name, phone, email, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $phone, $email, $message);

        // Execute the statement
        if ($stmt->execute()) {
            // Success response
            echo json_encode(['status' => 'success']);
        } else {
            // Error response
            echo json_encode(['status' => 'error', 'message' => $stmt->error]);
        }

        // Close the statement
        $stmt->close();
    } else {
        // Validation error response
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
    }
}

// Close the database connection
$conn->close();
?>
