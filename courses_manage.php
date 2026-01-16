<?php
include('./dbConnection.php');

// --- PAGINATION LOGIC START ---
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

// Get total courses for pagination count
// $total_res = $conn->query("SELECT COUNT(*) as id FROM course"); 
// 1. Calculate the TOTAL number of courses in the database
$count_query = $conn->query("SELECT COUNT(course_id) as total FROM course");
$row_count = $count_query->fetch_assoc();
$total_rows = $row_count['total']; // This is your actual total (e.g., 50)

// 2. Set your limits
$limit = 10; 
$total_pages = ceil($total_rows / $limit);
$page = isset($_GET['p']) ? (int)$_GET['p'] : 1;
if ($page < 1) $page = 1;
if ($page > $total_pages && $total_pages > 0) $page = $total_pages;
$offset = ($page - 1) * $limit;

// 3. Now run your complex JOIN query for the display
$sql = "SELECT c.*, GROUP_CONCAT(cat.cat_name SEPARATOR ', ') AS course_categories
        FROM course c
        LEFT JOIN course_category_mapping mapping ON c.course_id = mapping.course_id
        LEFT JOIN course_category cat ON mapping.cat_id = cat.cat_id
        GROUP BY c.course_id
        LIMIT $limit OFFSET $offset";

$res = $conn->query($sql);
// --- PAGINATION LOGIC END ---

// Handle Deletion
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM course WHERE course_id = $id");
    header("Location: manage_courses.php");
}

// Handle Add Course (Existing logic remains the same)
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_course'])){
    $name = $_POST['course_name'];
    $code = $_POST['course_code'];
    $price = $_POST['course_price'];
    $duration = $_POST['course_duration'] ?? '6 Months';
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
    
    $course_img = "default.jpg";
    if(!empty($_FILES['course_img']['name'])){
        $img_name = $_FILES['course_img']['name'];
        $img_temp = $_FILES['course_img']['tmp_name'];
        $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
        $new_img_name = "course_" . time() . "." . $img_ext;
        $target_path = "../assets/img/" . $new_img_name;

        if(move_uploaded_file($img_temp, $target_path)){
            $course_img = $new_img_name;
        }
    }

    $stmt = $conn->prepare("INSERT INTO course (course_name, course_code, course_price, course_duration, course_slug, course_img, course_desc, course_author, course_original_price, course_ov, requre) VALUES (?, ?, ?, ?, ?, ?, '', 'Admin', ?, '', '')");
    $stmt->bind_param("ssssssi", $name, $code, $price, $duration, $slug, $course_img, $price);
    $stmt->execute();
    header("Location: manage_courses.php?success=1");
}
?>

<style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f8fafc; }
    .card { border: none; border-radius: 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.04); overflow: hidden; }
    .btn-primary { border-radius: 12px; padding: 10px 24px; font-weight: 600; background: #2563eb; }
    .table thead th { background: #f8fafc; color: #64748b; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em; padding: 20px; border-bottom: 1px solid #f1f5f9; }
    .course-img { width: 48px; height: 48px; object-fit: cover; border-radius: 12px; }
    
    /* Pagination Styles */
    .pagination-container { padding: 20px; background: white; border-top: 1px solid #f1f5f9; }
    .page-link { border: none; color: #64748b; font-weight: 600; padding: 8px 16px; border-radius: 8px; margin: 0 3px; }
    .page-item.active .page-link { background: #2563eb; color: white; }
    .page-link:hover { background: #f1f5f9; color: #2563eb; }
</style>

<body>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-800 mb-0">Course Library</h2>
            <p class="text-muted small">Showing <?= ($offset + 1) ?> to <?= min($offset + $limit, $total_rows) ?> of <?= $total_rows ?> courses</p>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
            <i class="bi bi-plus-lg me-2"></i>Create New Course
        </button>
    </div>

    <div class="card">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th class="ps-4">Course Info</th>
                        <th>Categories</th>
                        <th>Code</th>
                        <th>Duration</th>
                        <th>Price</th>
                        <th class="text-end pe-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // ADDED LIMIT AND OFFSET TO QUERY
                    while($row = $res->fetch_assoc()): ?>
                    <tr>
                        <td class="ps-4">
                            <div class="d-flex align-items-center gap-3">
                                <?php
                                    $serverPath = __DIR__ . $row['course_img'];
                                    $viewPath = $row['course_img'];
                                    if (isset($extra['course']) && is_array($extra['course']) && !empty($extra['course'])) {
                                        $course_ids = implode(',', array_map('intval', $extra['course']));
                                        $c_sql = "SELECT course_name FROM course WHERE course_id IN ($course_ids)";
                                    }
                                    
                                  
                                    if (!empty($row['course_img']) && file_exists($serverPath)) {
                                        $finalSrc = $viewPath;
                                    } else {
                                        $finalSrc = get_initials_svg($row['course_name']);
                                    }
                                    ?>

                                <img src="<?= $finalSrc ?>" 
                                    style="width:50px; height:50px; object-fit:cover; border-radius:50%; border: 1px solid #eee;">
                                <div>
                                    <div class="fw-bold text-dark"><?= $row['course_name'] ?></div>
                                    <div class="text-muted small"><?= $row['course_author'] ?></div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php if(!empty($row['course_categories'])): ?>
                                <?php 
                                $cat_list = explode(', ', $row['course_categories']);
                                foreach($cat_list as $cat_name): 
                                ?>
                                    <span class="badge bg-info-subtle text-info border border-info-subtle rounded-pill px-2" style="font-size: 0.7rem;">
                                        <?= htmlspecialchars($cat_name) ?>
                                    </span>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <span class="text-muted small italic">Uncategorized</span>
                            <?php endif; ?>
                        </td>
                        <td><span class="badge bg-light text-dark border"><?= $row['course_code'] ?></span></td>
                        <td><?= $row['course_duration'] ?></td>
                        <td class="fw-bold text-primary">₹<?= number_format($row['course_price']) ?></td>
                        <td class="text-end pe-4">
                            <a href="dashboard.php?page=edit_course&id=<?= $row['course_id'] ?>" class="btn btn-sm btn-light rounded-pill px-3 me-2">Edit</a>
                            <a href="?delete=<?= $row['course_id'] ?>" class="btn btn-sm btn-outline-danger rounded-pill px-3 disabled" onclick="return confirm('Are you sure?')">Delete</a>
                            
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <div class="pagination-container d-flex justify-content-between align-items-center">
            <div class="small text-muted fw-semibold">
                Page <?= $page ?> of <?= $total_pages ?>
            </div>
            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?>">
                        <a class="page-link" href="dashboard.php?page=courses_manage&p=<?= $page - 1 ?>"><i class="bi bi-chevron-left"></i></a>
                    </li>
                    
                    <?php for($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?= ($page == $i) ? 'active' : '' ?>">
                            <a class="page-link" href="dashboard.php?page=courses_manage&p=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>

                    <li class="page-item <?= ($page >= $total_pages) ? 'disabled' : '' ?>">
                        <a class="page-link" href="dashboard.php?page=courses_manage&p=<?= $page + 1 ?>"><i class="bi bi-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>