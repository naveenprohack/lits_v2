<?php
include('./dbConnection.php');

// Fetch jobs for public view
$sql = "SELECT * FROM job_posts ORDER BY id DESC";
$result = $conn->query($sql);

// Initialize variables
$keyword = isset($_GET['keyword']) ? mysqli_real_escape_string($conn, $_GET['keyword']) : '';
$location = isset($_GET['location']) ? mysqli_real_escape_string($conn, $_GET['location']) : '';

// Base Query
$sql = "SELECT * FROM job_posts WHERE 1=1";

// Add search filters if inputs are provided
if (!empty($keyword)) {
    $sql .= " AND (job_title LIKE '%$keyword%' OR company_name LIKE '%$keyword%' OR job_description LIKE '%$keyword%')";
}

if (!empty($location)) {
    $sql .= " AND job_location LIKE '%$location%'";
}

$sql .= " ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Explore Jobs | LITS Careers</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">

    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f3f4f6; 
            color: #1e293b;
        }

        /* Hero Section */
        .job-hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            padding: 80px 0;
            color: white;
            margin-bottom: -50px;
        }

        /* Search Bar */
        .search-box {
            background: white;
            padding: 20px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border: 1px solid #e2e8f0;
        }

        /* Job Card */
        .job-card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            transition: all 0.3s ease;
            position: relative;
            cursor: pointer;
            margin-bottom: 16px;
        }

        .job-card:hover {
            border-color: #2563eb;
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.05);
            transform: translateY(-2px);
        }

        .company-logo-placeholder {
            width: 56px;
            height: 56px;
            background: #f1f5f9;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #64748b;
            font-size: 1.2rem;
        }

        .job-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 4px;
            text-decoration: none;
        }

        .job-title:hover { color: #2563eb; }

        .meta-info {
            font-size: 0.9rem;
            color: #64748b;
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .meta-info i { color: #94a3b8; }

        .job-badge {
            font-size: 0.75rem;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 6px;
            background: #eff6ff;
            color: #2563eb;
        }

        .salary-text {
            color: #059669;
            font-weight: 600;
        }

        .apply-btn {
            border-radius: 25px;
            padding: 8px 24px;
            font-weight: 600;
            transition: 0.3s;
        }
    </style>
</head>
<body>

<section class="job-hero">
    <div class="container text-center">
        <h1 class="fw-800 display-4 mb-3 tracking-tight">Find your next dream job</h1>
        <p class="text-slate-300 fs-5 mb-5">Explore 100+ active opportunities in Tech, Design, and Management</p>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="search-box">
                    <form action="" method="GET" class="row g-3 align-items-center">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-text bg-transparent border-0"><i class="bi bi-search"></i></span>
                                <input type="text" name="keyword" class="form-control border-0" 
                                    placeholder="Job title, company, or skills" value="<?= htmlspecialchars($keyword) ?>">
                            </div>
                        </div>
                        <div class="col-md-4 border-start">
                            <div class="input-group">
                                <span class="input-group-text bg-transparent border-0"><i class="bi bi-geo-alt"></i></span>
                                <input type="text" name="location" class="form-control border-0" 
                                    placeholder="City or state" value="<?= htmlspecialchars($location) ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold rounded-3 shadow-sm">
                                Search Jobs
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</section>

<div class="container pb-5" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold mb-0">Recommended for you</h5>
                <span class="text-muted small">Showing <?= $result->num_rows ?> results</span>
            </div>

            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="job-card">
                        <div class="d-flex gap-4">
                            <div class="company-logo-placeholder">
                                <?= substr($row['company_name'], 0, 1) ?>
                            </div>

                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <a href="#" class="job-title d-block"><?= htmlspecialchars($row['job_title']) ?></a>
                                        <div class="mb-2">
                                            <span class="fw-bold text-slate-700 small"><?= htmlspecialchars($row['company_name']) ?></span>
                                        </div>
                                    </div>
                                    <span class="job-badge"><?= htmlspecialchars($row['job_type']) ?></span>
                                </div>

                                <div class="meta-info mb-3">
                                    <span><i class="bi bi-geo-alt me-1"></i><?= htmlspecialchars($row['job_location']) ?></span>
                                    <span><i class="bi bi-cash-stack me-1"></i><span class="salary-text"><?= htmlspecialchars($row['salary']) ?></span></span>
                                    <span><i class="bi bi-clock-history me-1"></i>Just now</span>
                                </div>

                                <p class="text-muted small mb-3" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                    <?= htmlspecialchars($row['job_description']) ?>
                                </p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex gap-2">
                                        <span class="text-muted extra-small" style="font-size: 0.75rem;">Skills: React, PHP, SQL</span>
                                    </div>
                                        <a href="job_details.php?id=<?= $row['id'] ?>" class="btn btn-outline-primary apply-btn btn-sm">
                                            View & Apply
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="text-center py-5">
                    <img src="https://cdn-icons-png.flaticon.com/512/7486/7486744.png" width="100" class="mb-3 opacity-50">
                    <p class="text-muted">No vacancies match your search criteria.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>