<?php
include('./dbConnection.php');

// Fetch all job posts
$sql = "SELECT * FROM job_posts ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Job Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container my-5">
    <h2 class="fw-bold mb-4 text-center">Job Posts - Admin Panel</h2>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Job Title</th>
                        <th>Company</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>Salary</th>
                        <th>Description</th>
                        <th width="120">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['job_title']}</td>
                                <td>{$row['company_name']}</td>
                                <td>{$row['job_location']}</td>
                                <td>{$row['job_type']}</td>
                                <td>{$row['salary']}</td>
                                <td style='max-width: 250px;'>{$row['job_description']}</td>

                                <td>
                                    <a href='edit_job.php?id={$row['id']}' class='btn btn-sm btn-primary mb-1 w-100'>Edit</a>
                                    <a href='delete_job.php?id={$row['id']}' class='btn btn-sm btn-danger w-100'
                                       onclick=\"return confirm('Are you sure to delete this job?');\">Delete</a>
                                </td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8' class='text-center text-muted'>No job posts found</td></tr>";
                    }
                    ?>
                </tbody>

            </table>

        </div>
    </div>
</div>

</body>
</html>
