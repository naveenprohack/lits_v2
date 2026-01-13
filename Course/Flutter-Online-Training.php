
<!DOCTYPE html>
<html lang="en">
  <head>
   <!-- Standard Meta Tags -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Flutter Development Course - Learn Flutter Online</title>

<meta name="keywords" content="Flutter Development Course, Learn Flutter, Flutter Online Course, Flutter for Beginners, Mobile App Development with Flutter, Flutter UI Design, Flutter Programming, Flutter Certification, Mobile App Development, Learn Dart Programming, Cross-platform App Development, Build Apps with Flutter, Flutter Development Tutorial">

<meta name="description" content="Master mobile app development using Flutter with our comprehensive online course. Learn how to build cross-platform apps with a modern framework. Start learning Flutter today at Learn Institute of Technology.">

<meta name="author" content="litsedu.com">

<!-- Open Graph and Twitter Cards -->
<meta property="og:title" content="Flutter Development Course - Learn Flutter Online">
<meta property="og:description" content="Join our Flutter Development Course and learn to build cross-platform mobile applications with Flutter. Master app design and development with hands-on practice.">
<meta property="og:image" content="https://www.litsedu.com/images/flutter-course.jpg">
<meta property="og:url" content="https://www.litsedu.com/flutter-course">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Flutter Development Course - Learn Flutter Online">
<meta name="twitter:description" content="Enroll in our Flutter Development Course and learn how to build beautiful and functional mobile applications with Flutter. Start your journey in mobile app development today.">
<meta name="twitter:image" content="https://www.litsedu.com/images/flutter-course.jpg">
<meta name="twitter:url" content="https://www.litsedu.com/flutter-course">

<!-- Schema Markup for Flutter Course (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Flutter Development Course",
  "description": "Learn to build beautiful mobile applications for iOS and Android using the Flutter framework. This course covers everything from basic concepts to advanced mobile app development techniques.",
  "provider": {
    "@type": "Organization",
    "name": "Learn Institute of Technology",
    "sameAs": "https://www.litsedu.com"
  },
  "educationalCredentialAwarded": "Flutter Development Certification",
  "courseMode": "Online",
  "offers": {
    "@type": "Offer",
    "url": "https://www.litsedu.com/flutter-course",
    "priceCurrency": "USD",
    "price": "499.99",
    "eligibleRegion": {
      "@type": "Place",
      "name": "Worldwide"
    }
  },
  "datePosted": "2025-02-23",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "200"
  },
  "review": {
    "@type": "Review",
    "author": {
      "@type": "Person",
      "name": "John Doe"
    },
    "datePublished": "2025-01-15",
    "reviewBody": "The Flutter course was an incredible learning experience. The content was well-organized, and the hands-on practice with building real apps helped solidify my understanding. Highly recommend this course!"
  }
}
</script>
   <link rel="canonical" href="https://litsedu.com/Flutter-Online-Training"/>
   <link rel="icon" type="image/png" href="image/Logo.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     
    <!--</div> <!-- End Course Page Banner -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<?php 
include('./dbConnection.php');


  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
  
   // Header Include from mainInclude 
  include('./floatingwi.php'); 

?>

   
<div class="container mt-5"> <!-- Start All Course -->
   
       
           
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./image/courseimg/Flutter-Online-Training.png" class="card-img-top" alt="learn institute of technology service" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">Flutter</h1>
                                <p class="card-text">COMPLETE FLUTTER COURSE IN TAMIL</p>
                                <p class="card-text">Duration: 4 Month</p>
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
                                        <i>1,236 Ratings</i>                      
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
                          <h5>  100 % Secure Payment option (Online Payment only)</h5>
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
                            <p class=" text-dark">The Flutter course is designed to provide a comprehensive introduction to Flutter, Google�s open-source UI toolkit for building natively compiled mobile, web, and desktop applications from a single codebase. This course covers everything from setting up the development environment to building fully functional applications for iOS and Android using Flutter and the Dart programming language. By the end of the course, learners will be able to create beautiful, responsive, and high-performance apps.</p>
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
                        
                            <p class="card-text">Understand the fundamentals of Flutter and Dart, including the widget-based architecture.</p>
                            <p class="card-text">Learn how to create responsive and adaptive user interfaces for mobile, web, and desktop applications.</p>
                            <p class="card-text">Gain proficiency in working with Flutters layout and navigation components to build seamless UIs.</p>
                            <p class="card-text">Explore state management techniques in Flutter using Provider, Riverpod, and Bloc.</p>
                            <p class="card-text">Master how to integrate RESTful APIs, Firebase, and databases into Flutter applications.</p>
                            <p class="card-text">Develop, debug, and deploy Flutter apps for iOS and Android platforms.</p>
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
                              
                                    <p class="card-text">Aspiring mobile app developers who want to build cross-platform apps with a single codebase.</p>
                                     <p class="card-text">Web developers and frontend engineers looking to expand their skills to mobile app development.</p>
                                    <p class="card-text">Entrepreneurs and startups who want to develop their own mobile applications quickly and efficiently.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
