<?php
include('./dbConnection.php');

// Fetch all job posts
$sql = "SELECT * FROM job_posts ORDER BY id DESC";
$result = $conn->query($sql);
?>


    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f8fafc; 
            color: #1e293b;
        }

        .admin-card {
            background: white;
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
            overflow: hidden;
        }

        .table thead th {
            background-color: #f1f5f9;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            font-weight: 700;
            color: #64748b;
            padding: 15px 20px;
            border: none;
        }

        .table tbody td {
            padding: 18px 20px;
            vertical-align: middle;
            border-color: #f1f5f9;
        }

        .job-title {
            font-weight: 700;
            color: #0f172a;
            display: block;
        }

        .company-name {
            font-size: 0.85rem;
            color: #dd642b; /* Brand Orange */
            font-weight: 600;
        }

        .badge-type {
            background: #f0fdf4;
            color: #16a34a;
            border: 1px solid #dcfce7;
            padding: 5px 12px;
            border-radius: 8px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .salary-tag {
            font-family: 'Monaco', monospace;
            font-weight: 600;
            color: #059669;
        }

        .desc-text {
            font-size: 0.85rem;
            color: #64748b;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.5;
        }

        .btn-action {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            transition: 0.3s;
        }

        .btn-edit { background: #eff6ff; color: #2563eb; border: none; }
        .btn-edit:hover { background: #2563eb; color: white; }
        
        .btn-delete { background: #fff1f2; color: #e11d48; border: none; }
        .btn-delete:hover { background: #e11d48; color: white; }

        .page-header {
            padding: 20px 0;
            background: white;
            border-bottom: 1px solid #e2e8f0;
            margin-bottom: 40px;
        }+
        .fw-800 { 
        font-weight: 800 !important; 
    }

    .tracking-tight { 
        letter-spacing: -0.04em; /* Slightly tighter for larger displays */
    }

    .letter-spacing-1 { 
        letter-spacing: 0.12em; 
        font-size: 0.7rem; /* Slightly smaller for that premium "label" look */
    }

    .text-gradient {
        background: linear-gradient(135deg, #0f172a 0%, #334155 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }

    .header-icon-box {
        width: 54px;
        height: 54px;
        background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 16px rgba(37, 99, 235, 0.2);
    }

    .status-dot {
        width: 8px;
        height: 8px;
        background-color: #10b981; /* Success Green */
        border-radius: 50%;
        display: inline-block;
        animation: pulse-green 2s infinite;
    }

    @keyframes pulse-green {
        0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4); }
        70% { box-shadow: 0 0 0 10px rgba(16, 185, 129, 0); }
        100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
    }
    <style>
/* Professional Header Styling */
.page-header {
    background: #ffffff;
    border-bottom: 1px solid #eef2f6;
}

.fw-800 { font-weight: 800; }
.letter-spacing-1 { letter-spacing: 1px; }

.text-gradient {
    background: linear-gradient(45deg, #1C2434, #3C50E0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.header-icon-box {
    width: 45px;
    height: 45px;
    background: #3C50E0;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

/* Mobile Specific Tweaks */
@media (max-width: 768px) {
    .header-icon-box {
        width: 38px;
        height: 38px;
        border-radius: 10px;
    }
    
    .status-dot {
        width: 6px;
        height: 6px;
        background: #10B981;
        border-radius: 50%;
        display: inline-block;
        box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2);
    }
}

/* Desktop Only Tweaks */
@media (min-width: 769px) {
    .status-dot {
        width: 8px;
        height: 8px;
        background: #10B981;
        border-radius: 50%;
        display: inline-block;
    }
}
</style>
    </style>
<body>

<header class="page-header py-3 py-lg-4">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
            
            <div class="d-flex align-items-center gap-2 gap-md-3">
                <div class="header-icon-box d-flex shadow-sm">
                    <i class="bi bi-briefcase-fill text-white fs-5 fs-md-4"></i>
                </div>
                
                <div>
                    <h2 class="fs-4 fw-800 mb-0 tracking-tight text-gradient d-md-none">Job Opportunities</h2>
                    <h2 class="display-6 fw-800 mb-0 tracking-tight text-gradient d-none d-md-block">Job Opportunities</h2>
                    
                    <div class="d-flex align-items-center gap-2 mt-1">
                        <span class="status-dot"></span>
                        <p class="text-muted mb-0 small text-uppercase fw-bold letter-spacing-1">Dashboard</p>
                    </div>
                </div>
            </div>

            <a href="dashboard.php?page=add_job" class="btn btn-dark w-100 w-md-auto px-4 py-2 rounded-3 fw-bold shadow-sm">
                <i class="bi bi-plus-lg me-2"></i>Post New Job
            </a>
            
        </div>
    </div>
</header>

<div class="container pb-5">
    <div class="admin-card">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Job Info</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>Compensation</th>
                        <th>Overview</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td>
                                    <span class="job-title"><?= htmlspecialchars($row['job_title']) ?></span>
                                    <span class="company-name"><?= htmlspecialchars($row['company_name']) ?></span>
                                </td>
                                <td>
                                    <div class="small fw-medium"><i class="bi bi-geo-alt me-1 text-muted"></i><?= htmlspecialchars($row['job_location']) ?></div>
                                </td>
                                <td>
                                    <span class="badge-type"><?= htmlspecialchars($row['job_type']) ?></span>
                                </td>
                                <td>
                                    <span class="salary-tag"><?= htmlspecialchars($row['salary']) ?></span>
                                </td>
                                <td>
                                    <div class="desc-text"><?= htmlspecialchars($row['job_description']) ?></div>
                                </td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="dashboard.php?page=edit_job&id=<?= $row['id'] ?>" class="btn-action btn-edit" title="Edit Post">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="delete_job.php?id=<?= $row['id'] ?>" 
                                           class="btn-action btn-delete" 
                                           onclick="return confirm('Are you sure you want to remove this vacancy?');" 
                                           title="Delete Post">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center py-5">
                                <i class="bi bi-briefcase text-muted fs-1 mb-3 d-block"></i>
                                <p class="text-muted">No active job posts found in the database.</p>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
