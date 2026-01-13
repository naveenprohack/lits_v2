<?php
  include('./dbConnection.php');
  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
?>  

<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Meta Tags for Laravel Course -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Laravel Course - Master Web Development with Laravel</title>

<!-- Optimized Keywords for Laravel Course -->
<meta name="keywords" content="Laravel course, learn Laravel, Laravel web development, Laravel tutorial, Laravel framework, PHP Laravel course, Laravel for beginners, Laravel for developers, web application with Laravel, advanced Laravel course, Laravel online course, PHP development with Laravel, web development with Laravel, best Laravel course, Laravel project development, Laravel application development, Laravel course online, Laravel frameworks and tools, full-stack development with Laravel">

<!-- Description for Laravel Course -->
<meta name="description" content="Learn to build modern web applications with the Laravel framework. This course covers the essentials of Laravel, from the basics to advanced concepts, to help you become a proficient Laravel developer.">

<!-- Author of the course -->
<meta name="author" content="litsedu.com">

<!-- Open Graph tags for better social media sharing -->
<meta property="og:title" content="Laravel Course - Master Web Development with Laravel">
<meta property="og:description" content="Master Laravel, the PHP framework for building web applications. Learn everything from routing, views, and controllers to advanced topics in Laravel development.">
<meta property="og:image" content="https://www.litsedu.com/images/laravel-course.jpg">
<meta property="og:url" content="https://www.litsedu.com/laravel-course">
<meta property="og:type" content="website">

<!-- Twitter Card for enhanced sharing -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Laravel Course - Master Web Development with Laravel">
<meta name="twitter:description" content="Learn Laravel from scratch and build real-world web applications with this comprehensive Laravel course. Perfect for developers who want to master the Laravel framework.">
<meta name="twitter:image" content="https://www.litsedu.com/images/laravel-course.jpg">
<meta name="twitter:url" content="https://www.litsedu.com/laravel-course">

<!-- Structured Data (JSON-LD) for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Laravel Course - Master Web Development with Laravel",
  "description": "Learn how to build dynamic web applications with Laravel, a powerful PHP framework. This course includes hands-on projects and advanced techniques for developing with Laravel.",
  "provider": {
    "@type": "Organization",
    "name": "Learn Institute of Technology",
    "sameAs": "https://www.litsedu.com"
  },
  "educationalCredentialAwarded": "Laravel Certification",
  "courseMode": "Online",
  "offers": {
    "@type": "Offer",
    "url": "https://www.litsedu.com/laravel-course",
    "priceCurrency": "USD",
    "price": "299.99",
    "eligibleRegion": {
      "@type": "Place",
      "name": "Worldwide"
    }
  },
  "datePosted": "2025-02-23",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "120"
  },
  "review": {
    "@type": "Review",
    "author": {
      "@type": "Person",
      "name": "Jane Smith"
    },
    "datePublished": "2025-02-19",
    "reviewBody": "The Laravel course was incredibly thorough. I was able to build a complete application using Laravel, and I feel confident to develop web apps on my own!"
  }
}
</script>

 <link rel="canonical" href="https://litsedu.com/Laravel-Online-Training"/>
   <link rel="icon" type="image/png" href="image/Logo.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     
    <!--</div> <!-- End Course Page Banner -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

   
<div class="container mt-5"> <!-- Start All Course -->
   
       
           
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./image/courseimg/Laravel-Online-Training.png" class="card-img-top" alt="learn institute of technology service" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">LARAVEL</h1>
                                <p class="card-text">COMPLETE LARAVEL COURSE IN TAMIL</p>
                                <p class="card-text">Duration: 4 month</p>
                                <form action="checkout.php" method="post">
                                    <!-- <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p> -->
                                    <!-- <input type="hidden" name="id" value='. $row["course_price"] .'> -->
                                    <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
                                </form> 
                                <!-- Five Star Rating System -->
                                <div class="mt-3">
                                    <div class="star-rating mt-3">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        &nbsp; 
                                        <i>1,095 Ratings</i>                      
                                    </div>
                                    <input type="hidden" name="rating" id="rating" value="">
                                </div>
                                <br>
                                <a href="javascript:void(0);" onclick="shareCourseLink(\''.htmlspecialchars($row['course_name']).'\', \''.htmlspecialchars($row['course_desc']).'\')" class="text-secondary">
                                        <i class="fas fa-share-alt"></i> Share
                                    </a>
                            </div>
                            <div>
                            <br>
                          <h5>  100 % Secure Payment option (Online Payments Only)</h5>
                            </div>
                        </div>
                    </div>
                    
