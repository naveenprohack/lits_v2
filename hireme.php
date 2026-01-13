

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
        <title>Hire Me Talent - Learn Institute of Technology Service</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="keyword" content="Learn Institute of Technology Service, litsedu, Online courses, eLearning, Online Education,
   Online Training, Online Tutoring, Online Skills Training, Online Instruction, Online Academic Programs, Online Teaching, Online Skills Training, Online Professional Development, coding course, online learning websites, programming classes for beginners, web development classes near me,starting an online course, learning online classes,learning designer courses,it learning courses,virtual online classes, courses it online, interactive online learning, courses websites, learning classes, web development classes online
website classes, web course, course learning, web programming courses, flexible online classes, courses to learn, course development, websites for online classes, web technology course, online learning for students, websites for courses online, top online learning sites">
    <meta name="description" content="Learn Institute of technology provide a various online courses that help you to upskill your career in different domains.">
    <meta name="author" content="litsedu.com">
        <link rel="canonical" href="https://litsedu.com/hireme" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    :root {
        --brand-teal: #0ca6a3;
        --brand-orange: #e16f2f;
    }

    .hero-recruitment {
        background: linear-gradient(rgba(12, 166, 163, 0.9), rgba(12, 166, 163, 0.9)), url('image/well\ tr.png');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
    }

    .btn-brand {
        background-color: var(--brand-orange);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s;
    }

    .btn-brand:hover {
        background-color: #c95d22;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(225, 111, 47, 0.4);
    }

    .department-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
    }

    .department-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .department-card img {
        height: 200px;
        object-fit: cover;
    }

    .marquee-container img {
        height: 50px;
        margin: 0 30px;
        filter: grayscale(100%);
        opacity: 0.6;
        transition: all 0.3s;
    }

    .marquee-container img:hover {
        filter: grayscale(0%);
        opacity: 1;
    }

    .section-title {
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 30px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: var(--brand-orange);
    }
</style>
</head>
<body>
    <?php 
include('./dbConnection.php');
include('./submitJobPost.php'); 

  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
  
   // Header Include from mainInclude 
  include('./floatingwi.php'); 

?>

    <!-- Navbar -->
    <!-- Include your navbar code here -->
    
    
    
    <!-- Hero Section -->
    <div class="hero-recruitment text-center">
        <div class="container">
            <h1 class="display-3 fw-bold">Hire Top-Tier Talent</h1>
            <p class="lead mb-4">Bridging the gap between skilled LITS students and world-class organizations.</p>
            <button class="btn btn-brand btn-lg" data-bs-toggle="modal" data-bs-target="#jobPostModal">
                <i class="fas fa-plus-circle me-2"></i>Post a Job Opening
            </button>
        </div>
    </div>
<!-- Job Post Modal -->
<div class="modal fade" id="jobPostModal" tabindex="-1" aria-labelledby="jobPostModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="jobPostModalLabel">Post a Job Opening</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="submitJobPost.php" method="POST">
        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Job Title</label>
            <input type="text" class="form-control" name="jobTitle" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Job Description</label>
            <textarea class="form-control" name="jobDescription" rows="4" required></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control" name="companyName" required>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Job Location</label>
              <input type="text" class="form-control" name="jobLocation" required>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Job Type</label>
              <select class="form-select" name="jobType" required>
                <option value="">Choose type</option>
                <option value="Full-Time">Full-Time</option>
                <option value="Part-Time">Part-Time</option>
                <option value="Internship">Internship</option>
                <option value="Freelance">Freelance</option>
                <option value="Contract">Contract</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Salary (Optional)</label>
            <input type="text" class="form-control" name="salary">
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-brand">Post Job</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- Job Post Modal -->
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="image/well tr.png" class="img-fluid rounded-4 shadow" alt="LITS Trained Students">
        </div>
        <div class="col-md-6 ps-lg-5">
            <h2 class="fw-bold text-teal mb-4">Why Hire LITS Students?</h2>
            <p class="text-muted">Our students undergo rigorous project-based training designed by industry experts.</p>
            <div class="d-flex mb-3">
                <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                <div><strong>Industry-Ready:</strong> Students trained on real-world projects.</div>
            </div>
            <div class="d-flex mb-3">
                <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                <div><strong>Diverse Skills:</strong> Experts in Full Stack, Multimedia, and CAD.</div>
            </div>
            <div class="d-flex mb-3">
                <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                <div><strong>Bilingual:</strong> Deep conceptual understanding in Tamil and English.</div>
            </div>
        </div>
    </div>

    <h2 class="text-center section-title fw-bold">Our Talent Departments</h2>
    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="card department-card shadow-sm">
                <img src="image/software-development.avif" class="card-img-top" alt="Software">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Software Devs</h5>
                    <p class="small text-muted">Python, React, PHP & Full Stack experts.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card department-card shadow-sm">
                <img src="image/electrical-technician.avif" class="card-img-top" alt="Hardware">
                <div class="card-body text-center">
                    <h5 class="fw-bold">IT Infrastructure</h5>
                    <p class="small text-muted">Hardware & Networking technicians.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card department-card shadow-sm">
                <img src="image/content-creator.avif" class="card-img-top" alt="Multimedia">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Creative Media</h5>
                    <p class="small text-muted">Video Editors & Graphic Designers.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card department-card shadow-sm">
                <img src="image/industrial-designer.avif" class="card-img-top" alt="CAD">
                <div class="card-body text-center">
                    <h5 class="fw-bold">CAD Engineers</h5>
                    <p class="small text-muted">AutoCAD and Industrial Design talent.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-light py-5">
    <div class="container">
        <p class="text-center text-muted small fw-bold mb-4">OUR STUDENTS ARE PLACED AT</p>
        <marquee class="marq" direction="left" scrollamount="8"> 
            <div class="marquee-container d-flex align-items-center">
                <img src="image/company_logos/zoho.png" alt="Zoho">
                <img src="image/company_logos/deloitte.png" alt="Deloitte">
                <img src="image/company_logos/amazon.png" alt="Amazon">
                <img src="image/company_logos/flipkart.png" alt="Flipkart">
                <img src="image/company_logos/hcl.png" alt="HCL">
                <img src="image/company_logos/tech_mahindra.png" alt="Tech Mahindra">
                <img src="image/company_logos/zoho.png" alt="Zoho">
                <img src="image/company_logos/amazon.png" alt="Amazon">
            </div>
        </marquee> 
    </div>
</div>

<!-- Bootstrap JS and dependencies (optional) -->



<!-- Button to View All Courses -->


<?php 
    // Footer Include from mainInclude 
    include('./mainInclude/footer.php'); 
    
    ?>  
 
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    
</body>
</html>
