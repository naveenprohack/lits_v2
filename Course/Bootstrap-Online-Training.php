

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Bootstrap Training | Learn Responsive Web Design</title>
<meta name="keywords" content="Bootstrap course, Bootstrap training, learn Bootstrap, responsive web design, front-end framework, UI development, web design course, CSS framework, Bootstrap 5, website development, HTML and CSS, mobile-first design, web design tutorials, Bootstrap certification, web development training" />
<meta name="description" content="Master Bootstrap and build stunning responsive websites. Learn front-end development, mobile-first design, and UI styling with Bootstrap 5 in this online course." />
<meta name="author" content="litsedu.com" />

<!-- JSON-LD Schema Markup for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Bootstrap Training - Responsive Web Design",
  "description": "Learn Bootstrap 5 and front-end web development. Build modern, responsive websites using the latest Bootstrap framework.",
  "provider": {
    "@type": "Organization",
    "name": "Learn Institute of Technology",
    "url": "https://litsedu.com"
  },
  "instructor": {
    "@type": "Person",
    "name": "Web Development Instructor",
    "affiliation": {
      "@type": "Organization",
      "name": "Litsedu"
    }
  },
  "courseMode": "online",
  "offers": {
    "@type": "Offer",
    "price": "Contact for Pricing",
    "priceCurrency": "USD",
    "availability": "https://schema.org/InStock",
    "url": "https://litsedu.com/bootstrap"
  }
}
</script>


 <link rel="canonical" href="https://litsedu.com/Bootstrap-Online-Training" />
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
                            <img src="https://litsedu.com/image/courseimg/Bootstrap-Online-Training.png" class="card-img-top" alt="learn institute of technology service" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">BOOTSTRAP</h1>
                                <p class="card-text">COMPLETE BOOTSTRAP COURSE IN TAMIL</p>
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
                                        <i>1,163 Ratings</i>                      
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
                            <p class=" text-dark">The Bootstrap course offers an in-depth exploration of Bootstrap, a popular open-source front-end framework for developing responsive and mobile-first websites. Bootstrap provides a collection of HTML, CSS, and JavaScript components designed to streamline the web development process. This course covers the essential features and advanced techniques of Bootstrap to help developers create visually appealing and functional web applications.</p>
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
                        
                            <p class="card-text">Understand the fundamentals of Bootstrap, including its grid system, components, and utilities.</p>
                            <p class="card-text">Learn how to integrate Bootstrap into web projects and customize its appearance using themes and styles.</p>
                            <p class="card-text">Gain proficiency in using Bootstraps responsive design features to create mobile-friendly layouts</p>
                            <p class="card-text">Explore advanced Bootstrap components such as modals, carousels, and navigation bars.</p>
                            <p class="card-text">Develop skills in using Bootstrap's JavaScript plugins for enhanced interactivity and user experience.</p>
                            <p class="card-text">Master best practices for combining Bootstrap with other web technologies, such as JavaScript frameworks and pre-processors.</p>
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
                              
                                    <p class="card-text">Web developers and designers looking to enhance their skills in front-end development using Bootstrap.</p>
                                     <p class="card-text">Beginners and students interested in learning responsive web design techniques with Bootstrap.</p>
                                    <p class="card-text">Front-end developers seeking to streamline their development process and improve efficiency.</p>
                                    
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
                            <p class=" text-dark mb-0">Basic knowledge of HTML, CSS, and JavaScript.</p>
                            <p class=" text-dark mb-0">Familiarity with general web development concepts and tools.</p>
                            <p class=" text-dark mb-0">Access to a code editor and development environment for hands-on practice is beneficial but not required.</p>
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
                <!-- Introduction to Bootstrap -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-book fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to Bootstrap</td>
                </tr>

                <!-- Getting Started -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-text fs-3 text-primary"></i></th>
                    <td class="fs-5">Getting Started</td>
                </tr>

                <!-- Course Introduction -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-info-circle fs-3 text-info"></i></th>
                    <td class="fs-5">Course Introduction</td>
                </tr>

                <!-- What is Bootstrap? -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-question-circle fs-3 text-warning"></i></th>
                    <td class="fs-5">What is Bootstrap?</td>
                </tr>

                <!-- Setting Up the Development Environment -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-tools fs-3 text-success"></i></th>
                    <td class="fs-5">Setting Up the Development Environment</td>
                </tr>

                <!-- Including Bootstrap in Your Project -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-cloud-download fs-3 text-info"></i></th>
                    <td class="fs-5">Including Bootstrap in Your Project</td>
                </tr>

                <!-- Using Bootstrap CDN -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-cloud fs-3 text-primary"></i></th>
                    <td class="fs-5">Using Bootstrap CDN</td>
                </tr>

                <!-- Installing Bootstrap via npm -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-box fs-3 text-warning"></i></th>
                    <td class="fs-5">Installing Bootstrap via npm</td>
                </tr>

                <!-- Bootstrap Basics -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-gear fs-3 text-success"></i></th>
                    <td class="fs-5">Bootstrap Basics</td>
                </tr>

                <!-- Bootstrap File Structure -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-folder fs-3 text-primary"></i></th>
                    <td class="fs-5">Bootstrap File Structure</td>
                </tr>

                <!-- Bootstrap Grid System -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-grid fs-3 text-info"></i></th>
                    <td class="fs-5">Bootstrap Grid System</td>
                </tr>

                <!-- Containers -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-boxes fs-3 text-success"></i></th>
                    <td class="fs-5">Containers</td>
                </tr>

                <!-- Rows and Columns -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-columns fs-3 text-warning"></i></th>
                    <td class="fs-5">Rows and Columns</td>
                </tr>

                <!-- Breakpoints and Responsive Design -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-phone fs-3 text-primary"></i></th>
                    <td class="fs-5">Breakpoints and Responsive Design</td>
                </tr>

                <!-- First Bootstrap Page: Creating a Simple Layout -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-house-door fs-3 text-success"></i></th>
                    <td class="fs-5">First Bootstrap Page: Creating a Simple Layout</td>
                </tr>

                <!-- Typography and Utilities -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-fonts fs-3 text-info"></i></th>
                    <td class="fs-5">Typography and Utilities</td>
                </tr>

                <!-- Bootstrap Typography -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-text-paragraph fs-3 text-warning"></i></th>
                    <td class="fs-5">Bootstrap Typography</td>
                </tr>

                <!-- Text Utilities -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-type fs-3 text-success"></i></th>
                    <td class="fs-5">Text Utilities</td>
                </tr>

                <!-- Background and Color Utilities -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-paint-bucket fs-3 text-primary"></i></th>
                    <td class="fs-5">Background and Color Utilities</td>
                </tr>

                <!-- Spacing Utilities (Padding and Margin) -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrows-move fs-3 text-warning"></i></th>
                    <td class="fs-5">Spacing Utilities (Padding and Margin)</td>
                </tr>

                <!-- Bootstrap Components -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-puzzle fs-3 text-success"></i></th>
                    <td class="fs-5">Bootstrap Components</td>
                </tr>

                <!-- Bootstrap Buttons -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle fs-3 text-primary"></i></th>
                    <td class="fs-5">Bootstrap Buttons</td>
                </tr>

                <!-- Button Variants -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-toggle-on fs-3 text-info"></i></th>
                    <td class="fs-5">Button Variants</td>
                </tr>

                <!-- Button Sizes -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrows-expand fs-3 text-warning"></i></th>
                    <td class="fs-5">Button Sizes</td>
                </tr>

                <!-- Button Groups -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-journal-check fs-3 text-success"></i></th>
                    <td class="fs-5">Button Groups</td>
                </tr>

                <!-- Badges and Labels -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-award fs-3 text-info"></i></th>
                    <td class="fs-5">Badges and Labels</td>
                </tr>

                <!-- Alerts -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-bell fs-3 text-primary"></i></th>
                    <td class="fs-5">Alerts</td>
                </tr>

                <!-- Bootstrap Cards -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-card-heading fs-3 text-warning"></i></th>
                    <td class="fs-5">Bootstrap Cards</td>
                </tr>

                <!-- Card Layouts -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-card fs-3 text-success"></i></th>
                    <td class="fs-5">Card Layouts</td>
                </tr>

                <!-- Card Content Types -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-card-text fs-3 text-primary"></i></th>
                    <td class="fs-5">Card Content Types</td>
                </tr>

                <!-- Card Groups -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-columns fs-3 text-info"></i></th>
                    <td class="fs-5">Card Groups</td>
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
                                   
                                    <p class="card-text">Front-End Developer</p>
                                    <p class="card-text">Web Designer</p>
                                    <p class="card-text">UI/UX Designer</p>
                                    <p class="card-text">Web Developer</p>
                                    <p class="card-text">Full-Stack Developer</p>
                                    <p class="card-text">Freelance Web Developer</p>
                                    <p class="card-text">UI Developer</p>
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

