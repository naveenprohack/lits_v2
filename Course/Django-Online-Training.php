
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Django Web Development Course | Learn Python Django Framework</title>

<!-- SEO Meta Tags -->
<meta name="description" content="Learn Django with our comprehensive course, covering web development, Python Django framework, database integration, and building scalable web applications. Ideal for beginners and developers looking to upskill." />
<meta name="keywords" content="Django course, Python Django framework, web development with Django, Django web application, learn Django online, Django for beginners, Django course online, full-stack web development, Python programming, web development framework" />
<meta name="author" content="Learn Institute of Technology (litsedu.com)" />

<!-- Open Graph Meta Tags (For social media preview) -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.litsedu.com/django-web-development" />
<meta property="og:title" content="Django Web Development Course | Learn Python Django Framework" />
<meta property="og:description" content="Master Django, the powerful Python web framework. Learn how to build robust and scalable web applications with this course. Enroll today and start coding!" />
<meta property="og:image" content="https://www.litsedu.com/images/django-course.jpg" />

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Django Web Development Course | Learn Python Django Framework" />
<meta name="twitter:description" content="Learn to build dynamic, scalable web applications with the Django framework. Our course covers all aspects from basic to advanced features of Django. Join now!" />
<meta name="twitter:image" content="https://www.litsedu.com/images/django-course.jpg" />

<!-- Schema.org Markup for Course Offered with Ratings -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Django Web Development Course",
  "provider": {
    "@type": "Organization",
    "name": "Learn Institute of Technology",
    "url": "https://www.litsedu.com",
    "logo": "https://www.litsedu.com/images/logo.png",
    "sameAs": "https://www.litsedu.com"
  },
  "description": "This Django course will help you build dynamic and interactive websites using the Python Django framework. Learn database integration, authentication, and deploying applications in this detailed course.",
  "educationalCredentialAwarded": "Django Web Development Certification",
  "courseMode": "Online",
  "url": "https://www.litsedu.com/django-web-development",
  "offers": {
    "@type": "Offer",
    "priceCurrency": "USD",
    "price": "499.99",
    "eligibleRegion": {
      "@type": "Place",
      "name": "Worldwide"
    }
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "150"
  }
}
</script>


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
                            <img src="./image/courseimg/Django-Online-Training.png" class="card-img-top" alt="learn institute of technology service" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">DJANGO</h1>
                                <p class="card-text">COMPLETE DJANGO COURSE IN TAMIL</p>
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
                          <h5>  100 % Secure Payment option (Online Payment only)</h5>
                            </div>
                        </div>
                    </div>
                    
