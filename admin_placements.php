<?php
include('./dbConnection.php');

// --- DELETE FUNCTION ---
if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']); 
    $imgQuery = $conn->query("SELECT student_image FROM placements WHERE id = $id");
    if ($imgRow = $imgQuery->fetch_assoc()) {
        $filePath = "./image/student_placed/" . $imgRow['student_image'];
        if (file_exists($filePath)) { unlink($filePath); }
    }
    $sql = "DELETE FROM placements WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php?page=admin_placements&msg=deleted");
    }
}

// --- ADD FUNCTION ---
if(isset($_POST['add_placement'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $details = mysqli_real_escape_string($conn, $_POST['details']);
    $text = mysqli_real_escape_string($conn, $_POST['text']);
    
    $imgName = time() . '_' . $_FILES['image']['name']; // Unique name to avoid overwriting
    $tempName = $_FILES['image']['tmp_name'];
    $folder = "./image/student_placed/".$imgName;
    
    if(move_uploaded_file($tempName, $folder)) {
        $conn->query("INSERT INTO placements (student_name, student_details, testimonial_text, student_image) VALUES ('$name', '$details', '$text', '$imgName')");
        echo "<script>window.location.href='dashboard.php?page=admin_placements&msg=added';</script>";
    }
}
?>

<div class="container-fluid">
    <header class="page-header py-3 mb-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
            <div class="d-flex align-items-center gap-3">
                <div class="header-icon-box shadow-sm" style="background: #3C50E0; width: 45px; height: 45px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-trophy-fill text-white fs-4"></i>
                </div>
                <div>
                    <h2 class="fs-4 fw-800 mb-0 text-dark">Placement Stories</h2>
                    <p class="text-muted mb-0 small fw-bold text-uppercase">Manage Student Success Records</p>
                </div>
            </div>
        </div>
    </header>

    <?php if(isset($_GET['msg'])): ?>
        <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4">
            <i class="bi bi-check-circle-fill me-2"></i> 
            Action completed successfully!
        </div>
    <?php endif; ?>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="module-card shadow-sm border-0 p-4" style="background: white; border-radius: 20px;">
                <h5 class="fw-bold mb-4 text-dark"><i class="bi bi-plus-circle me-2"></i>New Entry</h5>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label small fw-bold text-muted">Student Name</label>
                        <input type="text" name="name" class="form-control rounded-3" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold text-muted">Role & Company</label>
                        <input type="text" name="details" class="form-control rounded-3" placeholder="Software Engineer @ Amazon" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold text-muted">Testimonial Quote</label>
                        <textarea name="text" class="form-control rounded-3" rows="4" placeholder="Share the success story..." required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label small fw-bold text-muted">Student Photo</label>
                        <input type="file" name="image" class="form-control rounded-3" required>
                    </div>
                    <button type="submit" name="add_placement" class="btn btn-primary w-100 py-2 fw-bold rounded-3 shadow-sm">
                        <i class="bi bi-cloud-arrow-up-fill me-2"></i>Publish Story
                    </button>
                </form>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="module-card shadow-sm border-0" style="background: white; border-radius: 20px; overflow: hidden;">
                <div class="p-4 border-bottom">
                    <h5 class="fw-bold mb-0 text-dark">Currently Featured</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4 border-0 small text-uppercase text-muted">Student</th>
                                <th class="border-0 small text-uppercase text-muted">Company Details</th>
                                <th class="border-0 text-center small text-uppercase text-muted">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = $conn->query("SELECT * FROM placements ORDER BY id DESC");
                            while($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td class="ps-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="./image/student_placed/<?php echo $row['student_image']; ?>" 
                                                 class="rounded-circle shadow-sm" width="45" height="45" style="object-fit: cover; border: 2px solid #eee;">
                                            <span class="fw-bold text-dark"><?php echo $row['student_name']; ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="badge bg-primary-subtle text-primary rounded-pill px-3 fw-bold">
                                            <?php echo $row['student_details']; ?>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="dashboard.php?page=admin_placements&delete_id=<?php echo $row['id']; ?>" 
                                           class="btn btn-sm btn-light text-danger rounded-3" 
                                           onclick="return confirm('Delete this record?')">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>