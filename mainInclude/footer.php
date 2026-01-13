+<!DOCTYPE html>
<html lang="en">
  <head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<meta property="og:title" content="Learn Coding Online | Litsedu">

   <link href="css/style.css" rel="stylesheet">
   <style>
       .eye-align{
            float:right;
                margin-left:-25px;
                margin-top:-30px;
                right:10px;
                position:relative;
                z-index:2;
            }
            .stats-section {
            padding: 60px 0;
            background: #ffffff;
        }

.stat-card {
    border: none;
    border-radius: 20px;
    background: #ffffff;
    transition: all 0.3s ease;
    padding: 40px 20px;
    position: relative;
    overflow: hidden;
}

/* Floating background circle decoration */
.stat-card::before {
    content: "";
    position: absolute;
    top: -20px;
    right: -20px;
    width: 100px;
    height: 100px;
    background: rgba(12, 166, 163, 0.05);
    border-radius: 50%;
    z-index: 0;
}

.stat-icon-box {
    width: 70px;
    height: 70px;
    background: rgba(12, 166, 163, 0.1); /* Light Teal background */
    color: #0ca6a3; /* Brand Teal */
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    border-radius: 15px;
    margin: 0 auto 20px;
    position: relative;
    z-index: 1;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: #333;
    margin-bottom: 5px;
    display: block;
}

.stat-label {
    font-size: 1.1rem;
    font-weight: 600;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.stat-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
}

.stat-card:hover .stat-icon-box {
    background: #0ca6a3;
    color: #ffffff;
    transform: rotateY(360deg);
    transition: 0.6s;
}
/* Footer specific styles */
.footer-link {
    font-size: 0.85rem;
    color: rgba(255, 255, 255, 0.8) !important;
    transition: all 0.2s ease;
    display: inline-block;
    padding: 3px 0;
}

.footer-link:hover {
    color: #e16f2f !important; /* Brand orange hover */
    transform: translateX(5px);
}

.social-hover:hover {
    color: #134650 !important;
    background: white;
    padding: 2px 8px;
    border-radius: 4px;
}

.footer-heading {
    position: relative;
    padding-bottom: 12px;
    margin-bottom: 25px;
    font-weight: 700;
}

.footer-heading::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 40px;
    height: 3px;
    background-color: #e16f2f;
}

/* For the 50 courses grid */
.course-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 10px;
}
   </style>
</head>
<body>
<?php 
    // Footer Include from mainInclude 
    include('./review.php');
  ?> 

  <?php 
    // Footer Include from mainInclude 
    // include('./achivements.php'); 
  ?>  
    <?php 
    include('./contact.php');  
    ?>  

<div style="background-color:#e16f2f">
    <div class="container">
        <div class="row text-white text-center py-2">
            <div class="col-md-3">
                <a class="text-white social-hover text-decoration-none" href="https://facebook.com/..."><i class="fab fa-facebook-f me-2"></i>Facebook</a>
            </div>
            <div class="col-md-3">
                <a class="text-white social-hover text-decoration-none" href="https://x.com/..."><i class="fab fa-x-twitter me-2"></i>Twitter</a>
            </div>
            <div class="col-md-3">
                <a class="text-white social-hover text-decoration-none" href="https://wa.me/..."><i class="fab fa-whatsapp me-2"></i>WhatsApp</a>
            </div>
            <div class="col-md-3">
                <a class="text-white social-hover text-decoration-none" href="https://instagram.com/..."><i class="fab fa-instagram me-2"></i>Instagram</a>
            </div>
        </div>
    </div>
</div>

<div class="text-white py-5" style="background-color: #0ca6a3">
    <div class="container">
        <div class="row g-5">
            
            <div class="col-lg-4">
                <h4 class="footer-heading">About LITS</h4>
                <p class="small opacity-75" style="line-height: 1.8;">
                    LITS (Learn Institute of Technology Service) is a premier online learning platform providing industry-relevant training in Tamil. We empower students to build careers in Web Design, App Development, and Digital Marketing with expert-led guidance.
                </p>
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="text-white opacity-75"><i class="fab fa-youtube fa-lg"></i></a>
                    <a href="#" class="text-white opacity-75"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="#" class="text-white opacity-75"><i class="fab fa-telegram fa-lg"></i></a>
                </div>
            </div>

            <div class="col-lg-3">
                <h4 class="footer-heading">Get In Touch</h4>
                <div class="small">
                    <p><i class="fas fa-map-marker-alt me-3 text-warning"></i><a href="#" class="text-white text-decoration-none footer-link">Chennai, Tamil Nadu</a></p>
                    <p><i class="fas fa-phone-alt me-3 text-warning"></i><a href="tel:9952252054" class="text-white text-decoration-none footer-link">+91 9952252054</a></p>
                    <p><i class="fas fa-envelope me-3 text-warning"></i><a href="mailto:litsedu666@gmail.com" class="text-white text-decoration-none footer-link">learninstituteoftechnologyserv@gmail.com</a></p>
                </div>
            </div>

            <div class="col-lg-5">
                <h4 class="footer-heading">Popular Courses</h4>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="https://litsedu.com/Course/Python-Full-Stack-Development-Online-Training" class="text-decoration-none footer-link">Python Fullstack</a></li>
                            <li><a href="https://litsedu.com/Course/Digital-Marketing-Online-Training" class="text-decoration-none footer-link">Digital Marketing</a></li>
                            <li><a href="https://litsedu.com/Course/Ethical-Hacking-Online-Training" class="text-decoration-none footer-link">Ethical Hacking</a></li>
                            <li><a href="https://litsedu.com/Course/React-Online-Training" class="text-decoration-none footer-link">React JS</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="https://litsedu.com/Course/Graphic-Design-Online-Training" class="text-decoration-none footer-link">Graphic Design</a></li>
                            <li><a href="https://litsedu.com/Course/Data-Science-Online-Training" class="text-decoration-none footer-link">Data Science</a></li>
                            <li><a href="https://litsedu.com/Course/Tally-Erp-Online-Training" class="text-decoration-none footer-link">Tally ERP</a></li>
                            <li><a href="https://litsedu.com/Course/Mobile-App-Development-Online-Training" class="text-decoration-none footer-link">Mobile Apps</a></li>
                        </ul>
                    </div>
                </div>
                <a href="https://litsedu.com/coursesdetails" class="btn btn-sm btn-outline-light mt-2 px-3" style="border-radius: 20px; font-size: 12px;">View All 50+ Courses</a>
            </div>

        </div>
    </div>
</div>

<footer class="text-center py-3" style="background-color:#134650">
    <small class="text-white opacity-75"> 
        © 2024 Learn Institute of Technology Service. All rights reserved. | Powered by LITS
    </small> 
</footer>

  
  </body>

</html>