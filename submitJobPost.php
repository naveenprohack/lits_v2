<?php
// Database connection
include('./dbConnection.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobTitle = $_POST['jobTitle'];
    $jobDescription = $_POST['jobDescription'];
    $companyName = $_POST['companyName'];
    $jobLocation = $_POST['jobLocation'];
    $jobType = $_POST['jobType'];
    $salary = $_POST['salary'];

    // Prepare and bind
    $sql = "INSERT INTO job_posts (job_title, job_description, company_name, job_location, job_type, salary) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $jobTitle, $jobDescription, $companyName, $jobLocation, $jobType, $salary);

    if ($stmt->execute()) {
        echo "Job post created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
