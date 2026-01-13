<?php
include('./dbConnection.php');
session_start();
?>

<style>
    #togglePassword {
        float: right;
        margin-left: -25px;
        margin-top: -30px;
        right: 10px;
        position: relative;
        z-index: 2;
    }
</style>

<form method="POST">
   
   <div class="form-group">
     <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label><small id="statusMsg1"></small><input type="text"
       class="form-control" placeholder="Name" name="stuname" id="stuname">
   </div>
   <div class="form-group">
   <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label><small id="statusMsg2"></small><input type="email"
       class="form-control" placeholder="Email" name="stuemail" id="stuemail">
     <small class="form-text">We'll never share your email with anyone else.</small>
   </div>
   <div class="form-group">
     <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">New
       Password</label><small id="statusMsg3"></small><input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
      <i class="fa-solid fa-eye" id="togglePassword"></i>
   </div>

    <button type="submit">Register</button>
</form>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#stupass');

    togglePassword.addEventListener('click', (e) => {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        togglePassword.classList.toggle('fa-eye-slash'); // Toggle eye icon
    });
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['stuname'];
    $email = $_POST['stuemail'];
    $password = password_hash($_POST['stupass'], PASSWORD_BCRYPT); // Hash the password

    // Generate a unique token for verification
    $token = bin2hex(random_bytes(50));

    // Insert user into the database
    $sql = "INSERT INTO emailverification (name, email, password, verification_token) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $password, $token);

    if ($stmt->execute()) {
        // Send verification email
        $verifyLink = "http://litsedu.com/emailVerification.php?token=" . $token;
        $subject = "Verify Your Email";
        $message = "Hi $name,\n\nClick the link below to verify your email:\n$verifyLink\n\nThank you!";
        $headers = "From: no-reply@yourdomain.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "<p>A verification email has been sent to your email address.</p>";
        } else {
            echo "<p>Failed to send verification email.</p>";
        }
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
