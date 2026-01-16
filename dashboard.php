<?php
ob_start();
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Admin Dashboard</title>

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="image/Logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
body {
    background-color: #f4f6f9;
}


/* Sidebar Main Container */
.sidebar {
    height: 100vh;
    width: 280px;
    position: fixed;
    top: 0; left: 0;
    background: #1C2434; /* Professional Navy */
    padding: 20px 15px;
    z-index: 1000;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    overflow-y: auto;
}

/* Branding Area */
.sidebar-header {
    padding: 10px 15px 30px;
    display: flex;
    align-items: center;
    gap: 12px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    margin-bottom: 20px;
}

.sidebar-header i {
    font-size: 1.5rem;
    color: #3C50E0;
}

.sidebar-header h5 {
    color: #fff;
    font-weight: 700;
    margin: 0;
    letter-spacing: 0.5px;
}

/* Section Labels */
.sidebar-label {
    color: #8A99AF;
    text-transform: uppercase;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 1px;
    padding: 20px 15px 10px;
    margin: 0;
}

/* Nav Links & Buttons */
.sidebar a, .sidebar button {
    color: #DEE4EE;
    padding: 12px 15px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    font-size: 0.95rem;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.2s;
    border: none;
    background: transparent;
    width: 100%;
    margin-bottom: 4px;
}

.sidebar a i, .sidebar button i {
    font-size: 1.2rem;
    margin-right: 15px;
    color: #8A99AF;
}

.sidebar a:hover, .sidebar button:hover, .sidebar a.active {
    background: rgba(255, 255, 255, 0.05);
    color: #fff;
}

.sidebar a.active i {
    color: #3C50E0;
}

/* Sub-menu Styling */
.collapse-menu {
    background: rgba(0, 0, 0, 0.15);
    border-radius: 8px;
    margin: 5px 0 10px;
}

.sub-link {
    padding: 10px 15px 10px 50px !important; /* Indented for nested look */
    font-size: 0.88rem !important;
    color: #8A99AF !important;
}

.sub-link:hover {
    color: #fff !important;
}

/* Rotation for Chevron */
.rotate {
    transition: transform 0.3s ease;
    margin-left: auto;
    font-size: 0.8rem !important;
    margin-right: 0 !important;
}

button[aria-expanded="true"] .rotate {
    transform: rotate(180deg);
}

/* Footer & Logout */
.sidebar hr {
    border-top: 1px solid rgba(255,255,255,0.05);
    margin: 20px 0;
}

.text-warning-custom {
    color: #FB923C !important;
}

.text-warning-custom:hover {
    background: rgba(251, 146, 60, 0.1) !important;
}

.sidebar .collapse a {
    font-size: 14px;
    padding-left: 35px;
    background: rgba(255,255,255,0.1);
}

.sidebar .collapse a:hover {
    background: rgba(255,255,255,0.25);
}

.sidebar hr {
    border-top: 1px solid rgba(255,255,255,0.3);
}

.content {
    margin-left: 280px;
    padding: 40px;
    transition: all 0.3s;
}

/* Chevron rotation */
.rotate {
    transition: transform 0.3s;
}
.rotate.down {
    transform: rotate(180deg);
}
@media (max-width: 768px) {
    .sidebar {
        left: -300px; /* Hide sidebar off-screen */
    }
    .sidebar.active {
        left: 0; /* Show sidebar when toggled */
    }
    .content {
        margin-left: 0; /* Content takes full width */
        padding: 0;
    }
    .mobile-nav {
        display: block !important;
    }
}
.mobile-nav {
    display: none;
    background: #fff;
    padding: 10px 20px;
    border-bottom: 1px solid #ddd;
}
.sidebar a, .sidebar button { color: #fff; padding: 12px 20px; display: block; font-size: 15px; text-decoration: none; border: none; background: none; width: 100%; text-align: left; }
.sidebar a:hover, .sidebar button:hover { background: rgba(255,255,255,0.2); }
.sidebar hr { border-top: 1px solid rgba(255,255,255,0.3); }
.btn-dashboard {
    display: inline-flex;
    align-items: center;
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    padding: 8px 16px;
    border-radius: 12px;
    text-decoration: none;
    color: #1C2434;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
}

.btn-dashboard:hover {
    background: #3C50E0;
    color: #FFFFFF;
    border-color: #3C50E0;
    transform: translateY(-2px);
    box-shadow: 0 10px 15px -3px rgba(60, 80, 224, 0.2);
}

.icon-circle {
    width: 35px;
    height: 35px;
    background: rgba(60, 80, 224, 0.1);
    color: #3C50E0;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12px;
    transition: all 0.3s ease;
}

.btn-dashboard:hover .icon-circle {
    background: rgba(255, 255, 255, 0.2);
    color: #FFFFFF;
}

.btn-text {
    display: flex;
    flex-direction: column;
    line-height: 1.2;
}

.small-label {
    font-size: 0.65rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    opacity: 0.6;
}

.main-label {
    font-size: 0.9rem;
    font-weight: 600;
}

.arrow-icon {
    font-size: 0.8rem;
    opacity: 0;
    transform: translateX(-5px);
    transition: all 0.3s ease;
}

.btn-dashboard:hover .arrow-icon {
    opacity: 1;
    transform: translateX(0);
}


/* Card Container Styling */
.module-card {
    background: #ffffff;
    border: none;
    border-radius: 16px;
    padding: 30px 24px;
    height: 100%;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
}

.module-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
}