</div>









      
     
     
    <div class="container my-5">
   
                <div class="text-center mb-4">
                    <h3 class="display-6 fw-bold text-uppercase" style="color:rgb(221, 100, 43);">Course Overview</h3>
                    <p class="text-muted">A brief introduction to what you will learn in this course</p>
                </div>

                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <p class=" text-dark">Laravel is a powerful and elegant PHP framework designed for web application development. It provides a robust set of tools and features for building modern, secure, and maintainable web applications. This course covers the core concepts of Laravel, including its architecture, routing, and database management, equipping learners with the skills to develop and deploy Laravel applications efficiently.</p>
                        </div>
                    </div>
</div>
 



 <div class="container my-5">
   
                <div class="text-center mb-5">
                    <h3 class="display-6 fw-bold text-uppercase" style="color:rgb(221, 100, 43);">Course Objective</h3>
                    <p class="text-muted">Learn what you will achieve by the end of this course</p>
                </div>

                
                    <div class="card bg-light mb-4 shadow-sm border-0">
                        <div class="card-body">
                        
                            <p class="card-text">Understand the fundamentals of Laravel, including its MVC (Model-View-Controller) architecture and core components.</p>
                            <p class="card-text">Learn to set up and configure Laravel applications, including routing, middleware, and controllers.</p>
                            <p class="card-text">Gain proficiency in using Eloquent ORM for database management and querying.</p>
                            <p class="card-text">Explore advanced features such as Laravel Blade templating, authentication, and testing.</p>
                            <p class="card-text">Implement best practices for application security, performance optimization, and deployment.</p>
                        </div>
                    </div>
</div>


 <div class="container my-5">
   
                <div class="text-center mb-5">
                    <h3 class="display-6 fw-bold text-uppercase" style="color:rgb(221, 100, 43);">Who is this Course For?</h3>
                    <p class="text-muted">Discover the audience this course is designed for</p>
                     <div class="row g-0">
                     <div class="col-md-3 d-flex align-items-center justify-content-center bg-info text-white p-4" style="background: linear-gradient(45deg, #1e90ff, #00bfff);">
                                <i class="bi bi-people-fill display-3"></i>
                            </div></div>
                </div>

               
                    <div class="card bg-white border-0 mb-4 shadow-sm">
                        <div class="row g-0">
                           
                            <div class="col-md-9">
                                <div class="card-body">
                              
                                    <p class="card-text">PHP developers looking to master Laravel for building modern web applications.</p>
                                     <p class="card-text">Web developers and software engineers interested in leveraging Laravels features for efficient application development.</p>
                                    <p class="card-text">IT professionals and system administrators seeking to understand Laravel for application deployment and management.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
</div>



         

<div class="container my-5">
  
                <div class="text-center mb-5">
                    <h4 class="display-5 fw-bold text-uppercase" style="color:rgb(221, 100, 43);">Requirements</h4>
                    <p class="text-muted">All you need to know before getting started with this course</p>
                </div>

               
                    <div class="card mb-4 shadow border-0">
                        <div class="d-flex align-items-start p-3 bg-light">
                            <span class="text-success me-3">
                                <i class="bi bi-check-circle-fill display-6"></i>
                            </span>
                            <p class=" text-dark mb-0">Basic knowledge of PHP and web development concepts is recommended.</p>
                            <p class=" text-dark mb-0">Familiarity with general programming principles and MVC architecture will be beneficial.</p>
                            <p class=" text-dark mb-0">A computer with PHP, a web server (like Apache or Nginx), and Laravel installed for hands-on practice.</p>
                        </div>
                    </div>
</div>

 
                    
                    
  <div class="container my-5">
    <div class="row">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th scope="col" class="text-center"></th>
                    <th scope="col">
                        <h2 style="color:rgb(221, 100, 43);">Topics</h2>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">
                        <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    </td>
                    <td class="fs-5">Introduction to Laravel</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    </td>
                    <td class="fs-5">Setting Up Laravel Environment</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    </td>
                    <td class="fs-5">Laravel Architecture and Components</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    </td>
                    <td class="fs-5">Routing and Controllers</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    </td>
                    <td class="fs-5">Blade Templating Engine</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    </td>
                    <td class="fs-5">Working with Models and Eloquent ORM</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    </td>
                    <td class="fs-5">Database Migrations and Seeders</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    </td>
                    <td class="fs-5">Handling Requests and Responses</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    </td>
                    <td class="fs-5">Middleware and Security</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    </td>
                    <td class="fs-5">Authentication and Authorization</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    </td>
                    <td class="fs-5">Form Validation and Error Handling</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    </td>
                    <td class="fs-5">Laravel Services and Dependency Injection</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="container my-5">
   
                <div class="text-center mb-4">
                    <h3 class="text-uppercase fw-bold" style="color:rgb(43, 122, 221);">Career Opportunities After Completion</h3>
                    <p class="text-muted">Explore diverse roles you can take up after finishing the course</p>
                     <h5 class="card-title text-dark fw-bold">Job Opportunities</h5>
                     <div class="col-md-3 d-flex align-items-center justify-content-center bg-primary text-white p-4" style="background: linear-gradient(45deg, #1e90ff, #00bfff);">
                                <i class="bi bi-briefcase-fill display-4"></i>
                            </div>
                     
                </div>

               
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="row g-0">
                            
                            <div class="col-md-9">
                                <div class="card-body">
                                   
                                    <p class="card-text">Laravel Developer</p>
                                    <p class="card-text">PHP Developer</p>
                                    <p class="card-text">Full Stack Developer</p>
                                    <p class="card-text">Web Application Developer</p>
                                    <p class="card-text">Backend Developer</p>
                                    <p class="card-text">Software Engineer</p>
                                </div>
                            </div>
                        </div>
                    </div>
