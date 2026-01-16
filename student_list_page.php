<?php
include("db.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* 🔐 Admin check */
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
function get_initials_svg($name) {
    // Get the first letter of the name
    $initial = !empty($name) ? strtoupper(substr(trim($name), 0, 1)) : '?';
    
    // Pick a background color based on the letter (so different names get different colors)
    $colors = ['#3C50E0', '#10B981', '#F59E0B', '#EF4444', '#8B5CF6', '#EC4899'];
    $colorIndex = ord($initial) % count($colors);
    $bgColor = $colors[$colorIndex];

    // Return the SVG code
    return 'data:image/svg+xml;base64,' . base64_encode('
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
            <rect width="100" height="100" fill="'.$bgColor.'"/>
            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" 
                  fill="#ffffff" font-family="sans-serif" font-size="50" font-weight="bold">
                '.$initial.'
            </text>
        </svg>
    ');
}
/* 📄 Fetch students */
$result = $conn->query("SELECT * FROM students ORDER BY student_id DESC");

?>


    <style>
        /* Container & Header */
.page-header {
    margin-bottom: 2rem;
}

.title-modern {
    color: #1C2434;
    font-weight: 700;
    font-size: 1.5rem;
}

/* Modern Data Table Card */
.table-card {
    background: #ffffff;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    overflow: hidden;
}

.table-modern thead {
    background: #F7F9FC;
}

.table-modern thead th {
    color: #64748B;
    font-weight: 600;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    padding: 15px 20px;
    border: none;
}

.table-modern tbody td {
    padding: 15px 20px;
    color: #1C2434;
    font-size: 0.95rem;
    border-bottom: 1px solid #EEEEEE;
}

.table-modern tbody tr:last-child td {
    border-bottom: none;
}

.table-modern tbody tr:hover {
    background-color: #F9FAFB;
}

/* Custom Badges */
.badge-dept {
    background: rgba(60, 80, 224, 0.1);
    color: #3C50E0;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
}

.roll-text {
    font-family: 'Monaco', 'Consolas', monospace;
    font-weight: 600;
    color: #3C50E0;
}

/* Action Button */
.btn-edit-modern {
    background: transparent;
    border: 1px solid #E2E8F0;
    color: #64748B;
    font-size: 0.85rem;
    padding: 6px 12px;
    border-radius: 6px;
    transition: all 0.2s;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.btn-edit-modern:hover {
    background: #3C50E0;
    border-color: #3C50E0;
    color: #ffffff;
}
    </style>

<body>

<div class="container py-4">
    <div class="page-header d-flex justify-content-between align-items-center">
        <div>
            <h2 class="title-modern mb-1">Student Database</h2>
            <p class="text-muted small">Manage and oversee all registered students in the system.</p>
        </div>
        <a href="dashboard.php?page=student_add_page" class="btn btn-primary" style="background:#3C50E0; border:none; border-radius:8px;">
            <i class="bi bi-plus-lg"></i> Add New Student
        </a>
    </div>

    <div class="table-card">
        <div class="table-responsive">
            <table class="table table-modern align-middle mb-0">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Photo</th>
                        <th>Roll Number</th>
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Qualification</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Aadhar</th>
                        <th>Course</th>
                        <th>Duration</th>
                        <th>others</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <!-- $photoPath = !empty($extra['photo']) ? 'uploads/students/' . $extra['photo'] : 'assets/default-avatar.png'; -->
                    <?php if ($result->num_rows > 0): ?>
                        <?php $i = 1; while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td class="text-muted"><?= $i++; ?></td>
                                <?php
                                    $extra = json_decode($row['extra_data'], true);
                                    $photoName = $extra['photo'] ?? '';
                                    $serverPath = __DIR__ . "/uploads/students/" . $photoName;
                                    $viewPath = "uploads/students/" . $photoName;
                                    $extra = json_decode($row['extra_data'], true);
                                    $course_names = [];
                                    // 3. Check if 'course' exists and is an array
                                    if (isset($extra['course']) && is_array($extra['course']) && !empty($extra['course'])) {
                                        // Sanitize IDs for the SQL IN clause
                                        $course_ids = implode(',', array_map('intval', $extra['course']));
                                        // 4. Fetch the names of these specific courses
                                        $c_sql = "SELECT course_name FROM course WHERE course_id IN ($course_ids)";
                                        $c_res = mysqli_query($conn, $c_sql);
                                        
                                        while($c_row = mysqli_fetch_assoc($c_res)) {
                                            $course_names[] = $c_row['course_name'];
                                        }
                                    }
                                    
                                  
                                    if (!empty($photoName) && file_exists($serverPath)) {
                                        $finalSrc = $viewPath;
                                    } else {
                                        // if($row['gender'] == 'Male'){
                                        //     $finalSrc = "image/default_avator.png";
                                        // }else if($row['gender'] == 'Female'){
                                        //     $finalSrc = "image/default_fem_avatar.png";
                                        // }else{
                                        //     $finalSrc = "image/default_avator.png";
                                        // }
                                        $finalSrc = get_initials_svg($row['name']);
                                    }
                                    ?>

                                <td class="text-muted">
                                    <img src="<?= $finalSrc ?>" 
                                        style="width:50px; height:50px; object-fit:cover; border-radius:50%; border: 1px solid #eee;">
                                </td>
                                <td><span class="roll-text" style="white-space: nowrap;"><?= htmlspecialchars($row['roll_no']); ?></span></td>
                                <td class="fw-bold"><?= ucfirst(strtolower(htmlspecialchars($row['name']))); ?></td>
                                <td><?= htmlspecialchars($row['gender']); ?></td>
                                <td class="text-muted small" style="white-space: nowrap;"><?= date('M d, Y', strtotime($row['dob'])); ?></td>
                                <td class="text-muted small"><?= json_decode($row['extra_data'], true)['qualification'] ?? '-'?></td>
                                <td class="text-muted small"><?= json_decode($row['extra_data'], true)['phone'] ?? '-'?></td>
                                <td class="text-muted small"><?= json_decode($row['extra_data'], true)['email'] ?? '-'?></td>
                                <?php 
                                    $extra = json_decode($row['extra_data'], true);
                                    $aadhar = $extra['aadhar'] ?? '';

                                    // If it's exactly 12 digits, format it. Otherwise, show as is or '-'
                                    if (strlen($aadhar) == 12) {
                                        $formattedAadhar = substr($aadhar, 0, 4) . '-' . substr($aadhar, 4, 4) . '-' . substr($aadhar, 8, 4);
                                    } else {
                                        $formattedAadhar = !empty($aadhar) ? $aadhar : '-';
                                    }
                                ?>

                                <td class="text-muted small" style="white-space: nowrap;">
                                    <i class="bi bi-card-text me-1"></i> <?= htmlspecialchars($formattedAadhar) ?>
                                </td>
                            
                               <td class="text-muted small">
                                    <?php if (!empty($course_names)): ?>
                                        <div class="d-flex flex-wrap gap-1">
                                            <?php foreach ($course_names as $index => $name): ?>
                                                <span class="badge bg-light text-dark border">
                                                    <?= htmlspecialchars($name); ?>
                                                </span>
                                                <?php 
                                                    // Add a comma if it's NOT the last item (if you don't want badges)
                                                    // if ($index < count($course_names) - 1) echo ", "; 
                                                ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php else: ?>
                                        <span class="text-secondary italic">No courses</span>
                                    <?php endif; ?>
                                </td>


                                <!-- <td class="text-muted small"><?= json_decode($row['extra_data'], true)['course'] ?? '-'?></td> -->
                                <td class="text-muted small"><?= json_decode($row['extra_data'], true)['duration'] ?? '-'?></td>
                                <td class="text-muted small">
                                    <small style="white-space: nowrap;">
                                        Address - <?= json_decode($row['extra_data'], true)['address'] ?? '-'?>
                                    </small>
                                    <small style="white-space: nowrap;">
                                        Alt Mobile - <?= json_decode($row['extra_data'], true)['alt_phone'] ?? '-'?>
                                    </small>
                                    <small style="white-space: nowrap;">
                                        Father name - <?= json_decode($row['extra_data'], true)['father_name'] ?? '-'?>
                                    </small>
                                    <small style="white-space: nowrap;">
                                        Parent phone - <?= json_decode($row['extra_data'], true)['parent_phone'] ?? '-'?>
                                    </small>
                                    <small style="white-space: nowrap;">
                                        Occupation - <?= json_decode($row['extra_data'], true)['occupation'] ?? '-'?>
                                    </small>
                                </td>
                                <td class="text-end">
                                    <a href="student_edit_page.php?id=<?= $row['student_id']; ?>" class="btn-edit-modern">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center py-5">
                                <i class="bi bi-folder-x display-4 text-muted d-block mb-3"></i>
                                <span class="text-muted">No student records found in the system.</span>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
