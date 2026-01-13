<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Student Feedback & Reviews | Learn Institute of Technology (LITS)</title>

  <meta name="description" content="Explore real student reviews about Learn Institute of Technology (LITS). Our online courses empower learners with in-demand skills, expert training, and career growth.">
  <meta name="keywords" content="Learn Institute of Technology, LITS, online courses, student feedback, course reviews, best online training institute, web development, spoken English, programming classes, coding courses, online education platform, online training for students, student testimonials">
  <meta name="author" content="litsedu.com">
  <link rel="canonical" href="https://litsedu.com/feedback" />

  <!-- Open Graph for social media -->
  <meta property="og:title" content="Student Feedback & Reviews | Learn Institute of Technology (LITS)">
  <meta property="og:description" content="Read verified reviews from learners of Learn Institute of Technology. Explore how our online programs help students succeed.">
  <meta property="og:image" content="https://litsedu.com/images/banner/feedback-banner.jpg">
  <meta property="og:url" content="https://litsedu.com/feedback">
  <meta property="og:type" content="website">

  <!-- Favicon -->
  <!--<link rel="icon" href="https://litsedu.com/images/favicon.ico" type="image/x-icon">-->

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Schema Markup -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Learn Institute of Technology",
    "url": "https://litsedu.com",
    "logo": "https://litsedu.com/images/logo.png",
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.7",
      "reviewCount": "120"
    },
    "review": [
      {
        "@type": "Review",
        "author": {
          "@type": "Person",
          "name": "Dinesh Shekar"
        },
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "5"
        },
        "reviewBody": "It was a good experience for me and I am learning in LITS."
      },
      {
        "@type": "Review",
        "author": {
          "@type": "Person",
          "name": "Madhu Mitha"
        },
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "4"
        },
        "reviewBody": "I really enjoyed the spoken English course. It will be useful in my life."
      }
    ]
  }
  </script>

  <style>
    html, body {
        max-width: 100%;
        overflow-x: hidden;
        position: relative;
    }
    body {
      background-color: #f1f5f9;
      font-family: Arial, sans-serif;
    }
    .feedback-container {
      margin: 50px auto;
      background: linear-gradient(145deg, #ffffff, #e6e6e6);
      padding: 30px;
      border-radius: 15px;
      box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2), -5px -5px 10px rgba(255, 255, 255, 0.8);
    }
    .review-carousel {
      display: flex;
      overflow-x: auto;
      gap: 15px;
      padding: 10px 0;
    }
    .review-card {
      flex: 0 0 25%;
      min-width: 220px;
      background: #ffffff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 -2px 4px rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      margin: 10px 0;
      padding: 20px;
      transition: transform 0.3s;
    }
    .review-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }
    .review-rating {
      color: #f4b400;
      font-size: 1.2rem;
    }
    .controls {
      text-align: center;
      margin-top: 20px;
    }
    .controls button {
      border: none;
      border-radius: 20px;
      padding: 10px 20px;
      color: #fff;
      font-weight: bold;
      background: linear-gradient(145deg, #007bff, #0056b3);
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2), -2px -2px 5px rgba(255, 255, 255, 0.5);
    }
    .controls button:hover {
      background: linear-gradient(145deg, #0056b3, #007bff);
      box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>

<?php
  include('./dbConnection.php');
  include('./mainInclude/header.php'); 
  include('./floatingwi.php'); 
?>

<div class="feedback-container">
  <h1 class="text-center mb-4">Student Feedback & Reviews | Learn Institute of Technology</h1>

  <div class="review-carousel" id="review-carousel">
    <div class="review-card">
      <h5>Dinesh Shekar</h5>
      <div class="review-rating">★★★★★</div>
      <p>It was a good experience for me and I am learning in LITS.</p>
      <small>2024-01-01</small>
    </div>
    <div class="review-card">
      <h5>Madhu Mitha</h5>
      <div class="review-rating">★★★★☆</div>
      <p>I really enjoyed the spoken English course. It will be useful in my life.</p>
      <small>2024-01-02</small>
    </div>
    <!-- Add more reviews here... -->  
    <div class="review-card">
      <h5>Advocate Monika</h5>
      <div class="review-rating">★★★☆☆</div>
      <p>Hi I'm doing multimedia course MMDA .The skills of teaching the faculty was extraordinary and i got a placement too😎.</p>
      <small>2024-01-04</small>
    </div>
    <div class="review-card">
      <h5>yakshitha D</h5>
      <div class="review-rating">★★★★★</div>
      <p>Faculty's Are Very professional and very humble. I suggest that if you joined all of them should get a good career here.....!</p>
      <small>2024-01-05</small>
    </div>
    <div class="review-card">
      <h5>Preethi </h5>
      <div class="review-rating">★★★★☆</div>
      <p>Good institution for coding languages, very useful for 12th pass out students to develop their studies...</p>
      <small>2024-01-06</small>
    </div>
    <div class="review-card">
      <h5>Jagatheesan V.</h5>
      <div class="review-rating">★★★★★</div>
      <p>Hi am jagadheesan..am learing tally from this institute..they teach each an everything with dedication..im so happy to learning here.allthe staffs are good..communications skills are excellent..</p>
      <small>2024-01-07</small>
    </div>
    <div class="review-card">
      <h5>Alwin </h5>
      <div class="review-rating">★★★☆☆</div>
      <p>💯 Trustable institute</p>
      <small>2024-01-08</small>
    </div>
    <div class="review-card">
      <h5>Keerthu Murali</h5>
      <div class="review-rating">★★★★☆</div>
      <p>It's a best institution and it's a good future for every student</p>
      <small>2024-01-09</small>
    </div>
    <div class="review-card">
      <h5>Chandra Sekar</h5>
      <div class="review-rating">★★★★★</div>
      <p>I learned here. good ,kind and supportive staffs and good atmosphere. Thankyou very very very much for taking next level to my career.</p>
      <small>2024-01-10</small>
    </div>
      <div class="review-card">
      <h5>Chandra Sekar</h5>
      <div class="review-rating">★★★★★</div>
      <p>I learned here. good ,kind and supportive staffs and good atmosphere. Thankyou very very very much for taking next level to my career.</p>
      <small>2024-01-10</small>
    </div>
      <div class="review-card">
      <h5>Gokul Krish</h5>
      <div class="review-rating">★★★★★</div>
      <p>I have well trained for SQL in this institution. And take online class for SQL. time & money saved & travel expenses also.The teacher are friendly. I successfully in this course</p>
      <small>2024-01-10</small>
    </div>
      <div class="review-card">
      <h5>
Suresh</h5>
      <div class="review-rating">★★★★★</div>
      <p>Nice institute for fresher those are looking for good hr course and placement. Thank you</p>
      <small>2024-01-10</small>
    </div>
     <div class="review-card">
      <h5>
SARAVANAN V</h5>
      <div class="review-rating">★★★★★</div>
      <p>I'm Saravanan I took a pyhton classes on Lits online education Centre my faculty mr.logesh was taken the classes at interesting and easy way for even a tuff output...👌. Lots of happiness overloaded master.</p>
      <small>2024-01-10</small>
    </div>
      <div class="review-card">
      <h5>
Rajamani </h5>
      <div class="review-rating">★★★★★</div>
      <p>It's very good teaching level.</p>
      <small>2024-01-03</small>
    </div>
  </div>

  <div class="controls">
    <button onclick="scrollLeft()">&#8592; Previous</button>
    <button onclick="scrollRight()">Next &#8594;</button>
  </div>
</div>

<div class="container-fluid">
  <marquee class="marq" direction="left" loop="" style="margin-top: 10px;"> 
    <div class="marquee-container" style="display: flex; gap: 2em; justify-content: center;">
      <div class="logo">
        <img src="image/company_logos/zoho.png" alt="Zoho Recruitment Partner - LITS" loading="lazy">
      </div>
      <div class="logo">
        <img src="image/company_logos/deloitte.png" alt="Deloitte Recruitment Partner - LITS" loading="lazy">
      </div>
      <div class="logo">
        <img src="image/company_logos/tech_mahindra.png" alt="Tech Mahindra Recruitment Partner - LITS" loading="lazy">
      </div>
      <div class="logo">
        <img src="image/company_logos/amazon.png" alt="Amazon Recruitment Partner - LITS" loading="lazy">
      </div>
      <div class="logo">
        <img src="image/company_logos/flipkart.png" alt="Flipkart Recruitment Partner - LITS" loading="lazy">
      </div>
      <div class="logo">
        <img src="image/company_logos/hcl.png" alt="HCL Recruitment Partner - LITS" loading="lazy">
      </div>
    </div>
  </marquee>
</div>

<?php include('./mainInclude/footer.php'); ?>  

<!-- JavaScript for Carousel -->
<script>
  const carousel = document.getElementById('review-carousel');

  function scrollLeft() {
    carousel.scrollBy({ left: -carousel.offsetWidth, behavior: 'smooth' });
  }

  function scrollRight() {
    carousel.scrollBy({ left: carousel.offsetWidth, behavior: 'smooth' });
    if (carousel.scrollLeft + carousel.offsetWidth >= carousel.scrollWidth) {
      carousel.scrollTo({ left: 0, behavior: 'smooth' });
    }
  }

  setInterval(() => {
    scrollRight();
  }, 5000);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
