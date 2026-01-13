<?php
ob_start();
include("db.php");

if (session_status() === PHP_SESSION_NONE) { session_start(); }
if (!isset($_SESSION['admin'])) { header("Location: admin_login.php"); exit(); }

// --- 1. DATA CALCULATIONS FOR ANALYTICS ---
// Total Counts
$total_res = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM enquiry"));
$total_rows = $total_res['total'];

$hot_res = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM enquiry WHERE is_hot = 1"));
$hot_count = $hot_res['total'];

$completed_res = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM enquiry WHERE status = 'completed'"));
$conversion_rate = ($total_rows > 0) ? round(($completed_res['total'] / $total_rows) * 100, 2) : 0;

// Monthly Chart Data (Current Year)
$currentYear = date('Y');
$chart_query = "SELECT MONTH(created_at) as m, COUNT(*) as c 
                FROM enquiry 
                WHERE YEAR(created_at) = '$currentYear' 
                GROUP BY MONTH(created_at)";
$chart_res = mysqli_query($conn, $chart_query);

$monthly_counts = array_fill(1, 12, 0);

if ($chart_res) {
    while($row = mysqli_fetch_assoc($chart_res)) { 
        $m_idx = (int)$row['m'];
        if($m_idx >= 1 && $m_idx <= 12) {
            $monthly_counts[$m_idx] = (int)$row['c']; 
        }
    }
}
// Use json_encode to ensure a valid JS array format [0,0,5,10...]
$js_monthly_data = json_encode(array_values($monthly_counts));

// Today's Reminders
$today = date('Y-m-d');
$reminder_result = mysqli_query($conn, "SELECT * FROM enquiry WHERE DATE(reminder_time) = '$today' AND status != 'completed' ORDER BY reminder_time ASC");
$reminder_count = mysqli_num_rows($reminder_result);

// --- 2. PAGINATION & FILTERING ---
$limit = 10;
$page = isset($_GET['p']) ? (int)$_GET['p'] : 1;
$offset = ($page - 1) * $limit;
$filter = mysqli_real_escape_string($conn, $_GET['status'] ?? 'all');
$hot_filter = isset($_GET['hot']) ? 1 : 0;

$where = " WHERE 1=1";
if ($filter !== 'all') { $where .= " AND status = '$filter'"; }
if ($hot_filter) { $where .= " AND is_hot = 1"; }

$total_filtered = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM enquiry $where"))['total'];
$total_pages = ceil($total_filtered / $limit);

