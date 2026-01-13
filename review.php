<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Page |Learn institute of technology service</title>
      <link rel="canonical" href="https://litsedu.com/fedback" />
      
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="keyword" content="Learn Institute of Technology Service, litsedu, Online courses, eLearning, Online Education,
   Online Training,Online Training near me, Online Tutoring, Online Skills Training, Online Instruction, Online Academic Programs, Online Teaching, Online Skills Training, Online Professional Development, coding course, online learning websites, programming classes for beginners, web development classes near me,starting an online course, learning online classes,learning designer courses,it learning courses,virtual online classes, courses it online, interactive online learning, courses websites, learning classes, web development classes online
website classes, web course, course learning, web programming courses, flexible online classes, courses to learn, course development, websites for online classes, web technology course, online learning for students, websites for courses online, top online learning sites">
    <meta name="description" content="Learn Institute of technology provide a various online courses that help you to upskill your career in different domains.">
    <meta name="author" content="litsedu.com">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Premium Feedback Styling */
body {
    background-color: #f8fafc;
    font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
}

.feedback-container {
    padding: 60px 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.section-title {
    font-weight: 800;
    color: #333;
    position: relative;
    margin-bottom: 50px;
}

.section-title::after {
    content: "";
    display: block;
    width: 60px;
    height: 4px;
    background: #0ca6a3;
    margin: 15px auto;
    border-radius: 2px;
}

/* Hide scrollbar but keep functionality */
.review-carousel {
    display: flex;
    overflow-x: auto;
    gap: 25px;
    padding: 20px 10px;
    scroll-behavior: smooth;
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}

.review-carousel::-webkit-scrollbar {
    display: none; /* Chrome, Safari and Opera */
}

.review-card {
    flex: 0 0 350px; /* Wider cards look more premium */
    background: #ffffff;
    border-radius: 20px;
    padding: 30px;
    border: 1px solid #f0f0f0;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: all 0.4s ease;
    display: flex;
    flex-direction: column;
}

.review-card:hover {
    transform: translateY(-10px);
    border-color: #0ca6a3;
    box-shadow: 0 15px 45px rgba(12, 166, 163, 0.1);
}

.reviewer-name {
    font-size: 1.15rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 5px;
}

.review-rating {
    color: #f4b400;
    font-size: 1rem;
    margin-bottom: 15px;
}

.review-text {
    font-size: 0.95rem;
    color: #666;
    line-height: 1.6;
    font-style: italic;
    flex-grow: 1; /* Pushes date to bottom */
}

.review-date {
    display: block;
    margin-top: 20px;
    font-size: 0.85rem;
    color: #999;
    font-weight: 600;
}

/* Controls */
.controls {
    margin-top: 40px;
    display: flex;
    justify-content: center;
    gap: 15px;
}

.btn-control {
    background: #fff;
    border: 2px solid #0ca6a3;
    color: #0ca6a3;
    border-radius: 50px;
    padding: 10px 25px;
    font-weight: 700;
    transition: 0.3s;
}

.btn-control:hover {
    background: #0ca6a3;
    color: #fff;
}

/* Reusing your logo slider from previous step */
.logo-slider {
    padding: 40px 0;
    background: #fff;
    border-top: 1px solid #eee;
}
.stats-section {
    padding: 60px 0;
    background: #ffffff;
}

.stat-card {
    border: none;
    border-radius: 20px;
    background: #ffffff;
    transition: all 0.3s ease;
    padding: 40px 20px;
    position: relative;
    overflow: hidden;
}

/* Floating background circle decoration */
.stat-card::before {
    content: "";
    position: absolute;
    top: -20px;
    right: -20px;
    width: 100px;
    height: 100px;
    background: rgba(12, 166, 163, 0.05);
    border-radius: 50%;
    z-index: 0;
}

.stat-icon-box {
    width: 70px;
    height: 70px;
    background: rgba(12, 166, 163, 0.1); /* Light Teal background */
    color: #0ca6a3; /* Brand Teal */
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    border-radius: 15px;
    margin: 0 auto 20px;
    position: relative;
    z-index: 1;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: #333;
    margin-bottom: 5px;
    display: block;
}

.stat-label {
    font-size: 1.1rem;
    font-weight: 600;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.stat-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
}

.stat-card:hover .stat-icon-box {
    background: #0ca6a3;
    color: #ffffff;
    transform: rotateY(360deg);
    transition: 0.6s;
}
@media (max-width: 768px) {
    .feedback-container {
        padding: 10px 5px;
    }
    .section-title {
        margin-bottom: 10px;
    }
}
    
  </style>
</head>
<body>

<div class="feedback-container">
    <h1 class="text-center section-title">Review</h1>
    
    <div class="review-carousel" id="review-carousel">
        <div class="review-card">
            <h5 class="reviewer-name">Dinesh Shekar</h5>
            <div class="review-rating">★★★★★</div>
            <p class="review-text">"It was a good experience for me and I'm learning a lot at LITS. Highly recommended!"</p>
            <small class="review-date">Jan 01, 2024</small>
        </div>

        <div class="review-card">
            <h5 class="reviewer-name">Madhu Mitha</h5>
            <div class="review-rating">★★★★★</div>
            <p class="review-text">"I really enjoyed the spoken English class. I learnt a lot which will be very useful for my life and career."</p>
            <small class="review-date">Jan 02, 2024</small>
        </div>

        <div class="review-card">
            <h5 class="reviewer-name">Advocate Monika</h5>
            <div class="review-rating">★★★★☆</div>
            <p class="review-text">"Doing the Multimedia MMDA course. The teaching faculty is extraordinary and I even got a placement!"</p>
            <small class="review-date">Jan 04, 2024</small>
        </div>

        <div class="review-card">
            <h5 class="reviewer-name">Yakshitha D</h5>
            <div class="review-rating">★★★★★</div>
            <p class="review-text">"Faculties are very professional and humble. I suggest everyone join here for a good career."</p>
            <small class="review-date">Jan 05, 2024</small>
        </div>

        <div class="review-card">
            <h5 class="reviewer-name">Chandra Sekar</h5>
            <div class="review-rating">★★★★★</div>
            <p class="review-text">"Kind and supportive staff with a great atmosphere. Thank you for taking my career to the next level."</p>
            <small class="review-date">Jan 10, 2024</small>
        </div>
        <div class="review-card">
            <h5 class="reviewer-name">Suresh</h5>
            <div class="review-rating">★★★★★</div>
            <p class="review-text">Nice institute for fresher those are looking for good hr course and placement. Thank you</p>
            <small class="review-date">2024-01-10</small>
        </div>
        <div class="review-card">
          <h5 class="reviewer-name">Saravansn v</h5>
          <div class="review-rating">★★★★★</div>
          <p class="review-text">I'm Saravanan I took a pyhton classes on Lits online education Centre my faculty mr.logesh was taken the classes at interesting and easy way for even a tuff output...👌. Lots of happiness overloaded master.</p>
          <small class="review-date">2024-01-10</small>
        </div>
        <div class="review-card">
          <h5 class="reviewer-name">Rajamani </h5>
          <div class="review-rating">★★★★★</div>
          <p class="review-text">It's very good teaching level.</p>
          <small class="review-date">2024-01-03</small>
        </div>
        <div class="review-card">
          <h5 class="reviewer-name">Gokul Krish</h5>
          <div class="review-rating">★★★★★</div>
          <p class="review-text">I have well trained for SQL in this institution. And take online class for SQL. time & money saved & travel expenses also.The teacher are friendly. I successfully in this course</p>
          <small class="review-date">2024-01-10</small>
        </div>
        <div class="review-card">
          <h5 class="reviewer-name">Alwin </h5>
          <div class="review-rating">★★★☆☆</div>
          <p class="review-text">💯 Trustable institute</p>
          <small class="review-date">2024-01-08</small>
        </div>
        <div class="review-card">
          <h5 class="reviewer-name">Keerthu Murali</h5>
          <div class="review-rating">★★★★☆</div>
          <p class="review-text">It's a best institution and it's a good future for every student</p>
          <small class="review-date">2024-01-09</small>
        </div>
        <div class="review-card">
          <h5 class="reviewer-name">Jagatheesan V.</h5>
          <div class="review-rating">★★★★★</div>
          <p class="review-text">Hi am jagadheesan..am learing tally from this institute..they teach each an everything with dedication..im so happy to learning here.allthe staffs are good..communications skills are excellent..</p>
          <small class="review-date">2024-01-07</small>
        </div>
        <div class="review-card">
          <h5 class="reviewer-name">Preethi </h5>
          <div class="review-rating">★★★★☆</div>
          <p class="review-text">Good institution for coding languages, very useful for 12th pass out students to develop their studies...</p>
          <small class="review-date">2024-01-06</small>
        </div>
    </div>

    <div class="controls">
        <button class="btn-control" onclick="moveLeft()">← Previous</button>
        <button class="btn-control" onclick="moveRight()">Next →</button>
    </div>
</div>

  <section class="stats-section">
    <div class="container">
        <div class="row g-4 text-center">
            
            <div class="col-md-4 col-sm-6">
                <div class="stat-card shadow-sm h-100">
                    <div class="stat-icon-box">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <span class="stat-number" id="courseCount">0</span>
                    <span class="stat-label">Courses</span>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="stat-card shadow-sm h-100">
                    <div class="stat-icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <span class="stat-number" id="studentCount">0</span>
                    <span class="stat-label">Students</span>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="stat-card shadow-sm h-100">
                    <div class="stat-icon-box">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <span class="stat-number" id="placementCount">0</span>
                    <span class="stat-label">Placements</span>
                </div>
            </div>

        </div>
    </div>
  </section>

  <script>
    $(document).ready(function() {
            // Set the initial counts
            var courseCount = 250; // Example count
            var studentCount = 1200; // Example count
            var placementCount = 1000; // Example count

            // Function to animate the counting
            function animateCount($element, count) {
                $({ Counter: 0 }).animate({ Counter: count }, {
                    duration: 5000,
                    easing: 'swing',
                    step: function() {
                        $element.text(Math.ceil(this.Counter));
                    }
                });
            }

            // Animate the counts
            animateCount($('#courseCount'), courseCount);
            animateCount($('#studentCount'), studentCount);
            animateCount($('#placementCount'), placementCount);
          
        });
  </script>
 
<script>
  const carousel = document.getElementById('review-carousel');

  function moveLeft() {
      carousel.scrollBy({ left: -375, behavior: 'smooth' });
  }

  function moveRight() {
      // Check if we are at the end
      if (carousel.scrollLeft + carousel.offsetWidth >= carousel.scrollWidth - 10) {
          carousel.scrollTo({ left: 0, behavior: 'smooth' });
      } else {
          carousel.scrollBy({ left: 375, behavior: 'smooth' });
      }
  }

  // Automatic scrolling every 5 seconds
  let autoScroll = setInterval(moveRight, 5000);
  // Stop auto-scroll when user interacts
  carousel.addEventListener('mousedown', () => clearInterval(autoScroll));
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
