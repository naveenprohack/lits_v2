<?php include('./dbConnection.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Verify Certificate</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container my-5">

<h3 class="fw-bold mb-4">Verify Certificate</h3>

<form method="GET">
    <input type="text" name="cert_id" class="form-control mb-3" placeholder="Enter Certificate ID">
    <button class="btn btn-primary">Verify</button>
</form>

<hr>

<?php
if(isset($_GET['cert_id'])){
    $id = $_GET['cert_id'];

    $q = $conn->query("SELECT * FROM certificates WHERE cert_id='$id'");
    if($q->num_rows>0){
        $d=$q->fetch_assoc();
        echo "<div class='alert alert-success'>
        <strong>Certificate Found</strong><br>
        Name: {$d['student_name']}<br>
        Course: {$d['course_name']}<br>
        Date: {$d['issue_date']}
        </div>";
    } else {
        echo "<div class='alert alert-danger'>Invalid Certificate ID</div>";
    }
}
?>

</div>
</body>
</html>
