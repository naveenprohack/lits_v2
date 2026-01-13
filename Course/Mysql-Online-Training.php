
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>MySQL Course | Learn Database Management</title>

<meta name="keywords" content="MySQL course, learn MySQL, MySQL database training, MySQL certification, SQL tutorial, MySQL for beginners, MySQL online training, database management system, MySQL administration, MySQL queries, MySQL indexing, MySQL stored procedures, MySQL performance optimization, relational database, MySQL security, SQL vs NoSQL, MySQL backup and recovery, MySQL advanced queries, MySQL transactions, database normalization">

<meta name="description" content="Master MySQL with hands-on training in SQL queries, database management, indexing, performance optimization, and security. Enroll in our MySQL course today!">

<meta name="author" content="litsedu.com">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "MySQL Course | Learn Database Management",
  "description": "Master MySQL with hands-on training in SQL queries, database management, indexing, performance optimization, and security. Enroll in our MySQL course today!",
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
      "name": "MySQL Expert Trainer",
      "affiliation": {
        "@type": "Organization",
        "name": "Litsedu"
      }
    },
    "offers": {
      "@type": "Offer",
      "price": "Contact for Pricing",
      "priceCurrency": "USD",
      "url": "https://litsedu.com/mysql-course",
      "validFrom": "2025-02-01"
    }
  }
}
</script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="canonical" href="https://litsedu.com/MongoDB-Online-Training"/>
   <link rel="icon" type="image/png" href="image/Logo.png">
     
    <!--</div> <!-- End Course Page Banner -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <style>
   /* Default styles (desktop and larger screens) */
.resp-img {
  width: 550px; 
  height: 500px; 
  max-width: 550px; 
  
}

 @media (min-width: 992px) {
      .resp-img {
        width: 700px;
        max-height: 380px;
      
      }
    }

/* Styles for tablets and smaller screens (768px and below) */
@media (max-width: 768px) {
  .resp-img {
    max-width: 100%; /* Allow full width for smaller screens */
    padding: 0 10px; /* Optional: Add some padding for mobile */
  }
}

