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
<title>.NET MAUI Course | Learn Cross-Platform App Development</title>

<meta name="keywords" content=".NET MAUI course, learn .NET MAUI, cross-platform app development, .NET MAUI training, mobile app development with .NET, Xamarin alternative, .NET MAUI tutorial, C# app development, build apps with .NET MAUI, .NET MAUI online course, .NET MAUI certification, best .NET MAUI courses, .NET MAUI framework, .NET MAUI UI design, native apps with .NET MAUI, Blazor with .NET MAUI, .NET MAUI Android iOS Windows Mac">

<meta name="description" content="Master .NET MAUI for cross-platform app development. Learn to build mobile & desktop apps using C# and .NET MAUI framework. Enroll now!">

<meta name="author" content="litsedu.com">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": ".NET MAUI Course | Learn Cross-Platform App Development",
  "description": "Master .NET MAUI for cross-platform app development. Learn to build mobile & desktop apps using C# and .NET MAUI framework. Enroll now!",
  "provider": {
    "@type": "Organization",
    "name": "Learn Institute of Technology",
    "url": "https://litsedu.com"
  },
  "courseMode": "Online",
  "isPartOf": {
    "@type": "EducationalOrganization",
    "name": "Litsedu",
    "url": "https://litsedu.com"
  },
  "educationalLevel": "Beginner, Intermediate, Advanced",
  "hasCourseInstance": {
    "@type": "CourseInstance",
    "courseMode": "Online",
    "startDate": "2025-02-10",
    "endDate": "2025-12-31",
    "instructor": {
      "@type": "Person",
      "name": ".NET MAUI Expert Trainer",
      "affiliation": {
        "@type": "Organization",
        "name": "Litsedu"
      }
    },
    "offers": {
      "@type": "Offer",
      "price": "Contact for Pricing",
      "priceCurrency": "USD",
      "url": "https://litsedu.com/dotnet-maui-course",
      "validFrom": "2025-02-01"
    }
  }
  </script>
   <link rel="canonical" href="https://litsedu.com/Net-Maui-Online-Training"/>
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
                            <img src="./image/courseimg/Net-Maui-Online-Training.png" class="card-img-top" alt="learn institute of technology service"style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">.NET MAUI</h1>
                                <p class="card-text">COMPLETE .NET MAUI COURSE IN TAMIL</p>
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
                                        <i>1,128 Ratings</i>                      
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
                            <p class=" text-dark">The .NET MAUI (Multi-platform App UI) course provides a comprehensive introduction to .NET MAUI, Microsoft's framework for building cross-platform applications with a single codebase. This course covers the essentials of .NET MAUI, including its architecture, UI components, and development practices. Learners will gain hands-on experience in creating and deploying applications for iOS, Android, macOS, and Windows using .NET MAUI.</p>
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
                        
                            <p class="card-text">Understand the fundamentals of .NET MAUI, including its architecture, components, and how it enables cross-platform development.</p>
                            <p class="card-text">Learn to build user interfaces using .NET MAUIs controls, layouts, and styling options.</p>
                            <p class="card-text">Gain proficiency in managing app data, handling navigation, and integrating with platform-specific features.</p>
                            <p class="card-text">Explore advanced topics such as dependency injection, performance optimization, and testing in .NET MAUI applications.</p>
                            <p class="card-text">Implement best practices for developing and deploying applications across multiple platforms with a unified codebase.</p>
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
                              
                                    <p class="card-text">Aspiring developers looking to build cross-platform applications using .NET MAUI.</p>
                                     <p class="card-text">.NET developers interested in leveraging their existing skills for mobile and desktop application development.</p>
                                    <p class="card-text">Software engineers and developers aiming to understand and apply .NET MAUI for efficient app development across various platforms.</p>
                                    
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
                            <p class=" text-dark mb-0">Basic knowledge of C# and .NET programming is recommended.</p>
                            <p class=" text-dark mb-0">Familiarity with general software development principles and UI design concepts will be beneficial.</p>
                            <p class=" text-dark mb-0">A computer with Visual Studio and the .NET MAUI SDK installed for hands-on practice.</p>
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
                                <td class="fs-5">Introduction to .NET MAUI</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Setting Up the Development Environment (Visual Studio)</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Understanding .NET MAUI Architecture and Components</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Creating and Managing .NET MAUI Projects</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Building User Interfaces: XAML and C#</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Layouts and Controls: StackLayout, Grid, FlexLayout, etc</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Handling User Input: Entry, Button, and Gesture Recognizers</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Data Binding and MVVM Pattern</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Navigation and Routing</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Working with Local and Remote Data: SQLite, REST APIs</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Integrating with Device Features: Camera, GPS, Sensors</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Custom Controls and Graphics</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Implementing Cross-Platform Services and APIs</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Managing Application State and Lifecycle</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Performance Optimization and Best Practices</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Testing and Debugging .NET MAUI Applications</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Deployment: Building for iOS, Android, and Windows</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Security and Privacy Considerations</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Integrating Third-Party Libraries and Tools</td></tr>
                                <tr>
                                <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Real-World Projects and Case Studies</td>
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
                                   
                                    <p class="card-text">.NET MAUI Developer</p>
                                    <p class="card-text">Cross-Platform Application Developer</p>
                                    <p class="card-text">Mobile and Desktop App Developer</p>
                                    <p class="card-text">Software Engineer</p>
                                    <p class="card-text">Full Stack Developer</p>
                                    <p class="card-text">App Product Manager</p>
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

