<?php
session_start();
if (!isset($_SESSION['admin'])) { header("Location: login.php"); exit(); }

include 'db.php';

// Razorpay API Keys
$key_id = "rzp_live_ryxLCctilGE3So";
$key_secret = "YTsrOc9SVjS6yXAB4BrxYdE9";



// Get mandate ID from URL
$mandate_id = $_GET['id'];

// Fetch mandate from DB
$stmt = $conn->prepare("SELECT * FROM mandates WHERE mandate_id=? LIMIT 1");
$stmt->bind_param("s", $mandate_id);
$stmt->execute();
$mandate = $stmt->get_result()->fetch_assoc();

// Razorpay Live Status Refresh
if (isset($_GET['refresh']) && $_GET['refresh'] == "1") {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.razorpay.com/v1/mandates/$mandate_id");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "$key_id:$key_secret");

    $resp = curl_exec($ch);
    curl_close($ch);

    $razor = json_decode($resp, true);

    if (isset($razor["status"])) {
        // Update DB status
        $status = $razor["status"];

        $upd = $conn->prepare("UPDATE mandates SET status=? WHERE mandate_id=?");
        $upd->bind_param("ss", $status, $mandate_id);
        $upd->execute();

        header("Location: view-mandate.php?id=$mandate_id&updated=1");
        exit();
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Mandate Details</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-4">

    <h3>Mandate Details</h3>

    <?php if (!empty($_GET['updated'])): ?>
        <div class="alert alert-success">Mandate status updated successfully!</div>
    <?php endif; ?>

    <div class="card p-4 shadow mb-4">

        <div class="row">
            <div class="col-md-6 mb-3">
                <h5>Customer Details</h5>
                <p><b>Name:</b> <?= $mandate['customer_name'] ?></p>
                <p><b>Email:</b> <?= $mandate['customer_email'] ?></p>
                <p><b>Contact:</b> <?= $mandate['customer_contact'] ?></p>
            </div>

            <div class="col-md-6 mb-3">
                <h5>Mandate Info</h5>
                <p><b>Mandate ID:</b> <?= $mandate['mandate_id'] ?></p>

                <p><b>Status:</b>
                <?php
                    $s = strtolower($mandate['status']);
                    if ($s == "active") echo "<span class='badge bg-success'>Active</span>";
                    elseif ($s == "pending") echo "<span class='badge bg-warning text-dark'>Pending</span>";
                    elseif ($s == "failed") echo "<span class='badge bg-danger'>Failed</span>";
                    else echo "<span class='badge bg-secondary'>Created</span>";
                ?>
                </p>

                <p><b>Max Amount:</b> ₹<?= number_format($mandate['max_amount'] / 100) ?></p>

                <p><b>Mandate Link:</b>
                    <a href="<?= $mandate['mandate_url'] ?>" target="_blank">
                        <?= $mandate['mandate_url'] ?>
                    </a>
                </p>
            </div>
        </div>

        <a href="view-mandate.php?id=<?= $mandate_id ?>&refresh=1" 
           class="btn btn-primary mt-3">
           Refresh Live Status
        </a>

    </div>

    <h4>Transactions</h4>

    <?php
    $t = $conn->prepare("SELECT * FROM transactions WHERE mandate_id=? ORDER BY id DESC");
    $t->bind_param("s", $mandate_id);
    $t->execute();
    $transactions = $t->get_result();
    ?>

    <div class="card p-3 shadow">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Payment ID</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Created</th>
                </tr>
            </thead>

            <tbody>

            <?php if ($transactions->num_rows > 0):
                $i = 1;
                while ($row = $transactions->fetch_assoc()):
            ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row['payment_id'] ?></td>
                    <td>₹<?= number_format($row['amount'] / 100) ?></td>
                    <td>
                        <?php
                        if ($row['status'] == "captured") echo "<span class='badge bg-success'>Success</span>";
                        else echo "<span class='badge bg-danger'>Failed</span>";
                        ?>
                    </td>
                    <td><?= $row['created_at'] ?></td>
                </tr>
            <?php endwhile; else: ?>

                <tr>
                    <td colspan="5" class="text-center text-muted">No transactions found.</td>
                </tr>

            <?php endif; ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
