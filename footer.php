
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   <link href="css/style.css" rel="stylesheet">
   <style>
       .eye-align{
       float:right;
        margin-left:-25px;
        margin-top:-30px;
        right:10px;
        position:relative;
        z-index:2;
}
   </style>
</head>


<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-d9956e2c-ca79-45c2-9d6d-bb4848a15d78"  id="feedback"data-elfsight-app-lazy></div>

     <?php 
    // Contact Us
    include('./contact.php');  ?>  


 <div style="background-color:#e16f2f"> <!-- Start Social Follow -->
        <div class="row text-white text-center p-1">
          <div class="col-sm">
            <a  class="text-white social-hover  text-decoration-none" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover text-decoration-none" href="#"><i class="fab fa-twitter"></i> Twitter</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover text-decoration-none" href="https://wa.me/9952252054"><i class="fab fa-whatsapp"></i> WhatsApp</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover text-decoration-none" href="http://instagram.com/_u/{litsedu}/"><i class="fab fa-instagram"></i> Instagram</a>
          </div>
        </div>
    </div>
    <div style="background-color: #0ca6a3" >
      
        <div class="row p-5 ">
          <div class="col-md-6 col-lg-3">
            <div class="row p-4">
              <a class="text-dark text-decoration-none"  href="index.html">
                <p class="h3">
                 Learn institute of technology service
             </p>
              </a>
              <p>
             



