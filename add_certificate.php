<?php
include('./dbConnection.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Certificate</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h3 class="fw-bold mb-4">Add Certificate</h3>

    <form action="save_certificate.php" method="POST">

        <div class="mb-3">
            <label>Student Name</label>
            <input type="text" name="student_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Course Name</label>
            <input type="text" name="course_name" class="form-control" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Start Date</label>
                <input type="text" name="start_date" class="form-control" placeholder="05.06.2024" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>End Date</label>
                <input type="text" name="end_date" class="form-control" placeholder="13.06.2025" required>
            </div>
        </div>

        <div class="mb-3">
            <label>Training Topics</label>
            <textarea name="topics" class="form-control" rows="2" required></textarea>
        </div>

        <div class="mb-3">
            <label>Grade</label>
            <input type="text" name="grade" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Branch</label>
            <input type="text" name="branch" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Issue Date</label>
            <input type="text" name="issue_date" class="form-control" required>
        </div>

        <button class="btn btn-primary">Generate Certificate</button>
    </form>
</div>

</body>
</html>
