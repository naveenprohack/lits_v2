

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>STAAD Pro Course | Learn Structural Design with STAAD Pro | Learn Institute of Technology</title>

<!-- Meta Keywords (focused on STAAD Pro, structural design, and related terms) -->
<meta name="keywords" content="Learn Institute of Technology, litsedu, STAAD Pro course, STAAD Pro training, structural design, STAAD Pro tutorial, STAAD Pro classes, learn STAAD Pro, STAAD Pro certification, structural engineering course, STAAD Pro online training, structural analysis software, STAAD Pro for civil engineers, STAAD Pro for beginners, STAAD Pro advanced features, STAAD Pro structural analysis, STAAD Pro certification course, civil engineering courses, STAAD Pro course online" />

<!-- Meta Description (focused on the STAAD Pro course and its benefits) -->
<meta name="description" content="Master STAAD Pro with our comprehensive course. Learn structural design, analysis, and modeling with hands-on projects and expert guidance. Ideal for civil engineering students and professionals." />

<!-- Meta Author -->
<meta name="author" content="litsedu.com" />

<!-- Open Graph Tags for Social Media Sharing -->
<meta property="og:title" content="STAAD Pro Course | Learn Structural Design with STAAD Pro | Learn Institute of Technology" />
<meta property="og:description" content="Enhance your skills with our STAAD Pro course. Learn how to perform structural analysis, design buildings, and manage projects using STAAD Pro. Ideal for civil engineers." />
<meta property="og:image" content="URL_TO_IMAGE.jpg" /> <!-- Replace with your image URL -->
<meta property="og:url" content="https://www.litsedu.com/staad-pro-course" /> <!-- Replace with your actual page URL -->

<!-- Twitter Card Tags -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="STAAD Pro Course | Learn Structural Design with STAAD Pro | Learn Institute of Technology" />
<meta name="twitter:description" content="Learn STAAD Pro for structural analysis and design. Master key features and techniques through our hands-on course for civil engineers and design professionals." />
<meta name="twitter:image" content="URL_TO_IMAGE.jpg" /> <!-- Replace with your image URL -->

