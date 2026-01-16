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
    <title>Transaction History | LITS FinTech</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">

    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f8fafc; 
            color: #1e293b;
        }

        .transaction-container { max-width: 1100px; margin-top: 40px; }

        /* Ledger Card Style */
        .transaction-card {
            background: white;
            border-radius: 24px;
            border: 1px solid rgba(0,0,0,0.05);
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
            overflow: hidden;
        }

        /* Status Pills */
        .badge-status {
            padding: 6px 14px;
            border-radius: 100px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.02em;
        }
        .status-captured { background: #ecfdf5; color: #059669; }
        .status-failed { background: #fff1f2; color: #e11d48; }

        /* Typography */
        .fw-800 { font-weight: 800 !important; }
        .payment-id { font-family: 'Monaco', 'Consolas', monospace; color: #64748b; font-size: 0.85rem; }

        .table thead th {
            background-color: #f1f5f9;
            color: #64748b;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 16px 20px;
            border: none;
        }

        .table tbody td {
            padding: 18px 20px;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
        }

        .mandate-link {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }
        .mandate-link:hover { text-decoration: underline; }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container transaction-container pb-5">
    
    <header class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <h2 class="fw-800 tracking-tight mb-1">Transaction History</h2>
            <p class="text-muted small fw-semibold text-uppercase mb-0">Live Auto-Debit Settlement Logs</p>
        </div>
        <div class="text-end">
            <button class="btn btn-white border rounded-pill px-4 shadow-sm fw-bold btn-sm" onclick="window.print()">
                <i class="bi bi-printer me-2"></i> Export PDF
            </button>
        </div>
    </header>

    

    <div class="transaction-card">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Reference IDs</th>
                        <th>Amount</th>
                        <th>Current Status</th>
                        <th>Settled Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $sql = "SELECT * FROM transactions ORDER BY id DESC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0):
                    $i = 1;
                    while ($row = $result->fetch_assoc()):
                ?>
                    <tr>
                        <td class="text-muted small"><?= $i++ ?></td>
                        <td>
                            <div class="payment-id mb-1"><i class="bi bi-hash me-1"></i><?= $row['payment_id'] ?></div>
                            <a href="view-mandate.php?id=<?= $row['mandate_id'] ?>" class="mandate-link small">
                                <i class="bi bi-shield-check"></i> <?= $row['mandate_id'] ?>
                            </a>
                        </td>
                        <td>
                            <span class="fw-800 text-dark fs-5">₹<?= number_format($row['amount'] / 100, 2) ?></span>
                        </td>
                        <td>
                            <?php if ($row['status'] == "captured"): ?>
                                <span class="badge-status status-captured">
                                    <i class="bi bi-check-circle-fill me-1"></i> Success
                                </span>
                            <?php else: ?>
                                <span class="badge-status status-failed">
                                    <i class="bi bi-x-circle-fill me-1"></i> Failed
                                </span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="fw-semibold text-dark"><?= date('M d, Y', strtotime($row['created_at'])) ?></div>
                            <div class="text-muted small"><?= date('h:i A', strtotime($row['created_at'])) ?></div>
                        </td>
                    </tr>
                <?php endwhile; else: ?>
                    <tr>
                        <td colspan="5" class="text-center py-5">
                            <i class="bi bi-inbox text-muted display-4"></i>
                            <p class="text-muted mt-2">No transaction data available yet.</p>
                        </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>