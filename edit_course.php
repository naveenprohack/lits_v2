<?php
include('./dbConnection.php');

$id = $_GET['id'];

// 1. Fetch Course Details
$res = $conn->query("SELECT * FROM course WHERE course_id = $id");
$row = $res->fetch_assoc();

// 2. Fetch existing category mappings for this course
$current_cats_res = $conn->query("SELECT cat_id FROM course_category_mapping WHERE course_id = $id");
$current_cats = [];
while($c = $current_cats_res->fetch_assoc()) $current_cats[] = $c['cat_id'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['course_name'];
    $price = $_POST['course_price'];
    $original_price = $_POST['course_original_price'];
    $ov = $_POST['course_ov'];
    $req = $_POST['requre'];
    $categories = $_POST['categories'] ?? []; // From checkboxes

    // Handle Image Update
    $course_img = $row['course_img']; // Keep old if no new one
    if(!empty($_FILES['course_img']['name'])){
        $img_name = $_FILES['course_img']['name'];
        $img_temp = $_FILES['course_img']['tmp_name'];
        $new_img_name = "course_" . time() . "." . pathinfo($img_name, PATHINFO_EXTENSION);
        if(move_uploaded_file($img_temp, "../assets/img/" . $new_img_name)){
            $course_img = $new_img_name;
        }
    }

    // Update Course Table
    $stmt = $conn->prepare("UPDATE course SET course_name=?, course_price=?, course_original_price=?, course_ov=?, requre=?, course_img=? WHERE course_id=?");
    $stmt->bind_param("siisssi", $name, $price, $original_price, $ov, $req, $course_img, $id);
    $stmt->execute();

    // Update Category Mappings (Pivot Table)
    $conn->query("DELETE FROM course_category_mapping WHERE course_id = $id");
    foreach($categories as $cat_id){
        $conn->query("INSERT INTO course_category_mapping (course_id, cat_id) VALUES ($id, $cat_id)");
    }

    header("Location: dashboard.php?page=courses_manage");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Course | <?= $row['course_name'] ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <style>
        body { background: #f1f5f9; font-family: 'Plus Jakarta Sans', sans-serif; }
        .edit-container { max-width: 900px; margin: 50px auto; }
        .card { border-radius: 30px; border: none; }
        .form-control, .form-select { border-radius: 12px; border: 1px solid #e2e8f0; padding: 12px; background: #fcfdfe; }
        .btn-save { background: #2563eb; color: white; border-radius: 12px; padding: 14px 40px; font-weight: 700; border: none; transition: 0.3s; }
        .btn-save:hover { background: #1e40af; transform: translateY(-2px); }
        .cat-box { background: #f8fafc; border-radius: 15px; padding: 20px; border: 1px dashed #cbd5e1; }
    </style>
</head>
<body>
<div class="container edit-container">
    <a href="dashboard.php?page=courses_manage" class="btn btn-link text-decoration-none text-muted mb-4">
        <i class="bi bi-arrow-left me-2"></i>Back to Course Library
    </a>

    <form method="POST" enctype="multipart/form-data">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card p-4 shadow-sm">
                    <h4 class="fw-800 mb-4">Course Content</h4>
                    
                    <div class="mb-4">
                        <label class="form-label fw-bold small text-uppercase">Full Course Name</label>
                        <input type="text" name="course_name" class="form-control" value="<?= $row['course_name'] ?>" required>
                    </div>

                    <div class="row mb-4">
                        <div class="col-6">
                            <label class="form-label fw-bold small text-uppercase">Sale Price (₹)</label>
                            <input type="number" name="course_price" class="form-control" value="<?= $row['course_price'] ?>" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label fw-bold small text-uppercase">Original Price (₹)</label>
                            <input type="number" name="course_original_price" class="form-control" value="<?= $row['course_original_price'] ?>">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold small text-uppercase">Overview (Syllabus)</label>
                        <textarea name="course_ov" class="form-control" rows="5"><?= $row['course_ov'] ?></textarea>
                    </div>

                    <div class="mb-2">
                        <label class="form-label fw-bold small text-uppercase">Requirements</label>
                        <textarea name="requre" class="form-control" rows="3"><?= $row['requre'] ?></textarea>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card p-4 shadow-sm mb-4 text-center">
                    <h6 class="fw-800 mb-3 text-start">Course Banner</h6>
                    <img src="<?= $row['course_img'] ?>" id="preview" class="rounded-4 mb-3 shadow-sm w-100" style="height: 160px; object-fit: cover;">
                    <input type="file" name="course_img" class="form-control form-control-sm" accept="image/*" onchange="previewImage(this)">
                </div>

                <div class="card p-4 shadow-sm mb-4">
                    <h6 class="fw-800 mb-3">Categories</h6>
                    <div class="cat-box">
                        <?php 
                        $all_cats = $conn->query("SELECT * FROM course_category");
                        while($cat = $all_cats->fetch_assoc()): 
                            $checked = in_array($cat['cat_id'], $current_cats) ? 'checked' : '';
                        ?>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="categories[]" value="<?= $cat['cat_id'] ?>" id="cat<?= $cat['cat_id'] ?>" <?= $checked ?>>
                                <label class="form-check-label small fw-semibold" for="cat<?= $cat['cat_id'] ?>">
                                    <?= $cat['cat_name'] ?>
                                </label>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>

                <button type="submit" class="btn-save w-100 shadow-sm">
                    <i class="bi bi-cloud-arrow-up-fill me-2"></i>Update Course
                </button>
            </div>
        </div>
    </form>
</div>

<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview').src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html>