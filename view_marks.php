<?php
include("./db.php");

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

/* JOIN course table to display name instead of ID (optional) */
$sql = "
SELECT r.*, 
       c.course_name AS course_name,s.name
FROM results r
LEFT JOIN course c ON r.course_id = c.course_id
LEFT JOIN students s ON r.student_id = s.student_id
ORDER BY r.semester, r.student_id
";

$result = $conn->query($sql);
?>

<style>
body{
    font-family:'Plus Jakarta Sans',sans-serif;
    background:#f8fafc;
}
.admin-card{
    background:white;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.04);
    overflow:hidden;
}
.table thead th{
    background:#f1f5f9;
    font-size:.75rem;
    text-transform:uppercase;
    letter-spacing:.05em;
    font-weight:700;
    color:#64748b;
    padding:15px 20px;
    border:none;
}
.table tbody td{
    padding:18px 20px;
    vertical-align:middle;
}
.badge-sem{
    background:#eef2ff;
    color:#4338ca;
    border-radius:8px;
    padding:6px 10px;
    font-size:.75rem;
    font-weight:600;
}
.badge-course{
    background:#fff7ed;
    color:#c2410c;
    border-radius:8px;
    padding:6px 10px;
    font-size:.75rem;
    font-weight:600;
}
.mark-number{
    font-weight:700;
}
.page-header{
    background:white;
    border-bottom:1px solid #e2e8f0;
    padding:20px 0;
    margin-bottom:20px;
}
.btn-action{
    width:36px;
    height:36px;
    border-radius:10px;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    transition:.3s;
}
.btn-edit{background:#eff6ff;color:#2563eb;}
.btn-edit:hover{background:#2563eb;color:white;}
.btn-delete{background:#fff1f2;color:#e11d48;}
.btn-delete:hover{background:#e11d48;color:white;}
</style>

<body>

<header class="page-header">
<div class="container d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center gap-3">
        <div class="header-icon-box d-none d-md-flex" style="width:54px;height:54px;border-radius:16px;background:linear-gradient(135deg,#2563eb,#1e40af);display:flex;align-items:center;justify-content:center;">
            <i class="bi bi-journal-check text-white fs-4"></i>
        </div>

        <div>
            <h2 class="display-6 fw-bold mb-0">Student Results</h2>
            <p class="text-muted small mb-0 text-uppercase fw-bold">Management Dashboard</p>
        </div>
    </div>

    <a href="dashboard.php?page=result_add" class="btn btn-dark px-4 py-2 rounded-3 fw-bold">
        <i class="bi bi-plus-lg me-2"></i>Add Result
    </a>
</div>
</header>

<div class="container pb-5">
<div class="admin-card">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Semester</th>
                    <th>Marks</th>
                    <th>Total</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>

            <tbody>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td>
                        <span class="fw-bold"><?= htmlspecialchars($row['student_id']) ?></span>
                    </td>
                    <td>
                        <span class="fw-bold"><?= htmlspecialchars($row['name']) ?></span>
                    </td>

                    <td>
                        <span class="badge-course">
                            <?= $row['course_name'] ? htmlspecialchars($row['course_name']) : "Course ID: ".htmlspecialchars($row['course_id']) ?>
                        </span>
                    </td>

                    <td>
                        <span class="badge-sem">Semester <?= htmlspecialchars($row['semester']) ?></span>
                    </td>

                    <td>
                        <span class="mark-number"><?= htmlspecialchars($row['marks']) ?></span>
                    </td>

                    <td>
                        <span class="mark-number"><?= htmlspecialchars($row['total']) ?></span>
                    </td>

                    <td class="text-end">
                        <div class="d-flex justify-content-end gap-2">

                            <a href="dashboard.php?page=edit_marks&id=<?= $row['result_id'] ?>" class="btn-action btn-edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <a href="delete_result.php?id=<?= $row['result_id'] ?>" 
                               onclick="return confirm('Delete this result permanently?')" 
                               class="btn-action btn-delete">
                                <i class="bi bi-trash3"></i>
                            </a>

                        </div>
                    </td>
                </tr>
                <?php endwhile; ?>

            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center py-5">
                        <i class="bi bi-journal-x text-muted fs-1 d-block mb-3"></i>
                        <p class="text-muted">No results found in database.</p>
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>

        </table>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

