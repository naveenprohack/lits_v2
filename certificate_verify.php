<?php include('./dbConnection.php'); ?>
<body>
    <style>

        .verify-container {
            max-width: 550px;
            width: 100%;
            margin: auto;
            padding: 20px;
        }

        .verify-card {
            background: white;
            border-radius: 28px;
            padding: 40px;
            border: 1px solid rgba(0,0,0,0.05);
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.08);
            text-align: center;
        }

        .shield-icon {
            width: 80px;
            height: 80px;
            background: #eff6ff;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 22px;
            margin: 0 auto 24px;
            font-size: 2.5rem;
        }

        .fw-800 { font-weight: 800 !important; }
        .text-gradient {
            background: linear-gradient(135deg, #0f172a 0%, #2563eb 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Input Styling */
        .search-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-control-lg {
            border-radius: 16px;
            padding: 18px 25px;
            font-size: 1rem;
            border: 2px solid #f1f5f9;
            background: #f8fafc;
            text-align: center;
            font-weight: 600;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        .form-control-lg:focus {
            border-color: #2563eb;
            background: #fff;
            box-shadow: 0 0 0 5px rgba(37, 99, 235, 0.1);
        }

        .btn-verify {
            background: #0f172a;
            color: white;
            border: none;
            padding: 16px;
            border-radius: 16px;
            font-weight: 700;
            width: 100%;
            transition: 0.3s;
        }

        .btn-verify:hover {
            background: #1e293b;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        /* Result Styles */
        .result-card {
            margin-top: 30px;
            padding: 24px;
            border-radius: 20px;
            text-align: left;
            border: 1px solid #e2e8f0;
            background: #fcfdfe;
        }

        .data-label {
            font-size: 0.7rem;
            font-weight: 800;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 2px;
        }

        .data-value {
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 15px;
        }

        .verified-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #ecfdf5;
            color: #059669;
            padding: 6px 14px;
            border-radius: 100px;
            font-size: 0.85rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
    </style>
    <div class="verify-container">
        <div class="verify-card">
            <div class="shield-icon">
                <i class="bi bi-shield-check"></i>
            </div>
            
            <h2 class="fw-800 text-gradient mb-2">Verify Credential</h2>
            <p class="text-muted small mb-4">Enter the unique Certificate ID to validate authenticity.</p>

            <form method="GET" action="">
                <div class="search-group">
                    <input type="text" name="cert_id" class="form-control form-control-lg" 
                        placeholder="e.g. LITS-2024-001" 
                        value="<?= isset($_GET['cert_id']) ? htmlspecialchars($_GET['cert_id']) : '' ?>" required>
                </div>
                <button class="btn-verify">Verify Now</button>
            </form>

            <?php
            if(isset($_GET['cert_id']) && !empty($_GET['cert_id'])){
                $id = mysqli_real_escape_string($conn, $_GET['cert_id']);

                $q = $conn->query("SELECT * FROM certificates WHERE cert_id='$id'");
                if($q->num_rows > 0){
                    $d = $q->fetch_assoc();
                    ?>
                    <div class="result-card animate__animated animate__fadeIn">
                        <div class="verified-badge">
                            <i class="bi bi-check-circle-fill"></i> Authenticated
                        </div>
                        
                        <div class="data-label">Candidate Name</div>
                        <div class="data-value fs-5"><?= htmlspecialchars($d['student_name']) ?></div>

                        <div class="data-label">Course Title</div>
                        <div class="data-value"><?= htmlspecialchars($d['course_name']) ?></div>

                        <div class="row">
                            <div class="col-6">
                                <div class="data-label">Issue Date</div>
                                <div class="data-value"><?= date('M d, Y', strtotime($d['issue_date'])) ?></div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="./certificates/<?= $d['pdf_file'] ?>" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                    <i class="bi bi-download me-1"></i> PDF
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                } else {
                    echo "
                    <div class='mt-4 p-3 rounded-4 bg-danger-subtle text-danger fw-bold small'>
                        <i class='bi bi-excl-triangle-fill me-2'></i> Invalid Certificate ID. Please check and try again.
                    </div>";
                }
            }
            ?>
            
            <div class="mt-5">
                <p class="small text-muted mb-0">Learn Institute of Technology & Science</p>
                <a href="index.php" class="small text-decoration-none fw-bold">Back to Homepage</a>
            </div>
        </div>
    </div>

</body>
