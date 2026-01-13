
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>C Programming Course | Learn Institute of Technology</title>

<!-- SEO Meta Tags -->
<meta name="description" content="Learn Institute of Technology offers a comprehensive C Programming course for beginners and experienced learners. Master the C language and enhance your coding skills with hands-on projects and expert guidance." />
<meta name="keywords" content="C Programming, C programming course, learn C programming, C language, C for beginners, C programming tutorial, C coding classes, C language programming, online C programming course, C programming for beginners, C programming tutorial online, C programming certification, C language online course, C programming projects, data structures in C, algorithm development in C, programming languages" />
<meta name="author" content="Learn Institute of Technology (litsedu.com)" />
<meta name="robots" content="index, follow" />

<!-- Open Graph Meta Tags (For social media preview) -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.litsedu.com/c-programming" />
<meta property="og:title" content="C Programming Course | Learn Institute of Technology" />
<meta property="og:description" content="Master C programming with our comprehensive course. Learn the fundamentals of C programming, data structures, algorithms, and more through hands-on coding projects." />
<meta property="og:image" content="https://www.litsedu.com/images/c-programming-course.jpg" />

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="C Programming Course | Learn Institute of Technology" />
<meta name="twitter:description" content="Master C programming with our comprehensive course. Learn the fundamentals of C programming, data structures, algorithms, and more through hands-on coding projects." />
<meta name="twitter:image" content="https://www.litsedu.com/images/c-programming-course.jpg" />

