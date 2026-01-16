<?php
include('./dbConnection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = $_POST['job_id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    // Resume Upload Handling
    $target_dir = "uploads/resumes/";
    if (!is_dir($target_dir)) { mkdir($target_dir, 0777, true); }
    
    $file_name = time() . "_" . basename($_FILES["resume"]["name"]);
    $target_file = $target_dir . $file_name;

    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO applications (job_id, applicant_name, applicant_email, resume_path) 
                VALUES ('$job_id', '$name', '$email', '$file_name')";
        
        if ($conn->query($sql)) {
            echo "<script>alert('Application submitted successfully!'); window.location='job_listings.php';</script>";
        }
    } else {
        echo "Sorry, there was an error uploading your resume.";
    }
}
?>