/* Styles for mobile screens (576px and below) */
@media (max-width: 576px) {
  .resp-img {
    max-width: 100%; /* Fully responsive for smaller devices */
    padding: 0; /* Remove any extra padding for mobile */
  }
}
</style>
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
                            <img src="../image/courseimg/Mysql-Online-Training.png" class="card-img-top resp-img" alt="learn institute of technology service" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">MYSQL</h1>
                                <p class="card-text">COMPLETE ANIMATE COURSE IN TAMIL</p>
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
                                        <i>1,589 Ratings</i>                      
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
                            <p class=" text-dark">The MySQL course offers a comprehensive introduction to MySQL, a widely used open-source relational database management system (RDBMS). MySQL is known for its reliability, performance, and ease of use, making it a popular choice for managing and querying data in various applications. This course covers fundamental to advanced MySQL concepts, including database design, querying, and optimization, to help learners effectively manage and interact with MySQL databases.</p>
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
                        
                            <p class="card-text">Understand the basics of MySQL, including installation, configuration, and database creation.</p>
                            <p class="card-text">Learn how to design and manage relational databases, including creating tables, defining relationships, and enforcing constraints.</p>
                            <p class="card-text">Gain proficiency in writing and optimizing SQL queries for data retrieval, manipulation, and analysis.</p>
                            <p class="card-text">Explore advanced MySQL features such as indexing, stored procedures, triggers, and transactions.</p>
                            <p class="card-text">Develop skills in database administration tasks such as backup and recovery, user management, and performance tuning.</p>
                            <p class="card-text">Master best practices for database design, security, and scalability in MySQL environments.</p>
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
                              
                                    <p class="card-text">Database administrators and developers looking to enhance their skills in MySQL database management.</p>
                                     <p class="card-text">Web developers and software engineers who need to work with MySQL databases in their applications.</p>
                                    <p class="card-text">Students and beginners interested in learning relational database management systems for a career in data management or analysis.</p>
                                    
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
                            <p class=" text-dark mb-0">Basic knowledge of computer operations and data management concepts.</p>
                            <p class=" text-dark mb-0">Access to MySQL software or a MySQL server for hands-on practice is beneficial but not required.</p>
                            <p class=" text-dark mb-0">Familiarity with general programming and web development concepts is beneficial but not required.</p>
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
                <!-- Introduction to MySQL -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to MySQL</td>
                </tr>

                <!-- Overview of Databases and RDBMS -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-info-circle fs-3 text-primary"></i></th>
                    <td class="fs-5">Overview of Databases and RDBMS</td>
                </tr>

                <!-- Introduction to MySQL -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-journal fs-3 text-info"></i></th>
                    <td class="fs-5">Introduction to MySQL</td>
                </tr>

                <!-- Installation and Configuration -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-hdd fs-3 text-warning"></i></th>
                    <td class="fs-5">Installation and Configuration</td>
                </tr>

                <!-- MySQL Workbench and Command Line Interface -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-terminal fs-3 text-info"></i></th>
                    <td class="fs-5">MySQL Workbench and Command Line Interface</td>
                </tr>

                <!-- Basic SQL Syntax -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-code fs-3 text-success"></i></th>
                    <td class="fs-5">Basic SQL Syntax</td>
                </tr>

                <!-- SELECT, INSERT, UPDATE, DELETE -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-pen fs-3 text-warning"></i></th>
                    <td class="fs-5">SELECT, INSERT, UPDATE, DELETE</td>
                </tr>

                <!-- Database Design and Modeling -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-gear fs-3 text-primary"></i></th>
                    <td class="fs-5">Database Design and Modeling</td>
                </tr>

                <!-- Database Design Principles -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-book fs-3 text-info"></i></th>
                    <td class="fs-5">Database Design Principles</td>
                </tr>

                <!-- Normalization and Denormalization -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-repeat fs-3 text-success"></i></th>
                    <td class="fs-5">Normalization and Denormalization</td>
                </tr>

                <!-- Creating Databases and Tables -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-plus-square fs-3 text-warning"></i></th>
                    <td class="fs-5">Creating Databases and Tables</td>
                </tr>

                <!-- Data Types and Constraints -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-shield-lock fs-3 text-info"></i></th>
                    <td class="fs-5">Data Types and Constraints</td>
                </tr>

                <!-- Primary Keys, Foreign Keys, and Indexes -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-key fs-3 text-success"></i></th>
                    <td class="fs-5">Primary Keys, Foreign Keys, and Indexes</td>
                </tr>

                <!-- SQL for Data Manipulation -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-down-up fs-3 text-warning"></i></th>
                    <td class="fs-5">SQL for Data Manipulation</td>
                </tr>

                <!-- Basic Queries -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-search fs-3 text-info"></i></th>
                    <td class="fs-5">Basic Queries</td>
                </tr>

                <!-- SELECT Statements -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-filter fs-3 text-success"></i></th>
                    <td class="fs-5">SELECT Statements</td>
                </tr>

                <!-- WHERE Clause, ORDER BY, and LIMIT -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-sort-down-alt fs-3 text-primary"></i></th>
                    <td class="fs-5">WHERE Clause, ORDER BY, and LIMIT</td>
                </tr>

                <!-- Advanced Queries -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-caret-down-square fs-3 text-warning"></i></th>
                    <td class="fs-5">Advanced Queries</td>
                </tr>

                <!-- JOINs (INNER, LEFT, RIGHT, FULL) -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-columns fs-3 text-info"></i></th>
                    <td class="fs-5">JOINs (INNER, LEFT, RIGHT, FULL)</td>
                </tr>

                <!-- Subqueries and Nested Queries -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-repeat fs-3 text-success"></i></th>
                    <td class="fs-5">Subqueries and Nested Queries</td>
                </tr>

                <!-- UNION and UNION ALL -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-union fs-3 text-warning"></i></th>
                    <td class="fs-5">UNION and UNION ALL</td>
                </tr>

                <!-- Data Modification -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-pencil fs-3 text-primary"></i></th>
                    <td class="fs-5">Data Modification</td>
                </tr>

                <!-- INSERT, UPDATE, DELETE -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-plus-circle fs-3 text-info"></i></th>
                    <td class="fs-5">INSERT, UPDATE, DELETE</td>
                </tr>

                <!-- Bulk Inserts -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-up-circle fs-3 text-warning"></i></th>
                    <td class="fs-5">Bulk Inserts</td>
                </tr>

                <!-- Functions and Stored Procedures -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-cogs fs-3 text-success"></i></th>
                    <td class="fs-5">Functions and Stored Procedures</td>
                </tr>

                <!-- Built-in Function -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-gear-wide fs-3 text-info"></i></th>
                    <td class="fs-5">Built-in Function</td>
                </tr>

                <!-- String, Numeric, Date Functions -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-calendar fs-3 text-warning"></i></th>
                    <td class="fs-5">String, Numeric, Date Functions</td>
                </tr>

                <!-- User-Defined Functions -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-person-circle fs-3 text-primary"></i></th>
                    <td class="fs-5">User-Defined Functions</td>
                </tr>

                <!-- Stored Procedures and Functions -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-person-lock fs-3 text-info"></i></th>
                    <td class="fs-5">Stored Procedures and Functions</td>
                </tr>

                <!-- Creating and Calling Stored Procedures -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-text fs-3 text-success"></i></th>
                    <td class="fs-5">Creating and Calling Stored Procedures</td>
                </tr>

                <!-- Parameters and Return Values -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrows-merge fs-3 text-warning"></i></th>
                    <td class="fs-5">Parameters and Return Values</td>
                </tr>

                <!-- Triggers and Events -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-bell fs-3 text-info"></i></th>
                    <td class="fs-5">Triggers and Events</td>
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
                                   
                                    <p class="card-text">MySQL Database Administrator</p>
                                    <p class="card-text">SQL Developer</p>
                                    <p class="card-text">Data Analyst</p>
                                    <p class="card-text">Backend Developer</p>
                                    <p class="card-text">Database Engineer</p>
                                    <p class="card-text">Web Developer</p>
                                    <p class="card-text">Data Scientist</p>
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

