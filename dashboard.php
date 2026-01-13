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
  <!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <!-- Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
    margin-left: 300px;
    padding: 30px;
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
    color: #fff;
    letter-spacing: 0.3px;
}
</style>
</head>

<body>
<div class="mobile-nav shadow-sm sticky-top">
    <button class="collapse-menu" id="sidebarToggle">
        <i class="bi bi-list"></i> Menu
    </button>
    <span class="ms-2 fw-bold">LITS Admin</span>
</div>
<?php
include('sidebar.php');
?>
<!-- Sidebar -->

<!-- Main Content -->
<div class="content">
    <?php
    $page = $_GET['page'] ?? 'home'; 

    switch ($page) {
        case 'student_add_page':
            include('student_add_page.php');
            break;
        case 'student_list_page':
            include('student_list_page.php');
            break;
        case 'courses':
            include('courses_manage.php');
            break;
        case 'result_add':
            include('result_add_page.php');
            break;
        case 'result_view':
            include('result.php');
            break;
        case 'lead_view':
            include('lead.php');
            break;
        case 'chart_view':
            include('admin/admin_dashboard.php');
            break;
        case 'job_post':
            include('admin_job_posts.php');
            break;
        case 'certificate':
            include('Certificate-Admin-Panel.php');
            break;
        case 'mandate':
            include('emi-mandate.php');
            break;
        default:
            ?>
            <div class="ms-auto">
                    <a href="dashboard.php?page=chart_view" class="btn-dashboard">
                        <div class="icon-circle">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <div class="btn-text">
                            <span class="small-label">System</span>
                            <span class="main-label">Admin Dashboard</span>
                        </div>
                        <i class="fas fa-arrow-right ms-2 arrow-icon"></i>
                    </a>
                </div>

                <div class="row g-4">
                <div class="col-md-4">
                    <div class="module-card">
                        <div class="icon-box-modern bg-blue-soft">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h5 class="card-title-modern">Student Management</h5>
                        <p class="card-text-modern">Access the complete database to add, update, and track all student enrollment details and profiles.</p>
                        <a href="dashboard.php?page=student_list_page" class="btn-modern btn-blue">
                            Manage Students <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="module-card">
                        <div class="icon-box-modern bg-green-soft">
                            <i class="bi bi-journal-bookmark-fill"></i>
                        </div>
                        <h5 class="card-title-modern">Course Catalog</h5>
                        <p class="card-text-modern">Organize academic programs, manage subjects, and update course curriculum structures effortlessly.</p>
                        <a href="courses_manage.php" class="btn-modern btn-green">
                            Manage Courses <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="module-card">
                        <div class="icon-box-modern bg-orange-soft">
                            <i class="bi bi-bar-chart-line-fill"></i>
                        </div>
                        <h5 class="card-title-modern">Performance Results</h5>
                        <p class="card-text-modern">Record student grades, generate performance reports, and review academic achievements across sessions.</p>
                        <a href="view_marks.php" class="btn-modern btn-orange">
                            Manage Results <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php
            break;
    }
    ?>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const toggleBtn = document.getElementById('sidebarToggle');
    const sidebar = document.querySelector('.sidebar');
    
    if(toggleBtn) {
        toggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('active');
        });
    }

    // Optional: Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        const isClickInside = sidebar.contains(event.target) || toggleBtn.contains(event.target);
        if (!isClickInside && sidebar.classList.contains('active')) {
            sidebar.classList.remove('active');
        }
    });
});
</script>
</body>
</html>
