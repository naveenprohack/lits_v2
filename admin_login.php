<?php
session_start();
include("db.php");

if (isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Use correct connection variable: $conn
    $sql = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
    $res = mysqli_query($conn, $sql);

    if ($res && mysqli_num_rows($res) == 1) {
        $_SESSION['admin'] = $user;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width:400px;">
    <div class="card p-4">
        <h3 class="text-center mb-3">Admin Login</h3>

        <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

        <form method="POST">
            <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
            <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
            <button name="login" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>

</body>
</html>
