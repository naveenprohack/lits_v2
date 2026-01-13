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
<title>Pandas Course | Master Data Analysis with Python</title>

<meta name="keywords" content="Pandas course, learn Pandas, Pandas tutorial, Python Pandas, data analysis with Pandas, Pandas training, Pandas data science, Pandas online course, Pandas for beginners, advanced Pandas, Pandas dataframe, Pandas series, Pandas for machine learning, Pandas for data visualization, Python data manipulation, Pandas certification, data wrangling, Pandas course online, data science with Pandas, best Pandas course">

<meta name="description" content="Master Pandas for data analysis and manipulation with Python. Learn Pandas DataFrames, Series, data wrangling, and real-world applications in data science and machine learning. Enroll in our online Pandas course today!">

<meta name="author" content="litsedu.com">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Pandas Course | Master Data Analysis with Python",
  "description": "Master Pandas for data analysis and manipulation with Python. Learn Pandas DataFrames, Series, data wrangling, and real-world applications in data science and machine learning. Enroll in our online Pandas course today!",
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
      "name": "Data Science Expert",
      "affiliation": {
        "@type": "Organization",
        "name": "Litsedu"
      }
    },
    "offers": {
      "@type": "Offer",
      "price": "Contact for Pricing",
      "priceCurrency": "USD",
      "url": "https://litsedu.com/pandas-course",
      "validFrom": "2025-02-01"
    }
  }
}
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="canonical" href="https://litsedu.com/Pandas-Online-Training"/>
   <link rel="icon" type="image/png" href="image/Logo.png">
    <!--</div> <!-- End Course Page Banner -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

   
<div class="container mt-5"> <!-- Start All Course -->
   
       
           
                    <div class="row">
                        <div class="col-md-6">
                            <img src="./image/courseimg/Pandas-Online-Training.png" class="card-img-top" alt="learn institute of technology service" style="max-width: 100%; height: auto;"/>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card-body">
                                <h1 class="card-title">PANDAS</h1>
                                <p class="card-text">COMPLETE PANDAS COURSE IN TAMIL</p>
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
                                        <i>1,156 Ratings</i>                      
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
                            <p class=" text-dark">The Pandas course provides a comprehensive introduction to Pandas, a powerful Python library for data manipulation and analysis. This course covers the core functionalities of Pandas, including data structures, data cleaning, and data transformation. Learners will gain hands-on experience in using Pandas to work with large datasets and perform complex data analysis tasks efficiently.</p>
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
                        
                            <p class="card-text">Understand the fundamentals of Pandas, including its primary data structures: Series and DataFrame.</p>
                            <p class="card-text">Learn to load, clean, and preprocess data using Pandas for effective analysis and visualization.</p>
                            <p class="card-text">Gain proficiency in performing data manipulation tasks such as filtering, grouping, and merging datasets.</p>
                            <p class="card-text">Explore advanced features such as time series analysis, handling missing data, and working with categorical data.</p>
                            <p class="card-text">Implement best practices for optimizing data analysis workflows and integrating Pandas with other data science tools and libraries.</p>
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
                              
                                    <p class="card-text">Data scientists and analysts looking to enhance their skills in data manipulation and analysis with Pandas.</p>
                                     <p class="card-text">Python developers interested in leveraging Pandas for data processing and analytics tasks.</p>
                                    <p class="card-text">Students and researchers aiming to understand and apply Pandas for various data analysis and data science applications.</p>
                                    
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
                            <p class=" text-dark mb-0">Basic knowledge of Python programming is recommended.</p>
                            <p class=" text-dark mb-0">Familiarity with general data analysis concepts and principles will be beneficial.</p>
                            <p class=" text-dark mb-0">A computer with Python and Pandas installed for hands-on practice.</p>
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
                                <td class="fs-5">Introduction to Pandas</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Pandas Installation and Setup</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Data Structures: Series and DataFrames</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Data Import and Export: CSV, Excel, SQL, and JSON</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Data Exploration: Viewing and Summarizing Data</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Data Cleaning: Handling Missing Values and Duplicates</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Data Transformation: Filtering, Sorting, and Aggregation</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Merging and Joining DataFrames</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Grouping and Aggregating Data</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Time Series Analysis with Pandas</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Data Visualization with Pandas</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Working with Text Data</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Advanced Indexing and Selection</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Applying Functions and Custom Operations</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Performance Optimization and Efficiency</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Reshaping Data: Pivot Tables and Melt</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Handling Categorical Data</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Combining Pandas with Other Libraries (e.g., NumPy, Matplotlib)</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Best Practices for Pandas Data Analysis</td></tr>
                                <tr>
                                    <th scope="row" class="text-center"><i class="bi bi-check-circle-fill fs-3 text-success"></i></th>
                                <td class="fs-5">Real-World Applications and Case Studies</td>
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
                                   
                                    <p class="card-text">Data Analyst</p>
                                    <p class="card-text">Data Scientist</p>
                                    <p class="card-text">Business Intelligence Analyst</p>
                                    <p class="card-text">Python Developer</p>
                                    <p class="card-text">Data Engineer</p>
                                    <p class="card-text">Research Analyst</p>
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

