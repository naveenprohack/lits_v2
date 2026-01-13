<?php
include('./dbConnection.php');

// --- Fetch job details ---
if (!isset($_GET['id'])) {
    die("Invalid Job ID");
}

$jobId = $_GET['id'];

$sql = "SELECT * FROM job_posts WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $jobId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Job not found!");
}

$job = $result->fetch_assoc();
$stmt->close();

// --- Update job when form is submitted ---
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $jobTitle = $_POST['jobTitle'];
    $jobDescription = $_POST['jobDescription'];
    $companyName = $_POST['companyName'];
    $jobLocation = $_POST['jobLocation'];
    $jobType = $_POST['jobType'];
    $salary = $_POST['salary'];

    $updateSql = "UPDATE job_posts 
                  SET job_title=?, job_description=?, company_name=?, job_location=?, job_type=?, salary=? 
                  WHERE id=?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param("ssssssi", $jobTitle, $jobDescription, $companyName, $jobLocation, $jobType, $salary, $jobId);

    if ($updateStmt->execute()) {
        echo "<script>alert('Job updated successfully'); window.location='admin_job_posts.php';</script>";
    } else {
        echo "Update Error: " . $updateStmt->error;
    }

    $updateStmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Job Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container my-5">
    <h2 class="fw-bold mb-4 text-center">Edit Job Post</h2>

    <div class="card shadow">
        <div class="card-body">

            <form method="POST">

                <div class="mb-3">
                    <label class="form-label">Job Title</label>
                    <input type="text" name="jobTitle" class="form-control" value="<?= $job['job_title'] ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Job Description</label>
                    <textarea name="jobDescription" class="form-control" rows="4" required><?= $job['job_description'] ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" name="companyName" class="form-control" value="<?= $job['company_name'] ?>" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Job Location</label>
                        <input type="text" name="jobLocation" class="form-control" value="<?= $job['job_location'] ?>" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Job Type</label>
                        <select name="jobType" class="form-select" required>
                            <option <?= ($job['job_type']=="Full-Time")?'selected':'' ?>>Full-Time</option>
                            <option <?= ($job['job_type']=="Part-Time")?'selected':'' ?>>Part-Time</option>
                            <option <?= ($job['job_type']=="Internship")?'selected':'' ?>>Internship</option>
                            <option <?= ($job['job_type']=="Freelance")?'selected':'' ?>>Freelance</option>
                            <option <?= ($job['job_type']=="Contract")?'selected':'' ?>>Contract</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Salary</label>
                    <input type="text" name="salary" class="form-control" value="<?= $job['salary'] ?>">
                </div>

                <button class="btn btn-success px-4">Update Job</button>
                <a href="admin_job_posts.php" class="btn btn-secondary">Cancel</a>

            </form>

        </div>
    </div>

</div>
</body>
</html>
