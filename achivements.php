<html lang="en">
<head>
     
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>Learn Institute of Technology Service |ISO CERTIFIED </title>  
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
         <!-- jQUery CDN -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
              /* Premium Counter Styling */
.stats-section {
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
            </style>
    
    </head>  
  <body>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
  </body>
  </html>