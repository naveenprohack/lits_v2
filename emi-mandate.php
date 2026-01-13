
<!DOCTYPE html>
<html>
<head>
    <title>Emandate</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-4">
    <h3>Welcome, <?= $_SESSION['admin'] ?> 👋</h3>

    <div class="row mt-4">
        <div class="col-md-4">
            <a href="create-mandate.php" class="btn btn-primary w-100">+ Create New Mandate</a>
        </div>
        <div class="col-md-4">
            <a href="mandates.php" class="btn btn-success w-100">View All Mandates</a>
        </div>
        <div class="col-md-4">
            <a href="transactions.php" class="btn btn-warning w-100">View All Transactions</a>
        </div>
    </div>
</div>

</body>
</html>
