<?php
ob_start(); // Prevents "Headers already sent" errors
include("db.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 1. SECURITY: Check Admin Session
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// 2. LOGIC: Handle Form Submission
if (isset($_POST['save_result'])) {

    // Sanitize and Type-cast
    $sid    = (int) $_POST['student_id'];
    $sem    = (int) $_POST['semester'];
    $sub    = (int) $_POST['course_id'];
    $marks  = (int) $_POST['marks'];
    $total  = (int) $_POST['total'];

    // Professional Validation
    if ($sid <= 0 || $sem <= 0 || $sub <= 0 || $marks < 0 || $total <= 0 || $marks > $total) {
        $_SESSION['toast_msg']  = "Invalid input data. Please check values.";
        $_SESSION['toast_type'] = "error";
    } else {
        // Use Prepared Statements to prevent SQL Injection
        $stmt = $conn->prepare(
            "INSERT INTO results (student_id, semester, course_id, marks, total) 
             VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("iiiii", $sid, $sem, $sub, $marks, $total);
        
        if ($stmt->execute()) {
            // $_SESSION['toast_msg']  = "Marks Added Successfully!";
            // $_SESSION['toast_type'] = "success";
        } else {
            // $_SESSION['toast_msg']  = "Database Error: " . $stmt->error;
            // $_SESSION['toast_type'] = "error";
        }
        $stmt->close();
    }

    // ✅ PROFESSIONAL FIX: Redirect to the same page
    // This clears the POST data so a refresh won't trigger a resubmit.
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    /* Container and Heading */
.page-header-title {
    color: #1C2434;
    font-weight: 700;
    font-size: 1.5rem;
    margin-bottom: 5px;
}

/* Modern Card Styling */
.form-card-modern {
    background: #ffffff;
    border: none;
    border-radius: 12px;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.card-header-modern {
    background: transparent;
    border-bottom: 1px solid #F1F5F9;
    padding: 20px 25px;
}

.card-header-modern h5 {
    margin: 0;
    color: #1C2434;
    font-weight: 600;
    font-size: 1.1rem;
}

/* Input Fields Styling */
.form-label-modern {
    color: #64748B;
    font-weight: 500;
    font-size: 0.85rem;
    margin-bottom: 8px;
    display: block;
}

.form-control-modern, .form-select-modern {
    border: 1.5px solid #E2E8F0;
    border-radius: 8px;
    padding: 10px 15px;
    font-size: 0.95rem;
    color: #1C2434;
    transition: all 0.2s ease-in-out;
}

.form-control-modern:focus, .form-select-modern:focus {
    border-color: #3C50E0;
    box-shadow: 0 0 0 3px rgba(60, 80, 224, 0.1);
    outline: none;
}

/* Modern Save Button */
.btn-save-modern {
    background-color: #3C50E0;
    color: #ffffff;
    border: none;
    padding: 12px;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.btn-save-modern:hover {
    background-color: #2D3DA9;
    color: #ffffff;
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(60, 80, 224, 0.25);
}
  </style>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>

<div class="container py-4">
    <div class="mb-4">
        <h2 class="page-header-title text-center">Add Result Entry</h2>
    </div>

    <div class="card form-card-modern mx-auto" style="max-width: 650px;">
        <div class="card-header-modern">
            <h5 class="d-flex align-items-center gap-2">
                <i class="bi bi-journal-plus text-primary"></i> 
                Performance Details
            </h5>
        </div>
        <div class="card-body p-4">
            <form method="POST">
                
                <div class="mb-4">
                    <label class="form-label-modern">Target Student</label>
                    <select name="student_id" id="student_select" class="form-select-modern w-100" required>
                        <option value="">-- Choose Student Profile --</option>
                        <?php
                        $student_sql = "SELECT student_id, name, roll_no FROM students ORDER BY name ASC";
                        $student_res = mysqli_query($conn, $student_sql);
                        while($stu = mysqli_fetch_assoc($student_res)): ?>
                            <option value="<?= $stu['student_id'] ?>">
                                <?= htmlspecialchars($stu['name']) ?> (Roll: <?= $stu['roll_no'] ?>)
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label-modern">Subject / Course Module</label>
                    <select name="course_id" class="form-select-modern w-100" required id="course_select"> 
                         <option value="">-- Choose Subject --</option>
                         
                    </select>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <label class="form-label-modern">Semester</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0"><i class="bi bi-layers small"></i></span>
                            <input type="number" name="semester" class="form-control-modern border-start-0 w-75" placeholder="e.g. 1" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Obtained Marks</label>
                        <input type="number" name="marks" class="form-control-modern w-100" placeholder="00" min="0" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label-modern">Max Marks</label>
                        <input type="number" name="total" class="form-control-modern w-100" value="100" required>
                    </div>
                </div>

                <div class="mt-2">
                    <button type="submit" class="btn-save-modern w-100" name="save_result">
                        <i class="bi bi-cloud-arrow-up-fill"></i> Commit Result to Database
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#student_select').on('change', function() {
        var studentID = $(this).val();
        var courseSelect = $('#course_select');

        if (studentID) {
            $.ajax({
                url: 'get_student_courses.php',
                type: 'POST',
                data: { student_id: studentID },
                beforeSend: function() {
                    courseSelect.html('<option value="">Loading courses...</option>');
                },
                success: function(html) {
                    courseSelect.html(html);
                },
                error: function() {
                    alert("Error fetching courses. Please try again.");
                }
            });
        } else {
            courseSelect.html('<option value="">-- Select Student First --</option>');
        }
    });
});
</script>
</body>
</html>