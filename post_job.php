<?php
include('./dbConnection.php');

// --- Create job when form is submitted ---
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $jobTitle = $_POST['jobTitle'];
    $jobDescription = $_POST['jobDescription'];
    $companyName = $_POST['companyName'];
    $jobLocation = $_POST['jobLocation'];
    $jobType = $_POST['jobType'];
    $salary = $_POST['salary'];

    // SQL to insert new job
    $insertSql = "INSERT INTO job_posts (job_title, job_description, company_name, job_location, job_type, salary) 
                  VALUES (?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($insertSql);
    $stmt->bind_param("ssssss", $jobTitle, $jobDescription, $companyName, $jobLocation, $jobType, $salary);

    // if ($stmt->execute()) {
    //     echo "<script>alert('New job posted successfully!'); window.location='admin_job_posts.php';</script>";
    // } else {
    //     echo "Post Error: " . $stmt->error;
    // }
    if ($stmt->execute()) {
    echo "
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: 'Success!',
            text: 'The job vacancy has been published successfully.',
            icon: 'success',
            confirmButtonColor: '#0f172a',
        }).then(() => {
            window.location.href = 'dashboard.php?page=job_post';
        });
    });
    </script>";
    }else {
        echo "
        <script>
        Swal.fire({
            title: 'Execution Error',
            text: 'Something went wrong while saving the post.',
            icon: 'error',
            confirmButtonColor: '#e11d48'
        });
        </script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post New Vacancy | LITS Admin</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f8fafc; 
            color: #1e293b;
        }

        .post-card {
            background: white;
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 24px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
            max-width: 800px;
            margin: auto;
            padding: 40px;
        }

        .form-label {
            font-weight: 600;
            font-size: 0.85rem;
            color: #64748b;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.02em;
        }

        .form-control, .form-select {
            border-radius: 12px;
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            background-color: #fcfdfe;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            background-color: #fff;
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        }

        .btn-post {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 14px 35px;
            border-radius: 12px;
            font-weight: 700;
            transition: 0.3s;
        }

        .btn-post:hover {
            background-color: #1e40af;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(37, 99, 235, 0.2);
        }

        .btn-cancel {
            background-color: transparent;
            color: #64748b;
            border: none;
            padding: 14px 30px;
            font-weight: 600;
        }

        .page-header {
            padding: 20px 0;
            text-align: center;
        }

        .fw-800 { font-weight: 800 !important; }
        .tracking-tight { letter-spacing: -0.03em; }
        .letter-spacing-1 { letter-spacing: 0.1em; }

        .text-gradient {
            background: linear-gradient(135deg, #0f172a 0%, #334155 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        .bg-primary-subtle {
            background-color: rgba(59, 130, 246, 0.1) !important;
        }
    </style>
</head>
<body>

<div class="container pb-5">
    <header class="page-header text-center">
        <h2 class="display-5 fw-800 mb-1 tracking-tight text-gradient">Post Vacancy</h2>
        <div class="d-flex align-items-center justify-content-center gap-2">
            <span class="badge rounded-pill bg-primary-subtle text-primary px-3">LITS ADMIN</span>
            <span class="text-muted small text-uppercase fw-bold letter-spacing-1">Create a new job opportunity</span>
        </div>
    </header>

    <div class="post-card">
        <form method="POST">
            <div class="mb-4">
                <label class="form-label"><i class="bi bi-type-h1 me-2"></i>Job Title</label>
                <input type="text" name="jobTitle" class="form-control" placeholder="e.g. Graphic Designer / PHP Developer" required>
            </div>

            <div class="mb-4">
                <label class="form-label"><i class="bi bi-building me-2"></i>Company Name</label>
                <input type="text" name="companyName" class="form-control" placeholder="e.g. Learn Institute of Technology" required>
            </div>

            <div class="mb-4">
                <label class="form-label"><i class="bi bi-text-paragraph me-2"></i>Detailed Description</label>
                <textarea name="jobDescription" class="form-control" rows="6" placeholder="Outline responsibilities, requirements, and benefits..." required></textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <label class="form-label"><i class="bi bi-geo-alt me-2"></i>Job Location</label>
                    <input type="text" name="jobLocation" class="form-control" placeholder="e.g. Chennai / Remote" required>
                </div>

                <div class="col-md-6 mb-4">
                    <label class="form-label"><i class="bi bi-briefcase me-2"></i>Work Arrangement</label>
                    <select name="jobType" class="form-select" required>
                        <option value="" disabled selected>Select job type</option>
                        <option value="Full-Time">Full-Time</option>
                        <option value="Part-Time">Part-Time</option>
                        <option value="Internship">Internship</option>
                        <option value="Freelance">Freelance</option>
                        <option value="Contract">Contract</option>
                    </select>
                </div>
            </div>

            <div class="mb-5">
                <label class="form-label"><i class="bi bi-cash-stack me-2"></i>Salary / Range</label>
                <input type="text" name="salary" class="form-control" placeholder="e.g. ₹20,000 - ₹35,000 per month">
            </div>

            <div class="d-flex align-items-center justify-content-between border-top pt-4">
                <a href="dashboard.php?page=job_post" class="btn-cancel text-decoration-none"><i class="bi bi-arrow-left me-2"></i>Back to Dashboard</a>
                <button type="submit" class="btn-post">Publish Vacancy</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>