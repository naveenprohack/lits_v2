
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Learn XML - Comprehensive XML Programming Course</title>

<!-- Meta Keywords (focused on XML and web development) -->
<meta name="keywords" content="XML course, learn XML, XML programming, XML tutorial, XML for beginners, XML data format, XML tags, XML schema, learn web development, advanced XML features, XML parsing, XML with JavaScript, XML data structures, XML and web technologies, create XML files, XML best practices, online XML course" />

<!-- Meta Description (focused on XML and its importance in web development) -->
<meta name="description" content="Learn XML from scratch with our comprehensive course. Explore XML tags, schemas, and data structures, and how to use XML in web development and data management." />

<!-- Meta Author -->
<meta name="author" content="litsedu.com" />

<!-- Open Graph Tags for Social Media Sharing -->
<meta property="og:title" content="Learn XML - Comprehensive XML Programming Course" />
<meta property="og:description" content="Master XML programming with our in-depth course. Learn about XML tags, schemas, and how XML is used in web development and data management." />
<meta property="og:image" content="https://litsedu.com/image/courseimg/Xml-Online-Training.png" /> <!-- Replace with your image URL -->
<meta property="og:url" content="https://www.litsedu.com/xml-course" /> <!-- Replace with your actual page URL -->

<!-- Twitter Card Tags -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Learn XML - Comprehensive XML Programming Course" />
<meta name="twitter:description" content="Discover how to work with XML, understand its structure, and use it for data representation and web development in this detailed course." />
<meta name="twitter:image" content="https://litsedu.com/image/courseimg/Xml-Online-Training.png" /> <!-- Replace with your image URL -->
 <link rel="icon" type="image/png" href="image/Logo.png">
 
        <link rel="canonical" href="https://litsedu.com/Xml-Online-Training" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="canonical" href="https://litsedu.com/Xml-Online-Training">
  <link rel="icon" type="image/png" href="image/Logo.png">
     
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
                            <img src="https://litsedu.com/image/courseimg/Xml-Online-Training.png" class="card-img-top photo-sze" alt="Xml-Online-Training" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">XML</h1>
                                <p class="card-text">COMPLETE XML COURSE IN TAMIL</p>
                                <p class="card-text">Duration: </p>
                                <form action="checkout.php" method="post">
                                  
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
                            <p class=" text-dark">The XML course provides a thorough understanding of Extensible Markup Language (XML), a versatile and widely-used standard for encoding documents and data. XML is essential for data interchange and configuration in web services, applications, and many other technology domains. This course covers the fundamentals of XML, its syntax, structure, and advanced features, empowering learners to effectively use XML for data storage and communication.</p>
                        </div>
                    </div>
                
</div>
 



 <div class="container my-5">
   
                <div class="text-center mb-5">
                    <h3 class="display-6 fw-bold text-uppercase">Course Objective</h3>
                    <p class="text-muted">Learn what you will achieve by the end of this course</p>
                </div>

                
                    <div class="card bg-light mb-4 shadow-sm border-0">
                        <div class="card-body">
                        
                            <p class="card-text"></p>
                    <p class="card-text">Understand the syntax and structure of XML, including elements, attributes, and namespa</p>
                    <p class="card-text">Learn how to create well-formed and valid XML documents.</p>
                    <p class="card-text">Gain proficiency in XML Schema Definition (XSD) for defining and validating XML data structures.</p>
                    <p class="card-text">Explore XPath for navigating and querying XML documents.</p>
                    <p class="card-text">Develop skills in XSLT (Extensible Stylesheet Language Transformations) for transforming XML data into different formats.</p>
                     <p class="card-text">Learn how to integrate XML with other technologies such as JSON and databases.</p> 
                     <p class="card-text">Understand best practices for using XML in various applications, including web services and configuration files.</p>
                        </div>
                    </div>
           
