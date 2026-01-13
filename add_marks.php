<?php
session_start();
include("db.php");

// CHECK ADMIN LOGIN
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$msg = "";

// FORM SUBMIT
if (isset($_POST['add'])) {

    // Get and sanitize input
    $sid   = intval($_POST['student_id']);
    $sem   = intval($_POST['semester']);
    $sub   = mysqli_real_escape_string($conn, $_POST['subject']);
    $marks = intval($_POST['marks']);
    $total = intval($_POST['total']);

    // VALIDATION
    if ($sid <= 0 || $sem <= 0 || $marks < 0 || $total <= 0) {
        $msg = "Invalid data. Please check your inputs.";
    } else {

        // INSERT QUERY (using the correct connection variable: $conn)
        $sql = "INSERT INTO results (student_id, semester, subject, marks, total)
                VALUES ('$sid', '$sem', '$sub', '$marks', '$total')";

        if (mysqli_query($conn, $sql)) {
            $msg = "Marks Added Successfully!";
        } else {
            $msg = "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Marks</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-5">

<h3>Add Marks</h3>
<hr>

<?php if ($msg != "") { ?>
    <div class="alert alert-info">
        <?= $msg ?>
    </div>
<?php } ?>

<form method="POST">

    <input type="number" name="student_id" class="form-control mb-3" placeholder="Student ID" required>

    <input type="number" name="semester" class="form-control mb-3" placeholder="Semester" required>

    <input type="text" name="subject" class="form-control mb-3" placeholder="Subject" required>

    <input type="number" name="marks" class="form-control mb-3" placeholder="Marks" required>

    <input type="number" name="total" class="form-control mb-3" placeholder="Total Marks" required>

    <button name="add" class="btn btn-success">Add Marks</button>
</form>

</div>
</body>
</html>
