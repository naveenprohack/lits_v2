<?php
include('./dbConnection.php');

if (!isset($_GET['id'])) { header("Location: job_listings.php"); exit; }

$jobId = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT * FROM job_posts WHERE id = '$jobId'";
$result = $conn->query($sql);
$job = $result->fetch_assoc();

if (!$job) { die("Job not found!"); }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $job['job_title'] ?> | LITS Careers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }
        .details-card { background: white; border-radius: 20px; border: 1px solid #e2e8f0; padding: 40px; }
        .apply-card { background: #0f172a; color: white; border-radius: 20px; padding: 30px; position: sticky; top: 20px; }
        .job-content { line-height: 1.8; color: #475569; white-space: pre-line; }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <a href="job_list_page.php" class="btn btn-link text-decoration-none p-0 mb-4">
                <i class="bi bi-arrow-left"></i> Back to all jobs
            </a>
            
            <div class="details-card shadow-sm">
                <h1 class="fw-800 display-6 mb-2"><?= htmlspecialchars($job['job_title']) ?></h1>
                <div class="d-flex gap-3 mb-4">
                    <span class="text-primary fw-bold"><?= htmlspecialchars($job['company_name']) ?></span>
                    <span class="text-muted">|</span>
                    <span class="text-muted"><i class="bi bi-geo-alt"></i> <?= htmlspecialchars($job['job_location']) ?></span>
                </div>
                
                <hr class="my-4 opacity-50">
                
                <h5 class="fw-bold mb-3 text-dark">Job Description</h5>
                <div class="job-content">
                    <?= htmlspecialchars($job['job_description']) ?>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="apply-card shadow-lg">
                <h4 class="fw-bold mb-3">Interested?</h4>
                <p class="small opacity-75 mb-4">Submit your application now. Our team will review your profile and get back to you.</p>
                
                <div class="mb-3">
                    <small class="d-block opacity-50 text-uppercase fw-bold mb-1" style="font-size: 0.7rem;">Salary Range</small>
                    <div class="fs-5 fw-bold text-success"><?= htmlspecialchars($job['salary']) ?></div>
                </div>

                <div class="mb-4">
                    <small class="d-block opacity-50 text-uppercase fw-bold mb-1" style="font-size: 0.7rem;">Job Type</small>
                    <span class="badge bg-light text-dark px-3 py-2"><?= htmlspecialchars($job['job_type']) ?></span>
                </div>

                <button class="btn btn-primary w-100 py-3 fw-bold rounded-3" data-bs-toggle="modal" data-bs-target="#applyModal">
                    Apply Now
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="applyModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 border-0">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold">Apply for <?= htmlspecialchars($job['job_title']) ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="submit_application.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="job_id" value="<?= $job['id'] ?>">
                    
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Full Name</label>
                        <input type="text" name="name" class="form-control rounded-3" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Email Address</label>
                        <input type="email" name="email" class="form-control rounded-3" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Upload Resume (PDF)</label>
                        <input type="file" name="resume" class="form-control rounded-3" accept=".pdf" required>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Submit Application</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>