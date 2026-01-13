<?php 
include("db.php");


if(isset($_GET['slug'])) {
    $slug = mysqli_real_escape_string($conn, $_GET['slug']);
    
    // Fetch by slug instead of ID
    $sql = "SELECT * FROM course WHERE course_slug = '$slug'";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        // If course slug doesn't exist, send to 404 or home
        // header("Location: coursesdetails.php");
        header("Location: 404.php");
        exit;
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title><?php echo $row['course_name']; ?> |  LITS</title>
    <meta name="description" content="<?php echo substr($row['course_desc'], 0, 160); ?>">
    <meta name="keywords" content="<?php echo $row['course_name']; ?>, Tamil Tutorials, LITS">
    <link rel="icon" type="image/png" href="../image/Logo.png" />    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Course",
        "name": "<?= htmlspecialchars($row['name']) ?>",
        "description": "<?= htmlspecialchars($row['description']) ?>",
        "image": "<?= $row['image'] ?>",
        "provider": {
            "@type": "Organization",
            "name": "LitsEdu",
            "url": "https://example.com"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "<?= $row['rating'] ?>",
            "reviewCount": "<?= $row['review_count'] ?>"
        }
    }
    </script>
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
            height: 100%;
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
include('./mainInclude/header.php'); 
?>
<div class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="course-img-wrapper">
                    <img src="<?php echo $row['course_img']; ?>" class="img-fluid" alt="<?php echo $row['course_name']; ?>">
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <span class="badge-duration mb-3 d-inline-block">
                    <i class="bi bi-clock me-2"></i><?php echo $row['course_duration']; ?>
                </span>
                
                <h1 class="display-4 fw-bold mb-3" style="color: var(--dark-blue);">
                    <?php echo $row['course_name']; ?>
                </h1>
                
                <p class="lead text-muted mb-4"><?php echo $row['course_desc']; ?></p>
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
                            <h5 class="mb-0 fw-bold">₹<?php echo $row['course_price']; ?></h5>
                            <small class="text-muted">100% Secure Payment</small>
                        </div>
                        <form action="../checkout.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['course_id']; ?>">
                            <button type="submit" class="btn btn-lg px-5 text-white" style="background-color: var(--primary-orange);">Buy Now</button>
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
                <p class="fs-5 text-secondary lead"><?php echo $row['course_desc']; ?></p>
            </div>

            <h3 class="section-title text-start mb-4">Course Curriculum</h3>
            <div class="curriculum-card mb-5">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr><th class="p-3">Topic</th><th class="text-center p-3">Status</th></tr>
                    </thead>
                    <tbody>
                        <?php 
                        $topics = explode(',', $row['course_curriculum'] ?? 'Intro, Basics, Advanced'); 
                        foreach($topics as $topic): 
                        ?>
                        <tr>
                            <td class="p-3"><?php echo trim($topic); ?></td>
                            <td class="text-center"><i class="bi bi-patch-check-fill text-success fs-5"></i></td>
                        </tr>
                        <?php endforeach; ?>
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
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastering React | LITS Edu</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #fcfcfd; 
            color: #1a1a1a; 
        }

        /* --- PRESTIGE HERO --- */
        .hero-banner {
            background: linear-gradient(135deg, #0f172a 0%, #0ca6a3 100%);
            padding: 100px 0 140px 0;
            color: white;
            clip-path: ellipse(150% 100% at 50% 0%);
        }

        .badge-premium {
            background: linear-gradient(90deg, #dd642b, #fca311);
            color: white;
            padding: 6px 16px;
            border-radius: 100px;
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* --- ELITE SIDEBAR CARD --- */
        .premium-card {
            background: white;
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 24px;
            box-shadow: 0 40px 80px rgba(0,0,0,0.07);
            overflow: hidden;
            margin-top: -200px; /* Overlap effect */
            position: sticky;
            top: 20px;
        }

        .video-preview {
            position: relative;
            overflow: hidden;
        }

        .play-btn-pulse {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 0 0 rgba(255,255,255,0.7);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(255,255,255,0.7); }
            70% { box-shadow: 0 0 0 20px rgba(255,255,255,0); }
            100% { box-shadow: 0 0 0 0 rgba(255,255,255,0); }
        }

        /* --- CONTENT BLOCKS --- */
        .feature-box {
            background: #ffffff;
            border: 1px solid #edf2f7;
            border-radius: 20px;
            padding: 30px;
            transition: all 0.3s ease;
        }

        .feature-box:hover {
            border-color: #dd642b;
            transform: translateY(-5px);
        }

        .curriculum-section {
            border-left: 2px solid #e2e8f0;
            padding-left: 30px;
            position: relative;
            margin-bottom: 40px;
        }

        .curriculum-section::before {
            content: '';
            position: absolute;
            left: -9px;
            top: 0;
            width: 16px;
            height: 16px;
            background: #dd642b;
            border-radius: 50%;
            border: 4px solid white;
        }

        .btn-enroll {
            background: #1a1a1a;
            color: white;
            padding: 16px;
            border-radius: 12px;
            font-weight: 700;
            border: none;
            transition: 0.3s;
        }

        .btn-enroll:hover {
            background: #dd642b;
            color: white;
            transform: scale(1.02);
        }
    </style>
     <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Course",
        "name": "<?= htmlspecialchars($row['name']) ?>",
        "description": "<?= htmlspecialchars($row['description']) ?>",
        "image": "<?= $row['image'] ?>",
        "provider": {
            "@type": "Organization",
            "name": "LitsEdu",
            "url": "https://example.com"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "<?= $row['rating'] ?>",
            "reviewCount": "<?= $row['review_count'] ?>"
        }
    }
    </script>
</head>
<body>

<section class="hero-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <span class="badge-premium mb-4 d-inline-block">Specialized Training</span>
                <h1 class="display-3 fw-800 mb-4" style="font-weight: 800; line-height: 1.1;"><?php echo ucfirst($row['course_name']); ?> <br><span style="color: #dd642b;">Elite Masterclass</span></h1>
                <p class="lead opacity-75 mb-5" style="max-width: 500px;"><?php echo $row['course_desc']; ?></p>
                <div class="d-flex gap-4">
                    <div class="d-flex align-items-center"><i class="bi bi-person-check fs-4 me-2"></i> 5k+ Students</div>
                    <div class="d-flex align-items-center"><i class="bi bi-award fs-4 me-2"></i> ISO Certified</div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container pb-5">
    <div class="row">
        <div class="col-lg-7 pt-5">
            <h2 class="fw-bold mb-4">Course Architecture</h2>
            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="feature-box">
                        <i class="bi bi-lightning-charge-fill fs-3 text-warning"></i>
                        <h5 class="mt-3 fw-bold">Performance</h5>
                        <p class="small text-muted mb-0">Learn to optimize React for enterprise-scale traffic.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-box">
                        <i class="bi bi-stack fs-3 text-info"></i>
                        <h5 class="mt-3 fw-bold">Full Ecosystem</h5>
                        <p class="small text-muted mb-0">Redux Toolkit, Context API, and Next.js covered.</p>
                    </div>
                </div>
            </div>

            <h2 class="fw-bold mb-4">Curriculum Strategy</h2>
            <div class="curriculum-section">
                <h5 class="fw-bold">01. The Foundation</h5>
                <p class="text-muted small">JS ES6+, Virtual DOM, and Basic Component Architecture.</p>
            </div>
            <div class="curriculum-section">
                <h5 class="fw-bold">02. State & Lifecycle</h5>
                <p class="text-muted small">Mastering Hooks (useEffect, useMemo) and API integration.</p>
            </div>
            <div class="curriculum-section">
                <h5 class="fw-bold">03. Professional Deployment</h5>
                <p class="text-muted small">CICD pipelines and server-side rendering basics.</p>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="premium-card">
                <div class="video-preview">
                    <!-- <img src="./image/courseimg/React-Online-Training.png" class="img-fluid w-100" alt="Preview"> -->
                     <img src="<?php echo $row['course_img']; ?>" class="img-fluid w-100" alt="<?php echo $row['course_name']; ?>">
                   
                </div>
                <div class="p-5">
                    <div class="d-flex align-items-end gap-2 mb-4">
                        <h1 class="fw-800 mb-0">₹<?php echo $row['course_price']; ?></h1>
                        <span class="text-muted text-decoration-line-through">₹<?php echo $row['course_price']*1.5; ?></span>
                    </div>
                    
                    <form action="checkout.php" method="post" class="d-grid mb-4">
                        <button type="submit" class="btn btn-enroll">ENROLL IN COURSE</button>
                    </form>

                    <div class="pt-2">
                        <p class="fw-bold small mb-3">ELITE FEATURES</p>
                        <div class="d-flex justify-content-between mb-2 small">
                            <span><i class="bi bi-check2-all me-2 text-success"></i><?php echo $row['course_duration'] ?? '30 hr'; ?></span>
                            <span class="text-muted">Lifetime</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2 small">
                            <span><i class="bi bi-check2-all me-2 text-success"></i> Premium Projects</span>
                            <span class="text-muted">6 Items</span>
                        </div>
                        <div class="d-flex justify-content-between mb-4 small">
                            <span><i class="bi bi-check2-all me-2 text-success"></i> Live Q&A Support</span>
                            <span class="text-muted">24/7</span>
                        </div>
                    </div>
                    
                    <div class="text-center pt-3 border-top">
                        <p class="small text-muted mb-0">Course Code: <strong>RE-2026-TML</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./moreCourse.php'); ?>
<?php include('./mainInclude/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>