<?php
session_start();
if (!isset($_SESSION['admin'])) { header("Location: login.php"); exit(); }

include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mandates List</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-4">

    <h3 class="mb-3">All eNACH Mandates</h3>

    <?php
    $sql = "SELECT * FROM mandates ORDER BY id DESC";
    $result = $conn->query($sql);
    ?>

    <div class="card p-3 shadow">

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Mandate ID</th>
                    <th>Customer</th>
                    <th>Contact</th>
                    <th>Status</th>
                    <th>Max Amount</th>
                    <th>Mandate Link</th>
                    <th>View</th>
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

                    <td><?= $row['mandate_id'] ?></td>

                    <td>
                        <?= $row['customer_name'] ?><br>
                        <small><?= $row['customer_email'] ?></small>
                    </td>

                    <td><?= $row['customer_contact'] ?></td>

                    <td>
                        <?php
                        $status = strtolower($row['status']);

                        if ($status == "active") 
                            echo "<span class='badge bg-success'>Active</span>";
                        elseif ($status == "pending")
                            echo "<span class='badge bg-warning text-dark'>Pending</span>";
                        elseif ($status == "failed")
                            echo "<span class='badge bg-danger'>Failed</span>";
                        else
                            echo "<span class='badge bg-secondary'>Created</span>";
                        ?>
                    </td>

                    <td>₹<?= number_format($row['max_amount']/100) ?></td>

                    <td>
                        <a class="btn btn-sm btn-primary" href="<?= $row['mandate_url'] ?>" target="_blank">
                            Open Link
                        </a>
                    </td>

                    <td>
                        <a class="btn btn-sm btn-dark" href="view-mandate.php?id=<?= $row['mandate_id'] ?>">
                            View
                        </a>
                    </td>

                </tr>
            <?php endwhile; else: ?>

            <tr>
                <td colspan="8" class="text-center text-muted">No mandates found.</td>
            </tr>

            <?php endif; ?>
            </tbody>

        </table>

    </div>

</div>

</body>
</html>