</div>









      
     
     
    <div class="container my-5">
   
                <div class="text-center mb-4">
                    <h3 class="display-6 fw-bold text-uppercase" style="color:rgb(221, 100, 43);">Course Overview</h3>
                    <p class="text-muted">A brief introduction to what you will learn in this course</p>
                </div>';

                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <p class=" text-dark">The Django course provides an in-depth exploration of this high-level Python web framework, designed to simplify the development of robust and scalable web applications. Django follows the "batteries-included" philosophy, offering a comprehensive set of tools and features for building web applications efficiently. This course covers everything from the fundamentals of Django to advanced topics, enabling learners to create dynamic, data-driven websites and applicatio</p>
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
                        
                            <p class="card-text">Understand the core concepts and architecture of Django, including models, views, and templates.</p>
                            <p class="card-text">Gain proficiency in setting up a Django project, configuring settings, and managing dependencies.</p>
                            <p class="card-text">Learn how to create and manage databases using Django's ORM (Object-Relational Mapping).</p>
                            <p class="card-text">Explore routing, URL handling, and views to build dynamic web pages.</p>
                            <p class="card-text">Develop skills in creating and validating forms, handling user authentication, and managing sessions.</p>
                            <p class="card-text">Master advanced features such as middleware, custom admin interfaces, and RESTful APIs using Django REST Framework.</p>
                            <p class="card-text">Understand best practices for deploying and maintaining Django applications in a production environment.</p>
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
                              
                                    <p class="card-text">Aspiring web developers and programmers interested in building web applications with Python.</p>
                                     <p class="card-text">Software developers looking to enhance their skills in web development using Django.</p>
                                    <p class="card-text">IT professionals and backend developers seeking to build robust and scalable web solutions.</p>
                                    
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
                            <p class=" text-dark mb-0">Basic knowledge of Python programming</p>
                            <p class=" text-dark mb-0">Familiarity with HTML, CSS, and JavaScript is helpful but not required.</p>
                            <p class=" text-dark mb-0">Access to a development environment with Python and Django installed for hands-on practice.</p>
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
                <!-- Introduction to Django -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to Django</td>
                </tr>

                <!-- Overview of Web Development -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-info-circle fs-3 text-primary"></i></th>
                    <td class="fs-5">Overview of Web Development</td>
                </tr>

                <!-- Introduction to web development -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-info-circle fs-3 text-primary"></i></th>
                    <td class="fs-5">Introduction to web development</td>
                </tr>

                <!-- Client-server architecture -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-diagram-3-fill fs-3 text-warning"></i></th>
                    <td class="fs-5">Client-server architecture</td>
                </tr>

                <!-- HTTP request/response cycle -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-repeat fs-3 text-warning"></i></th>
                    <td class="fs-5">HTTP request/response cycle</td>
                </tr>

                <!-- What is Django? -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-question-circle-fill fs-3 text-info"></i></th>
                    <td class="fs-5">What is Django?</td>
                </tr>

                <!-- History and features -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-clock-history fs-3 text-muted"></i></th>
                    <td class="fs-5">History and features</td>
                </tr>

                <!-- Django vs. other web frameworks -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-cpu fs-3 text-success"></i></th>
                    <td class="fs-5">Django vs. other web frameworks</td>
                </tr>

                <!-- Installing Django and setting up the development environment -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-terminal fs-3 text-success"></i></th>
                    <td class="fs-5">Installing Django and setting up the development environment</td>
                </tr>

                <!-- Creating a Django Project -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-code fs-3 text-success"></i></th>
                    <td class="fs-5">Creating a Django Project</td>
                </tr>

                <!-- Django project structure -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-lock fs-3 text-warning"></i></th>
                    <td class="fs-5">Django project structure</td>
                </tr>

                <!-- Creating a new Django project -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-code fs-3 text-success"></i></th>
                    <td class="fs-5">Creating a new Django project</td>
                </tr>

                <!-- Overview of settings.py -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark fs-3 text-muted"></i></th>
                    <td class="fs-5">Overview of settings.py</td>
                </tr>

                <!-- Django Apps -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-box fs-3 text-info"></i></th>
                    <td class="fs-5">Django Apps</td>
                </tr>

                <!-- Understanding Django apps -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-box fs-3 text-info"></i></th>
                    <td class="fs-5">Understanding Django apps</td>
                </tr>

                <!-- Creating and configuring a Django app -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-box-arrow-in-right fs-3 text-success"></i></th>
                    <td class="fs-5">Creating and configuring a Django app</td>
                </tr>

                <!-- Apps vs. Projects in Django -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-right-circle fs-3 text-warning"></i></th>
                    <td class="fs-5">Apps vs. Projects in Django</td>
                </tr>

                <!-- Django Models -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-database fs-3 text-success"></i></th>
                    <td class="fs-5">Django Models</td>
                </tr>

                <!-- Introduction to models -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-database fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to models</td>
                </tr>

                <!-- Creating models -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-pencil-square fs-3 text-info"></i></th>
                    <td class="fs-5">Creating models</td>
                </tr>

                <!-- Model fields and options -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-pencil-square fs-3 text-info"></i></th>
                    <td class="fs-5">Model fields and options</td>
                </tr>

                <!-- Model methods and properties -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-cogs fs-3 text-info"></i></th>
                    <td class="fs-5">Model methods and properties</td>
                </tr>

                <!-- Database Operations -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-database fs-3 text-success"></i></th>
                    <td class="fs-5">Database Operations</td>
                </tr>

                <!-- Introduction to Django ORM -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-database-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to Django ORM</td>
                </tr>

                <!-- CRUD operations with Django ORM -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-pencil-square fs-3 text-success"></i></th>
                    <td class="fs-5">CRUD operations with Django ORM</td>
                </tr>

                <!-- Making and applying migrations -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-repeat fs-3 text-warning"></i></th>
                    <td class="fs-5">Making and applying migrations</td>
                </tr>

                <!-- Using the Django admin interface -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-person-badge fs-3 text-info"></i></th>
                    <td class="fs-5">Using the Django admin interface</td>
                </tr>

                <!-- Django Views -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-eye fs-3 text-success"></i></th>
                    <td class="fs-5">Django Views</td>
                </tr>

                <!-- Function-based views (FBVs) -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-code fs-3 text-warning"></i></th>
                    <td class="fs-5">Function-based views (FBVs)</td>
                </tr>

                <!-- Class-based views (CBVs) -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-code fs-3 text-warning"></i></th>
                    <td class="fs-5">Class-based views (CBVs)</td>
                </tr>

                <!-- Generic views -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-code fs-3 text-info"></i></th>
                    <td class="fs-5">Generic views</td>
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
                                   
                                    <p class="card-text">Django Developer</p>
                                    <p class="card-text">Web Developer</p>
                                    <p class="card-text">Backend Developer</p>
                                    <p class="card-text">Full-Stack Developer</p>
                                    <p class="card-text">Software Engineer</p>
                                    <p class="card-text">API Developer</p>
                                    <p class="card-text">DevOps Engineer</p>
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