$main_query = "SELECT * FROM enquiry $where ORDER BY CASE WHEN status = 'new' THEN 0 ELSE 1 END ASC, id DESC LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $main_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TailAdmin - Lead Analytics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <style>
        body { background-color: #F1F5F9; font-family: 'Inter', sans-serif; color: #1C2434; }
        .card { border: none; border-radius: 10px; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.03); }
        .bg-meta-1 { background: #FF5050; } .bg-meta-3 { background: #10B981; } .bg-meta-5 { background: #3C50E0; }
        .icon-box { width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; border-radius: 50%; color: white; }
        .filter-btn { padding: 8px 20px; border-radius: 8px; border: 1px solid #E2E8F0; background: white; text-decoration: none; color: #64748B; transition: 0.3s; }
        .filter-btn.active { background: #3C50E0; color: white; border-color: #3C50E0; }
        .lead-card { border-left: 4px solid transparent; transition: 0.2s; }
        .lead-card:hover { transform: scale(1.01); }
        .status-new { border-left-color: #3C50E0; background: #F8FAFF; }
        .badge-hot { background: #FEE2E2; color: #EF4444; font-size: 0.75rem; }
        /* Container for the chart to prevent infinite vertical growth */
.chart-container {
    position: relative;
    height: 300px; /* Fixed height for the trend chart */
    width: 100%;
}

.gauge-container {
    position: relative;
    height: 200px; /* Shorter height for the doughnut/gauge */
    width: 100%;
    display: flex;
    justify-content: center;
}
    </style>
</head>
<body>

<div class="container-fluid p-4">
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card p-3 d-flex flex-row align-items-center">
                <div class="icon-box bg-meta-5 me-3"><i class="fas fa-users"></i></div>
                <div><h4 class="mb-0 fw-bold"><?= number_format($total_rows) ?></h4><span class="text-muted small">Total Leads</span></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3 d-flex flex-row align-items-center">
                <div class="icon-box bg-meta-1 me-3"><i class="fas fa-fire"></i></div>
                <div><h4 class="mb-0 fw-bold"><?= $hot_count ?></h4><span class="text-muted small">Hot Enquiries</span></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3 d-flex flex-row align-items-center">
                <div class="icon-box bg-meta-3 me-3"><i class="fas fa-chart-line"></i></div>
                <div><h4 class="mb-0 fw-bold"><?= $conversion_rate ?>%</h4><span class="text-muted small">Conversion Rate</span></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3 d-flex flex-row align-items-center">
                <div class="icon-box bg-info me-3 text-white"><i class="fas fa-bell"></i></div>
                <div><h4 class="mb-0 fw-bold"><?= $reminder_count ?></h4><span class="text-muted small">Reminders Today</span></div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-4">
    <div class="col-lg-8">
        <div class="card p-4">
            <h6 class="fw-bold mb-4">Lead Inflow Trend</h6>
            <div class="chart-container">
                <canvas id="leadsChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card p-4 text-center">
            <h6 class="fw-bold mb-4">Monthly Goal</h6>
            <div class="gauge-container">
                <canvas id="targetGauge"></canvas>
            </div>
            <div class="mt-3">
                <h3 class="fw-bold mb-0">75.55%</h3>
                <p class="text-success small fw-bold">+12% from last month</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <nav class="d-flex gap-2">
                <a href="?status=all" class="filter-btn <?= $filter == 'all' ? 'active' : '' ?>">All</a>
                <a href="?hot=1" class="filter-btn <?= $hot_filter ? 'active' : '' ?>">Hot 🔥</a>
                <a href="?status=follow_up" class="filter-btn <?= $filter == 'follow_up' ? 'active' : '' ?>">Follow-up</a>
            </nav>
            <div class="input-group w-25">
                <input type="text" class="form-control" placeholder="Search...">
                <button class="btn btn-primary bg-meta-5 border-0"><i class="fas fa-search"></i></button>
            </div>
        </div>

        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <div class="card lead-card mb-3 p-3 <?= ($row['status'] == 'new') ? 'status-new' : '' ?>">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <h6 class="mb-0 fw-bold"><?= htmlspecialchars($row['name']) ?></h6>
                        <small class="text-muted"><?= $row['phone'] ?></small>
                        <?php if($row['is_hot']): ?><span class="badge badge-hot ms-2">HOT</span><?php endif; ?>
                    </div>
                    <div class="col-md-3">
                        <span class="badge bg-light text-dark"><?= ucfirst($row['status']) ?></span>
                    </div>
                    <div class="col-md-5 text-end">
                        <button class="btn btn-sm btn-outline-secondary me-1"><i class="far fa-sticky-note"></i></button>
                        <a href="tel:<?= $row['phone'] ?>" class="btn btn-sm btn-primary bg-meta-5 border-0"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. Line/Bar Chart for Trends
    const leadsCtx = document.getElementById('leadsChart');
    if (leadsCtx) {
        new Chart(leadsCtx, {
            type: 'bar',
            data: {
                labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
                datasets: [{
                    label: 'Leads',
                    data: <?= $js_monthly_data ?>, // Now using json_encode from PHP
                    backgroundColor: '#3C50E0',
                    borderRadius: 6
                }]
            },
            options: { 
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } }, 
                scales: { y: { beginAtZero: true, grid: { display: false } } } 
            }
        });
    }

    // 2. Doughnut Chart for Target
    const targetCtx = document.getElementById('targetGauge');
    if (targetCtx) {
        new Chart(targetCtx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [75, 25],
                    backgroundColor: ['#3C50E0', '#EBEEF2'],
                    circumference: 180,
                    rotation: 270,
                }]
            },
            options: { 
                cutout: '80%', 
                responsive: true,
                plugins: { tooltip: { enabled: false } } 
            }
        });
    }
});

</script>
</body>
</html>