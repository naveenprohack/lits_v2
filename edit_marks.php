<?php
session_start();
include("db.php");

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

$id = $_GET['id'];
$res = mysqli_query($connect, "SELECT * FROM results WHERE result_id=$id");
$row = mysqli_fetch_assoc($res);

if(isset($_POST['update'])){
    $marks = $_POST['marks'];
    $total = $_POST['total'];

    mysqli_query($connect, "UPDATE results SET marks=$marks, total=$total WHERE result_id=$id");
    $msg = "Marks Updated Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Marks</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-5">

<h3>Edit Marks</h3><hr>

<?php if(isset($msg)) echo "<div class='alert alert-success'>$msg</div>"; ?>

<form method="POST">
    <p><strong>Subject:</strong> <?= $row['subject'] ?></p>
    <input type="number" name="marks" class="form-control mb-3" value="<?= $row['marks'] ?>" required>
    <input type="number" name="total" class="form-control mb-3" value="<?= $row['total'] ?>" required>

    <button name="update" class="btn btn-primary">Update</button>
</form>

</div>
</body>
</html>