</div>

<div class="container mt-5"> <!-- Start Most Popular Course -->
     
   <div class="text-center">
  <h3>Our Courses</h3>
</div>
<div class="row mt-5 wow fadeInUp"> <!-- Start Most Popular Course Card Grid -->
 
      <div class="col-lg-4 col-md-6 mb-4"> <!-- Responsive Columns for Desktop and Mobile -->
        <a class="text-dark text-decoration-none" href="./uiuxdesign">
          <div class="card h-100">
            <img src="./image/courseimg/UI _ UX Design.png" class="card-img-top "    class="img-fluid"  "alt="learn institute of technology service" />
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <!-- <p class="card-text d-inline">Price: <small><del>&#8377 </del></small> <span class="font-weight-bolder">&#8377 </span></p> -->
              <a class="btn text-white font-weight-bolder float-right" style="background-color:#0ca6a3;" href="./uiuxdesign">Enroll</a>
            </div>
          </div>
        </a>
      </div>
      
       <div class="col-lg-4 col-md-6 mb-4"> 
        <a class="text-dark text-decoration-none" href="./machinelearning">
          <div class="card h-100">
            <img src="./image/courseimg/Machine Learning.png" class="card-img-top "    class="img-fluid" "alt="learn institute of technology service" />
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              
              <a class="btn text-white font-weight-bolder float-right" style="background-color:#0ca6a3;" href="./machinelearning">Enroll</a>
            </div>
          </div>
        </a>
      </div>
      
      
       <div class="col-lg-4 col-md-6 mb-4"> 
        <a class="text-dark text-decoration-none" href=" ">
          <div class="card h-100">
            <img src="./image/courseimg/react.png" class="card-img-top"    class="img-fluid" "alt="learn institute of technology service" />
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <!-- <p class="card-text d-inline">Price: <small><del>&#8377 </del></small> <span class="font-weight-bolder">&#8377 </span></p> -->
              <a class="btn text-white font-weight-bolder float-right" style="background-color:#0ca6a3;" href="./react ">Enroll</a>
            </div>
          </div>
        </a>
      </div>

</div>

    </div>


    </body>
    <!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">

<!-- JavaScript to handle star rating -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
// JavaScript function to share the course link
function shareCourseLink(courseName, courseDesc) {
    // Get the current URL
    var courseLink = window.location.href;
    
    // Use the Web Share API if supported
    if (navigator.share) {
        navigator.share({
            title: 'Check out this course: ' + courseName,
            text: courseDesc,
            url: courseLink
        }).then(() => {
            console.log('Thanks for sharing!');
        })
        .catch(console.error);
    } else {
        // Fallback: Copy the link and course details to the clipboard
        var shareText = 'Check out this course: ' + courseName + '\n' + courseDesc + '\n' + courseLink;
        navigator.clipboard.writeText(shareText).then(function() {
            alert('Course link copied to clipboard!');
        }, function(err) {
            console.error('Failed to copy text: ', err);
        });
    }
}
</script>
<script>
    $(document).ready(function() {
        // Handle star click event
        $('.star-rating .bi').on('click', function() {
            var rating = $(this).data('rating'); // Get the rating value
            $('#rating').val(rating); // Set the hidden input value
            
            // Remove active class from all stars
            $('.star-rating .bi').removeClass('bi-star-fill').addClass('bi-star');
            
            // Add active class to clicked star and all previous stars
            $(this).prevAll().addBack().removeClass('bi-star').addClass('bi-star-fill');
        });
    });
</script>
    </html>
 
  
     <?php 
  // Footer Include from mainInclude 
  include('./mainInclude/footer.php'); 
?>  

