<?php include('./dbConnection.php'); ?>
    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f8fafc; 
            color: #1e293b;
        }

        .hub-container {
            max-width: 1000px;
            margin-top: 80px;
        }

        /* Typography & Header */
        .fw-800 { font-weight: 800 !important; }
        .text-gradient {
            background: linear-gradient(135deg, #0f172a 0%, #2563eb 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        /* Action Cards */
        .hub-card {
            background: white;
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 24px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none !important;
            display: block;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .hub-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            border-color: #2563eb;
        }

        .icon-box {
            width: 70px;
            height: 70px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            transition: 0.3s;
        }

        /* Card Variations */
        .card-blue .icon-box { background: #eff6ff; color: #2563eb; }
        .card-green .icon-box { background: #ecfdf5; color: #10b981; }
        .card-amber .icon-box { background: #fffbeb; color: #f59e0b; }

        .hub-card h4 {
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .hub-card p {
            color: #64748b;
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        /* Decorative Background */
        .bg-glow {
            position: absolute;
            top: 0; right: 0;
            width: 100px; height: 100px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.05) 0%, transparent 70%);
            border-radius: 50%;
            transform: translate(30%, -30%);
        }
    </style>
<body>

<div class="container hub-container">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-800 tracking-tight text-gradient">Credential Management</h1>
        <p class="text-muted fw-semibold text-uppercase letter-spacing-1 small" style="letter-spacing: 0.15em;">Admin Control Center</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <a href="dashboard.php?page=add_certificate" class="hub-card card-blue">
                <div class="bg-glow"></div>
                <div class="icon-box">
                    <i class="bi bi-patch-plus"></i>
                </div>
                <h4>Issue New</h4>
                <p>Generate and save a new student certificate to the database.</p>
            </a>
        </div>

        <div class="col-md-4">
            <a href="dashboard.php?page=certificate_list" class="hub-card card-green">
                <div class="bg-glow"></div>
                <div class="icon-box">
                    <i class="bi bi-collection"></i>
                </div>
                <h4>View Ledger</h4>
                <p>Access all issued records, download PDFs, and manage data.</p>
            </a>
        </div>

        <div class="col-md-4">
            <a href="dashboard.php?page=certificate_verify" class="hub-card card-amber">
                <div class="bg-glow"></div>
                <div class="icon-box">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h4>Public Verify</h4>
                <p>Test the public verification tool for credential authenticity.</p>
            </a>
        </div>
    </div>

    <div class="text-center mt-5">
        <hr class="w-25 mx-auto opacity-10">
        <p class="small text-muted">&copy; 2026 LITS Admin Portal • v2.0 Elite</p>
    </div>
</div>

</body>
