<style>
  /* Premium Navigation & Mega Menu */
.navbar {
    background: #ffffff;
    box-shadow: 0 2px 15px rgba(0,0,0,0.05);
    padding: 15px 0;
}

.nav-link {
    font-weight: 600;
    font-size: 0.95rem;
    padding: 10px 15px !important;
    transition: color 0.3s;
}

.nav-link:hover {
    color: #0ca6a3 !important;
}

/* Mega Menu Container */
.mega-menu {
    display: none;
    position: absolute;
    /* FIX 2: Set top to 100% so it sits flush with the bottom of the navbar */
    top: 100%; 
    left: 50%;
    /* FIX 3: Removed the 'translateY(20px)' which was pushing the menu away from your mouse */
    transform: translateX(-50%); 
    background-color: #ffffff;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
    padding: 30px;
    z-index: 1000;
    width: 95vw;
    max-width: 1100px;
    border-radius: 12px;
    border-top: 4px solid #0ca6a3;
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none; /* Prevents flickering during transition */
}

.nav-item:hover .mega-menu {
    display: block;
    opacity: 1;
    transform: translateX(-50%) translateY(0);
}

.nav-item.dropdown {
    position: relative;
    /* FIX 1: This padding creates an invisible 'bridge' so your mouse 
       never actually leaves the hover zone when moving to the menu */
    padding-bottom: 20px !important; 
    margin-bottom: -20px !important;
}


/* Show state */
.nav-item.dropdown.is-active .mega-menu {
    display: block;
    opacity: 1;
    pointer-events: auto;
}

/* Ensure the portal menu also sits flush */
.portal-menu {
    width: 280px !important;
    left: auto !important;
    right: 0 !important;
    transform: none !important;
}
/* Menu Columns */
.mega-menu h6 {
    font-size: 0.85rem;
    color: #0ca6a3; /* Teal Category Titles */
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-weight: 800;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid #f0f0f0;
}

.mega-menu .dropdown-item {
    color: #444 !important;
    font-size: 0.9rem;
    padding: 8px 0;
    background: transparent;
    font-weight: 500;
    transition: all 0.2s;
}

.mega-menu .dropdown-item:hover {
    color: #0ca6a3 !important;
    background: transparent;
    transform: translateX(5px);
}

/* Badge for "New" */
.badge.bg-danger {
    font-size: 0.6rem;
    padding: 3px 6px;
    background-color: #ff4757 !important;
}

/* Responsive Fixes */
@media (max-width: 991px) {
    .mega-menu {
        position: static;
        width: 100%;
        transform: none;
        box-shadow: none;
        display: none;
        opacity: 1;
        padding: 20px;
    }
    .nav-item:hover .mega-menu {
        transform: none;
    }
}

.nav-item:hover .portal-menu {
    transform: translateY(0) !important;
}

/* Ensure sub-items don't have weird spacing */
.portal-menu .col-md-3 {
    width: 100% !important;
    padding: 10px;
}
/* Hero Banner Adjustments */
.hero-banner {
    width: 100%;
    overflow: hidden;
    /* This ensures the image starts after the sticky navbar */
    margin-top: 0; 
}

