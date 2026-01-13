

<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>CSS Course | Master CSS for Web Development</title>
<meta name="keywords" content="CSS course, learn CSS, web design with CSS, CSS tutorial, CSS for beginners, advanced CSS, front-end development, responsive design, CSS animations, best CSS course, web development courses, UI/UX design, coding courses, HTML and CSS" />
<meta name="description" content="Master CSS with our online course. Learn CSS basics, responsive design, flexbox, grid, animations, and more to become a front-end expert." />
<meta name="author" content="litsedu.com" />

<!-- JSON-LD Schema Markup for SEO with Rating -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "CSS Course - Master Web Design & Styling",
  "description": "An in-depth CSS course covering styling, layouts, animations, flexbox, grid, and responsive web design techniques.",
  "provider": {
    "@type": "Organization",
    "name": "Learn Institute of Technology",
    "url": "https://litsedu.com"
  },
  "instructor": {
    "@type": "Person",
    "name": "CSS Instructor",
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
    "url": "https://litsedu.com/css-course"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.7",
    "reviewCount": "180",
    "bestRating": "5",
    "worstRating": "1"
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
                            <img src="./image/courseimg/CSS-Online-Training.png" class="card-img-top" alt="learn institute of technology service" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">CSS</h1>
                                <p class="card-text">COMPLETE CSS COURSE IN TAMIL</p>
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
                                        <i>1,164 Ratings</i>                      
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
                            <p class=" text-dark">The CSS course offers a comprehensive introduction to Cascading Style Sheets (CSS), a fundamental technology used to style and layout web pages. CSS allows developers to control the appearance of HTML elements, manage design consistency, and create responsive layouts. This course covers both basic and advanced CSS techniques, helping learners to design visually appealing and well-structured web pages.</p>
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
                        
                            <p class="card-text">Understand the basics of CSS, including selectors, properties, and values.</p>
                            <p class="card-text">Learn how to apply styles to HTML elements, including text, colors, backgrounds, and borders.</p>
                            <p class="card-text">Gain proficiency in using CSS layout techniques such as Flexbox and Grid to create responsive and adaptable web designs.</p>
                            <p class="card-text">Explore advanced CSS features such as animations, transitions, and pseudo-classes for enhancing user interactions.</p>
                            <p class="card-text">Develop skills in creating responsive designs that work across various devices and screen sizes.</p>
                            <p class="card-text">Master best practices for organizing and maintaining CSS code, including using preprocessors like Sass or Less if desired.</p>
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
                              
                                    <p class="card-text">Web developers and designers looking to enhance their skills in styling and layout using CSS.</p>
                                     <p class="card-text">Beginners and students interested in learning CSS to start a career in web development or design.</p>
                                    <p class="card-text">Front-end developers who need to improve their expertise in creating responsive and visually appealing web pages.</p>
                                    
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
                            <p class=" text-dark mb-0">Basic knowledge of HTML and web development concepts.</p>
                            <p class=" text-dark mb-0">Familiarity with general computer use and software tools.</p>
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
                <!-- Introduction to CSS -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to CSS</td>
                </tr>

                <!-- What is CSS -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-info-circle fs-3 text-primary"></i></th>
                    <td class="fs-5">What is CSS?</td>
                </tr>

                <!-- History and Evolution of CSS -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-clock fs-3 text-warning"></i></th>
                    <td class="fs-5">History and Evolution of CSS</td>
                </tr>

                <!-- CSS Syntax and Selectors -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-code fs-3 text-info"></i></th>
                    <td class="fs-5">CSS Syntax and Selectors</td>
                </tr>

                <!-- Basic Syntax -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-code-slash fs-3 text-success"></i></th>
                    <td class="fs-5">Basic Syntax</td>
                </tr>

                <!-- Types of Selectors -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-puzzle fs-3 text-primary"></i></th>
                    <td class="fs-5">Types of Selectors (element, class, id, attribute, etc.)</td>
                </tr>

                <!-- Grouping and Nesting Selectors -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-layer fs-3 text-warning"></i></th>
                    <td class="fs-5">Grouping and Nesting Selectors</td>
                </tr>

                <!-- Including CSS in HTML -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-text fs-3 text-info"></i></th>
                    <td class="fs-5">Including CSS in HTML</td>
                </tr>

                <!-- Inline, Internal, and External CSS -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-code fs-3 text-success"></i></th>
                    <td class="fs-5">Inline, Internal, and External CSS</td>
                </tr>

                <!-- CSS Specificity and Inheritance -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-shield-lock fs-3 text-primary"></i></th>
                    <td class="fs-5">CSS Specificity and Inheritance</td>
                </tr>

                <!-- Basic Styling -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-paint-bucket fs-3 text-warning"></i></th>
                    <td class="fs-5">Basic Styling</td>
                </tr>

                <!-- Color and Backgrounds -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-brush fs-3 text-info"></i></th>
                    <td class="fs-5">Color and Backgrounds</td>
                </tr>

                <!-- Color Names, Hex, RGB, RGBA, HSL, HSLA -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-palette fs-3 text-success"></i></th>
                    <td class="fs-5">Color Names, Hex, RGB, RGBA, HSL, HSLA</td>
                </tr>

                <!-- Background Colors and Images -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-image fs-3 text-primary"></i></th>
                    <td class="fs-5">Background Colors and Images</td>
                </tr>

                <!-- Text Styling -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-fonts fs-3 text-warning"></i></th>
                    <td class="fs-5">Text Styling</td>
                </tr>

                <!-- Font Properties -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-type fs-3 text-info"></i></th>
                    <td class="fs-5">Font Properties</td>
                </tr>

                <!-- Text Alignment, Decoration, and Transformation -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-align-center fs-3 text-success"></i></th>
                    <td class="fs-5">Text Alignment, Decoration, and Transformation</td>
                </tr>

                <!-- Line Height and Letter Spacing -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrows-angle-expand fs-3 text-primary"></i></th>
                    <td class="fs-5">Line Height and Letter Spacing</td>
                </tr>

                <!-- Box Model -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-box fs-3 text-warning"></i></th>
                    <td class="fs-5">Box Model</td>
                </tr>

                <!-- Understanding the Box Model -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-boxes fs-3 text-info"></i></th>
                    <td class="fs-5">Understanding the Box Model</td>
                </tr>

                <!-- Content, Padding, Border, Margin -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-bounding-box-circles fs-3 text-success"></i></th>
                    <td class="fs-5">Content, Padding, Border, Margin</td>
                </tr>

                <!-- Box Sizing -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-layout fs-3 text-primary"></i></th>
                    <td class="fs-5">Box Sizing</td>
                </tr>

                <!-- Display and Visibility -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-eye-slash fs-3 text-warning"></i></th>
                    <td class="fs-5">Display and Visibility</td>
                </tr>

                <!-- Display Types -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-eye fs-3 text-info"></i></th>
                    <td class="fs-5">Display Types (block, inline, inline-block, none)</td>
                </tr>

                <!-- Visibility and Opacity -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-eye fs-3 text-success"></i></th>
                    <td class="fs-5">Visibility and Opacity</td>
                </tr>

                <!-- Layout Techniques -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-layout-sidebar fs-3 text-primary"></i></th>
                    <td class="fs-5">Layout Techniques</td>
                </tr>

                <!-- Positioning -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-right fs-3 text-warning"></i></th>
                    <td class="fs-5">Positioning</td>
                </tr>

                <!-- Static, Relative, Absolute, Fixed, Sticky -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrows-move fs-3 text-info"></i></th>
                    <td class="fs-5">Static, Relative, Absolute, Fixed, Sticky</td>
                </tr>

                <!-- Flexbox -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-box-arrow-in-up fs-3 text-success"></i></th>
                    <td class="fs-5">Flexbox</td>
                </tr>

                <!-- Flex Container and Flex Items -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-columns fs-3 text-primary"></i></th>
                    <td class="fs-5">Flex Container and Flex Items</td>
                </tr>

                <!-- Flex Properties -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-left-right fs-3 text-warning"></i></th>
                    <td class="fs-5">Flex Properties (justify-content, align-items, flex-direction, etc.)</td>
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
                                   
                                    <p class="card-text">Front-End Developer</p>
                                    <p class="card-text">Web Designer</p>
                                    <p class="card-text">UI/UX Designer</p>
                                    <p class="card-text">CSS Developer</p>
                                    <p class="card-text">Web Developer</p>
                                    <p class="card-text">Freelance Web Designer</p>
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

