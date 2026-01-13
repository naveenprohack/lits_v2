<?php
session_start();
if (!isset($_SESSION['admin'])) { header("Location: login.php"); exit(); }

include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>All Transactions</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-4">

    <h3 class="mb-3">All Auto-Debit Transactions</h3>

    <?php
    $sql = "SELECT * FROM transactions ORDER BY id DESC";
    $result = $conn->query($sql);
    ?>

    <div class="card p-3 shadow">

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Payment ID</th>
                    <th>Mandate ID</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Created</th>
                </tr>
            </thead>

            <tbody>
            <?php 
            if ($result->num_rows > 0):
                $i = 1;
                while ($row = $result->fetch_assoc()):
            ?>
                <tr>
                    <td><?= $i++ ?></td>

                    <td><?= $row['payment_id'] ?></td>
                    
                    <td>
                        <a href="view-mandate.php?id=<?= $row['mandate_id'] ?>">
                            <?= $row['mandate_id'] ?>
                        </a>
                    </td>

                    <td>₹<?= number_format($row['amount'] / 100) ?></td>

                    <td>
                        <?php
                        if ($row['status'] == "captured") 
                            echo "<span class='badge bg-success'>Success</span>";
                        else 
                            echo "<span class='badge bg-danger'>Failed</span>";
                        ?>
                    </td>

                    <td><?= $row['created_at'] ?></td>
                </tr>
            <?php endwhile; else: ?>

            <tr>
                <td colspan="6" class="text-center text-muted">No transactions found.</td>
            </tr>

            <?php endif; ?>
            </tbody>

        </table>

    </div>

</div>

</body>
</html>
