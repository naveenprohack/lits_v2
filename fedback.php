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