<!-- Schema.org Markup for Course Offered with Ratings -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "C Programming",
  "provider": {
    "@type": "Organization",
    "name": "Learn Institute of Technology",
    "url": "https://www.litsedu.com",
    "logo": "https://www.litsedu.com/images/logo.png",
    "sameAs": "https://www.litsedu.com"
  },
  "description": "Learn C programming, a foundational skill in computer science. Our course will cover the C language syntax, data structures, algorithms, and give you hands-on experience with real-world projects.",
  "educationalCredentialAwarded": "Certificate of Completion",
  "courseMode": "Online",
  "courseMode": "Self-paced",
  "url": "https://www.litsedu.com/c-programming",
  "offers": {
    "@type": "Offer",
    "priceCurrency": "USD",
    "price": "149.99",
    "eligibleRegion": {
      "@type": "Place",
      "name": "Worldwide"
    }
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "200"
  }
}
</script>
 <link rel="canonical" href="https://litsedu.com/https://litsedu.com/C-Programming-Online-Training" />
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
                            <img src="https://litsedu.com/image/courseimg/C Programming-Online-Training.png" class="card-img-top" alt="learn institute of technology service" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">C PROGRAMMING</h1>
                                <p class="card-text">COMPLETE C PROGRAMMING COURSE IN TAMIL</p>
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
                                        <i>1,308 Ratings</i>                      
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
                </div>';

                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <p class=" text-dark">The C Programming course provides a solid foundation in C, a powerful and versatile programming language widely used in system programming, embedded systems, and application development. Known for its efficiency and performance, C is a foundational language for understanding key programming concepts. This course covers the basics to advanced topics in C programming, equipping learners with the skills needed to write efficient and effective code.</p>
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
                        
                            <p class="card-text">Understand the fundamentals of C programming, including syntax, data types, operators, and control structures.</p>
                            <p class="card-text">Learn how to write and debug C programs, including functions, pointers, and memory management.</p>
                            <p class="card-text">Gain proficiency in using arrays, strings, and structures for data handling.</p>
                            <p class="card-text">Explore advanced topics such as file handling, dynamic memory allocation, and linked lists.</p>
                            <p class="card-text">Develop skills in problem-solving and algorithm design using C programming techniques.</p>
                            <p class="card-text">Master best practices for writing clean, maintainable, and efficient C code.</p>
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
                              
                                    <p class="card-text">Beginner and intermediate programmers interested in learning C programming.</p>
                                     <p class="card-text">Computer science students and professionals seeking to enhance their programming skills with C.</p>
                                    <p class="card-text">Software developers and engineers who need to understand C for system-level programming or embedded systems.</p>
                                    
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
                            <p class=" text-dark mb-0">Basic knowledge of computer operations and general programming concepts.</p>
                            <p class=" text-dark mb-0">Familiarity with any programming language is beneficial but not required.</p>
                            <p class=" text-dark mb-0">Access to a C compiler and development environment for hands-on practice is beneficial but not required.</p>
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
                <!-- Introduction to C Programming -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to C Programming</td>
                </tr>

                <!-- Overview of C Language -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-info-circle fs-3 text-primary"></i></th>
                    <td class="fs-5">Overview of C Language</td>
                </tr>

                <!-- History of C -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-clock fs-3 text-secondary"></i></th>
                    <td class="fs-5">History of C</td>
                </tr>

                <!-- Features and applications -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-cpu fs-3 text-warning"></i></th>
                    <td class="fs-5">Features and applications</td>
                </tr>

                <!-- Structure of a C program -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-layout-text-window fs-3 text-success"></i></th>
                    <td class="fs-5">Structure of a C program</td>
                </tr>

                <!-- Writing and compiling your first C program -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-code fs-3 text-info"></i></th>
                    <td class="fs-5">Writing and compiling your first C program</td>
                </tr>

                <!-- Basic Syntax and Structure -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-code-slash fs-3 text-primary"></i></th>
                    <td class="fs-5">Basic Syntax and Structure</td>
                </tr>

                <!-- Keywords and identifiers -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-key fs-3 text-warning"></i></th>
                    <td class="fs-5">Keywords and identifiers</td>
                </tr>

                <!-- Data types and variables -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-type fs-3 text-success"></i></th>
                    <td class="fs-5">Data types and variables</td>
                </tr>

                <!-- Constants and literals -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-text fs-3 text-secondary"></i></th>
                    <td class="fs-5">Constants and literals</td>
                </tr>

                <!-- printf() and scanf() functions -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-terminal fs-3 text-primary"></i></th>
                    <td class="fs-5">printf() and scanf() functions</td>
                </tr>

                <!-- Setting Up Development Environment -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-cogs fs-3 text-info"></i></th>
                    <td class="fs-5">Setting Up Development Environment</td>
                </tr>

                <!-- Installing an IDE or text editor -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-laptop fs-3 text-warning"></i></th>
                    <td class="fs-5">Installing an IDE or text editor (e.g., Code::Blocks, Visual Studio Code)</td>
                </tr>

                <!-- Writing, compiling, and running simple C programs -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-play-circle fs-3 text-success"></i></th>
                    <td class="fs-5">Writing, compiling, and running simple C programs</td>
                </tr>

                <!-- Operators and Control Flow -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-right-circle fs-3 text-primary"></i></th>
                    <td class="fs-5">Operators and Control Flow</td>
                </tr>

                <!-- Operators in C -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-signpost fs-3 text-success"></i></th>
                    <td class="fs-5">Operators in C</td>
                </tr>

                <!-- Arithmetic, relational, logical, bitwise, and assignment operators -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrows-angle-contract fs-3 text-warning"></i></th>
                    <td class="fs-5">Arithmetic, relational, logical, bitwise, and assignment operators</td>
                </tr>

                <!-- Operator precedence and associativity -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-sort-up-alt fs-3 text-info"></i></th>
                    <td class="fs-5">Operator precedence and associativity</td>
                </tr>

                <!-- Control Flow Statements -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-shuffle fs-3 text-primary"></i></th>
                    <td class="fs-5">Control Flow Statements</td>
                </tr>

                <!-- if, else if, else statements -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-toggle-off fs-3 text-warning"></i></th>
                    <td class="fs-5">if, else if, else statements</td>
                </tr>

                <!-- switch case statement -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-toggle-on fs-3 text-success"></i></th>
                    <td class="fs-5">switch case statement</td>
                </tr>

                <!-- Loops: for, while, and do-while -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-repeat fs-3 text-info"></i></th>
                    <td class="fs-5">Loops: for, while, and do-while</td>
                </tr>

                <!-- Control Flow and Loops -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-clockwise fs-3 text-primary"></i></th>
                    <td class="fs-5">Control Flow and Loops</td>
                </tr>

                <!-- Writing programs using different types of loops and conditional statements -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-code fs-3 text-warning"></i></th>
                    <td class="fs-5">Writing programs using different types of loops and conditional statements</td>
                </tr>

                <!-- Functions and Modular Programming -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-box-arrow-in-right fs-3 text-info"></i></th>
                    <td class="fs-5">Functions and Modular Programming</td>
                </tr>

                <!-- Functions in C -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-return-right fs-3 text-success"></i></th>
                    <td class="fs-5">Functions in C</td>
                </tr>

                <!-- Defining and calling functions -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-left-right fs-3 text-warning"></i></th>
                    <td class="fs-5">Defining and calling functions</td>
                </tr>

                <!-- Function prototypes -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-code fs-3 text-success"></i></th>
                    <td class="fs-5">Function prototypes</td>
                </tr>

                <!-- Passing arguments by value and reference -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-right-circle fs-3 text-primary"></i></th>
                    <td class="fs-5">Passing arguments by value and reference</td>
                </tr>

                <!-- Recursion -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-clockwise fs-3 text-info"></i></th>
                    <td class="fs-5">Recursion</td>
                </tr>

                <!-- Scope and Storage Classes -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-shield-lock fs-3 text-warning"></i></th>
                    <td class="fs-5">Scope and Storage Classes</td>
                </tr>

                <!-- Local and global variables -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-person fs-3 text-success"></i></th>
                    <td class="fs-5">Local and global variables</td>
                </tr>

                <!-- static, extern, auto, and register storage classes -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-reception-4 fs-3 text-primary"></i></th>
                    <td class="fs-5">static, extern, auto, and register storage classes</td>
                </tr>

                <!-- Functions and Recursion -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-repeat fs-3 text-info"></i></th>
                    <td class="fs-5">Functions and Recursion</td>
                </tr>

                <!-- Writing programs that utilize functions and recursion -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-play-circle fs-3 text-success"></i></th>
                    <td class="fs-5">Writing programs that utilize functions and recursion</td>
                </tr>

                <!-- Arrays and Strings -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-collection fs-3 text-primary"></i></th>
                    <td class="fs-5">Arrays and Strings</td>
                </tr>

                <!-- Arrays -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-rectangle fs-3 text-info"></i></th>
                    <td class="fs-5">Arrays</td>
                </tr>

                <!-- Declaring and initializing arrays -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-box fs-3 text-warning"></i></th>
                    <td class="fs-5">Declaring and initializing arrays</td>
                </tr>

                <!-- Multidimensional arrays -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-stack fs-3 text-success"></i></th>
                    <td class="fs-5">Multidimensional arrays</td>
                </tr>

                <!-- Array manipulation -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-left-right fs-3 text-primary"></i></th>
                    <td class="fs-5">Array manipulation</td>
                </tr>

                <!-- Structure -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-archive fs-3 text-info"></i></th>
                    <td class="fs-5">Structure</td>
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
                                   
                                    <p class="card-text">C Programmer</p>
                                    <p class="card-text">Software Developer</p>
                                    <p class="card-text">Systems Programmer</p>
                                    <p class="card-text">Embedded Systems Engineer</p>
                                    <p class="card-text">Application Developer</p>
                                    <p class="card-text">Firmware Engineer</p>
                                    <p class="card-text">Technical Consultant</p>
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

