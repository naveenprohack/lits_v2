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
<title>UI/UX Training Course | Learn UI/UX Design Online</title>

<meta name="keywords" content="UI UX course, UI UX training, UI design course, UX design course, UI UX design certification, online UI UX course, best UI UX course, user experience design training, user interface design course, web design course, mobile UI UX design, learn UI UX online, UI UX classes, UX research course, UI prototyping, Figma course, Adobe XD training, UI UX bootcamp, UI UX designer training, UI UX fundamentals, UX strategy, wireframing course, interaction design course, UI UX design for beginners, UI UX online training with placement, UI UX course fees, UI UX development course, UI UX masterclass, usability testing course, best place to learn UI UX design">

<meta name="description" content="Join our UI/UX Training Course and learn user experience and interface design from industry experts. Master wireframing, prototyping, UX research, and design tools like Figma and Adobe XD. Enroll now!">

<meta name="author" content="litsedu.com">
<meta name="robots" content="index, follow">
<meta property="og:title" content="UI/UX Training Course | Learn UI/UX Design Online">
<meta property="og:description" content="Boost your career with our expert-led UI/UX training course. Learn UI/UX design principles, usability testing, wireframing, and prototyping with industry tools like Figma and Adobe XD. Enroll today!">
<meta property="og:url" content="https://www.litsedu.com/ui-ux-course">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.litsedu.com/images/ui-ux-course-banner.jpg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="UI/UX Training Course | Learn UI/UX Design Online">
<meta name="twitter:description" content="Advance your career in UI/UX design. Learn essential skills in UX research, prototyping, wireframing, and usability testing with expert guidance.">
<meta name="twitter:image" content="https://www.litsedu.com/images/ui-ux-course-banner.jpg">

 <link rel="canonical" href="https://litsedu.com/UI-UX-Design-Online-Training">
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
                            <img src="https://litsedu.com/image/courseimg/UI-UX-Design-Online-Training.png" class="card-img-top" alt="UI-UX-Design-Online-Training" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">UI UX Design</h1>
                                <p class="card-text">COMPLETE UI UX DESIGN COURSE IN TAMIL</p>
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
                                        <i>1,459 Ratings</i>                      
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
                            <p class=" text-dark">The UI/UX Design course provides a comprehensive introduction to User Interface (UI) and User Experience (UX) design principles and practices. This course focuses on creating user-centered designs for websites and applications, ensuring both usability and aesthetic appeal. Learners will explore design processes, tools, and techniques to create intuitive, engaging, and effective user experiences.</p>
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
                        
                            <p class="card-text">Understand the principles of UI/UX design, including user-centered design, usability, and accessibility</p>
                            <p class="card-text">Learn how to conduct user research and create user personas to inform design decisions.</p>
                            <p class="card-text">Gain proficiency in wireframing, prototyping, and creating high-fidelity mockups using design tools like Sketch, Figma, or Adobe XD.</p>
                            <p class="card-text">Explore design systems, style guides, and best practices for maintaining consistency and efficiency in design projects.</p>
                            <p class="card-text">Develop skills in usability testing and iterative design to refine and improve user interfaces based on feedback.</p>
                            <p class="card-text">Master best practices for designing responsive and adaptive interfaces that work across different devices and screen sizes.</p>
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
                              
                                    <p class="card-text">Aspiring UI/UX designers and graphic designers looking to specialize in user experience and interface design.</p>
                                     <p class="card-text">Web and app developers interested in improving their design skills and understanding of UX principles.</p>
                                    <p class="card-text">Product managers and marketers who want to gain insights into the design process to better collaborate with design teams.</p>
                                    
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
                            <p class=" text-dark mb-0">Basic knowledge of design principles and general computer operations.</p>
                            <p class=" text-dark mb-0">Familiarity with design software or tools is beneficial but not required.</p>
                            <p class=" text-dark mb-0">Access to design tools such as Sketch, Figma, or Adobe XD for hands-on practice is beneficial but not required.</p>
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
                <!-- Introduction to UI/UX Design -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to UI/UX Design</td>
                </tr>

                <!-- User Research -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-search fs-3 text-info"></i></th>
                    <td class="fs-5">User Research</td>
                </tr>

                <!-- Personas and User Stories -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-person-badge fs-3 text-primary"></i></th>
                    <td class="fs-5">Personas and User Stories</td>
                </tr>

                <!-- Information Architecture -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-diagram-2 fs-3 text-warning"></i></th>
                    <td class="fs-5">Information Architecture</td>
                </tr>

                <!-- Wireframing and Prototyping -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-ui-checks fs-3 text-success"></i></th>
                    <td class="fs-5">Wireframing and Prototyping</td>
                </tr>

                <!-- Interaction Design -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrows-move fs-3 text-info"></i></th>
                    <td class="fs-5">Interaction Design</td>
                </tr>

                <!-- Visual Design Principles -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-palette fs-3 text-primary"></i></th>
                    <td class="fs-5">Visual Design Principles</td>
                </tr>

                <!-- UI Components and Patterns -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-puzzle fs-3 text-warning"></i></th>
                    <td class="fs-5">UI Components and Patterns</td>
                </tr>

                <!-- Design Systems -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-grid-3x3-gap fs-3 text-success"></i></th>
                    <td class="fs-5">Design Systems</td>
                </tr>

                <!-- Usability Testing -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-info"></i></th>
                    <td class="fs-5">Usability Testing</td>
                </tr>

                <!-- A/B Testing -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-left-right fs-3 text-primary"></i></th>
                    <td class="fs-5">A/B Testing</td>
                </tr>

                <!-- Responsive Design -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-device-sd-card fs-3 text-warning"></i></th>
                    <td class="fs-5">Responsive Design</td>
                </tr>

                <!-- Mobile-First Design -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-phone fs-3 text-success"></i></th>
                    <td class="fs-5">Mobile-First Design</td>
                </tr>

                <!-- Accessibility -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-wheelchair fs-3 text-info"></i></th>
                    <td class="fs-5">Accessibility</td>
                </tr>

                <!-- Tools and Technologies -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-tools fs-3 text-primary"></i></th>
                    <td class="fs-5">Tools and Technologies</td>
                </tr>

                <!-- Trends and Best Practices -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-lightbulb fs-3 text-warning"></i></th>
                    <td class="fs-5">Trends and Best Practices</td>
                </tr>

                <!-- Portfolio Development -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-person fs-3 text-success"></i></th>
                    <td class="fs-5">Portfolio Development</td>
                </tr>

                <!-- Project Management and Collaboration -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-people fs-3 text-info"></i></th>
                    <td class="fs-5">Project Management and Collaboration</td>
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
                                   
                                    <p class="card-text">UI/UX Designer</p>
                                    <p class="card-text">Product Designer</p>
                                    <p class="card-text">Interaction Designer</p>
                                    <p class="card-text">User Researcher</p>
                                    <p class="card-text">UX Strategist</p>
                                    <p class="card-text">Visual Designer</p>
                                    <p class="card-text">Design Consultant</p>
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