.responsive-img {
    object-fit: cover;
    /* Optional: adds a slight fade-in effect when page loads */
    animation: fadeIn 1.5s ease;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Mobile Fix: Ensures the banner doesn't look too tiny on phones */
@media (max-width: 768px) {
    .responsive-img {
        min-height: 250px;
        object-fit: contain;
        width: 100%;
    }
}
   
.responsive-img {
    object-fit: contain;
    animation: fadeIn 1.5s ease;
    width: 50%;
    transition: opacity 0.5s ease;
}

/* Floating Button Styling */


@keyframes bounceIn {
    from { transform: scale(0); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}

@media (max-width: 768px) {
    .responsive-img { width: 100%; }
} 
</style>
<section class="hero-banner">
    <!--<div class="container-fluid p-0">-->
    <!--    <img src="./image/lits-main.png" class="d-block w-100 img-fluid responsive-img" alt="learn institute of technology service">-->
    <!--</div>-->
    <div class="container-fluid p-0 d-flex justify-content-center" id="mainImageContainer">
        <img src="./image/lits-main.png" 
            class="d-block img-fluid responsive-img" 
            alt="learn institute of technology service">
    </div>

        <div class="modal fade" id="imagePopupModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-header border-0 p-0">
                        <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0 text-center">
                        <img src="./image/lits-main.png" class="img-fluid rounded shadow" style="max-height: 80vh;">
                    </div>
                </div>
            </div>
        </div>
</section>
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <img src="image/Logo.png" alt="LITS" height="50">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="https://litsedu.com">Home</a>
                </li>
                
                <li class="nav-item dropdown position-static">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="coursesDropdown">Courses</a>
                    <div class="mega-menu">
                        <div class="row">
                            <div class="col-md-3">
                                <h6><i class="fas fa-code me-2"></i>IT & Software</h6>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Python-Online-Training">Python Programming</a>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Data-Science-Online-Training">Data Science</a>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Python-Full-Stack-Development-Online-Training">Full Stack</a>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Artifical-Intelligence-Online-Training">Artificial Intelligence</a>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Software-testing-Online-Training">Software Testing</a>
                            </div>
                            
                            <div class="col-md-3">
                                <h6><i class="fas fa-chart-line me-2"></i>Business</h6>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Supply-Chain-Management-Online-Training">Supply Chain</a>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Tally-Erp-Online-Training">Tally ERP</a>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Digital-Marketing-Online-Training">Digital Marketing</a>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Advanced-Excel-Online-Training">Advanced Excel</a>
                            </div>

                            <div class="col-md-3">
                                <h6><i class="fas fa-paint-brush me-2"></i>Design</h6>
                                <a class="dropdown-item" href="https://litsedu.com/Course/photoshop">Photoshop</a>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Graphic-Design-Online-Training">Graphic Design</a>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Adobe-Premiere-Pro-Online-Training">Premiere Pro</a>
                            </div>

                            <div class="col-md-3">
                                <h6><i class="fas fa-shield-alt me-2"></i>Trending</h6>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Ethical-Hacking-Online-Training">Ethical Hacking</a>
                                <a class="dropdown-item" href="https://litsedu.com/Course/React-Online-Training.">React JS</a>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Mean-Stack-Online-Training">Mean Stack</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link text-dark" href="https://litsedu.com/fedback">Feedback</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="https://litsedu.com/placement">Placement</a></li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="https://litsedu.com/referral">Refer <span class="badge bg-danger">New</span></a>
                </li>
               
                <li class="nav-item dropdown position-static">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="coursesDropdown">Student Portal</a>
                    <div class="mega-menu">
                        <div class="row">
                            <div class="col-md-3">
                                <a class="dropdown-item fw-bold" href="https://litsedu.com/hireme" style="color: #0ca6a3 !important;">
                                    <i class="fas fa-user-tie me-2"></i>Hire
                                </a>
                                <a class="dropdown-item fw-bold" href="https://litsedu.com/payment" style="color: #0ca6a3 !important;">
                                    <i class="fas fa-credit-card me-2"></i>Pay
                                </a>
                                <a class="dropdown-item fw-bold" href="https://litsedu.com/result" style="color: #0ca6a3 !important;">
                                    <i class="fas fa-file-invoice me-2"></i>Result
                                </a>
                                <a class="dropdown-item fw-bold" href="https://litsedu.com/job_list" style="color: #0ca6a3 !important;">
                                    <i class="fas fa-file-invoice me-2"></i>job search
                                </a>
                                <hr class="my-2"> <h6><i class="fas fa-fire me-2"></i>Trending</h6>
                                <a class="dropdown-item" href="https://litsedu.com/Course/Ethical-Hacking-Online-Training">Ethical Hacking</a>
                                <a class="dropdown-item" href="https://litsedu.com/Course/React-Online-Training.">React JS</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary ms-lg-3" href="https://litsedu.com/contact" style="border-color: #0ca6a3; color: #f4f4f4ff; border-radius: 20px; padding: 5px 20px !important;">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
//   $(document).ready(function() {
//     let timeout;
    
//     $('.nav-item.dropdown').hover(function() {
//         clearTimeout(timeout);
//         $(this).find('.mega-menu').stop(true, true).fadeIn(200);
//     }, function() {
//         timeout = setTimeout(() => {
//             $(this).find('.mega-menu').stop(true, true).fadeOut(200);
//         }, 300); // 300ms delay before closing
//     });
// });
$(document).ready(function() {
    // We use a "Debounce" approach to keep the menu open during mouse movement
    $('.nav-item.dropdown').each(function() {
        let $dropdown = $(this);
        let timeout;

        $dropdown.on('mouseenter', function() {
            clearTimeout(timeout);
            // Close other open menus first
            $('.nav-item.dropdown').not($dropdown).removeClass('is-active');
            $dropdown.addClass('is-active');
        });

        $dropdown.on('mouseleave', function() {
            // Give the user 300ms to reach the menu or move back
            timeout = setTimeout(function() {
                $dropdown.removeClass('is-active');
            }, 300);
        });

        // If mouse enters the actual mega menu, keep it open
        $dropdown.find('.mega-menu').on('mouseenter', function() {
            clearTimeout(timeout);
        });
    });
});

window.onscroll = function() {
    const mainImg = document.getElementById('mainImageContainer');
    const fab = document.getElementById('floatingImgBtn');
    
    // Get the position of the image container
    const rect = mainImg.getBoundingClientRect();

    // If the bottom of the image container is above the top of the viewport
    if (rect.bottom < 0) {
        fab.classList.remove('d-none'); // Show button
        mainImg.classList.add('d-none')
    }
};
</script>