Litsedu stands for Learn Institute of Technology Service. It's an online learning platform offering courses in various fields like digital marketing, PHP, Photoshop, and more, with content primarily in Tamil. The platform provides resources for web design, web development, app design, and app development, aimed at helping students build their careers with expert guidance.</p>
              <div class="social_box">
                <a  class="text-dark text-decoration-none"href="">
                <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                </a>
                <a  class="text-dark text-decoration-none"href="">
                <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                </a>
                <a class="text-dark text-decoration-none" href="">
                <i class="fa-brands fa-linkedin"></i>
                </a>
                 <a class="text-dark text-decoration-none" href="">
                <i class="fa-brands fa-youtube"></i>
                </a>
                <a  class="text-dark text-decoration-none" href="">
                <i class="fa-brands fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mx-auto p-4">
            <h4>
              Get In Touch
            </h4>
            
            <div class="row p-2 ">
              <a  class="text-dark text-decoration-none" href="https://maps.app.goo.gl/QEZyUew3z9PXsPrf7">
                  <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
              
                <span>
                  Location
                </span>
              </a>
              </div>
              <div class="row p-2">
              <a class="text-dark text-decoration-none" href="tel:9952252054">
                <span>
                <i class="fa fa-phone" aria-hidden="true"></i>
                
                         Call : +91 9952252054,<br>
                </span>
                 </a>
                 <a class="text-dark text-decoration-none" href="tel:044 47853508">
                <span> 044 47853508,</span>
                 </a>
                  <a class="text-dark text-decoration-none" href="tel:9786302865">
                 <span>+91 9786302865</span>
                 </a>
              </div>
             <div class="row p-2">
              
              <a  class="text-dark text-decoration-none"href="mailto:litsedu666@gmail.com">
                <span>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                  Email : litsedu666@gmail.com
                </span>
              </a>
              </div>
            </div>
         
          <div class="col-lg-4  p-4">
            <div class="info_form">
              <h4>
                SIGN UP TO OUR NEWSLETTER
              </h4>
              <form action="mailto:litsedu666@gmail.com">
                  <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Your Email" />
                </div>
                <button class="btn" style="background-color:#e16f2f"   type="submit" class="btn">
                  Subscribe
                </button>
              </form>
               </div>
            </div>
          </div>
     
        </div>
      </div>
    </div>



 <!-- Start Footer -->
 <footer class="text-center p-2" style="background-color:#134650">
    <small class="text-white"> &copy;Learn institute of technology service 2024  All rights reserved 
    <?php   
          if (isset($_SESSION['is_admin_login'])){
            echo '<a href="admin/adminDashboard.php" style="color:#134650 ;" > Admin Dashboard</a> <a href="logout.php" style="color:#134650 ;" >Logout</a>';
          }else {
            echo '<a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter" style="color:#134650 ;" > Admin Login</a>';
          }
    ?>
    <?php   
          if (isset($_SESSION['is_emp_login'])){
            echo '<a href="employee/emp.php" style="color:#134650 ;" > Employee Dashboard</a> <a href="logout.php" style="color:#134650 ;" >Logout</a>';
          }else {
            echo '<a href="#login" data-toggle="modal" data-target="#employeeLoginModalCenter" style="color:#134650 ;"> Employee Login</a>';
          }
    ?>
  </small> 
  
 </footer> <!-- End Footer -->

    <!-- Start Student Registration Modal -->
    <div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="stuRegModalCenterTitle">Student Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearAllStuReg()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!--Start Form Registration-->
            <?php include('studentRegistration.php'); ?>
            <!-- End Form Registration -->
          </div>
          <div class="modal-footer">
            <span id="successMsg"></span>
            <button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Sign Up</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearAllStuReg()">Close</button>
          </div>
        </div>
      </div>
    </div> <!-- End Student Registration Modal -->


    <!-- Start Student Login Modal -->
    <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="stuLoginModalCenterTitle">Student Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearStuLoginWithStatus()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" id="stuLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i><label for="stuLogEmail" class="pl-2 font-weight-bold">Email</label><small id="statusLogMsg1"></small><input type="email"
                    class="form-control" placeholder="Email" name="stuLogEmail" id="stuLogEmail">
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="stuLogPass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="stuLogPass" id="stuLogPass">
                 <i class="fa-solid fa-eye eye-align" id="togglePassword11"></i>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <small id="statusLogMsg"></small>
            <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearStuLoginWithStatus()">Cancel</button>
          </div>
        </div>
      </div>
    </div> <!-- End Student Login Modal -->


  <!-- Start Admin Login Modal -->
  <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="adminLoginModalCenterTitle">Admin Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearAdminLoginWithStatus()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" id="adminLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i><label for="adminLogEmail" class="pl-2 font-weight-bold">Email</label><input type="email"
                    class="form-control" placeholder="Email" name="adminLogEmail" id="adminLogEmail">
                </div>
                <div class="form-group">
                 
                  <i class="fas fa-key"></i><label for="adminLogPass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="adminLogPass" id="adminLogPass">
                     <i class="fa-solid fa-eye eye-align" id="togglePassword22"></i>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <small id="statusAdminLogMsg"></small>
            <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearAdminLoginWithStatus()">Cancel</button>
          </div>
        </div>
      </div>
    </div> <!-- End Admin Login Modal -->
  <div class="modal fade" id="employeeLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="employeeLoginModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="employeeLoginModalCenterTitle">Employee Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearEmployeeLoginWithStatus()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" id="employeeLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i><label for="employeeLogEmail" class="pl-2 font-weight-bold">Email</label><input type="email"
                    class="form-control" placeholder="Email" name="employeeLogEmail" id="employeeLogEmail">
                </div>
                <div class="form-group">
                   <i class="fas fa-key"></i><label for="employeeLogPass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="employeeLogPass" id="employeeLogPass">
                      <i class="fa-solid fa-eye eye-align" id="togglePassword33"></i>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <small id="statusEmployeeLogMsg"></small>
            <button type="button" class="btn btn-primary" id="employeeLoginBtn" onclick="checkEmployeeLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearEmployeeLoginWithStatus()">Cancel</button>
   
          </div>
        </div>
      </div>
    </div> <!-- End Admin Login Modal -->
    
   
    <!-- Jquery and Boostrap JavaScript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


    <!-- Font Awesome JS -->
    <script type="text/javascript" src="js/all.min.js"></script>

    <!-- Student Testimonial Owl Slider JS  -->
    <script type="text/javascript" src="js/owl.min.js"></script>
    <script type="text/javascript" src="js/testyslider.js"></script>

    <!-- Student Ajax Call JavaScript -->
    <script type="text/javascript" src="js/ajaxrequest.js"></script>

    <!-- Admin Ajax Call JavaScript -->
    <script type="text/javascript" src="js/adminajaxrequest.js"></script>
    
    <!-- Employe Ajax Call JavaScript -->
    <script type="text/javascript" src="js/employeeajaxrequest.js"></script>

    <!-- Custom JavaScript -->
    <script type="text/javascript" src="js/custom.js"></script>

  <script>
     const togglePassword01=document.querySelector('#togglePassword11');
     const password01=document.querySelector('#stuLogPass');
     togglePassword01.addEventListener('click',(e1)=>{
         
         const type=password01.getAttribute('type')=== 'password'? 'text':'password';
         password01.setAttribute('type',type);
         e1.target.classList.toggle('fa-solid fa-eye');
     });
     
      const togglePassword02=document.querySelector('#togglePassword22');
     const password02=document.querySelector('#adminLogPass');
     togglePassword02.addEventListener('click',(e2)=>{
         
         const type=password02.getAttribute('type')=== 'password'? 'text':'password';
         password02.setAttribute('type',type);
         e2.target.classList.toggle('fa-solid fa-eye');
     });
     
     
       
      const togglePassword03=document.querySelector('#togglePassword33');
     const password03=document.querySelector('#employeeLogPass');
     togglePassword03.addEventListener('click',(e3)=>{
         
         const type=password03.getAttribute('type')=== 'password'? 'text':'password';
         password03.setAttribute('type',type);
         e3.target.classList.toggle('fa-solid fa-eye');
     });
</script>
  </body>

</html>