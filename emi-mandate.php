<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emandate Dashboard | LITS Admin</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">

    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f8fafc; 
            color: #1e293b;
        }

        .hub-container { max-width: 1100px; margin-top: 50px; }

        /* Welcome Header */
        .welcome-box {
            background: white;
            border-radius: 24px;
            padding: 30px;
            border: 1px solid rgba(0,0,0,0.05);
            box-shadow: 0 4px 20px rgba(0,0,0,0.02);
            margin-bottom: 40px;
        }

        .text-gradient {
            background: linear-gradient(135deg, #0f172a 0%, #2563eb 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        /* FinTech Cards */
        .mandate-card {
            background: white;
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 24px;
            padding: 35px 25px;
            text-align: center;
            transition: all 0.3s ease;
            text-decoration: none !important;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
        }

        .mandate-card:hover {
            transform: translateY(-8px);
            border-color: #2563eb;
            box-shadow: 0 20px 40px rgba(37, 99, 235, 0.08);
        }

        .icon-circle {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.7rem;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        /* Color Themes */
        .theme-primary .icon-circle { background: #eff6ff; color: #2563eb; }
        .theme-success .icon-circle { background: #ecfdf5; color: #10b981; }
        .theme-warning .icon-circle { background: #fffbeb; color: #f59e0b; }

        .mandate-card h4 {
            font-weight: 700;
            color: #0f172a;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .mandate-card p {
            color: #64748b;
            font-size: 0.85rem;
            line-height: 1.5;
            margin-bottom: 0;
        }

        .card-footer-link {
            margin-top: auto;
            padding-top: 20px;
            font-weight: 700;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #2563eb;
        }
    </style>
</head>
<body>

<!-- <?php include 'navbar.php'; ?> -->

<div class="container hub-container pb-5">
    
<div class="welcome-box d-flex align-items-center justify-content-between">
        <div>
            <h3 class="fw-800 mb-1">Welcome, <span class="text-gradient"><?= $_SESSION['admin'] ?></span> 👋</h3>
            <p class="text-muted small mb-0 fw-semibold">You have <span class="text-primary">4 pending</span> mandate approvals today.</p>
        </div>
        <div class="d-none d-md-block">
            <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill small fw-bold">
                <i class="bi bi-clock-history me-1"></i> Last login: Just now
            </span>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <a href="create-mandate.php" class="mandate-card theme-primary">
                <div class="icon-circle">
                    <i class="bi bi-plus-circle-fill"></i>
                </div>
                <h4>New Mandate</h4>
                <p>Register a new recurring payment instruction for a client.</p>
                <div class="card-footer-link">Start Setup <i class="bi bi-chevron-right ms-1"></i></div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="mandates.php" class="mandate-card theme-success">
                <div class="icon-circle">
                    <i class="bi bi-file-earmark-check"></i>
                </div>
                <h4>Active Mandates</h4>
                <p>Manage and track the status of all registered E-Mandates.</p>
                <div class="card-footer-link">View List <i class="bi bi-chevron-right ms-1"></i></div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="transactions.php" class="mandate-card theme-warning">
                <div class="icon-circle">
                    <i class="bi bi-arrow-left-right"></i>
                </div>
                <h4>Transaction Logs</h4>
                <p>Monitor payment history and settlement status for all accounts.</p>
                <div class="card-footer-link">Check Logs <i class="bi bi-chevron-right ms-1"></i></div>
            </a>
        </div>
    </div>

    <div class="mt-5 p-4 rounded-4 bg-white border d-flex align-items-center gap-3">
        <div class="spinner-grow spinner-grow-sm text-success" role="status"></div>
        <span class="small fw-bold text-muted">NPCI Gateway: <span class="text-success">Operational</span></span>
        <span class="text-muted mx-2">|</span>
        <span class="small fw-bold text-muted">API Latency: <span class="text-dark">24ms</span></span>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>