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

/* 🧠 Handle form submission */
if (isset($_POST['save_student'])) {
    // 1. Basic Info
    $dept_input = "CSE";
    $roll_no = $dept_input . "-" . random_int(100000, 999999);
    $name    = trim($_POST['name']);
    $gender  = trim($_POST['gender']);
    $dob     = $_POST['dob'];
    $phone   = trim($_POST['phone']);
    $aadhar  = str_replace([' ', '-'], '', trim($_POST['aadhar']));
    $email   = trim($_POST['email']);
    
    // 2. File Check & Validation
    $db_path = "";
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
        if (!in_array($_FILES['photo']['type'], $allowedTypes)) {
            $_SESSION['toast_msg'] = "Only JPG, PNG, WEBP allowed.";
            $_SESSION['toast_type'] = "error";
            header("Location: " . $_SERVER['PHP_SELF']); // Redirect back
            exit();
        }

        // Move Logic
        $upload_dir = "uploads/students/";
        if (!is_dir($upload_dir)) { mkdir($upload_dir, 0755, true); }

        $file_ext = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));
        $clean_name = preg_replace("/[^a-zA-Z0-9]/", "_", strtolower($name));
        $db_path = time() . "_" . $clean_name . "." . $file_ext;
        
        move_uploaded_file($_FILES['photo']['tmp_name'], $upload_dir . $db_path);
    }
    $myCourses = array();
    if(isset($_POST['course'])){
        $selected_courses = $_POST['course']; // This is an array
        foreach($selected_courses as $course_id){
            $course_id = mysqli_real_escape_string($conn, $course_id);
            array_push($myCourses,$course_id);
        }
    }
    // 3. Prepare JSON Metadata
    $extra_data = [
        'address'       => trim($_POST['address'] ?? '-'),
        'aadhar'        => $aadhar,
        'course'        => $myCourses ?? [],
        'duration'      => trim($_POST['duration'] ?? '-'),
        'qualification' => trim($_POST['qualification'] ?? '-'),
        'phone'         => $phone,
        'email'         => $email,
        'alt_phone'     => trim($_POST['alt_phone'] ?? '-'),
        'father_name'   => trim($_POST['father_name'] ?? '-'),
        'occupation'    => trim($_POST['occupation'] ?? '-'),
        'parent_phone'  => trim($_POST['parent_phone'] ?? ''),
        'photo'         => $db_path,
    ];
    $json_metadata = json_encode($extra_data);

    // 4. Final Validation & DB Insert
    if (empty($name) || empty($phone) || strlen($aadhar) !== 12) {
        $_SESSION['toast_msg']  = "Required fields are missing or Aadhar is invalid.";
        $_SESSION['toast_type'] = "error";
    } else {
        $sql = "INSERT INTO students (roll_no, name, gender, dob, extra_data) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $roll_no, $name, $gender, $dob, $json_metadata);

        if ($stmt->execute()) {
            $_SESSION['toast_msg']  = "Student Registered Successfully!";
            $_SESSION['toast_type'] = "success";
        } else {
            $_SESSION['toast_msg']  = "Database Error: " . $stmt->error;
            $_SESSION['toast_type'] = "error";
        }
        $stmt->close();
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

    <style>
        body { background-color: #F1F5F9; }
        .page-title-modern { color: #1C2434; font-weight: 700; font-size: 1.5rem; margin-bottom: 25px; }
        .form-card-modern { background: #ffffff; border: none; border-radius: 12px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05); }
        .form-header-modern { background: transparent; border-bottom: 1px solid #F1F5F9; padding: 20px 25px; }
        .form-header-modern h5 { margin: 0; color: #1C2434; font-weight: 600; }
        .form-label-modern { color: #64748B; font-weight: 500; font-size: 0.85rem; margin-bottom: 8px; display: block; }
        .form-control-modern, .form-select-modern { border: 1.5px solid #E2E8F0; border-radius: 8px; padding: 10px 15px; font-size: 0.95rem; color: #1C2434; transition: all 0.2s; }
        .form-control-modern:focus { border-color: #3C50E0; box-shadow: 0 0 0 4px rgba(60, 80, 224, 0.1); outline: none; }
        .section-divider { border-top: 1px solid #F1F5F9; margin: 30px 0 20px 0; position: relative; }
        .section-label { position: absolute; top: -12px; background: #fff; color: #3C50E0; font-weight: 700; font-size: 0.75rem; text-transform: uppercase; }
        .btn-save-student { background: #3C50E0; color: #fff; border: none; padding: 14px; border-radius: 8px; font-weight: 600; display: flex; align-items: center; justify-content: center; gap: 10px; transition: all 0.3s; }
        .btn-save-student:hover { background: #2D3DA9; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(60, 80, 224, 0.25); }
        .border-danger {
            border: 1px solid #dc3545 !important;
        }
        .error-msg {
            font-size: 0.75rem;
        }
        .image-upload-area {
            width: 100%;
            min-height: 180px;
            border: 2px dashed #E2E8F0;
            border-radius: 12px;
            background-color: #F8FAFC;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: all 0.3s ease;
            cursor: pointer;
            overflow: hidden;
        }

        .image-upload-area:hover {
            border-color: #3C50E0;
            background-color: #F1F5F9;
        }

        .upload-placeholder {
            text-align: center;
            padding: 20px;
        }

        .upload-icon {
            font-size: 2.5rem;
            color: #3C50E0;
            margin-bottom: 10px;
        }

        .upload-text {
            font-size: 0.9rem;
            color: #1C2434;
            margin-bottom: 4px;
        }

        .upload-subtext {
            font-size: 0.75rem;
            color: #64748B;
        }

        /* Preview Image Styling */
        .image-preview-container {
            width: 100%;
            height: 180px;
            position: relative;
        }

        .image-preview-container img {
            width: 100%;
            height: 100%;
            object-fit: contain; /* Shows full photo without cropping */
            padding: 10px;
        }

        .btn-remove-image {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #FF5050;
            color: white;
            border: none;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            transition: 0.2s;
        }

        .btn-remove-image:hover {
            transform: scale(1.1);
            background: #D34040;
        }

    </style>
<body>
 
<div class="container py-5">
    <div class="mb-4 text-center">
        <h2 class="page-title-modern">Student Registration Portal</h2>
    </div>

    <div class="card form-card-modern mx-auto" style="max-width: 850px;">
        <div class="form-header-modern">
            <h5 class=" text-center"><i class="bi bi-person-plus-fill text-primary me-2"></i>Create New Student Profile</h5>
        </div>
        <div class="card-body">
            <form method="POST" autocomplete="off" enctype="multipart/form-data" id="studentForm" novalidate >
                <div class="section-divider"><span class="section-label">Identity & Photo</span></div>
                <div class="row g-3 mb-4 align-items-center">
                    <div class="col-md-4">
                        <div class="photo-upload-wrapper">
                            <label class="form-label-modern">Student Profile Photo</label>
                            <div class="image-upload-area" id="dropzone">
                                <input type="file" name="photo" id="profile_image" class="d-none" accept="image/*" onchange="handleImagePreview(this)">
                                
                                <div id="upload-placeholder" class="upload-placeholder">
                                    <div class="upload-icon">
                                        <i class="bi bi-cloud-arrow-up"></i>
                                    </div>
                                    <p class="upload-text"><strong>Click to upload</strong> or drag and drop</p>
                                    <p class="upload-subtext">SVG, PNG, JPG or GIF (max. 2MB)</p>
                                </div>

                                <div id="image-preview-container" class="image-preview-container d-none">
                                    <img id="preview-img" src="#" alt="Preview">
                                    <button type="button" class="btn-remove-image" onclick="removeImage()">
                                        <i class="bi bi-x-circle-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="section-divider"><span class="section-label">Personal Details</span></div>
                <div class="row g-3 mb-4">
                    <div class="col-md-8">
                        <label class="form-label-modern">Full Legal Name</label>
                        <input type="text" name="name" class="form-control-modern w-100" placeholder="John Doe" required>
                        <div class="text-danger error-msg d-none">This field is required</div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Gender</label>
                        <select name="gender" class="form-select-modern w-100" required>
                            <option value="" disabled selected>-- Select Gender --</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        <div class="text-danger error-msg d-none">This field is required</div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label-modern">Date of Birth</label>
                        <input type="date" name="dob" class="form-control-modern w-100" required>
                        <div class="text-danger error-msg d-none">This field is required</div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label-modern">Aadhar Number (12 Digits)</label>
                        <div>
                            <input type="text" 
                                name="aadhar" 
                                class="form-control-modern w-100" 
                                placeholder="123456789012" 
                                pattern="\d{12}" 
                                maxlength="12" 
                                minlength="12" 
                                oninput="this.value = this.value.replace(/[^0-9]/g, '');" 
                                title="Aadhar must be exactly 12 digits" 
                                required>
                            <div class="text-danger error-msg d-none">This field is required</div>
                        </div>
                        <small class="text-muted" style="font-size: 0.7rem;">Enter only 12 numeric digits without spaces or dashes.</small>
                    </div>
                </div>

                <div class="section-divider"><span class="section-label">Contact & Education</span></div>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label class="form-label-modern">Phone Number</label>
                        <input type="tel" name="phone" 
                            class="form-control-modern w-100" 
                            placeholder="9876543210" 
                            pattern="[6-9]{1}[0-9]{9}" 
                            maxlength="10" 
                            minlength="10"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                            title="Phone number must be exactly 10 digits starting with 6-9" 
                            required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label-modern">Email ID</label>
                        <input type="email" name="email" 
                            class="form-control-modern w-100" 
                            placeholder="student@example.com" 
                            required>
                        <small class="text-muted" style="font-size: 0.7rem;">Format: example@domain.com</small>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label-modern">Alternate Phone</label>
                        <input type="tel" name="alt_phone" 
                            class="form-control-modern w-100" 
                            pattern="[6-9]{1}[0-9]{9}" 
                            maxlength="10" 
                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label-modern">Qualification (UG/PG)</label>
                        <select name="qualification" class="form-select-modern w-100" required>
                            <option value="" disabled selected>-- Select Qualification --</option>
                            <option value="Schooling">Schooling</option>
                            <option value="UG">Undergraduate (UG)</option>
                            <option value="PG">Postgraduate (PG)</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label-modern">Permanent Address</label>
                        <textarea name="address" class="form-control-modern w-100" rows="2"></textarea>
                    </div>
                </div>

                <div class="section-divider"><span class="section-label">Course Details</span></div>
                <div class="row g-3 mb-4">
                   <div class="col-md-4">
                        <label class="form-label-modern">Select Courses</label>
                        <select name="course[]" id="course_select" class="form-select-modern w-100" multiple="multiple">
                            <?php
                            // Fetching all courses from your database
                            $all_courses_sql = "SELECT course_id, course_name FROM course ORDER BY course_name ASC";
                            $all_courses_res = mysqli_query($conn, $all_courses_sql);
                            while($c = mysqli_fetch_assoc($all_courses_res)): ?>
                                <option value="<?= $c['course_id'] ?>">
                                    <?= htmlspecialchars($c['course_name']) ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                        <small class="text-muted">You can select multiple courses.</small>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Duration</label>
                        <input type="text" name="duration" class="form-control-modern w-100" placeholder="e.g. 3 Months" 
                        list="durationSuggestions" 
                        oninput="updateSuggestions(this.value)">
                        <datalist id="durationSuggestions"></datalist>
                    </div>
                </div>

                <div class="section-divider"><span class="section-label">Parent/Guardian Info</span></div>
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <label class="form-label-modern">Father's Name</label>
                        <input type="text" name="father_name" class="form-control-modern w-100">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Occupation</label>
                        <input type="text" name="occupation" class="form-control-modern w-100">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Parent Phone</label>
                        <input type="tel" name="parent_phone" class="form-control-modern w-100"  
                            pattern="[6-9]{1}[0-9]{9}" 
                            maxlength="10" 
                            minlength="10"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                    </div>
                </div>

                <div class="mt-5">
                    <button type="submit" name="save_student" class="btn-save-student w-100">
                        <i class="bi bi-cloud-arrow-up-fill"></i> Finalize Registration
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
    $(document).ready(function() {
        $('#course_select').select2({
            placeholder: "Search and select courses",
            allowClear: true,
            width: 'resolve' // Ensures it fits your Bootstrap column
        });
    });
</script>
</body>
