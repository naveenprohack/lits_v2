<?php
include('./dbConnection.php');
session_start(); // Start session handling

function generateVerificationCode($length = 6) {
    return strtoupper(substr(bin2hex(random_bytes($length)), 0, $length));
}

$message = ''; // Initialize message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phoneNumber'] ?? null;
    $email = $_POST['email'] ?? null;
    $verificationCode = generateVerificationCode(6);

    if ($phone || $email) {
        $sql = "SELECT id, verification_code FROM users123 WHERE phone_number = ? OR email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $phone, $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            $sql = "INSERT INTO users123 (phone_number, email, verification_code) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $phone, $email, $verificationCode);
            if ($stmt->execute()) {
                $_SESSION['verification_code'] = $verificationCode;
                $_SESSION['user_phone'] = $phone;
                $_SESSION['user_email'] = $email;
                
                $message = "Registration successful! Your referral code is: " . $verificationCode;
            } else {
                $message = "Error: " . $conn->error;
            }
        } else {
            $user = $result->fetch_assoc();
            $_SESSION['verification_code'] = $user['verification_code'];
            $_SESSION['user_phone'] = $phone;
            $_SESSION['user_email'] = $email;
            
            $message = "You are already registered! Your referral code is: " . $user['verification_code'];
        }
    } else {
        $message = "Please enter a phone number or email!";
    }
} else {
    $message = "Invalid request method.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Status</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="text-center">Registration Status</h5>
            </div>
            <div class="card-body">
                <p class="text-center">
                    <?php
                    // Display the message
                    echo '<strong>' . htmlspecialchars($message) . '</strong>';
                    ?>
                </p>
                <div class="text-center">
                    <a href="index.php" class="btn btn-primary">Go to Homepage</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
