 <style>
     /* Course Card Styling */
.course-card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    background: #fff;
}

.course-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(12, 166, 163, 0.15);
}

.course-img-wrapper {
    overflow: hidden;
    position: relative;
}

.course-img-wrapper img {
    transition: transform 0.5s ease;
    height: 200px;
    object-fit: cover;
}

.course-card:hover .course-img-wrapper img {
    transform: scale(1.1);
}

.course-card .card-body {
    padding: 20px;
}

.course-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 10px;
}

.enroll-btn {
    background-color: #0ca6a3;
    color: white;
    border-radius: 25px;
    padding: 8px 25px;
    font-weight: 600;
    transition: 0.3s;
    border: none;
}

.enroll-btn:hover {
    background-color: #088a88;
    color: white;
    box-shadow: 0 4px 12px rgba(12, 166, 163, 0.3);
}

 </style>
 <section class="" id="courses">
        <div class="container">
            <div class="section-header text-center wow zoomIn mb-5">
                <span class="sub-title" style="color:#0ca6a3; font-weight:600; text-transform:uppercase;">Top Rated</span>
                <h2 class="fw-bold">Our Popular Courses</h2>
            </div>

            <div class="row g-4 wow fadeInUp">
                <div class="col-lg-4 col-md-6">
                    <div class="card course-card h-100">
                        <div class="course-img-wrapper">
                            <img src="https://litsedu.com/image/courseimg/UI-UX-Design-Online-Training.png" class="card-img-top" alt="UI/UX Design">
                        </div>
                        <div class="card-body">
                            <h5 class="course-title">UI/UX Design Masterclass</h5>
                            <p class="text-muted small">Master the art of user-centric design and modern prototyping tools.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-light text-dark">Self-Paced</span>
                                <a href="./Course/UI-UX-Design-Online-Training" class="enroll-btn text-decoration-none">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card course-card h-100">
                        <div class="course-img-wrapper">
                            <img src="https://litsedu.com/image/courseimg/Machine-Learning-Online-Training.png" class="card-img-top" alt="Machine Learning">
                        </div>
                        <div class="card-body">
                            <h5 class="course-title">Machine Learning A-Z</h5>
                            <p class="text-muted small">Dive deep into Python, algorithms, and predictive data modeling.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-light text-dark">Certification</span>
                                <a href="./Course/Machine-Learning-Online-Training" class="enroll-btn text-decoration-none">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card course-card h-100">
                        <div class="course-img-wrapper">
                            <img src="https://litsedu.com/image/courseimg/React-Online-Training.png" class="card-img-top" alt="React Training">
                        </div>
                        <div class="card-body">
                            <h5 class="course-title">Advanced React Development</h5>
                            <p class="text-muted small">Build powerful single-page applications with Hooks and Redux.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-light text-dark">Hands-on</span>
                                <a href="./Course/React-Online-Training" class="enroll-btn text-decoration-none">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="../coursesdetails.php" class="btn btn-outline-dark px-4 py-2" style="border-radius: 30px; font-weight: 600;">View All Courses</a>
            </div>
        </div>
    </section> 