/* Modern Icon Circles */
.icon-box-modern {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.bg-blue-soft { background: #E0E7FF; color: #3C50E0; }
.bg-green-soft { background: #DCFCE7; color: #10B981; }
.bg-orange-soft { background: #FEF3C7; color: #D97706; }

/* Text & Button Styling */
.card-title-modern {
    color: #1C2434;
    font-weight: 700;
    font-size: 1.15rem;
    margin-bottom: 12px;
}

.card-text-modern {
    color: #64748B;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 24px;
    flex-grow: 1; /* Pushes button to bottom */
}

.btn-modern {
    border-radius: 10px;
    padding: 10px 20px;
    font-weight: 600;
    font-size: 0.85rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: 0.2s;
}

.btn-blue { background: #3C50E0; color: #fff; border: none; }
.btn-green { background: #10B981; color: #fff; border: none; }
.btn-orange { background: #D97706; color: #fff; border: none; }

.btn-modern:hover {
    opacity: 0.9;
    letter-spacing: 0.3px;
}
:root {
            --sidebar-bg: #1C2434;
            --accent-blue: #3C50E0;
            --body-bg: #f8fafc;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--body-bg);
            color: #1e293b;
            overflow-x: hidden;
        }

        /* Sidebar Refinement */
        .sidebar {
            height: 100vh;
            width: 280px;
            position: fixed;
            top: 0; left: 0;
            background: var(--sidebar-bg);
            padding: 25px 20px;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        /* Top Header (The Missing Piece) */
        .top-header {
            margin-left: 280px;
            padding: 15px 40px;
            background: white;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 999;
        }

   

        /* Elite Module Cards */
        .module-card {
            background: white;
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 24px;
            padding: 35px 25px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .module-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.06);
            border-color: var(--accent-blue);
        }

        .icon-box-modern {
            width: 60px;
            height: 60px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            margin-bottom: 25px;
        }

        .bg-blue-soft { background: #eff6ff; color: #3b82f6; }
        .bg-green-soft { background: #ecfdf5; color: #10b981; }
        .bg-orange-soft { background: #fffbeb; color: #f59e0b; }

        .btn-modern {
            border-radius: 12px;
            padding: 12px 20px;
            font-weight: 700;
            font-size: 0.85rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: 0.3s;
            margin-top: auto;
        }

        /* Quick System Link Button */
        .btn-dashboard-pill {
            background: #f1f5f9;
            color: #475569;
            padding: 10px 20px;
            border-radius: 100px;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.85rem;
            transition: 0.3s;
            border: 1px solid transparent;
        }

        .btn-dashboard-pill:hover {
            background: white;
            border-color: var(--accent-blue);
            color: var(--accent-blue);
        }

        @media (max-width: 992px) {
            .sidebar {
                position: fixed;
                left: -280px; /* Start hidden */
                top: 0;
                bottom: 0;
                width: 280px;
                z-index: 1050; /* Above top-header */
                box-shadow: 20px 0 50px rgba(0,0,0,0.3);
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
            .sidebar.active { left: 0; }
            .content, .top-header { margin-left: 0; }
            .mobile-nav { display: flex !important; }
            .sidebar-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background: rgba(0, 0, 0, 0.5);
                backdrop-filter: blur(2px);
                z-index: 1040;
            }

            .sidebar-overlay.show {
                display: block;
            }
        }

        .mobile-nav {
            display: none;
            background: #1C2434;
            color: white;
            padding: 15px 20px;
            justify-content: space-between;
            align-items: center;
        }
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


</style>
</head>

<body>
<!-- <div class="mobile-nav shadow-sm sticky-top">
    <button class="collapse-menu" id="sidebarToggle">
        <i class="bi bi-list"></i> Menu
    </button>
    <span class="ms-2 fw-bold">LITS Admin</span>
</div> -->
<div class="mobile-nav sticky-top">
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <span class="fw-bold">LITS ADMIN</span>
    <button class="btn btn-sm btn-outline-light" id="sidebarToggle">
        <i class="bi bi-list fs-4"></i>
    </button>
</div>
<?php
include('sidebar.php');
?>
<!-- Sidebar -->
<div class="top-header d-none d-lg-flex">
    <div class="d-flex align-items-center gap-3">
        <span class="badge bg-primary-subtle text-primary rounded-pill px-3">v2.4 Stable</span>
        <small class="text-muted fw-bold"><?= date('l, d M Y') ?></small>
    </div>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none text-dark gap-2 dropdown-toggle" data-bs-toggle="dropdown">
            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                <i class="bi bi-person-fill"></i>
            </div>
            <span class="fw-bold small"><?= $_SESSION['admin'] ?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg rounded-4 mt-2">
            <li><a class="dropdown-item small p-2 px-3" href="#"><i class="bi bi-gear me-2"></i> Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item small p-2 px-3 text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
        </ul>
    </div>
</div>
<!-- Main Content -->
<div class="content">
    <?php
    $page = $_GET['page'] ?? 'home'; 

    if ($page == 'home') {
    ?>
    <div class="welcome-box d-flex align-items-center justify-content-between">
        <div>
            <h3 class="fw-800 mb-1">Welcome, <span class="text-gradient"><?= $_SESSION['admin'] ?></span> 👋</h3>
            <p class="text-muted small mb-0 fw-semibold">You have <span class="text-primary">4 pending</span> mandate approvals today.</p>
        </div>
        <div class="d-none d-md-block">
             <a href="dashboard.php?page=chart_view" class="btn-dashboard-pill">
                <i class="bi bi-cpu-fill me-2"></i> System Analytics
            </a>
            <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill small fw-bold">
                <i class="bi bi-clock-history me-1"></i> Last login: Just now
            </span>
        </div>
    </div>
        <div class="row g-4 mt-5">
            <div class="col-md-4">
                <div class="module-card">
                    <div class="icon-box-modern bg-blue-soft">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h5 class="fw-800 text-dark">Student Central</h5>
                    <p class="text-muted small mb-4">Master database for enrollments, student profiles, and attendance tracking.</p>
                    <a href="dashboard.php?page=student_list_page" class="btn-modern btn-primary w-100">
                        Manage Records <i class="bi bi-chevron-right ms-auto"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="module-card">
                    <div class="icon-box-modern bg-green-soft">
                        <i class="bi bi-journal-bookmark-fill"></i>
                    </div>
                    <h5 class="fw-800 text-dark">Course Catalog</h5>
                    <p class="text-muted small mb-4">Structure your curriculum, manage subjects, and update training programs.</p>
                    <a href="dashboard.php?page=courses" class="btn-modern btn-success w-100">
                        Open Catalog <i class="bi bi-chevron-right ms-auto"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="module-card">
                    <div class="icon-box-modern bg-orange-soft">
                        <i class="bi bi-bar-chart-line-fill"></i>
                    </div>
                    <h5 class="fw-800 text-dark">Examination Hub</h5>
                    <p class="text-muted small mb-4">Input marks, generate grade sheets, and publish academic results.</p>
                    <a href="dashboard.php?page=result_view" class="btn-modern btn-success w-100">
                        Review Results <i class="bi bi-chevron-right ms-auto"></i>
                    </a>
                </div>
            </div>
        </div>
    <?php
    } else {
        // Handle sub-pages
        $allowed_pages = [
            'student_add_page' => 'student_add_page.php',
            'student_list_page' => 'student_list_page.php',
            'courses' => 'courses_manage.php',
            'result_add' => 'result_add_page.php',
            'result_view' => 'view_marks.php',
            'lead_view' => 'lead.php',
            'chart_view' => 'admin/admin_dashboard.php',
            'job_post' => 'admin_job_posts.php',
            'certificate' => 'Certificate-Admin-Panel.php',
            'mandate' => 'emi-mandate.php',
            'add_job' => 'post_job.php',
            'edit_job' => 'edit_job.php',
            'edit_marks' => 'edit_marks.php',
            'add_certificate' => 'add_certificate.php',
            'certificate_list' => 'certificate_list.php',
            'certificate_verify' => 'certificate_verify.php',
            'courses_manage' => 'courses_manage.php',
            'edit_course' => 'edit_course.php',
            'manage_categories' => 'manage_categories.php',
            'create_course' => 'create_course.php',
            'admin_placements' => 'admin_placements.php',
        ];

        if (array_key_exists($page, $allowed_pages)) {
            include($allowed_pages[$page]);
        }
    }
    ?>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const toggleBtn = document.getElementById('sidebarToggle');
    const sidebar = document.querySelector('.sidebar');
    

    // Optional: Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        const isClickInside = sidebar.contains(event.target) || toggleBtn.contains(event.target);
        if (!isClickInside && sidebar.classList.contains('active')) {
            sidebar.classList.remove('active');
        }
    });
});
    document.getElementById('sidebarToggle')?.addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('active');
    });
</script>
</body>
</html>
