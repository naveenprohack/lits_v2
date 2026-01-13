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
<title>Arduino Programming & Electronics Course | Learn Institute of Technology</title>

<meta name="keywords" content="Arduino course, Arduino programming, Arduino for beginners, learn Arduino, Arduino projects, embedded systems, IoT with Arduino, Arduino Uno, Arduino tutorial, microcontroller programming, robotics with Arduino, hardware programming, Arduino with Python, Arduino with C++, sensor programming, IoT development, Arduino electronics, Arduino automation, Arduino coding classes, best Arduino course">

<meta name="description" content="Learn Arduino programming and electronics. Master microcontroller programming, IoT development, and build real-world Arduino projects.">

<meta name="author" content="Learn Institute of Technology">
<meta name="robots" content="index, follow">
<meta property="og:title" content="Arduino Programming & Electronics Course | Learn Institute of Technology">
<meta property="og:description" content="Master Arduino programming, IoT development, and embedded systems. Learn to build real-world projects using Arduino Uno and sensors.">
<meta property="og:image" content="https://litsedu.com/image/ArduIno-Online-Training.png">
<meta property="og:url" content="https://litsedu.com/">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Arduino Programming & Electronics Course | Learn Institute of Technology">
<meta name="twitter:description" content="Learn to program Arduino and develop IoT applications. Build projects with sensors, microcontrollers, and automation.">
<meta name="twitter:image" content="https://litsedu.com/image/ArduIno-Online-Training.png">
<link rel="canonical" href="https://litsedu.com/ArduIno-Online-Training" />
<link rel="icon" type="image/png" href="image/Logo.png">
<!-- JSON-LD Schema Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Learn Institute of Technology",
  "url": "https://litsedu.com/",
  "logo": "https://litsedu.com/image/Logo.png",
  "description": "Learn Arduino programming, IoT development, and microcontroller-based automation. Master embedded systems and build real-world Arduino projects.",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91-9952252054",
    "contactType": "customer service",
    "contactOption": "TollFree",
    "areaServed": "IN",
    "availableLanguage": "en"
  },
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Chengalpattu",
    "addressRegion": "Tamil Nadu",
    "addressCountry": "IN"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "ratingCount": "110",
    "bestRating": "5",
    "worstRating": "1"
  },
  "sameAs": [
    "https://www.facebook.com/profile.php?id=61572481226287",
    "https://www.instagram.com/learninstituteoftechnology/p/C5Vv0qlhjli/",
    "https://litsedu.com/"
  ],
  "course": [
    {
      "@type": "Course",
      "name": "Arduino for Beginners",
      "description": "Learn Arduino programming, understand microcontrollers, and build basic electronics projects.",
      "provider": {
        "@type": "EducationalOrganization",
        "name": "Learn Institute of Technology",
        "url": "https://litsedu.com/"
      }
    },
    {
      "@type": "Course",
      "name": "Advanced Arduino with IoT",
      "description": "Master Arduino programming and IoT development. Learn to work with sensors, actuators, and cloud integration.",
      "provider": {
        "@type": "EducationalOrganization",
        "name": "Learn Institute of Technology",
        "url": "https://litsedu.com/"
      }
    },
    {
      "@type": "Course",
      "name": "Arduino Robotics & Automation",
      "description": "Learn to build autonomous robots and automation projects using Arduino. Covers motor control, sensor integration, and real-world applications.",
      "provider": {
        "@type": "EducationalOrganization",
        "name": "Learn Institute of Technology",
        "url": "https://litsedu.com/"
      }
    }
  ]
}
</script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     
    <!--</div> <!-- End Course Page Banner -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

   
<div class="container mt-5"> <!-- Start All Course -->
   
       
           
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://litsedu.com/image/courseimg/ArduIno-Online-Training.png" class="card-img-top" alt="ArduIno-Online-Training" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">ARDUINO</h1>
                                <p class="card-text">COMPLETE ARDUINO COURSE IN TAMIL</p>
                                <p class="card-text">Duration: 4 MONTHS </p>
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
                                        <i>1,189 Ratings</i>                      
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
                            <p class=" text-dark">The Arduino course provides a comprehensive introduction to Arduino, a popular open-source electronics platform based on easy-to-use hardware and software. This course covers the fundamentals of Arduino programming and hardware interfacing, including how to create and manage electronic projects. Learners will gain hands-on experience with various sensors, actuators, and components, and learn how to build innovative projects using Arduino.</p>
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
                        
                            <p class="card-text">Understand the core concepts of Arduino, including its hardware architecture, programming environment, and basic components.</p>
                    <p class="card-text">Learn to program Arduino using the Arduino IDE and write sketches to control and interface with various hardware components.</p>
                    <p class="card-text">Gain proficiency in connecting and using sensors, actuators, and other peripherals with Arduino boards.</p>
                    <p class="card-text">Explore advanced topics such as communication protocols (I2C, SPI, UART), data handling, and integrating Arduino with external systems.</p>
                    <p class="card-text">Implement best practices for troubleshooting, debugging, and optimizing Arduino projects.</p>
                    <p class="card-text"></p>
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
                              
                                    <p class="card-text">Electronics enthusiasts and hobbyists interested in learning about Arduino and electronics projects.</p>
                                     <p class="card-text">Students and professionals looking to gain practical experience with microcontrollers and embedded systems.</p>
                                    <p class="card-text">Makers and innovators who want to develop their skills in creating interactive and automated devices using Arduino.</p>
                                    
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
                            <p class=" text-dark mb-0">Basic knowledge of electronics and programming concepts is recommended.</p>
                            <p class=" text-dark mb-0">Familiarity with general hardware components and software development will be beneficial.</p>
                            <p class=" text-dark mb-0">A computer with Arduino IDE and access to Arduino hardware and components for hands-on practice.</p>
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
                    <th scope="row" class="text-center">
                        <i class="bi bi-check-circle-fill fs-3 text-success"></i>
                    </th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Introduction to Arduino
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Arduino Hardware Overview: Boards, Shields, and Accessories
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Setting Up the Arduino IDE: Installation and Configuration
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Basic Arduino Programming: Syntax and Structure
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Digital Input and Output
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Analog Input and Output
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Working with Sensors and Actuators
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Serial Communication: Using Serial Monitor and Serial Communication Protocols
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Interfacing with LCD Displays and Keypads
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Controlling Motors and Servos
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Using Libraries for Extended Functionality
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Networking with Arduino: Wi-Fi and Bluetooth Modules
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Data Logging and Storage
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Power Management and Battery Usage
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Troubleshooting and Debugging Arduino Projects
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Integrating Arduino with Other Systems: Raspberry Pi, PC
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Best Practices for Arduino Development
                    </td></tr>
                    <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">
                        <i class="bi bi-check-circle-fill text-primary me-2"></i> Real-World Projects and Case Studies
                    </td>
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
                                   
                                    <p class="card-text">Embedded Systems Engineer</p>
                                    <p class="card-text">Electronics Technician</p>
                                    <p class="card-text">Hardware Developer</p>
                                    <p class="card-text">IoT Developer</p>
                                    <p class="card-text">Robotics Engineer</p>
                                    <p class="card-text">Maker/DIY Enthusiast</p>
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

