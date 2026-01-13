<?php
session_start();
include("db.php");

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Use $conn (NOT $connect)
$res = mysqli_query($conn, "SELECT * FROM results ORDER BY semester, student_id");

if (!$res) {
    die("Query Failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
<title>View Marks</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-5">

<h3>All Marks</h3><hr>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Student ID</th>
            <th>Semester</th>
            <th>Subject</th>
            <th>Marks</th>
            <th>Total</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>

<?php while($row = mysqli_fetch_assoc($res)){ ?>
<tr>
    <td><?= $row['result_id'] ?></td>
    <td><?= $row['student_id'] ?></td>
    <td><?= $row['semester'] ?></td>
    <td><?= $row['subject'] ?></td>
    <td><?= $row['marks'] ?></td>
    <td><?= $row['total'] ?></td>
    <td><a href="edit_marks.php?id=<?= $row['result_id'] ?>" class="btn btn-warning btn-sm">Edit</a></td>
</tr>
<?php } ?>

    </tbody>
</table>

</div>
</body>
</html>