</div>



         
<div class="container my-5">
    <div class="text-center mb-5">
        <h4 class="display-5 fw-bold text-uppercase" style="color:rgb(221, 100, 43);">Requirements</h4>
        <p class="text-muted">Everything you need to know before getting started with this course</p>
    </div>

    <!-- Card for Requirements -->
    <div class="card shadow border-0">
        <div class="card-body">
            <ul class="list-unstyled">
                <!-- Requirement 1 -->
                <li class="d-flex align-items-start mb-3">
                    <span class="text-success me-3">
                        <i class="bi bi-check-circle-fill fs-4"></i>
                    </span>
                    <p class="mb-0">Basic programming knowledge is recommended (preferably in any object-oriented language like Java, C#, or Python).</p>
                </li>

                <!-- Requirement 2 -->
                <li class="d-flex align-items-start mb-3">
                    <span class="text-success me-3">
                        <i class="bi bi-check-circle-fill fs-4"></i>
                    </span>
                    <p class="mb-0">Familiarity with mobile development concepts is a plus but not mandatory.</p>
                </li>

                <!-- Requirement 3 -->
                <li class="d-flex align-items-start mb-3">
                    <span class="text-success me-3">
                        <i class="bi bi-check-circle-fill fs-4"></i>
                    </span>
                    <p class="mb-0">Access to a development environment (VS Code or Android Studio) and Flutter SDK for hands-on practice.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

 
                    
                    
                    
    <div class="container my-5">
    <div class="row">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col"><h2 style="color:rgb(221, 100, 43);">Flutter Development Topics</h2></th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to Flutter</td>
                </tr>

                <!-- Row 2 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Overview of Flutter and its advantages</td>
                </tr>

                <!-- Row 3 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Installation and setup (Flutter SDK, IDE setup)</td>
                </tr>

                <!-- Row 4 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Flutter architecture: Widgets, Elements, RenderObjects</td>
                </tr>

                <!-- Row 5 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Creating your first Flutter app</td>
                </tr>

                <!-- Row 6 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Dart Programming Language Basics</td>
                </tr>

                <!-- Row 7 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to Dart programming language</td>
                </tr>

                <!-- Row 8 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Dart syntax and basic constructs</td>
                </tr>

                <!-- Row 9 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Functions, variables, data types</td>
                </tr>

                <!-- Row 10 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Control flow and loops</td>
                </tr>

                <!-- Row 11 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Building UIs with Flutter</td>
                </tr>

                <!-- Row 12 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Flutter widgets and widget tree</td>
                </tr>

                <!-- Row 13 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Layouts and constraints</td>
                </tr>

                <!-- Row 14 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Styling and theming</td>
                </tr>

                <!-- Row 15 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Handling user input and gestures</td>
                </tr>

                <!-- Row 16 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Navigation and Routing</td>
                </tr>

                <!-- Row 17 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Navigation basics in Flutter</td>
                </tr>

                <!-- Row 18 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Route management</td>
                </tr>

                <!-- Row 19 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Passing data between screens</td>
                </tr>

                <!-- Row 20 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Navigation drawer and tabs</td>
                </tr>

                <!-- Row 21 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">State Management</td>
                </tr>

                <!-- Row 22 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Stateful vs. stateless widgets</td>
                </tr>

                <!-- Row 23 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Managing state using setState</td>
                </tr>

                <!-- Row 24 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">State management techniques (Provider, BLoC, Riverpod)</td>
                </tr>

                <!-- Row 25 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Networking and Data Handling</td>
                </tr>

                <!-- Row 26 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Working with APIs in Flutter</td>
                </tr>

                <!-- Row 27 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Fetching and displaying data from the internet</td>
                </tr>

                <!-- Row 28 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Parsing JSON data</td>
                </tr>

                <!-- Row 29 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Error handling and asynchronous programming</td>
                </tr>

                <!-- Row 30 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Working with Device Features</td>
                </tr>

                <!-- Row 31 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Accessing device sensors (camera, GPS)</td>
                </tr>

                <!-- Row 32 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Using platform-specific code (Platform Channels)</td>
                </tr>

                <!-- Row 33 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Working with permissions</td>
                </tr>

                <!-- Row 34 -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Integrating Firebase for backend services</td>
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
                                   
                                    <p class="card-text">Flutter Developer</p>
                                    <p class="card-text">Mobile App Developer</p>
                                    <p class="card-text">Frontend Developer (Mobile)</p>
                                    <p class="card-text">Cross-Platform App Developer</p>
                                    <p class="card-text">Full-Stack Developer</p>
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

