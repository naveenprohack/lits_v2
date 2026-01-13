<?php
include("db.php");
if (session_status() === PHP_SESSION_NONE) { session_start(); }

if (!isset($_SESSION['admin'])) { header("Location: admin_login.php"); exit(); }
if (!isset($_GET['id'])) { header("Location: dashboard.php?page=student_list_page"); exit(); }

$id = intval($_GET['id']);

/* 📄 Fetch student */
$stmt = $conn->prepare("SELECT * FROM students WHERE student_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$student = $stmt->get_result()->fetch_assoc();

if (!$student) { header("Location: dashboard.php?page=student_list_page"); exit(); }

// Decode existing extra data
$extra = json_decode($student['extra_data'], true) ?? [];

/* 🧠 Update Logic */
if (isset($_POST['update_student'])) {
    $name   = trim($_POST['name']);
    $gender = trim($_POST['gender']);
    $dob    = $_POST['dob'];
    
    // Handle Photo Update
    $current_photo = $extra['photo'] ?? '';
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
        $upload_dir = "uploads/students/";
        $file_ext = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));
        $new_photo_name = time() . "_" . preg_replace("/[^a-z0-9]/", "_", strtolower($name)) . "." . $file_ext;
        
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $upload_dir . $new_photo_name)) {
            // Delete old photo if exists
            if (!empty($current_photo) && file_exists($upload_dir . $current_photo)) {
                unlink($upload_dir . $current_photo);
            }
            $current_photo = $new_photo_name;
        }
    }

    // Prepare New JSON Metadata
    $new_extra_data = [
        'address'       => trim($_POST['address'] ?? '-'),
        'aadhar'        => str_replace([' ', '-'], '', trim($_POST['aadhar'])),
        'course'        => trim($_POST['course'] ?? '-'),
        'duration'      => trim($_POST['duration'] ?? '-'),
        'qualification' => trim($_POST['qualification'] ?? '-'),
        'phone'         => trim($_POST['phone']),
        'email'         => trim($_POST['email']),
        'alt_phone'     => trim($_POST['alt_phone'] ?? '-'),
        'father_name'   => trim($_POST['father_name'] ?? '-'),
        'occupation'    => trim($_POST['occupation'] ?? '-'),
        'parent_phone'  => trim($_POST['parent_phone'] ?? '-'),
        'photo'         => $current_photo,
    ];
    $json_metadata = json_encode($new_extra_data);

    $update = $conn->prepare("UPDATE students SET name=?, gender=?, dob=?, extra_data=? WHERE student_id=?");
    $update->bind_param("ssssi", $name, $gender, $dob, $json_metadata, $id);

    if ($update->execute()) {
        header("Location: dashboard.php?page=student_list_page&msg=updated");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student: <?= htmlspecialchars($student['name']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        /* [INSERT ALL CSS FROM YOUR ADD PAGE HERE] */
        body { background-color: #F1F5F9; }
        .form-card-modern { background: #ffffff; border: none; border-radius: 12px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05); }
        .form-label-modern { color: #64748B; font-weight: 500; font-size: 0.85rem; margin-bottom: 8px; display: block; }
        .form-control-modern, .form-select-modern { border: 1.5px solid #E2E8F0; border-radius: 8px; padding: 10px 15px; font-size: 0.95rem; }
        .image-upload-area { width: 100%; min-height: 180px; border: 2px dashed #E2E8F0; border-radius: 12px; position: relative; cursor: pointer; }
        .image-preview-container img { width: 100%; height: 180px; object-fit: contain; padding: 10px; }
        .section-divider { border-top: 1px solid #F1F5F9; margin: 30px 0 20px 0; position: relative; }
        .section-label { position: absolute; top: -12px; background: #fff; color: #3C50E0; font-weight: 700; font-size: 0.75rem; text-transform: uppercase; }
        .btn-update-modern { background: #3C50E0; color: #fff; border: none; padding: 14px; border-radius: 8px; font-weight: 600; width: 100%; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4" style="max-width: 850px; margin: auto;">
        <h2 class="fw-bold" style="color: #1C2434;">Edit Student Profile</h2>
        <a href="dashboard.php?page=student_list_page" class="btn btn-outline-secondary rounded-pill btn-sm">
            <i class="bi bi-arrow-left"></i> Back to List
        </a>
    </div>

    <div class="card form-card-modern mx-auto" style="max-width: 850px;">
        <div class="card-body p-4">
            <form method="POST" enctype="multipart/form-data" id="studentForm" novalidate>
                
                <div class="section-divider"><span class="section-label">Identity & Photo</span></div>
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <label class="form-label-modern">Profile Photo</label>
                        <div class="image-upload-area" id="dropzone">
                            <input type="file" name="photo" id="profile_image" class="d-none" accept="image/*" onchange="handleImagePreview(this)">
                            
                            <div id="upload-placeholder" class="upload-placeholder <?= !empty($extra['photo']) ? 'd-none' : '' ?>">
                                <div class="text-center p-4">
                                    <i class="bi bi-cloud-arrow-up fs-1 text-primary"></i>
                                    <p class="small mb-0">Change Photo</p>
                                </div>
                            </div>

                            <div id="image-preview-container" class="image-preview-container <?= empty($extra['photo']) ? 'd-none' : '' ?>">
                                <img id="preview-img" src="<?= !empty($extra['photo']) ? 'uploads/students/'.$extra['photo'] : '#' ?>" alt="Preview">
                                <button type="button" class="btn btn-danger btn-sm rounded-circle position-absolute top-0 end-0 m-2" onclick="removeImage()">
                                    <i class="bi bi-x"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label class="form-label-modern">Registration Number (Locked)</label>
                        <input type="text" class="form-control-modern w-100 bg-light" value="<?= $student['roll_no'] ?>" disabled>
                        
                        <div class="mt-3">
                            <label class="form-label-modern">Full Legal Name</label>
                            <input type="text" name="name" class="form-control-modern w-100" value="<?= htmlspecialchars($student['name']) ?>" required>
                            <div class="text-danger error-msg d-none">This field is required</div>

                        </div>
                    </div>
                </div>

                <div class="section-divider"><span class="section-label">Personal Details</span></div>
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <label class="form-label-modern">Gender</label>
                        <select name="gender" class="form-select-modern w-100" required>
                            <option value="Male" <?= $student['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                            <option value="Female" <?= $student['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                            <option value="Other" <?= $student['gender'] == 'Other' ? 'selected' : '' ?>>Other</option>
                        </select>
                        <div class="text-danger error-msg d-none">This field is required</div>

                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Date of Birth</label>
                        <input type="date" name="dob" class="form-control-modern w-100" value="<?= $student['dob'] ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Aadhar Number</label>
                        <input type="text" 
                                name="aadhar" 
                                class="form-control-modern w-100" 
                                placeholder="123456789012" 
                                pattern="\d{12}" 
                                maxlength="12" 
                                minlength="12" 
                                oninput="this.value = this.value.replace(/[^0-9]/g, '');" 
                                title="Aadhar must be exactly 12 digits" 
                                value="<?= htmlspecialchars($extra['aadhar'] ?? '') ?>"
                                required>
                        <div class="text-danger error-msg d-none">This field is required</div>

                    </div>
                </div>

                <div class="section-divider"><span class="section-label">Contact & Education</span></div>
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <label class="form-label-modern">Phone Number</label>
                        <input type="tel" name="phone" 
                            class="form-control-modern w-100" 
                            placeholder="9876543210" 
                            pattern="[6-9]{1}[0-9]{9}" 
                            maxlength="10" 
                            minlength="10"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                            title="Phone number must be exactly 10 digits starting with 6-9"
                            value="<?= htmlspecialchars($extra['phone'] ?? '') ?>" 
                            required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Email ID</label>
                        <input type="email" placeholder="9876543210" 
                             name="email" class="form-control-modern w-100" value="<?= htmlspecialchars($extra['email'] ?? '') ?>" required>

                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Alt Number</label>
                        <input type="tel"  name="alt_phone" class="form-control-modern w-100" pattern="[6-9]{1}[0-9]{9}" 
                            maxlength="10" 
                            minlength="10" value="<?= htmlspecialchars($extra['alt_phone'] ?? '') ?>">

                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Qualification</label>
                        <select name="qualification" class="form-select-modern w-100">
                            <?php $q = $extra['qualification'] ?? ''; ?>
                            <option value="Schooling" <?= $q=='Schooling'?'selected':'' ?>>Schooling</option>
                            <option value="UG" <?= $q=='UG'?'selected':'' ?>>Undergraduate (UG)</option>
                            <option value="PG" <?= $q=='PG'?'selected':'' ?>>Postgraduate (PG)</option>
                            <option value="Diploma" <?= $q=='Diploma'?'selected':'' ?>>Diploma</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Course Name</label>
                        <input type="text" name="course" class="form-control-modern w-100" value="<?= htmlspecialchars($extra['course'] ?? '') ?>" placeholder="Python, Java">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Duration</label>
                        <input type="text" name="duration" class="form-control-modern w-100" value="<?= htmlspecialchars($extra['duration'] ?? '') ?>"  placeholder="e.g. 3 Months"
                        list="durationSuggestions" 
                        oninput="updateSuggestions(this.value)">
                        <datalist id="durationSuggestions"></datalist>

                    </div>
                    <div class="col-12">
                        <label class="form-label-modern">Address</label>
                        <textarea name="address" class="form-control-modern w-100" rows="2"><?= htmlspecialchars($extra['address'] ?? '') ?></textarea>
                    </div>
                </div>

                <div class="section-divider"><span class="section-label">Parent/Guardian Info</span></div>
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <label class="form-label-modern">Father's Name</label>
                        <input type="text" name="father_name" class="form-control-modern w-100" value="<?= htmlspecialchars($extra['father_name'] ?? '') ?>">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Parent Phone</label>
                        <input type="tel" name="parent_phone" class="form-control-modern w-100" 
                            pattern="[6-9]{1}[0-9]{9}" 
                            maxlength="10" 
                            minlength="10" value="<?= htmlspecialchars($extra['parent_phone'] ?? '') ?>">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Occupation</label>
                        <input type="tel" name="occupation" class="form-control-modern w-100" value="<?= htmlspecialchars($extra['occupation'] ?? '') ?>">
                    </div>
                </div>

                <div class="mt-5">
                    <button type="submit" name="update_student" class="btn-update-modern">
                        <i class="bi bi-cloud-check"></i> Save & Apply Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById("studentForm").addEventListener("submit", function (e) {
        let isValid = true;
        const requiredFields = this.querySelectorAll("[required]");

        requiredFields.forEach(field => {
            // Find the error message div
            // For hidden inputs (like your photo), we look at the parent container
            let errorDiv = field.nextElementSibling;
            if (field.classList.contains('d-none')) {
                errorDiv = field.parentElement.querySelector(".error-msg");
            }

            // Reset states
            if (errorDiv && errorDiv.classList.contains("error-msg")) {
                errorDiv.classList.add("d-none");
            }
            field.classList.remove("border-danger");

            // 1. Empty Check
            if (!field.value.trim()) {
                isValid = false;
                if (errorDiv) {
                    errorDiv.textContent = "This field is required";
                    errorDiv.classList.remove("d-none");
                }
                field.classList.add("border-danger");
                
                // Special styling for the photo dropzone border if photo is missing
                if(field.id === "profile_image") {
                    document.getElementById("dropzone").style.borderColor = "#EF4444";
                }
            } 
            // 2. Pattern validation (Aadhar, Phone, etc.)
            else if (field.pattern) {
                const regex = new RegExp("^" + field.pattern + "$");
                if (!regex.test(field.value)) {
                    isValid = false;
                    if (errorDiv) {
                        errorDiv.textContent = field.title || "Invalid format";
                        errorDiv.classList.remove("d-none");
                    }
                    field.classList.add("border-danger");
                }
            }
        });

        if (!isValid) {
            e.preventDefault(); // Stop form ONLY if validation fails
            // Scroll to the first error
            const firstError = document.querySelector(".border-danger");
            if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        // If isValid is true, the form will submit NATURALLY, 
        // ensuring $_POST['save_student'] is sent to PHP.
    });
    function handleImagePreview(input) {
        const placeholder = document.getElementById('upload-placeholder');
        const previewContainer = document.getElementById('image-preview-container');
        const previewImg = document.getElementById('preview-img');
        const dropzone = document.getElementById('dropzone');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                previewImg.src = e.target.result;
                placeholder.classList.add('d-none');
                previewContainer.classList.remove('d-none');
                dropzone.style.borderStyle = 'solid';
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function removeImage() {
        const input = document.getElementById('profile_image');
        const placeholder = document.getElementById('upload-placeholder');
        const previewContainer = document.getElementById('image-preview-container');
        const dropzone = document.getElementById('dropzone');

        input.value = ""; // Clear file input
        placeholder.classList.remove('d-none');
        previewContainer.classList.add('d-none');
        dropzone.style.borderStyle = 'dashed';
    }

// Allow clicking the dropzone to trigger the hidden file input
    document.getElementById('dropzone').addEventListener('click', function(e) {
        if (e.target.closest('.btn-remove-image')) return;
        document.getElementById('profile_image').click();
    });
    function updateSuggestions(val) {
        const list = document.getElementById('durationSuggestions');
        list.innerHTML = ''; // Clear old suggestions
        
        if (val && !isNaN(val)) {
            const months = document.createElement('option');
            months.value = val + " Months";
            
            const years = document.createElement('option');
            years.value = val + " Years";
            
            list.appendChild(months);
            list.appendChild(years);
        }
    }
</script>
</body>
</html>