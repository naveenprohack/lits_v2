
<?php

  

  include('./dbConnection.php');
 
   session_start();
   ?>


<?php
if (isset($_GET['token'])) {
    $token = $_GET['token'];

   include('./dbConnection.php');
 
   

    // Verify the token
    $sql = "SELECT id FROM emailverification WHERE verification_token = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Mark user as verified
        $updateSql = "UPDATE  emailverification SET is_verified = 1, verification_token = NULL WHERE verification_token = ?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("s", $token);
        if ($updateStmt->execute()) {
            echo "Your email has been successfully verified!";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $updateStmt->close();
    } else {
        echo "Invalid or expired token.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "No token provided.";
}
?>
