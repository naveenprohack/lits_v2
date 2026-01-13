<?php
include('./dbConnection.php');

if (isset($_GET['query'])) {
    $searchQuery = $_GET['query'];

    // Check if the search query is empty
    if (empty($searchQuery)) {
        echo "<div class='container mt-5'><p>Please enter a course name to search.</p></div>";
    } else {
        // Prepare the SQL query to search for the course by name
        $sql = "SELECT course_id FROM course WHERE course_name  COLLATE UTF8_GENERAL_CI LIKE ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $likeQuery = "%" . $searchQuery . "%";
            $stmt->bind_param("s", $likeQuery);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                // Only one match found, redirect to that course page
                $row = $result->fetch_assoc();
                header("Location: coursedetails.php?course_id=" . $row['course_id']);
                exit();
            } elseif ($result->num_rows > 1) {
                // Multiple matches found, optionally handle this case
                // Here, we'll just redirect to the first match
                $row = $result->fetch_assoc();
                header("Location: coursedetails.php?course_id=" . $row['course_id']);
                exit();
            } else {
                echo "<div class='container mt-5'><p>No courses found for '<strong>" . htmlspecialchars($searchQuery) . "</strong>'</p></div>";
            }

            $stmt->close();
        } else {
            echo "<div class='container mt-5'><p>Error in SQL query: " . $conn->error . "</p></div>";
        }
    }
} else {
    echo "<div class='container mt-5'><p>No search query received.</p></div>";
}
?>
