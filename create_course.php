<?php
include('./dbConnection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create_course'])){
    $name = $_POST['course_name'];
    $code = $_POST['course_code'];
    $price = $_POST['course_price'];
    $original_price = $_POST['course_original_price'];
    $duration = $_POST['course_duration'];
    $author = $_POST['course_author'] ?? 'Admin';
    $desc = $_POST['course_desc'];
    $ov = $_POST['course_ov'];
    $req = $_POST['requre'];
    $categories = $_POST['categories'] ?? [];
    
    // Auto-generate Slug
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
    
    // Image Upload
    $course_img = "default.jpg";
    if(!empty($_FILES['course_img']['name'])){
        $img_ext = pathinfo($_FILES['course_img']['name'], PATHINFO_EXTENSION);
        $course_img = "course_" . time() . "." . $img_ext;
        move_uploaded_file($_FILES['course_img']['tmp_name'], "../assets/img/" . $course_img);
    }

    // 1. Insert into Course Table
    $stmt = $conn->prepare("INSERT INTO course (course_name, course_code, course_price, course_original_price, course_duration, course_slug, course_img, course_desc, course_author, course_ov, requre) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissssssss", $name, $code, $price, $original_price, $duration, $slug, $course_img, $desc, $author, $ov, $req);
    
    if($stmt->execute()){
        $new_course_id = $conn->insert_id;
        
        // 2. Insert into Pivot Table (Categories)
        foreach($categories as $cat_id){
            $conn->query("INSERT INTO course_category_mapping (course_id, cat_id) VALUES ($new_course_id, $cat_id)");
        }
        header("Location: dashboard.php?page=courses_manage&success=1");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Course</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8fafc; font-family: 'Plus Jakarta Sans', sans-serif; }
        .form-card { border-radius: 24px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.02); }
        .form-control, .form-select { border-radius: 12px; padding: 12px; background: #fcfdfe; border: 1px solid #e2e8f0; }
        .img-preview-container { width: 100%; height: 200px; border: 2px dashed #cbd5e1; border-radius: 20px; display: flex; align-items: center; justify-content: center; overflow: hidden; background: #f1f5f9; }
        .img-preview-container img { width: 100%; height: 100%; object-fit: cover; display: none; }
    </style>
</head>
<body>

<div class="container py-5" style="max-width: 1000px;">
    <div class="mb-4">
        <a href="dashboard.php?page=courses_manage" class="text-decoration-none text-muted small fw-bold">← BACK TO LIST</a>
        <h2 class="fw-800 mt-2">Create New Course</h2>
    </div>

    <form method="POST" enctype="multipart/form-data">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card form-card p-4 mb-4">
                    <h5 class="fw-700 mb-4">General Information</h5>
                    <div class="mb-3">
                        <label class="form-label small fw-800 text-muted">COURSE TITLE</label>
                        <input type="text" name="course_name" class="form-control" placeholder="e.g. Advanced Python Masterclass" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label small fw-800 text-muted">COURSE CODE</label>
                            <input type="text" name="course_code" class="form-control" placeholder="e.g. PY-101" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label small fw-800 text-muted">DURATION</label>
                            <input type="text" name="course_duration" class="form-control" placeholder="e.g. 6 Months" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-800 text-muted">DESCRIPTION</label>
                        <textarea name="course_desc" class="form-control" rows="3" placeholder="Brief summary of the course..."></textarea>
                    </div>
                </div>

                <div class="card form-card p-4">
                    <h5 class="fw-700 mb-4">Syllabus & Requirements</h5>
                    <div class="mb-3">
                        <label class="form-label small fw-800 text-muted">OVERVIEW (SYLLABUS)</label>
                        <textarea name="course_ov" class="form-control" rows="6" placeholder="List the modules or topics covered..."></textarea>
                    </div>
                    <div class="mb-0">
                        <label class="form-label small fw-800 text-muted">PREREQUISITES</label>
                        <textarea name="requre" class="form-control" rows="3" placeholder="What should students know beforehand?"></textarea>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card form-card p-4 mb-4">
                    <h5 class="fw-700 mb-3">Pricing</h5>
                    <div class="mb-3">
                        <label class="form-label small fw-800 text-muted">SALE PRICE (₹)</label>
                        <input type="number" name="course_price" class="form-control" placeholder="0" required>
                    </div>
                    <div class="mb-0">
                        <label class="form-label small fw-800 text-muted">REGULAR PRICE (₹)</label>
                        <input type="number" name="course_original_price" class="form-control" placeholder="0">
                    </div>
                </div>

                <div class="card form-card p-4 mb-4">
                    <h5 class="fw-700 mb-3">Course Banner</h5>
                    <div class="img-preview-container mb-3" id="previewBox">
                        <span class="text-muted small" id="placeholderText">No image selected</span>
                        <img src="" id="imgPreview">
                    </div>
                    <input type="file" name="course_img" class="form-control form-control-sm" accept="image/*" onchange="showPreview(this)">
                </div>

                <div class="card form-card p-4 mb-4">
                    <h5 class="fw-700 mb-3">Categories</h5>
                    <div style="max-height: 200px; overflow-y: auto;" class="pe-2">
                        <?php 
                        $cats = $conn->query("SELECT * FROM course_category ORDER BY cat_name ASC");
                        while($c = $cats->fetch_assoc()): ?>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="categories[]" value="<?= $c['cat_id'] ?>" id="cat<?= $c['cat_id'] ?>">
                                <label class="form-check-label small" for="cat<?= $c['cat_id'] ?>"><?= $c['cat_name'] ?></label>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>

                <button type="submit" name="create_course" class="btn btn-primary w-100 py-3 shadow-sm fw-bold">
                    PUBLISH COURSE
                </button>
            </div>
        </div>
    </form>
</div>

<script>
    function showPreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imgPreview').src = e.target.result;
                document.getElementById('imgPreview').style.display = 'block';
                document.getElementById('placeholderText').style.display = 'none';
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html>