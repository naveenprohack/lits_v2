<?php include('./dbConnection.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Certificate List</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container my-5">
<h3 class="fw-bold mb-4">All Certificates</h3>

<table class="table table-bordered">
<thead class="table-dark">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Course</th>
    <th>Issued</th>
    <th>Download</th>
    <th>Actions</th>
</tr>
</thead>
<tbody>

<?php
$q = $conn->query("SELECT * FROM certificates ORDER BY id DESC");
while($row=$q->fetch_assoc()){
echo "
<tr>
    <td>{$row['cert_id']}</td>
    <td>{$row['student_name']}</td>
    <td>{$row['course_name']}</td>
    <td>{$row['issue_date']}</td>
    <td><a href='./certificates/{$row['pdf_file']}' target='_blank' class='btn btn-primary btn-sm'>PDF</a></td>
    <td>
        <a href='edit_certificate.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
        <a href='delete_certificate.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Delete this certificate?');\">Delete</a>
    </td>
</tr>";
}
?>

</tbody>
</table>

</div>
</body>
</html>
