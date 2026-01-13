<?php include('./dbConnection.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Certificate Admin Panel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container my-5">
    <h2 class="fw-bold text-center mb-4">Certificate Admin Panel</h2>

    <div class="row">
        <div class="col-md-4 mb-3">
            <a href="add_certificate.php" class="btn btn-primary btn-lg w-100">➕ Add Certificate</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="certificate_list.php" class="btn btn-success btn-lg w-100">📄 Certificate List</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="certificate_verify.php" class="btn btn-warning btn-lg w-100">🔍 Verify Certificate</a>
        </div>
    </div>
</div>

</body>
</html>
