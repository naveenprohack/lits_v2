
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Supply Chain Management Course | Learn Business Operations & Logistics | Learn Institute of Technology</title>

<!-- Meta Keywords (focused on supply chain management, logistics, and operations management) -->
<meta name="keywords" content="Learn Institute of Technology, litsedu, supply chain management, logistics management, online supply chain course, business operations course, supply chain management certification, logistics and supply chain, supply chain planning, inventory management, procurement and logistics, business supply chain course, supply chain courses online, learn supply chain management, operations management course, supply chain management near me, best supply chain management course" />

<!-- Meta Description (focused on the skills taught in the supply chain management course) -->
<meta name="description" content="Enhance your skills in business operations with our Supply Chain Management course. Learn key concepts like logistics, inventory management, and procurement to advance your career in operations management." />

<!-- Meta Author -->
<meta name="author" content="litsedu.com" />

<!-- Open Graph Tags for Social Media Sharing -->
<meta property="og:title" content="Supply Chain Management Course | Learn Business Operations & Logistics | Learn Institute of Technology" />
<meta property="og:description" content="Master the skills of supply chain management including logistics, inventory control, and procurement with our comprehensive course, designed to advance your career in business operations." />
<meta property="og:image" content="URL_TO_IMAGE.jpg" /> <!-- Replace with your image URL -->
<meta property="og:url" content="https://www.litsedu.com/supply-chain-management-course" /> <!-- Replace with your actual page URL -->

<!-- Twitter Card Tags -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Supply Chain Management Course | Learn Business Operations & Logistics | Learn Institute of Technology" />
<meta name="twitter:description" content="Get expert knowledge in Supply Chain Management with our online course. Learn logistics, inventory management, procurement, and more to advance in the field of business operations." />
<meta name="twitter:image" content="URL_TO_IMAGE.jpg" /> <!-- Replace with your image URL -->
<link rel="canonical" href="https://litsedu.com/Supply-Chain-Management-Online-Training">
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
                            <img src="./image/courseimg/Supply-Chain-Management-Online-Training.png" class="card-img-top" alt="learn institute of technology service" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">SUPPLY CHAIN MANAGEMENT</h1>
                                <p class="card-text">COMPLETE SUPPLY CHAIN MANAGEMENT COURSE IN TAMIL</p>
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
                                        <i>1,134 Ratings</i>                      
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
                            <p class=" text-dark">The Supply Chain Management course provides a comprehensive understanding of the entire supply chain process, from procurement and production to distribution and logistics. This course covers key concepts, strategies, and best practices in managing and optimizing supply chains to improve efficiency and effectiveness. Learners will explore various aspects of supply chain management, including supply chain design, operations, and technology.</p>
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
                        
                            <p class="card-text">Understand the fundamentals of supply chain management, including key concepts, processes, and components.</p>
                            <p class="card-text">Learn how to design and optimize supply chain networks for efficiency and effectiveness.</p>
                            <p class="card-text">Gain proficiency in managing procurement, inventory, production, and distribution processes.</p>
                            <p class="card-text">Explore supply chain strategies, including demand forecasting, supplier management, and risk management.</p>
                            <p class="card-text">Develop skills in using technology and data analytics for supply chain optimization and decision-making.</p>
                            <p class="card-text">Master best practices for managing global supply chains and addressing challenges in a dynamic business environment.</p>
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
                              
                                    <p class="card-text">Supply chain professionals and managers seeking to enhance their knowledge and skills in supply chain management.</p>
                                     <p class="card-text">Business analysts and operations managers who need to understand supply chain processes for better decision-making.</p>
                                    <p class="card-text">Students and beginners interested in starting a career in supply chain management or logistics.</p>
                                    
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
                            <p class=" text-dark mb-0">Basic knowledge of business operations and management concepts.</p>
                            <p class=" text-dark mb-0">Familiarity with general supply chain principles is beneficial but not required.</p>
                            <p class=" text-dark mb-0">Access to supply chain management software or tools for hands-on practice is beneficial but not required.</p>
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
                <!-- Introduction to Supply Chain Management -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                    <td class="fs-5">Introduction to Supply Chain Management</td>
                </tr>

                <!-- Supply Chain Strategy and Design -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-clipboard-check fs-3 text-primary"></i></th>
                    <td class="fs-5">Supply Chain Strategy and Design</td>
                </tr>

                <!-- Demand Forecasting and Planning -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-bar-chart-line fs-3 text-warning"></i></th>
                    <td class="fs-5">Demand Forecasting and Planning</td>
                </tr>

                <!-- Procurement and Supplier Management -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-handbag fs-3 text-danger"></i></th>
                    <td class="fs-5">Procurement and Supplier Management</td>
                </tr>

                <!-- Inventory Management -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-box fs-3 text-info"></i></th>
                    <td class="fs-5">Inventory Management</td>
                </tr>

                <!-- Warehousing and Distribution -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-house-door fs-3 text-primary"></i></th>
                    <td class="fs-5">Warehousing and Distribution</td>
                </tr>

                <!-- Transportation and Logistics -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-truck fs-3 text-success"></i></th>
                    <td class="fs-5">Transportation and Logistics</td>
                </tr>

                <!-- Supply Chain Risk Management -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-shield-lock fs-3 text-warning"></i></th>
                    <td class="fs-5">Supply Chain Risk Management</td>
                </tr>

                <!-- Supply Chain Technology and Automation -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-laptop fs-3 text-info"></i></th>
                    <td class="fs-5">Supply Chain Technology and Automation</td>
                </tr>

                <!-- Global Supply Chain Management -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-globe fs-3 text-danger"></i></th>
                    <td class="fs-5">Global Supply Chain Management</td>
                </tr>

                <!-- Sustainable Supply Chain Practices -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-leaf fs-3 text-success"></i></th>
                    <td class="fs-5">Sustainable Supply Chain Practices</td>
                </tr>

                <!-- Supply Chain Analytics and Performance Metrics -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-bar-chart fs-3 text-primary"></i></th>
                    <td class="fs-5">Supply Chain Analytics and Performance Metrics</td>
                </tr>

                <!-- Lean and Agile Supply Chain Management -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-gears fs-3 text-warning"></i></th>
                    <td class="fs-5">Lean and Agile Supply Chain Management</td>
                </tr>

                <!-- Project Work and Case Studies -->
                <tr>
                    <th scope="row" class="text-center"><i class="bi bi-journal-text fs-3 text-info"></i></th>
                    <td class="fs-5">Project Work and Case Studies</td>
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
                                   
                                    <p class="card-text">Supply Chain Manager</p>
                                    <p class="card-text">Logistics Coordinator</p>
                                    <p class="card-text">Procurement Specialist</p>
                                    <p class="card-text">Operations Manager</p>
                                    <p class="card-text">Inventory Analyst</p>
                                    <p class="card-text">Supply Chain Analyst</p>
                                    <p class="card-text">Demand Planner</p>
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

