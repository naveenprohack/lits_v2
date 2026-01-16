<?php
session_start();
if (!isset($_SESSION['admin'])) { header("Location: login.php"); exit(); }
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandate Ledger | LITS Admin</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">

    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f8fafc; 
            color: #1e293b;
        }

        .ledger-container { max-width: 1200px; margin-top: 40px; }

        /* Summary Pills */
        .stat-pill {
            background: white;
            border-radius: 16px;
            padding: 15px 20px;
            border: 1px solid rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.02);
        }

        /* Table Architecture */
        .ledger-card {
            background: white;
            border-radius: 24px;
            border: 1px solid rgba(0,0,0,0.05);
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
            overflow: hidden;
            margin-top: 30px;
        }

        .table thead th {
            background-color: #f1f5f9;
            color: #64748b;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 700;
            padding: 16px 20px;
            border: none;
        }

        .table tbody td {
            padding: 16px 20px;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
        }

        /* Status Styling */
        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 6px;
        }
        .badge-lite {
            padding: 6px 12px;
            border-radius: 100px;
            font-size: 0.75rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
        }
        .bg-active { background: #ecfdf5; color: #059669; }
        .bg-pending { background: #fffbeb; color: #d97706; }
        .bg-failed { background: #fff1f2; color: #e11d48; }

        .btn-action {
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: 0.2s;
        }
        .btn-view-pdf { background: #eff6ff; color: #2563eb; }
        .btn-view-pdf:hover { background: #2563eb; color: white; }
    </style>
</head>
<body>


<div class="container ledger-container pb-5">
    
    <div class="d-flex justify-content-between align-items-end mb-2">
        <div>
            <h2 class="fw-800 tracking-tight mb-1">eNACH Mandates</h2>
            <p class="text-muted small fw-semibold text-uppercase">Subscription Ledger & Authorization Tracking</p>
        </div>
        <a href="create-mandate.php" class="btn btn-primary rounded-pill px-4 fw-bold">
            <i class="bi bi-plus-lg me-1"></i> New Mandate
        </a>
    </div>

    <div class="row g-3 mt-1">
        <div class="col-md-3">
            <div class="stat-pill">
                <div class="text-success fs-4"><i class="bi bi-check-circle-fill"></i></div>
                <div><div class="small text-muted fw-bold">Active</div><h5 class="mb-0 fw-800">124</h5></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-pill">
                <div class="text-warning fs-4"><i class="bi bi-clock-history"></i></div>
                <div><div class="small text-muted fw-bold">Pending</div><h5 class="mb-0 fw-800">18</h5></div>
            </div>
        </div>
    </div>

    <div class="ledger-card">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer Details</th>
                        <th>Status</th>
                        <th>Max Limit</th>
                        <th>Auth Link</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $sql = "SELECT * FROM mandates ORDER BY id DESC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0):
                    while ($row = $result->fetch_assoc()):
                        $status = strtolower($row['status']);
                        $badgeClass = ($status == 'active') ? 'bg-active' : (($status == 'pending') ? 'bg-pending' : 'bg-failed');
                ?>
                    <tr>
                        <td class="text-muted small fw-bold">#<?= $row['id'] ?></td>
    
                        <td>
                            <div class="fw-bold"><?= htmlspecialchars($row['customer_name']) ?></div>
                            <div class="text-muted small"><?= htmlspecialchars($row['customer_email'] ?? $row['customer_contact']) ?></div>
                        </td>
                        <td>
                            <span class="badge-lite <?= $badgeClass ?>">
                                <span class="status-dot" style="background-color: currentColor;"></span>
                                <?= ucfirst($status) ?>
                            </span>
                        </td>
                        <td class="fw-bold text-dark">
                            ₹<?= number_format(1000/100, 2) ?>
                        </td>
                        <td>
                            <a href="<?= $row['auth_link_url'] ?>" target="_blank" class="text-decoration-none small fw-bold">
                                <i class="bi bi-link-45deg"></i> Open Auth
                            </a>
                        </td>
                        <td class="text-end">
                            <a href="view-mandate.php?id=<?= $row['id'] ?>" class="btn-action btn-view-pdf" title="View Details">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                        </td>
                    </tr>
                <?php endwhile; else: ?>
                    <tr><td colspan="7" class="text-center py-5 text-muted">No records found.</td></tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



</body>
</html>