<link rel="canonical" href="https://litsedu.com/Staad-Pro-Online-Training">
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
                            <img src="./image/courseimg/Staad-Pro-Online-Training.png" class="card-img-top" alt="learn institute of technology service" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">STAAD PRO</h1>
                                <p class="card-text">COMPLETE STAAD PRO COURSE IN TAMIL</p>
                                <p class="card-text">Duration: </p>
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
                                        <i>1,172 Ratings</i>                      
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
                          <h5>  100 % Secure Payment option (online Payments Only)</h5>
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
                            <p class=" text-dark">The STAAD.Pro course offers a detailed introduction to one of the most widely used structural analysis and design software tools. STAAD.Pro is designed for civil and structural engineers to analyze and design structures with high accuracy. This course covers the core functionalities of STAAD.Pro, including modeling, analysis, and design of structures, enabling engineers to efficiently manage complex projects.</p>
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
                        
                            <p class="card-text">Understand the fundamentals of STAAD.Pro and its user interface.</p>
                            <p class="card-text">Learn how to create and manage structural models, including defining geometry, loads, and supports.</p>
                            <p class="card-text">Gain proficiency in performing structural analysis using various methods, including linear and nonlinear analysis</p>
                            <p class="card-text">Explore design capabilities for different types of structures, including buildings, bridges, and towers.</p>
                            <p class="card-text">Develop skills in interpreting analysis results and generating comprehensive design reports.</p>
                            <p class="card-text">Master advanced features such as dynamic analysis, response spectrum analysis, and integration with other engineering software.</p>
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
                              
                                    <p class="card-text">Civil and structural engineers seeking to enhance their skills in structural analysis and design.</p>
                                     <p class="card-text">Engineering students and professionals interested in learning STAAD.Pro for practical applications in their projects.</p>
                                    <p class="card-text">Project managers and consultants who need to understand structural analysis software for better project oversight.</p>
                                    
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
                            <p class=" text-dark mb-0">Basic knowledge of structural engineering principles and practices.</p>
                            <p class=" text-dark mb-0">Familiarity with general engineering concepts and software tools.</p>
                            <p class=" text-dark mb-0">Access to STAAD.Pro software for hands-on practice is beneficial but not required.</p>
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
                <!-- Introduction to STAAD.Pro -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to STAAD.Pro</td>
                </tr>

                <!-- Overview of STAAD.Pro -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-eye fs-3 text-primary"></i></th>
                    <td class="fs-5">Overview of STAAD.Pro</td>
                </tr>

                <!-- Installation and setup -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-gear fs-3 text-warning"></i></th>
                    <td class="fs-5">Installation and setup</td>
                </tr>

                <!-- User interface and navigation -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-house-door fs-3 text-info"></i></th>
                    <td class="fs-5">User interface and navigation</td>
                </tr>

                <!-- Basic concepts of structural analysis and design -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-lightbulb fs-3 text-primary"></i></th>
                    <td class="fs-5">Basic concepts of structural analysis and design</td>
                </tr>

                <!-- Types of structures and materials supported -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-grid-1x2 fs-3 text-success"></i></th>
                    <td class="fs-5">Types of structures and materials supported</td>
                </tr>

                <!-- Getting Started with STAAD.Pro -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-plus fs-3 text-warning"></i></th>
                    <td class="fs-5">Getting Started with STAAD.Pro</td>
                </tr>

                <!-- Creating a new project -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark fs-3 text-info"></i></th>
                    <td class="fs-5">Creating a new project</td>
                </tr>

                <!-- Defining geometry and structural components -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-shape fs-3 text-primary"></i></th>
                    <td class="fs-5">Defining geometry and structural components</td>
                </tr>

                <!-- Assigning materials and section properties -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-cogs fs-3 text-warning"></i></th>
                    <td class="fs-5">Assigning materials and section properties</td>
                </tr>

                <!-- Modeling tools and techniques -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-pencil fs-3 text-success"></i></th>
                    <td class="fs-5">Modeling tools and techniques</td>
                </tr>

                <!-- Importing and exporting models -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-repeat fs-3 text-info"></i></th>
                    <td class="fs-5">Importing and exporting models</td>
                </tr>

                <!-- Types of loads -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-cloud-lightning fs-3 text-primary"></i></th>
                    <td class="fs-5">Types of loads (dead, live, wind, seismic, etc.)</td>
                </tr>

                <!-- Applying loads to structures -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-lightning fs-3 text-warning"></i></th>
                    <td class="fs-5">Applying loads to structures</td>
                </tr>

                <!-- Load combinations and factors -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-calculator fs-3 text-success"></i></th>
                    <td class="fs-5">Load combinations and factors</td>
                </tr>

                <!-- Auto-generation of loads -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-snow fs-3 text-info"></i></th>
                    <td class="fs-5">Auto-generation of loads (wind, seismic)</td>
                </tr>

                <!-- Static analysis -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-bar-chart-line fs-3 text-primary"></i></th>
                    <td class="fs-5">Static analysis</td>
                </tr>

                <!-- Dynamic analysis -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-bar-chart fs-3 text-warning"></i></th>
                    <td class="fs-5">Dynamic analysis</td>
                </tr>

                <!-- Modal analysis -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-bar-chart-steps fs-3 text-success"></i></th>
                    <td class="fs-5">Modal analysis</td>
                </tr>

                <!-- P-Delta analysis -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-repeat fs-3 text-info"></i></th>
                    <td class="fs-5">P-Delta analysis</td>
                </tr>

                <!-- Buckling analysis -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-braces fs-3 text-primary"></i></th>
                    <td class="fs-5">Buckling analysis</td>
                </tr>

                <!-- Design of Steel Structures -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-house-door fs-3 text-warning"></i></th>
                    <td class="fs-5">Design of Steel Structures</td>
                </tr>

                <!-- Design codes and standards -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-pencil fs-3 text-primary"></i></th>
                    <td class="fs-5">Design codes and standards</td>
                </tr>

                <!-- Design parameters and settings -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-sliders fs-3 text-success"></i></th>
                    <td class="fs-5">Design parameters and settings</td>
                </tr>

                <!-- Design of steel members -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-box fs-3 text-info"></i></th>
                    <td class="fs-5">Design of steel members</td>
                </tr>

                <!-- Design of steel connections -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-link fs-3 text-warning"></i></th>
                    <td class="fs-5">Design of steel connections</td>
                </tr>

                <!-- Output interpretation and optimization -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-eye fs-3 text-primary"></i></th>
                    <td class="fs-5">Output interpretation and optimization</td>
                </tr>

                <!-- Design of Concrete Structures -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-building fs-3 text-success"></i></th>
                    <td class="fs-5">Design of Concrete Structures</td>
                </tr>

                <!-- Design codes and standards -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-pencil fs-3 text-info"></i></th>
                    <td class="fs-5">Design codes and standards</td>
                </tr>

                <!-- Design parameters and settings -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-sliders fs-3 text-primary"></i></th>
                    <td class="fs-5">Design parameters and settings</td>
                </tr>

                <!-- Design of concrete beams, columns, and slabs -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-columns fs-3 text-warning"></i></th>
                    <td class="fs-5">Design of concrete beams, columns, and slabs</td>
                </tr>

                <!-- Reinforcement detailing -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-braces-legacy fs-3 text-success"></i></th>
                    <td class="fs-5">Reinforcement detailing</td>
                </tr>

                <!-- Output interpretation and optimization -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-eye fs-3 text-primary"></i></th>
                    <td class="fs-5">Output interpretation and optimization</td>
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
                                   
                                    <p class="card-text">Structural Engineer</p>
                                    <p class="card-text">Civil Engineer</p>
                                    <p class="card-text">Design Engineer</p>
                                    <p class="card-text">Project Engineer</p>
                                    <p class="card-text">Structural Analyst</p>
                                    <p class="card-text">BIM Specialist</p>
                                    <p class="card-text">Engineering Consultant</p>
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

