<?php
ob_start(); // Prevents "Headers already sent" errors
include("db.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['student_id'])) {
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);

    // Adjust this query based on your DB structure. 
    // Example: Fetching courses where the student is enrolled.
    // 1. First, get the JSON data from the student table
$query1 = "SELECT extra_data FROM students WHERE student_id = '$student_id'";
$res1 = mysqli_query($conn, $query1);
$student_data = mysqli_fetch_assoc($res1);

// 2. Extract the course IDs from the JSON string
$course_ids_string = "0"; // Default to 0 to prevent SQL errors if empty
if ($student_data && !empty($student_data['extra_data'])) {
    $extra = json_decode($student_data['extra_data'], true);
    
    // Ensure 'course' exists in JSON and is an array
    if (isset($extra['course']) && is_array($extra['course'])) {
        // Sanitize and convert array to a string: "1, 2, 3"
        $course_ids_string = implode(',', array_map('intval', $extra['course']));
    }
}

// 3. Use the IDs in the second query
$query = "SELECT course_id, course_name 
          FROM course 
          WHERE course_id IN ($course_ids_string)
          ORDER BY course_name ASC";

$result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<option value="">-- Choose Course --</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['course_id'] . '">' . htmlspecialchars($row['course_name']) . '</option>';
        }
    } else {
        echo '<option value="">No courses found for this student</option>';
    }
}
?>