<?php include('./dbConnection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Ledger | LITS Admin</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">

    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f8fafc; 
            color: #1e293b;
        }

        /* Header Style */
        .page-header { padding: 20px 0; }
        .text-gradient {
            background: linear-gradient(135deg, #0f172a 0%, #334155 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        /* Table Card */
        .ledger-card {
            background: white;
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            overflow: hidden;
        }

        .table { margin-bottom: 0; }
        .table thead th {
            background-color: #f1f5f9;
            color: #64748b;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 700;
            padding: 16px 24px;
            border: none;
        }

        .table tbody td {
            padding: 18px 24px;
            vertical-align: middle;
            color: #1e293b;
            font-weight: 500;
            border-color: #f1f5f9;
        }

        /* Badge & Buttons */
        .cert-id {
            font-family: monospace;
            background: #f1f5f9;
            padding: 4px 8px;
            border-radius: 6px;
            color: #475569;
            font-weight: 600;
        }

        .btn-view {
            background-color: #eff6ff;
            color: #2563eb;
            border: none;
            font-weight: 600;
            transition: 0.2s;
        }
        .btn-view:hover { background-color: #2563eb; color: white; }

        .action-btn {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            transition: 0.2s;
            text-decoration: none;
        }
        .btn-edit { background: #fff7ed; color: #ea580c; }
        .btn-edit:hover { background: #ea580c; color: white; }
        .btn-delete { background: #fff1f2; color: #e11d48; }
        .btn-delete:hover { background: #e11d48; color: white; }

        /* Search Bar */
        .search-input {
            border-radius: 12px;
            padding-left: 45px;
            background-color: #f1f5f9;
            border: 1px solid transparent;
        }
        .search-input:focus {
            background-color: #fff;
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37,99,235,0.1);
        }
    </style>
</head>
<body>

<div class="container pb-5">
    <header class="page-header d-flex justify-content-between align-items-end">
        <div>
            <h2 class="fw-800 mb-1 tracking-tight text-gradient">Certificate Ledger</h2>
            <p class="text-muted small text-uppercase fw-bold mb-0">Manage and Track Issued Credentials</p>
        </div>
        <a href="dashboard.php?page=add_certificate" class="btn btn-dark rounded-pill px-4 py-2 fw-bold">
            <i class="bi bi-plus-lg me-2"></i>New Certificate
        </a>
    </header>

    <div class="row mb-4">
        <div class="col-md-4 position-relative">
            <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
            <input type="text" class="form-control search-input" placeholder="Search by student or course...">
        </div>
    </div>

    <div class="ledger-card">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Credential ID</th>
                        <th>Student Name</th>
                        <th>Course Module</th>
                        <th>Issue Date</th>
                        <th class="text-center">Certificate</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $q = $conn->query("SELECT * FROM certificates ORDER BY id DESC");
                if($q->num_rows > 0){
                    while($row=$q->fetch_assoc()){
                ?>
                    <tr>
                        <td><span class="cert-id">#<?= $row['cert_id'] ?></span></td>
                        <td>
                            <div class="fw-bold text-dark"><?= htmlspecialchars($row['student_name']) ?></div>
                            <small class="text-muted">Verified Candidate</small>
                        </td>
                        <td><?= htmlspecialchars($row['course_name']) ?></td>
                        <td><i class="bi bi-calendar-check me-2 text-muted"></i><?= date('M d, Y', strtotime($row['issue_date'])) ?></td>
                        <td class="text-center">
                            <a href="./certificates/<?= $row['pdf_file'] ?>" target="_blank" class="btn btn-view btn-sm px-3">
                                <i class="bi bi-file-earmark-pdf me-1"></i> View PDF
                            </a>
                        </td>
                        <td class="text-end">
                            <div class="d-flex justify-content-end gap-2">
                                <a href="dashboard.php?page=edit_certificate&id=<?= $row['id'] ?>" class="action-btn btn-edit" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="delete_certificate.php?id=<?= $row['id'] ?>" class="action-btn btn-delete" 
                                   onclick="return confirm('Permanent action: Delete this record?');" title="Delete">
                                    <i class="bi bi-trash3"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php 
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center py-5 text-muted'>No certificates found in the database.</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>