<?php
include('./dbConnection.php');

// 1. Handle Mapping Update (Pivot Table)
if(isset($_POST['update_mapping'])){
    $course_id = $_POST['course_id'];
    $categories = $_POST['categories'] ?? []; // Array of IDs

    $conn->query("DELETE FROM course_category_mapping WHERE course_id = $course_id");
    foreach($categories as $cat_id){
        $conn->query("INSERT INTO course_category_mapping (course_id, cat_id) VALUES ($course_id, $cat_id)");
    }
    $msg = "Relationships updated successfully!";
}

// 2. Handle New Category
if(isset($_POST['add_cat'])){
    $name = $_POST['cat_name'];
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
    $conn->query("INSERT INTO course_category (cat_name, cat_slug) VALUES ('$name', '$slug')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category Mapping | LITS Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f8fafc; color: #1e293b; }
        .glass-card { background: white; border: none; border-radius: 24px; box-shadow: 0 10px 40px rgba(0,0,0,0.03); padding: 2rem; }
        .cat-badge { background: #eff6ff; color: #2563eb; border: 1px solid #dbeafe; padding: 6px 14px; border-radius: 10px; font-weight: 600; font-size: 0.85rem; }
        .form-check-input:checked { background-color: #2563eb; border-color: #2563eb; }
        .scroll-area { max-height: 300px; overflow-y: auto; padding-right: 10px; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="mb-5">
        <h2 class="fw-800">Taxonomy Manager</h2>
        <p class="text-muted">Organize your courses into searchable categories</p>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="glass-card h-100">
                <h5 class="fw-700 mb-4">Course-Category Mapping</h5>
                <form method="POST">
                    <div class="mb-4">
                        <label class="form-label small text-uppercase fw-800 text-muted">1. Select Course</label>
                        <select name="course_id" class="form-select form-select-lg border-0 bg-light rounded-4" required>
                            <option value="">Choose a course to link...</option>
                            <?php 
                            $c_res = $conn->query("SELECT course_id, course_name FROM course");
                            while($c = $c_res->fetch_assoc()) echo "<option value='{$c['course_id']}'>{$c['course_name']}</option>";
                            ?>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label small text-uppercase fw-800 text-muted">2. Assign Categories</label>
                        <div class="row g-3 scroll-area">
                            <?php 
                            $cat_res = $conn->query("SELECT * FROM course_category");
                            while($cat = $cat_res->fetch_assoc()): ?>
                            <div class="col-md-6">
                                <div class="p-3 border rounded-4 d-flex align-items-center bg-white shadow-sm">
                                    <input class="form-check-input me-3" type="checkbox" name="categories[]" value="<?= $cat['cat_id'] ?>" id="check<?= $cat['cat_id'] ?>">
                                    <label class="form-check-label fw-600" for="check<?= $cat['cat_id'] ?>"><?= $cat['cat_name'] ?></label>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    
                    <button type="submit" name="update_mapping" class="btn btn-primary w-100 py-3 rounded-4 fw-bold">Save Relationship Mapping</button>
                </form>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="glass-card mb-4">
                <h5 class="fw-700 mb-3">Add New Label</h5>
                <form method="POST">
                    <input type="text" name="cat_name" class="form-control border-0 bg-light rounded-3 mb-3" placeholder="Category Name" required>
                    <button type="submit" name="add_cat" class="btn btn-dark w-100 rounded-3">Add Category</button>
                </form>
            </div>

            <div class="glass-card">
                <h5 class="fw-700 mb-3">Existing Categories</h5>
                <div class="d-flex flex-wrap gap-2">
                    <?php 
                    $cat_list = $conn->query("SELECT * FROM course_category");
                    while($l = $cat_list->fetch_assoc()): ?>
                        <span class="cat-badge"><?= $l['cat_name'] ?></span>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>