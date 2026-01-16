<div class="sidebar">
    <div class="sidebar-header">
        <i class="bi bi-speedometer2"></i>
        <h5>LITS ADMIN</h5>
    </div>

    <p class="sidebar-label">Main Menu</p>
    
    <a href="dashboard.php" class="<?= !isset($_GET['page']) ? 'active' : '' ?>">
        <i class="bi bi-house-door-fill"></i> Dashboard
    </a>

    <button class="d-flex justify-content-between align-items-center "  
            data-bs-toggle="collapse" 
            data-bs-target="#studentMenu" 
            aria-expanded="false">
        <span><i class="bi bi-people-fill"></i> Students</span>
        <i class="bi bi-chevron-down rotate"></i>
    </button>
    <div class="collapse collapse-menu" id="studentMenu">
        <a href="dashboard.php?page=student_add_page" class="sub-link <?= isset($_GET['page']) &&($_GET['page']=='student_add_page') ? 'active' : '' ?>">Add Student</a>
        <a href="dashboard.php?page=student_list_page" class="sub-link <?= isset($_GET['page']) &&($_GET['page']=='student_list_page') ? 'active' : '' ?>">View Database</a>
        <a href="dashboard.php?page=admin_placements" class="sub-link <?= isset($_GET['page']) &&($_GET['page']=='admin_placements') ? 'active' : '' ?>">Student placement</a>
        
    </div>

    <button class="d-flex justify-content-between align-items-center" 
            data-bs-toggle="collapse" 
            data-bs-target="#courseMenu" 
            aria-expanded="false">
        <span><i class="bi bi-journal-bookmark-fill"></i> Courses</span>
        <i class="bi bi-chevron-down rotate"></i>
    </button>
    <div class="collapse collapse-menu" id="courseMenu">
        <a href="dashboard.php?page=create_course" class="sub-link">Create Course</a>
        <a href="dashboard.php?page=courses_manage" class="sub-link">Manage Courses</a>
        <a href="dashboard.php?page=manage_categories" class="sub-link">Courses Category Manage</a>
    </div>

    <p class="sidebar-label">Reports & Analytics</p>

    <a href="dashboard.php?page=result_add">
        <i class="bi bi-pencil-square"></i> Add Results
    </a>
    <a href="dashboard.php?page=result_view">
        <i class="bi bi-bar-chart-fill"></i> View Results
    </a>
    <a href="dashboard.php?page=lead_view">
        <i class="bi bi-funnel-fill"></i> View Leads
    </a>

    <a href="dashboard.php?page=job_post">
        <i class="bi bi-briefcase-fill"></i> View job Post
    </a>

      <a href="dashboard.php?page=certificate">
        <i class="bi bi-briefcase-fill"></i> E-certificate
    </a>
         <a href="dashboard.php?page=mandate">
        <i class="bi bi-briefcase-fill"></i> E-mandate
    </a>
    <hr>

    <a href="logout.php" class="text-warning-custom">
        <i class="bi bi-box-arrow-right"></i> Logout System
    </a>
</div>