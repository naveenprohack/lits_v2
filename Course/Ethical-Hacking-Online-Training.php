<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ethical Hacking Course - LITS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary-orange: #dd642b;
            --dark-blue: #1e3a8a;
            --soft-bg: #f8fafc;
        }

        body { font-family: 'Inter', sans-serif; background-color: var(--soft-bg); }

        /* Modern Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #ffffff 0%, #f1f5f9 100%);
            padding: 60px 0;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .course-img-wrapper {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .badge-duration {
            background: var(--primary-orange);
            color: white;
            padding: 8px 16px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* Section Headlines */
        .section-title {
            position: relative;
            margin-bottom: 40px;
            font-weight: 800;
            color: var(--dark-blue);
        }

        .section-title::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -10px;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--primary-orange);
            border-radius: 2px;
        }

        /* Feature Cards */
        .feature-card {
            background: white;
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
            /*height: 100%;*/
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            margin-bottom: 20px;
            background: rgba(221, 100, 43, 0.1);
            color: var(--primary-orange);
            font-size: 24px;
        }

        /* Curriculum Table */
        .curriculum-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }

        .table thead { background: var(--dark-blue); color: white; }

        /* Floating Share Button */
        .share-btn {
            cursor: pointer;
            transition: color 0.2s;
            text-decoration: none;
        }
    </style>
</head>
<body>

<?php 
include('./dbConnection.php');
include('./mainInclude/header.php'); 
include('./floatingwi.php'); 
?>

<div class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="course-img-wrapper">
                    <img src="https://litsedu.com/image/courseimg/Ethical-Hacking-Online-Training.png" class="img-fluid" alt="Ethical Hacking">
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <span class="badge-duration mb-3 d-inline-block"><i class="bi bi-clock me-2"></i>4 Months Duration</span>
                <h1 class="display-4 fw-bold mb-3" style="color: var(--dark-blue);">Ethical Hacking</h1>
                <p class="lead text-muted mb-4">Complete Ethical Hacking Course in Tamil. Master cybersecurity from scratch and become a certified professional.</p>
                
                <div class="d-flex align-items-center mb-4">
                    <div class="me-4">
                        <div class="text-warning mb-1">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <small class="text-muted fw-bold">1,296 Ratings</small>
                    </div>
                    <div class="border-start ps-4">
                        <a href="javascript:void(0);" onclick="shareCourseLink('Ethical Hacking', 'In Tamil')" class="share-btn text-primary">
                            <i class="fas fa-share-alt me-2"></i>Share Course
                        </a>
                    </div>
                </div>

                <div class="card p-3 bg-white shadow-sm border-0 mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0 fw-bold">100% Secure Payment</h5>
                            <small class="text-muted">UPI, Cards, NetBanking Supported</small>
                        </div>
                        <form action="checkout.php" method="post">
                            <button type="submit" class="btn btn-lg px-5 text-white" style="background-color: var(--primary-orange); border-radius: 10px; font-weight: 700;">Buy Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <h3 class="section-title text-start mb-4">Course Overview</h3>
            <div class="card feature-card p-4 mb-5">
                <p class="fs-5 text-secondary lead">Learn how to defend against cyber attacks by securing networks, systems, and applications. This course is designed to teach the skills necessary to ethically hack into systems, identify vulnerabilities, and implement defensive measures.</p>
            </div>

            <h3 class="section-title text-start mb-4">Course Curriculum</h3>
            <div class="curriculum-card mb-5">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th class="p-3">Topic</th>
                            <th class="text-center p-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="p-3">Introduction to Ethical Hacking</td><td class="text-center"><i class="bi bi-patch-check-fill text-success fs-5"></i></td></tr>
                        <tr><td class="p-3">Networking Basics (OSI, TCP/IP)</td><td class="text-center"><i class="bi bi-patch-check-fill text-success fs-5"></i></td></tr>
                        <tr><td class="p-3">Information Gathering & Reconnaissance</td><td class="text-center"><i class="bi bi-patch-check-fill text-success fs-5"></i></td></tr>
                        <tr><td class="p-3">Scanning and Enumeration</td><td class="text-center"><i class="bi bi-patch-check-fill text-success fs-5"></i></td></tr>
                        <tr><td class="p-3">System Hacking & Metasploit</td><td class="text-center"><i class="bi bi-patch-check-fill text-success fs-5"></i></td></tr>
                        <tr><td class="p-3">Web Application Hacking (OWASP Top 10)</td><td class="text-center"><i class="bi bi-patch-check-fill text-success fs-5"></i></td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-4 mb-4" style="border-radius: 15px;">
                <h5 class="fw-bold mb-3">Who is this for?</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i> Aspiring Hackers</li>
                    <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i> IT Professionals</li>
                    <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i> Students</li>
                </ul>
            </div>

            <div class="card border-0 shadow-sm p-4 text-white mb-4" style="border-radius: 15px; background: linear-gradient(135deg, #1e3a8a, #3b82f6);">
                <h5 class="fw-bold mb-3"><i class="bi bi-briefcase me-2"></i>Career Paths</h5>
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge bg-light text-dark">Security Analyst</span>
                    <span class="badge bg-light text-dark">Pen-Tester</span>
                    <span class="badge bg-light text-dark">Security Engineer</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <h3 class="section-title text-center">Explore Our Courses</h3>
    <div class="row g-4 mt-2">
        <?php 
            $courses = [
                ['name' => 'UI/UX Design', 'img' => 'UI-UX-Design-Online-Training.png', 'link' => './uiuxdesign'],
                ['name' => 'Machine Learning', 'img' => 'Machine Learning.png', 'link' => './machinelearning'],
                ['name' => 'React JS', 'img' => 'react.png', 'link' => './react']
            ];
            foreach($courses as $course): 
        ?>
        <div class="col-md-4">
            <div class="card feature-card shadow-sm">
                <img src="https://litsedu.com/image/courseimg/<?= $course['img'] ?>" class="card-img-top" alt="<?= $course['name'] ?>">
                <div class="card-body">
                    <h5 class="card-title fw-bold"><?= $course['name'] ?></h5>
                    <a href="<?= $course['link'] ?>" class="btn w-100 text-white mt-3" style="background: #0ca6a3; border-radius: 8px;">Enroll Now</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include('./mainInclude/footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
function shareCourseLink(name, desc) {
    const shareData = { title: name, text: desc, url: window.location.href };
    if (navigator.share) {
        navigator.share(shareData);
    } else {
        navigator.clipboard.writeText(window.location.href);
        alert('Link Copied!');
    }
}
</script>
</body>
</html>