</div>


 <div class="container my-5">
   
                <div class="text-center mb-5">
                    <h3 class="display-6 fw-bold text-uppercase">Who is this Course For?</h3>
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
                              
                                    <p class="card-text">Data analysts and developers who work with data interchange and need to understand XML.</p>
                                     <p class="card-text">IT professionals and software engineers involved in designing or maintaining systems that use XML.</p>
                                    <p class="card-text">Students and beginners interested in learning data formats and markup languages.</p>
                                    
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
                            <p class=" text-dark mb-0">Basic understanding of markup languages and data structures.</p>
                            <p class=" text-dark mb-0">Familiarity with programming concepts is helpful but not required.</p>
                            <p class=" text-dark mb-0">Access to XML tools and editors for hands-on practice.</p>
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
                <!-- Introduction to XML -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to XML</td>
                </tr>

                <!-- Overview of XML -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-info-circle fs-3 text-info"></i></th>
                    <td class="fs-5">Overview of XML and its purpose</td>
                </tr>

                <!-- Comparison with HTML -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-text fs-3 text-warning"></i></th>
                    <td class="fs-5">Comparison with HTML</td>
                </tr>

                <!-- Well-formed vs. Valid XML -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-puzzle fs-3 text-primary"></i></th>
                    <td class="fs-5">Well-formed vs. valid XML</td>
                </tr>

                <!-- Basic Syntax Rules and Structure -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-braces fs-3 text-success"></i></th>
                    <td class="fs-5">Basic syntax rules and structure</td>
                </tr>

                <!-- XML Document Structure -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-collection fs-3 text-info"></i></th>
                    <td class="fs-5">XML Document Structure</td>
                </tr>

                <!-- Elements, Attributes, and Entities -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-cursor fs-3 text-primary"></i></th>
                    <td class="fs-5">Elements, attributes, and entities</td>
                </tr>

                <!-- XML Namespaces -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-gear fs-3 text-warning"></i></th>
                    <td class="fs-5">XML namespaces</td>
                </tr>

                <!-- XML Declaration and Processing Instructions -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-code fs-3 text-success"></i></th>
                    <td class="fs-5">XML declaration and processing instructions</td>
                </tr>

                <!-- Document Type Definitions (DTDs) -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-check fs-3 text-info"></i></th>
                    <td class="fs-5">Document Type Definitions (DTDs)</td>
                </tr>

                <!-- Introduction to DTDs -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark fs-3 text-warning"></i></th>
                    <td class="fs-5">Introduction to DTDs</td>
                </tr>

                <!-- Creating and Using DTDs -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-plus fs-3 text-primary"></i></th>
                    <td class="fs-5">Creating and using DTDs</td>
                </tr>

                <!-- Entity Declarations and References -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-text fs-3 text-info"></i></th>
                    <td class="fs-5">Entity declarations and references</td>
                </tr>

                <!-- XML Schema Definition (XSD) -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-lock fs-3 text-warning"></i></th>
                    <td class="fs-5">XML Schema Definition (XSD)</td>
                </tr>

                <!-- Introduction to XSD -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-text fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to XSD</td>
                </tr>

                <!-- Creating and Using XSD -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-plus fs-3 text-info"></i></th>
                    <td class="fs-5">Creating and using XSD</td>
                </tr>

                <!-- Complex and Simple Types -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-code fs-3 text-primary"></i></th>
                    <td class="fs-5">Complex and simple types</td>
                </tr>

                <!-- Validation with XSD -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle fs-3 text-success"></i></th>
                    <td class="fs-5">Validation with XSD</td>
                </tr>

                <!-- XPath and XQuery -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-search fs-3 text-info"></i></th>
                    <td class="fs-5">XPath and XQuery</td>
                </tr>

                <!-- Introduction to XPath -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-search fs-3 text-warning"></i></th>
                    <td class="fs-5">Introduction to XPath</td>
                </tr>

                <!-- Basic and Advanced XPath Expressions -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-search fs-3 text-primary"></i></th>
                    <td class="fs-5">Basic and advanced XPath expressions</td>
                </tr>

                <!-- Introduction to XQuery -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-search fs-3 text-info"></i></th>
                    <td class="fs-5">Introduction to XQuery</td>
                </tr>

                <!-- Querying XML Data with XQuery -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-search fs-3 text-warning"></i></th>
                    <td class="fs-5">Querying XML data with XQuery</td>
                </tr>

                <!-- XSLT (XML Stylesheet Language Transformations) -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-box-arrow-up-right fs-3 text-success"></i></th>
                    <td class="fs-5">XSLT (XML Stylesheet Language Transformations)</td>
                </tr>

                <!-- Introduction to XSLT -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-box-arrow-up-right fs-3 text-primary"></i></th>
                    <td class="fs-5">Introduction to XSLT</td>
                </tr>

                <!-- Creating XSLT Stylesheets -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-file-earmark-code fs-3 text-info"></i></th>
                    <td class="fs-5">Creating XSLT stylesheets</td>
                </tr>

                <!-- Transforming XML with XSLT -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-arrow-clockwise fs-3 text-warning"></i></th>
                    <td class="fs-5">Transforming XML with XSLT</td>
                </tr>

                <!-- Applying Templates and Using XPath in XSLT -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-pen fs-3 text-success"></i></th>
                    <td class="fs-5">Applying templates and using XPath in XSLT</td>
                </tr>

                <!-- XML Parsing and Processing -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-code-slash fs-3 text-info"></i></th>
                    <td class="fs-5">XML Parsing and Processing</td>
                </tr>

                <!-- Parsing XML with DOM and SAX -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-code-slash fs-3 text-primary"></i></th>
                    <td class="fs-5">Parsing XML with DOM and SAX</td>
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
                                   
                                    <p class="card-text">XML Developer</p>
                                    <p class="card-text">Data Analyst</p>
                                    <p class="card-text">Software Engineer (with a focus on data integration)</p>
                                    <p class="card-text">Web Services Developer</p>
                                    <p class="card-text">Systems Integration Specialist</p>
                                    <p class="card-text">IT Consultant</p>
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

