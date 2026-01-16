<?php
// logic to save mappings
if(isset($_POST['save_mapping'])) {
    $course_id = $_POST['course_id'];
    $categories = $_POST['categories']; // Array of category IDs

    // 1. Clear existing mappings for this course
    $conn->query("DELETE FROM course_category_mapping WHERE course_id = $course_id");

    // 2. Insert new mappings
    foreach($categories as $cat_id) {
        $conn->query("INSERT INTO course_category_mapping (course_id, cat_id) VALUES ($course_id, $cat_id)");
    }
    echo "<div class='alert alert-success'>Mappings Updated!</div>";
}
?>

<div class="card border-0 shadow-sm p-4 mt-4" style="border-radius: 20px;">
    <h5 class="fw-800 mb-4">Assign Categories to Course</h5>
    <form method="POST">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Select Course</label>
                <select name="course_id" class="form-select" required>
                    <?php
                    $courses = $conn->query("SELECT course_id, course_name FROM course");
                    while($c = $courses->fetch_assoc()) echo "<option value='{$c['course_id']}'>{$c['course_name']}</option>";
                    ?>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Select Categories</label>
                <div class="p-3 border rounded-3 bg-light" style="max-height: 150px; overflow-y: auto;">
                    <?php
                    $cats = $conn->query("SELECT * FROM category");
                    while($cat = $cats->fetch_assoc()): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories[]" value="<?= $cat['cat_id'] ?>" id="cat<?= $cat['cat_id'] ?>">
                            <label class="form-check-label" for="cat<?= $cat['cat_id'] ?>"><?= $cat['cat_name'] ?></label>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <button type="submit" name="save_mapping" class="btn btn-dark w-100 py-2 mt-2">Update Course Categories</button>
    </form>
</div>