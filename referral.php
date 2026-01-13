<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refer & Earn | Learn Institute of Technology Service</title>
    
    <meta name="keyword" content="Learn Institute of Technology Service, litsedu, Online courses, eLearning, coding course, web development">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="Learn Institute of Technology Service, litsedu, Online courses, eLearning, Online Education,
    Online Training, Online Tutoring, Online Skills Training, Online Instruction, Online Academic Programs, Online Teaching, Online Skills Training, Online Professional Development, coding course, online learning websites, programming classes for beginners, web development classes near me,starting an online course, learning online classes,learning designer courses,it learning courses,virtual online classes, courses it online, interactive online learning, courses websites, learning classes, web development classes online
    website classes, web course, course learning, web programming courses, flexible online classes, courses to learn, course development, websites for online classes, web technology course, online learning for students, websites for courses online, top online learning sites">
    <meta name="description" content="Learn Institute of technology provide a various online courses that help you to upskill your career in different domains.">
    <meta name="author" content="litsedu.com">
    <link rel="canonical" href="https://litsedu.com/referral" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --brand-teal: #0ca6a3;
            --brand-orange: #e16f2f;
            --glass-bg: rgba(255, 255, 255, 0.95);
            --bg-light: #f4f7f7;
        }
        html, body {
                max-width: 100%;
                overflow-x: hidden;
                position: relative;
            }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #fff; }

        /* --- Hero Section --- */
        .hero-refer-card {
            border: none; border-radius: 24px; overflow: hidden;
            background: var(--glass-bg); box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }
        .promo-badge {
            display: inline-block; background: rgba(225, 111, 47, 0.1);
            color: var(--brand-orange); padding: 6px 16px; border-radius: 50px;
            font-weight: 700; font-size: 0.85rem; text-transform: uppercase;
        }
        .card-title-main { font-size: 2.5rem; font-weight: 800; color: #1a1a1a; }
        .reward-highlight { color: var(--brand-teal); font-weight: 800; }
        .btn-refer-primary {
            background: linear-gradient(45deg, var(--brand-teal), #088a87);
            color: white; border: none; padding: 14px 40px; border-radius: 12px;
            font-weight: 600; box-shadow: 0 10px 20px rgba(12, 166, 163, 0.3); transition: 0.3s;
        }
        .btn-refer-primary:hover { transform: translateY(-3px); color: white; }

        /* --- Steps Container --- */
        .steps-container { padding: 60px 0; background: var(--bg-light); border-radius: 40px; }
        .step-circle {
            width: 60px; height: 60px; background: var(--brand-teal);
            border: 4px solid #fff; box-shadow: 0 0 15px rgba(12, 166, 163, 0.3);
            border-radius: 50%; display: flex; align-items: center;
            justify-content: center; font-size: 22px; font-weight: bold;
            color: white; margin: 0 auto 15px;
        }
        .step-item { position: relative; }
        .step-item:not(:last-child)::after {
            content: ''; position: absolute; top: 30px; left: 60%;
            width: 80%; height: 3px; background: var(--brand-orange); z-index: 0;
        }

        /* --- Leaderboard (Top Earners) --- */
        .rank-badge {
            width: 28px; height: 28px; background: var(--brand-orange);
            color: white; border-radius: 50%; position: absolute;
            top: -10px; left: 10px; display: flex; align-items: center;
            justify-content: center; font-weight: bold; border: 3px solid #fff; z-index: 2;
        }
        .top-earner-item {
            background: #fff; border-radius: 16px; padding: 20px;
            margin-bottom: 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.05);
            transition: 0.3s; position: relative;
        }
        .earner-table-container { background: white; border-radius: 20px; padding: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .footer-table { border-collapse: separate; border-spacing: 0 10px; width: 100%; }
        .footer-table thead th { border: none; color: #888; font-size: 0.8rem; text-transform: uppercase; padding: 10px 20px; }
        .footer-table tbody tr { background: #f8f9fa; border-radius: 12px; }
        .footer-table tbody td { padding: 15px 20px; border: none; }
        .footer-table tr td:first-child { border-radius: 12px 0 0 12px; }
        .footer-table tr td:last-child { border-radius: 0 12px 12px 0; }

        /* --- FAQ Section --- */
        .accordion-item { border: none !important; margin-bottom: 12px; border-radius: 12px !important; box-shadow: 0 4px 12px rgba(0,0,0,0.05); overflow: hidden; }
        .accordion-button:not(.collapsed) { background-color: rgba(12, 166, 163, 0.05) !important; color: var(--brand-teal) !important; font-weight: bold; }
        
        /* --- Modal Custom --- */
        .modal-content-custom { border-radius: 24px; border: none; }
        .modal-left { background: #fdf2ec; padding: 20px; }

        @media (max-width: 768px) { .step-item:not(:last-child)::after { display: none; } }
    </style>
</head>
<body>

<?php 
    include('./dbConnection.php');
    include('./mainInclude/header.php'); 
    include('./floatingwi.php'); 
?>

<section class="container mt-5">
    <div class="card hero-refer-card shadow-lg">
        <div class="row g-0 align-items-center">
            <div class="col-md-5 p-5 text-center">
                <img src="image/Colorful Flat Refer Your Friend Instagram Post.png" class="img-fluid rounded-4 shadow-sm" alt="LITS">
            </div>
            <div class="col-md-7 p-4 p-lg-5">
                <span class="promo-badge mb-3">Limited Time Festival</span>
                <h1 class="card-title-main mb-4">Refer & <span class="text-teal" style="color: var(--brand-teal);">Earn Big</span></h1>
                <div class="refer-benefits mb-4">
                    <p><i class="fas fa-check-circle me-2 text-orange" style="color: var(--brand-orange);"></i> Earn extra <span class="reward-highlight">₹10,000</span> bonus.</p>
                    <p><i class="fas fa-check-circle me-2 text-orange" style="color: var(--brand-orange);"></i> Friends get <span class="reward-highlight">₹1,00,000</span> fee waiver.</p>
                    <p><i class="fas fa-gift me-2 text-orange" style="color: var(--brand-orange);"></i> Free Premium Course enrollment.</p>
                </div>
                <button class="btn btn-refer-primary btn-lg" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Start Earning Now <i class="fas fa-arrow-right ms-2"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="container my-5 py-5 steps-container">
    <h2 class="text-center mb-5 fw-bold" style="color: var(--brand-teal);">How It Works</h2>
    <div class="row text-center">
        <div class="col-md-4 step-item mb-4">
            <div class="step-circle">1</div>
            <h5 class="fw-bold">Invite Friends</h5>
            <p class="text-muted px-3">Share your unique referral link with your network.</p>
        </div>
        <div class="col-md-4 step-item mb-4">
            <div class="step-circle">2</div>
            <h5 class="fw-bold">They Enroll</h5>
            <p class="text-muted px-3">Your friends sign up for a professional LITS course.</p>
        </div>
        <div class="col-md-4 step-item">
            <div class="step-circle">3</div>
            <h5 class="fw-bold">Get Rewarded</h5>
            <p class="text-muted px-3">Earn rewards once their enrollment is confirmed.</p>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Top Earners <span style="color: var(--brand-teal);">Last Quarter</span></h2>
    </div>
    <div class="row justify-content-center mb-4">
        <div class="col-md-5">
            <div class="top-earner-item d-flex align-items-center">
                <div class="rank-badge">1</div>
                <img src="https://ui-avatars.com/api/?name=John+Doe&background=0ca6a3&color=fff" class="rounded-circle me-3" width="60">
                <div class="flex-grow-1">
                    <h6 class="m-0 fw-bold">John Doe</h6>
                    <small class="text-muted">Advanced Marketing</small>
                </div>
                <div class="fw-bold" style="color: var(--brand-teal);">₹15,000</div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="top-earner-item d-flex align-items-center">
                <div class="rank-badge" style="background:#6c757d">2</div>
                <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=e16f2f&color=fff" class="rounded-circle me-3" width="60">
                <div class="flex-grow-1">
                    <h6 class="m-0 fw-bold">Jane Smith</h6>
                    <small class="text-muted">Data Science</small>
                </div>
                <div class="fw-bold" style="color: var(--brand-teal);">₹14,500</div>
            </div>
        </div>
    </div>

    <div class="earner-table-container table-responsive">
        <table class="footer-table">
            <thead>
                <tr>
                    <th>Rank & Name</th>
                    <th>Course</th>
                    <th class="text-end">Earnings</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>3. Emily Davis</td><td>Web Development</td><td class="text-end fw-bold text-teal">₹12,800</td></tr>
                <tr><td>4. William Brown</td><td>Financial Analysis</td><td class="text-end fw-bold text-teal">₹12,000</td></tr>
                <tr><td>5. Olivia Wilson</td><td>Graphic Design</td><td class="text-end fw-bold text-teal">₹11,500</td></tr>
            </tbody>
        </table>
    </div>
</section>

<section class="container py-5">
    <div class="text-center mb-5">
        <span class="faq-badge">Support Center</span>
        <h2 class="fw-bold mt-2" style="color: var(--brand-teal);">Frequently Asked Questions</h2>
    </div>
    <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#f1">How can I earn rewards?</button></h2>
            <div id="f1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">You earn rewards by referring friends to enroll in LITS courses. Once payment is confirmed, rewards credit automatically.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f2">Is there a limit to referrals?</button></h2>
            <div id="f2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">No, you can refer as many friends as you like! More referrals mean more earnings.</div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="registerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content modal-content-custom overflow-hidden">
            <div class="row g-0">
                <div class="col-md-5 d-none d-md-flex modal-left align-items-center justify-content-center text-center p-4">
                    <div>
                        <img src="image/Colorful Flat Refer Your Friend Instagram Post.png" class="img-fluid rounded-3 mb-3">
                        <h5 class="fw-bold">Start Your Journey</h5>
                        <p class="small text-muted">Join our top referrers today.</p>
                    </div>
                </div>
                <div class="col-md-7 p-5">
                    <div class="d-flex justify-content-between mb-4">
                        <h4 class="fw-bold">Create Account</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="process.php" method="POST">
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Mobile Number</label>
                            <div class="input-group">
                                <span class="input-group-text">+91</span>
                                <input type="text" class="form-control" name="phoneNumber" placeholder="98765 43210" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="name@email.com" required>
                        </div>
                        <button type="submit" class="btn btn-refer-primary w-100 py-3">Get Started</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./mainInclude/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>