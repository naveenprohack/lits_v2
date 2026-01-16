<?php
include("db.php");

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

/* Validate ID */
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid Result ID");
}

$id = (int)$_GET['id'];

/* Fetch result + course */
$query = "
SELECT r.*, c.course_name AS course_name,s.name as student_name
FROM results r
LEFT JOIN course c ON r.course_id = c.course_id
LEFT JOIN students s ON s.student_id = r.student_id
WHERE r.result_id = $id
";

$res = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($res);

if (!$row) {
    die("Result not found.");
}

/* Update record */
if (isset($_POST['update'])) {
    $marks = (int)$_POST['marks'];
    $total = (int)$_POST['total'];

    $update = "
        UPDATE results 
        SET marks = $marks, total = $total 
        WHERE result_id = $id
    ";

    if (mysqli_query($conn, $update)) {
        $msg = "Marks Updated Successfully!";
        // refresh data
        $res = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($res);
    } else {
        $msg = "Update failed: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Result</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">

<style>
body{
    background:#f8fafc;
    font-family: "Segoe UI", sans-serif;
}
.page-header{
    background:white;
    border-bottom:1px solid #e5e7eb;
}
.card-modern{
    border-radius:18px;
    border:1px solid rgba(0,0,0,.08);
    box-shadow:0 15px 35px rgba(0,0,0,.05);
}
.label-text{
    font-size:.75rem;
    text-transform:uppercase;
    letter-spacing:.05em;
    color:#6b7280;
    font-weight:700;
}
</style>
</head>

<body>

<header class="page-header py-4 mb-4">
    <div class="container d-flex justify-content-between align-items-center">
        <h3 class="fw-bold mb-0"><i class="bi bi-pencil-square me-2"></i>Edit Result</h3>

        <a href="dashboard.php?page=result_view"" class="btn btn-dark rounded-3">
            <i class="bi bi-arrow-left"></i> Back to Results
        </a>
    </div>
</header>

<div class="container" style="max-width: 780px;">
    <div class="card card-modern p-4">

        <?php if(isset($msg)): ?>
            <div class="alert alert-success">
                <i class="bi bi-check-circle me-2"></i><?= htmlspecialchars($msg) ?>
            </div>
        <?php endif; ?>

        <div class="row mb-3">
            <div class="col-md-2">
                <p class="label-text mb-1">Student ID</p>
                <h5><?= htmlspecialchars($row['student_id']) ?></h5>
            </div>
            <div class="col-md-4">
                <p class="label-text mb-1">Student ID</p>
                <h5><?= ucfirst(htmlspecialchars($row['student_name'])) ?></h5>
            </div>

            <div class="col-md-3">
                <p class="label-text mb-1">Course</p>
                <h6>
                    <?= $row['course_name'] ? htmlspecialchars($row['course_name']) : "ID: ".$row['course_id'] ?>
                </h6>
            </div>

            <div class="col-md-3">
                <p class="label-text mb-1">Semester</p>
                <span class="badge bg-dark">Semester <?= htmlspecialchars($row['semester']) ?></span>
            </div>
        </div>

        <form method="POST">

            <div class="mb-3">
                <label class="form-label fw-semibold">Marks Obtained</label>
                <input type="number" name="marks" class="form-control form-control-lg" 
                       value="<?= htmlspecialchars($row['marks']) ?>" required>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Total Marks</label>
                <input type="number" name="total" class="form-control form-control-lg" 
                       value="<?= htmlspecialchars($row['total']) ?>" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="dashboard.php?page=result_view" class="btn btn-outline-secondary">
                    Cancel
                </a>

                <button name="update" class="btn btn-dark px-4">
                    <i class="bi bi-check2-circle me-1"></i> Update
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
