<?php
  include('./dbConnection.php');
  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
?>  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Wix Training - Learn How to Build Websites with Wix</title>

<!-- Meta Keywords (focused on Wix website builder and web development) -->
<meta name="keywords" content="Wix training, learn Wix, Wix website builder, create websites with Wix, Wix course, build websites online, Wix tutorial, Wix design course, Wix for beginners, Wix website creation, Wix site building, Wix for small businesses, professional Wix websites, free Wix course, advanced Wix features, Wix website setup, web design with Wix, Wix SEO course, Wix web design tips" />

<!-- Meta Description (focused on the benefits of learning Wix website building) -->
<meta name="description" content="Learn how to create professional websites with Wix. Our Wix training course covers everything from basic design to advanced customization, SEO optimization, and e-commerce integration." />

<!-- Meta Author -->
<meta name="author" content="litsedu.com" />

<!-- Open Graph Tags for Social Media Sharing -->
<meta property="og:title" content="Wix Training - Learn How to Build Websites with Wix" />
<meta property="og:description" content="Master Wix and build stunning websites with ease. Our comprehensive training course covers everything from basic design to advanced features and SEO." />
<meta property="og:image" content="https://www.litsedu.com/image/courseimg/Wix-Online-Training.png" /> <!-- Replace with your image URL -->
<meta property="og:url" content="https://www.litsedu.com/image/courseimg/Wix-Online-Training" /> <!-- Replace with your actual page URL -->

<!-- Twitter Card Tags -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Wix Training - Learn How to Build Websites with Wix" />
<meta name="twitter:description" content="Learn to create websites with Wix. From beginners to advanced skills, this training covers everything you need to build a professional website." />
<meta name="twitter:image" content="https://www.litsedu.com/image/courseimg/Wix-Online-Training.png" /> <!-- Replace with your image URL -->
<link rel="icon" type="image/png" href="image/Logo.png">
 
<link rel="canonical" href="https://litsedu.com/Wix-Online-Training" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="canonical" href="https://litsedu.com/Wix-Online-Training">
  <link rel="icon" type="image/png" href="image/Logo.png">
     
    <!--</div> <!-- End Course Page Banner -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

   
<div class="container mt-5"> <!-- Start All Course -->
   
       
           
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://www.litsedu.com/image/courseimg/Wix-Online-Training.png" class="card-img-top" alt="learn institute of technology service" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">wix training</h1>
WIX</h1>
                                <p class="card-text">COMPLETE WIX COURSE IN TAMIL</p>
                                <p class="card-text">Duration: 3 MONTHS</p>
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
                                        <i>1,328 Ratings</i>                      
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
                          <h5>  100 % Secure Payment option (Payment Methods)</h5>
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
                            <p class=" text-dark">The Wix course provides a comprehensive introduction to Wix, a popular website builder that enables users to create professional, visually appealing websites without needing advanced coding skills. This course covers essential concepts and practices for using Wix�s drag-and-drop editor, templates, and features to design, customize, and publish websites. Learners will gain hands-on experience with Wix�s tools to build functional and attractive web pages tailored to various needs.</p>
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
                        
                            <p class="card-text">Understand the core features of Wix, including its user interface, templates, and drag-and-drop editor.</p>
                    <p class="card-text">Learn to create and customize websites using Wixs design tools, including layout, typography, and multimedia elements.</p>
                    <p class="card-text">Gain proficiency in setting up and managing website pages, navigation, and content to create a cohesive online presence.</p>
                    <p class="card-text">Explore advanced topics such as integrating Wix with third-party applications, optimizing SEO, and implementing e-commerce functionalities.</p>
                    <p class="card-text">Implement best practices for designing user-friendly websites, managing website performance, and ensuring mobile responsiveness.</p>
                 
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
                              
                                    <p class="card-text">Entrepreneurs, business owners, and individuals looking to create or enhance their websites using Wix without extensive coding knowledge.</p>
                                     <p class="card-text">Web designers, marketers, and content creators interested in learning about Wix capabilities for website development and management.</p>
                                    <p class="card-text">Students and professionals seeking practical experience with Wix for building and maintaining websites.</p>
                                    
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
                            <p class=" text-dark mb-0">Basic knowledge of web design and content management concepts is recommend</p>
                            <p class=" text-dark mb-0">Familiarity with general design principles and multimedia content will be beneficial.</p>
                            <p class=" text-dark mb-0">A computer with access to Wix for hands-on practice and website development.</p>
                        </div>
                    </div>
</div>

 
                    
                    
                    
    <div class="container my-5">
    <div class="row">
      
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="text-center"></th>
                            <th scope="col"><h2 style="color:rgb(221, 100, 43);">Topics</h2></th>
                        </tr>
                    </thead>
                    <tbody>
                   
                            <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Introduction to Wix</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Setting Up a Wix Account and Website</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Understanding the Wix Interface and Dashboard</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Choosing and Customizing Templates</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">	Designing Pages: Layouts, Backgrounds, and Widgets</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Adding and Managing Content: Text, Images, Videos</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Working with Wix Editor: Drag-and-Drop Features</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">	Creating and Managing Menus and Navigation</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Using Wix App Market: Integrations and Widgets</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">	Designing Responsive Websites for Mobile and Desktop</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">mplementing E-Commerce Features: Products, Payments, and Orders</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">SEO Best Practices for Wix Websites</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">	Setting Up and Customizing Forms</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">	Managing and Analyzing Website Analytics</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">	Integrating Social Media and External Tools</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Using Wix Corvid: Adding Custom Code and Functionality</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Security and Privacy Settings</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Testing and Previewing Your Website</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Publishing and Managing Your Wix Website</td></tr>
                                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">	Case Studies and Real-World Examples</td>
                             
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
                     
                </div>';

               
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="row g-0">
                            
                            <div class="col-md-9">
                                <div class="card-body">
                                   
                                    <p class="card-text">Web Designer</p>
                                    <p class="card-text">Website Developer</p>
                                    <p class="card-text">Digital Marketing Specialist</p>
                                    <p class="card-text">E-Commerce Manager</p>
                                    <p class="card-text">Content Manager</p>
                                    <p class="card-text">Online Business Consultant</p>
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

