<?php
ob_start();
include("db.php");

if (session_status() === PHP_SESSION_NONE) { session_start(); }

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// --- PAGINATION & FILTER CONFIG ---
$limit = 10; // Leads per page
$page = isset($_GET['p']) ? (int)$_GET['p'] : 1;
$offset = ($page - 1) * $limit;

$filter = isset($_GET['status']) ? mysqli_real_escape_string($conn, $_GET['status']) : 'all';
$hot_filter = isset($_GET['hot']) ? 1 : 0;

// --- BUILD THE QUERY ---
$where_clause = " WHERE 1=1"; // Dummy start to append AND easily
if ($filter !== 'all') {
    $where_clause .= " AND status = '$filter'";
}
if ($hot_filter) {
    $where_clause .= " AND is_hot = 1";
}

// Get total count for pagination calculation
$count_query = "SELECT COUNT(*) as total FROM enquiry $where_clause";
$count_result = mysqli_query($conn, $count_query);
$total_rows = mysqli_fetch_assoc($count_result)['total'];
$total_pages = ceil($total_rows / $limit);

// Fetch the filtered/paginated data
$query = "SELECT * FROM enquiry $where_clause ORDER BY CASE WHEN status = 'new' THEN 0 ELSE 1 END ASC, 
            id DESC LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $query);

// Fetch reminders for today (ignoring the time, just checking the date)
$today = date('Y-m-d');
$reminder_query = "SELECT * FROM enquiry 
                  WHERE DATE(reminder_time) = '$today' 
                  AND status != 'completed' 
                  ORDER BY reminder_time ASC";
