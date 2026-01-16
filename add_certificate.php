<?php
include('./dbConnection.php');
?>

    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f8fafc; 
            color: #1e293b;
        }

        .cert-card {
            background: white;
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 24px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
            max-width: 900px;
            margin: auto;
            padding: 40px;
        }

        .page-header { padding: 20px 0; text-align: center; }

        /* Typography */
        .fw-800 { font-weight: 800 !important; }
        .tracking-tight { letter-spacing: -0.04em; }
        .text-gradient {
            background: linear-gradient(135deg, #0f172a 0%, #334155 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        /* Form Styling */
        .form-label {
            font-weight: 700;
            font-size: 0.75rem;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 8px;
        }

        .form-control, .form-select {
            border-radius: 12px;
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            background-color: #fcfdfe;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
            background-color: #fff;
        }

        /* Section Dividers */
        .form-section-title {
            font-size: 0.9rem;
            font-weight: 800;
            color: #2563eb;
            margin: 30px 0 20px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .form-section-title::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #e2e8f0;
        }

        .btn-generate {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
            border: none;
            padding: 16px 40px;
            border-radius: 14px;
            font-weight: 700;
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
            transition: 0.3s;
        }

        .btn-generate:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 25px rgba(37, 99, 235, 0.3);
            color: white;
        }
    </style>
</head>
<body>

<div class="container pb-5">
    <header class="page-header">
        <h2 class="display-5 fw-800 mb-1 tracking-tight text-gradient">Issue Certificate</h2>
        <p class="text-muted small text-uppercase fw-bold letter-spacing-1">Digital Credential Management System</p>
    </header>

    <div class="cert-card">
        <form action="save_certificate.php" method="POST">
            
            <div class="form-section-title">STUDENT & COURSE DETAILS</div>
            
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label class="form-label"><i class="bi bi-person me-2"></i>Student Name</label>
                    <input type="text" name="student_name" class="form-control" placeholder="Enter Full Name" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label class="form-label"><i class="bi bi-book me-2"></i>Course Name</label>
                    <input type="text" name="course_name" class="form-control" placeholder="e.g. Full Stack Web Development" required>
                </div>
            </div>

            <div class="form-section-title">DURATION & CONTENT</div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <label class="form-label"><i class="bi bi-calendar-event me-2"></i>Start Date</label>
                    <input type="date" name="start_date" class="form-control" required>
                </div>
                <div class="col-md-4 mb-4">
                    <label class="form-label"><i class="bi bi-calendar-check me-2"></i>End Date</label>
                    <input type="date" name="end_date" class="form-control" required>
                </div>
                <div class="col-md-4 mb-4">
                    <label class="form-label"><i class="bi bi-award me-2"></i>Grade / Score</label>
                    <input type="text" name="grade" class="form-control" placeholder="e.g. A+ or 95%" required>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label"><i class="bi bi-list-check me-2"></i>Training Topics</label>
                <textarea name="topics" class="form-control" rows="3" placeholder="HTML5, CSS3, JavaScript, PHP, MySQL..." required></textarea>
                <div class="form-text mt-2" style="font-size: 0.75rem;">Comma separated values look best on certificates.</div>
            </div>

            <div class="form-section-title">OFFICE RECORD</div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <label class="form-label"><i class="bi bi-geo me-2"></i>Branch</label>
                    <input type="text" name="branch" class="form-control" placeholder="e.g. Chennai Main Branch" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label class="form-label"><i class="bi bi-calendar3 me-2"></i>Issue Date</label>
                    <input type="date" name="issue_date" class="form-control" value="<?= date('Y-m-d'); ?>" required>
                </div>
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn-generate">
                    <i class="bi bi-patch-check-fill me-2"></i>Generate & Save Certificate
                </button>
            </div>
        </form>
    </div>
</div>
</body>