$reminder_result = mysqli_query($conn, $reminder_query);
$reminder_count = mysqli_num_rows($reminder_result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LITS Admin Panel - Enquiries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .admin-header { background: white; border-bottom: 1px solid #dee2e6; padding: 15px 0; position: sticky; top: 0; z-index: 1020; }
        
        /* Filter Pills */
        .filter-btn { border: 1px solid #dee2e6; background: white; color: #444; border-radius: 20px; padding: 5px 15px; font-size: 0.85rem; transition: 0.3s; white-space: nowrap;text-decoration: none; }
        .filter-btn:hover, .filter-btn.active { background: #0ca6a3; color: white; border-color: #0ca6a3; }

        /* Lead Card Styling */
        .lead-card { background: white; border-radius: 12px; border: 1px solid #edf2f7; margin-bottom: 20px; transition: 0.3s; }
        .lead-card:hover { box-shadow: 0 10px 20px rgba(0,0,0,0.08); transform: translateY(-2px); }
        
        .badge-hot { background: #fff5f5; color: #e53e3e; border: 1px solid #feb2b2; font-size: 0.7rem; padding: 3px 8px; border-radius: 4px; }
        .badge-read { background: #ebf8ff; color: #3182ce; border: 1px solid #bee3f8; font-size: 0.7rem; padding: 3px 8px; border-radius: 4px; }
        
        .contact-icons a { width: 38px; height: 38px; display: inline-flex; align-items: center; justify-content: center; border-radius: 10px; margin-left: 8px; text-decoration: none; transition: 0.2s; }
        .contact-icons a:hover { transform: scale(1.1); }
        .icon-call { background: #e0f2ff; color: #007bff; }
        .icon-whatsapp { background: #e6fffa; color: #38a169; }
        .icon-mail { background: #ebf4ff; color: #4299e1; }

        .action-btn { font-size: 0.75rem; border-radius: 6px; padding: 6px 12px; color: #0ca6a3; border: 1px solid #0ca6a3; background: transparent; transition: 0.2s; }
        .action-btn:hover { background: #0ca6a3; color: white; }

        .status-footer { background: #002b5c; color: white; border-radius: 0 0 12px 12px; padding: 12px 20px; }
        .status-pill { background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: white; font-size: 0.7rem; padding: 4px 12px; border-radius: 20px; cursor: pointer; transition: 0.2s; }
        .status-pill:hover { background: rgba(255,255,255,0.3); border-color: white; }

        /* Status Badges */
        .badge-status-display { font-size: 0.7rem; padding: 4px 12px; border-radius: 50px; font-weight: 700; text-transform: uppercase; display: inline-block; }
        .status-follow_up { background: #fff3cd; color: #856404; border: 1px solid #ffeeba; }
        .status-completed { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .status-not_interested { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .status-wrong_category { background: #e2e3e5; color: #383d41; border: 1px solid #d6d8db; }
        .status-junk { background: #343a40; color: #ffffff; }
        .status-new, .status- { background: #e0f2ff; color: #007bff; border: 1px solid #b8daff; }
        .pagination .page-link {
            color: #0ca6a3;
            border: none;
            margin: 0 3px;
            border-radius: 8px !important;
        }
        .pagination .page-item.active .page-link {
            background-color: #0ca6a3;
            box-shadow: 0 4px 10px rgba(12, 166, 163, 0.3);
            color:  #ffffff;
        }
        .reminder-badge {
            background: #fff3cd;
            color: #856404;
            border: 1px solid #ffeeba;
            font-size: 0.7rem;
            padding: 2px 8px;
            border-radius: 4px;
            display: inline-block;
        }
        /* Search & Action Bar Styling */
.search-wrapper {
    position: relative;
    width: 300px;
}

.search-input-modern {
    background: #F7F9FC;
    border: 1px solid #E2E8F0;
    border-radius: 8px;
    padding: 8px 12px 8px 40px;
    font-size: 0.9rem;
    color: #1C2434;
    width: 100%;
    transition: all 0.2s;
}

.search-input-modern:focus {
    background: #fff;
    border-color: #3C50E0;
    box-shadow: 0 0 0 4px rgba(60, 80, 224, 0.1);
    outline: none;
}

.search-icon-inside {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: #64748B;
    pointer-events: none;
}

/* Modern Button Styling */
.btn-export-modern {
    background: #10B981; /* Modern Green */
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 8px 16px;
    font-weight: 600;
    font-size: 0.85rem;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s;
}

.btn-export-modern:hover {
    background: #059669;
    color: #fff;
    transform: translateY(-1px);
    box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.2);
}
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="admin-header shadow-sm mb-4">
    <div class="container d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold"><i class="fas fa-graduation-cap text-teal me-2"></i>LITS Enquiries <span class="text-muted fs-6">(<?php echo mysqli_num_rows($result); ?>)</span></h5>
        <div class="d-flex flex-wrap gap-3 align-items-center">
            <div class="search-wrapper d-none d-md-block">
                <i class="bi bi-search search-icon-inside"></i>
                <input type="text"  
                    id="searchInput" 
                    class="search-input-modern" 
                    placeholder="Quick search leads...">
            </div>

            <button class="btn-export-modern" onclick="exportTableToCSV('leads_data.csv')">
                <i class="bi bi-file-earmark-spreadsheet"></i> 
                Export CSV
            </button>
        </div>
    </div>
</div>
<?php if($reminder_count > 0): ?>
<div class="container mb-4">
    <div class="alert alert-warning border-0 shadow-sm p-4" style="border-radius: 15px; background: #fff8e6;">
        <div class="d-flex align-items-center mb-3">
            <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                <i class="fas fa-bell"></i>
            </div>
            <div>
                <h6 class="mb-0 fw-bold text-dark">Today's Follow-ups</h6>
                <small class="text-muted">You have <?php echo $reminder_count; ?> calls scheduled for today</small>
            </div>
        </div>
        
        <div class="row g-2">
            <?php while($rem = mysqli_fetch_assoc($reminder_result)): ?>
            <div class="col-md-4">
                <div class="bg-white p-2 rounded border d-flex justify-content-between align-items-center">
                    <div class="text-truncate" style="max-width: 150px;">
                        <span class="fw-bold small"><?php echo htmlspecialchars($rem['name']); ?></span>
                        <br>
                        <span class="text-muted" style="font-size: 0.7rem;">
                            <i class="far fa-clock me-1"></i><?php echo date('h:i A', strtotime($rem['reminder_time'])); ?>
                        </span>
                    </div>
                    <a href="tel:<?php echo $rem['phone']; ?>" class="btn btn-sm btn-outline-success border-0">
                        <i class="fas fa-phone-alt"></i>
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="container">
    <div class="d-flex gap-2 mb-4 overflow-auto pb-2">

        <a href="?page=lead_view&status=all" class="filter-btn <?php echo ($filter == 'all' && !$hot_filter) ? 'active' : ''; ?>">All Enquiries</a>
        <a href="?page=lead_view&hot=1" class="filter-btn <?php echo ($hot_filter) ? 'active' : ''; ?>">
            Hot <span class="badge bg-danger ms-1">New</span>
        </a>
        <a href="?page=lead_view&status=follow_up" class="filter-btn <?php echo ($filter == 'follow_up') ? 'active' : ''; ?>">Follow-up</a>
        <a href="?page=lead_view&status=completed" class="filter-btn <?php echo ($filter == 'completed') ? 'active' : ''; ?>">Completed</a>
    </div>

    <div class="row justify-content-center">
        <div class="">
            <?php if(mysqli_num_rows($result) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($result)): 
                    $currentStatus = $row['status'] ?: 'new'; 
                ?>
                <div class="lead-card shadow-sm <?php echo ($row['is_hot'] == 1 ? 'border-danger' : ''); ?>" data-id="<?php echo $row['id']; ?>">
                    <div class="p-4">
                        <div class="hidden-note-data d-none"><?php echo htmlspecialchars($row['admin_note'] ?? ''); ?></div>
                        <div class="hidden-reminder-data d-none">
                            <?php echo (!empty($row['reminder_time'])) ? date('Y-m-d\TH:i', strtotime($row['reminder_time'])) : ''; ?>
                        </div>
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <span class="badge-status-display status-<?php echo $currentStatus; ?> mb-2">
                                    <?php echo str_replace('_', ' ', $currentStatus); ?>
                                </span>
                                <br>
                                <span class="badge badge-read text-uppercase mb-2">READ</span>
                                <span class="badge badge-hot text-uppercase mb-2"><i class="fas fa-fire me-1"></i>HOT ENQUIRY</span>
                                <h5 class="fw-bold mb-0 mt-1"><i class="far fa-star me-2 text-muted"></i><?php echo htmlspecialchars($row['name']); ?></h5>
                                <p class="text-muted small mb-0"><?php echo date('d M Y, h:i a', strtotime($row['created_at'])); ?></p>
                            </div>
                            <div class="contact-icons d-flex align-items-center">
                                <span class="me-2 d-none d-sm-inline fw-bold border px-2 py-1 rounded bg-light" style="font-size: 0.85rem;"><?php echo $row['phone']; ?></span>
                                <a href="tel:<?php echo $row['phone']; ?>" class="icon-call"><i class="fas fa-phone-alt"></i></a>
                                <a href="https://wa.me/91<?php echo $row['phone']; ?>" target="_blank" class="icon-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                <a href="mailto:<?php echo $row['email']; ?>" class="icon-mail"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>

                        <div class="mt-3">
                            <!-- <div class="d-flex gap-2 mb-3">
                                <button class="action-btn"><i class="far fa-sticky-note me-1"></i> View Note</button>
                                <button class="action-btn"><i class="far fa-clock me-1"></i> Add Reminder</button>
                                <button class="action-btn"><i class="fas fa-share-alt me-1"></i> Share</button>
                            </div> -->
                            <div class="d-flex gap-2 mb-3">
                                <button class="action-btn open-note" data-id="<?php echo $row['id']; ?>">
                                    <i class="far fa-sticky-note me-1"></i> View Note
                                </button>
                                <button class="action-btn open-reminder" data-id="<?php echo $row['id']; ?>">
                                    <i class="far fa-clock me-1"></i> Add Reminder
                                </button>
                                <button class="action-btn share-lead" 
                                        data-name="<?php echo $row['name']; ?>" 
                                        data-phone="<?php echo $row['phone']; ?>" 
                                        data-msg="<?php echo $row['message']; ?>">
                                    <i class="fas fa-share-alt me-1"></i> Share
                                </button>
                            </div>
                            <p class="mb-1" style="font-size: 0.95rem;"><strong>Requirement:</strong> <?php echo htmlspecialchars($row['message']); ?></p>
                            <p class="small text-muted mb-0">Source: Landing Page Popup</p>
                        </div>
                    </div>
                    
                    <div class="status-footer d-flex align-items-center flex-wrap gap-2">
                        <span class="small me-2">Mark status:</span>
                        <div class="status-pill" data-status="follow_up">Follow-up</div>
                        <div class="status-pill" data-status="completed">Deal Completed</div>
                        <div class="status-pill" data-status="not_interested">Not Interested</div>
                        <div class="status-pill" data-status="wrong_category">Wrong Category</div>
                        <div class="status-pill" data-status="junk">Marketing/Job</div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php if ($total_pages > 1): 
    // Configuration: how many numbers to show around the current page
    $adjacents = 2; 
    $base_url = "?page=lead_view&status=$filter" . ($hot_filter ? '&hot=1' : '');
?>
<nav aria-label="Page navigation" class="mt-4">
    <ul class="pagination justify-content-center shadow-sm">
        
        <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
            <a class="page-link" href="<?php echo $base_url; ?>&p=<?php echo $page - 1; ?>"><i class="fas fa-chevron-left"></i></a>
        </li>

        <?php
        // LOGIC: If total pages are small, show all. If large, use ellipses (...)
        if ($total_pages <= 7) {
            for ($i = 1; $i <= $total_pages; $i++) {
                echo '<li class="page-item '.($page == $i ? 'active' : '').'"><a class="page-link" href="'.$base_url.'&p='.$i.'">'.$i.'</a></li>';
            }
        } else {
            // Always show Page 1
            echo '<li class="page-item '.($page == 1 ? 'active' : '').'"><a class="page-link" href="'.$base_url.'&p=1">1</a></li>';

            // Where do we start and end the middle "window"?
            $start = max(2, $page - $adjacents);
            $end = min($total_pages - 1, $page + $adjacents);

            // Show "..." if there is a gap between Page 1 and our window
            if ($start > 2) {
                echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
            }

            // Show the middle window
            for ($i = $start; $i <= $end; $i++) {
                echo '<li class="page-item '.($page == $i ? 'active' : '').'"><a class="page-link" href="'.$base_url.'&p='.$i.'">'.$i.'</a></li>';
            }

            // Show "..." if there is a gap between our window and the Last Page
            if ($end < $total_pages - 1) {
                echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
            }

            // Always show the Last Page
            echo '<li class="page-item '.($page == $total_pages ? 'active' : '').'"><a class="page-link" href="'.$base_url.'&p='.$total_pages.'">'.$total_pages.'</a></li>';
        }
        ?>

        <li class="page-item <?php echo ($page >= $total_pages) ? 'disabled' : ''; ?>">
            <a class="page-link" href="<?php echo $base_url; ?>&p=<?php echo $page + 1; ?>"><i class="fas fa-chevron-right"></i></a>
        </li>
    </ul>
</nav>
<?php endif; ?>
            <?php else: ?>
                <div class="text-center py-5">
                    <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                    <p class="text-muted">No enquiries found yet.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="modal fade" id="noteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lead Notes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <textarea id="noteText" class="form-control mb-3" rows="4" placeholder="Type your follow-up notes here..."></textarea>
                <div id="previousNotes" class="small text-muted border-top pt-2">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm save-note">Save Note</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="reminderModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Set Follow-up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <label class="small fw-bold">Select Date & Time</label>
                <input type="datetime-local" id="reminderTime" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm save-reminder">Set Reminder</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('.status-pill').on('click', function() {
        const pill = $(this);
        const leadCard = pill.closest('.lead-card');
        const leadId = leadCard.data('id');
        const statusValue = pill.data('status'); 
        
        if(!statusValue) return;

        pill.parent().css('opacity', '0.5');
        
        $.ajax({
            url: 'admin/update_status.php',
            method: 'POST',
            data: { id: leadId, status: statusValue },
            dataType: 'json',
            success: function(response) {
                pill.parent().css('opacity', '1');
                if(response.status === 'success') {
                    const badge = leadCard.find('.badge-status-display');
                    
                    // Remove current status classes using regex
                    badge.removeClass(function (index, className) {
                        return (className.match(/(^|\s)status-\S+/g) || []).join(' ');
                    });
                    
                    badge.addClass('status-' + statusValue);
                    badge.text(statusValue.replace('_', ' ').toUpperCase());
                    
                    // Optional: Show a subtle success message
                    console.log('Lead ' + leadId + ' updated to ' + statusValue);
                } else {
                    alert('Error: ' + response.msg);
                }
            },
            error: function() {
                pill.parent().css('opacity', '1');
                alert('Server connection failed.');
            }
        });
    });
    $(document).ready(function() {
    let currentLeadId = null;

    // --- 1. NOTE SECTION ---
    $('.open-note').on('click', function() {
        currentLeadId = $(this).data('id');
        $('#noteModal').modal('show');
        // Optional: Fetch existing notes via AJAX here
    });

    $('.save-note').on('click', function() {
        const note = $('#noteText').val();
        if(!note) return alert("Note cannot be empty");

        $.post('admin/update_status.php', { id: currentLeadId, note: note }, function(res) {
            if(res.status === 'success') {
                alert("Note saved!");
                $('#noteText').val('');
                $('#noteModal').modal('hide');
            }
        }, 'json');
    });

  

    $('.save-reminder').on('click', function() {
        const time = $('#reminderTime').val();
        $.post('admin/save_reminder.php', { id: currentLeadId, reminder: time }, function(res) {
            alert("Reminder set for " + time);
            $('#reminderModal').modal('hide');
        }, 'json');
    });

    // --- 3. SHARE SECTION (Native Share) ---
    $('.share-lead').on('click', function() {
        const data = $(this).data();
        const shareText = `Lead Details:\nName: ${data.name}\nPhone: ${data.phone}\nQuery: ${data.msg}`;

        if (navigator.share) {
            navigator.share({
                title: 'Lead Information',
                text: shareText
            }).catch(console.error);
        } else {
            // Fallback: Copy to clipboard
            copyToClipboard(shareText);
            alert("Lead details copied to clipboard!");
        }
    });

    function copyToClipboard(text) {
        const dummy = document.createElement("textarea");
        document.body.appendChild(dummy);
        dummy.value = text;
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);
    }
});
$('.open-note').on('click', function() {
    const btn = $(this);
    const leadCard = btn.closest('.lead-card'); // Find the specific card
    currentLeadId = btn.data('id'); // Get the ID for saving later
    
    // Grab the text from the hidden div inside THIS card
    const existingNote = leadCard.find('.hidden-note-data').text();
    
    // Put that text into the Modal's textarea
    $('#noteText').val(existingNote);
    
    // Show the modal
    $('#noteModal').modal('show');
});
$('.open-reminder').on('click', function() {
    const btn = $(this);
    const leadCard = btn.closest('.lead-card');
    currentLeadId = btn.data('id');
    
    // Grab the existing time from the hidden div
    const existingTime = leadCard.find('.hidden-reminder-data').text().trim();
    
    // Fill the input field. If empty, it stays blank.
    $('#reminderTime').val(existingTime);
    
    // Show the modal
    $('#reminderModal').modal('show');
});
document.getElementById('searchInput').addEventListener('keyup', function() {
    debugger    
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll(".lead-card");

    rows.forEach(row => {
        let text = row.innerText.toLowerCase();
        row.style.display = text.includes(filter) ? "" : "none";
    });
});

// Optional: Simple CSV Export function
function exportTableToCSV(filename) {
    let csv = [];
    let rows = document.querySelectorAll("table tr");
    
    for (let i = 0; i < rows.length; i++) {
        let row = [], cols = rows[i].querySelectorAll("td, th");
        for (let j = 0; j < cols.length - 1; j++) // Exclude "Action" column
            row.push('"' + cols[j].innerText + '"');
        csv.push(row.join(","));
    }

    let csvFile = new Blob([csv.join("\n")], {type: "text/csv"});
    let downloadLink = document.createElement("a");
    downloadLink.download = filename;
    downloadLink.href = window.URL.createObjectURL(csvFile);
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
    downloadLink.click();
}
</script>
</body>
</html>