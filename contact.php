<!DOCTYPE html>
     <!-- contact section -->
     <head>
       <meta charset="utf-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/logo.png" type="image/gif" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  
<style>
/* Brand Colors Integration */
.text-teal {
    color: #0ca6a3 !important;
}

.text-gradient-brand {
    background: linear-gradient(90deg, #0ca6a3, #088a87);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.contact_section {
    background-color: #f9fbfb;
}

.form-style {
    border: none;
    border-radius: 15px;
    transition: all 0.3s ease;
}

.form-style:hover {
    box-shadow: 0 10px 30px rgba(12, 166, 163, 0.15) !important;
}

.btn-submit {
    background: linear-gradient(45deg, #0ca6a3, #088a87);
    border: none;
    color: white;
    font-weight: 600;
    border-radius: 50px;
    padding: 12px 35px;
    transition: all 0.3s;
}

.btn-submit:hover {
    background: linear-gradient(45deg, #f57c00, #e64a19); /* Hover changes to brand orange */
    transform: scale(1.02);
    box-shadow: 0 5px 15px rgba(245, 124, 0, 0.3);
}

.contact-info-card {
    background: #ffffff;
    border-radius: 15px;
    padding: 30px;
    height: 100%;
}

.icon-box {
    width: 50px;
    height: 50px;
    background: rgba(12, 166, 163, 0.1);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: #0ca6a3;
    margin-right: 15px;
}
</style>

  
</head>
  
<body>

  <section class="contact_section layout_padding-bottom">
      <section class="contact_section py-5">
          <div class="container py-lg-5">
              <div class="heading_container text-center mb-5">
                  <h2 class="fw-bold text-gradient-brand">Get in Touch</h2>
                  <p class="text-muted">Have questions? Our team is here to help you start your journey.</p>
              </div>

              <div class="row g-4 justify-content-center">
                  <div class="col-lg-4">
                      <div class="contact-info-card shadow-sm">
                          <h4 class="mb-4 fw-bold">Contact Information</h4>
                          
                          <div class="d-flex align-items-center mb-4">
                              <div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
                              <div>
                                  <p class="mb-0 fw-bold">Location</p>
                                  <small class="text-muted">kuppusamy Street,chengalpattu-603002</small>
                              </div>
                          </div>

                          <div class="d-flex align-items-center mb-4">
                              <div class="icon-box"><i class="fas fa-phone-alt"></i></div>
                              <div>
                                  <p class="mb-0 fw-bold">Call Us</p>
                                  <small class="text-muted">+91 9952252054</small>
                              </div>
                          </div>

                          <div class="d-flex align-items-center mb-4">
                              <div class="icon-box"><i class="fas fa-envelope"></i></div>
                              <div>
                                  <p class="mb-0 fw-bold">Email Us</p>
                                  <small class="text-muted">learninstituteoftechnologyserv@gmail.com</small>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-7">
                      <form id="contactForm" action="enquiry.php" method="POST" class="form-style shadow p-4 rounded bg-white">
                          <div class="row">
                              <div class="col-md-6 mb-3">
                                  <label class="form-label fw-600"><i class="fas fa-user me-2 text-teal"></i>Name</label>
                                  <input type="text" name="name" class="form-control bg-light border-0" placeholder="John Doe" required />
                              </div>
                              <div class="col-md-6 mb-3">
                                  <label class="form-label fw-600"><i class="fas fa-phone me-2 text-teal"></i>Phone</label>
                                  <input type="text" name="phone" class="form-control bg-light border-0" placeholder="+91..." required />
                              </div>
                          </div>
                          
                          <div class="mb-3">
                              <label class="form-label fw-600"><i class="fas fa-envelope me-2 text-teal"></i>Email Address</label>
                              <input type="email" name="email" class="form-control bg-light border-0" placeholder="john@example.com" />
                          </div>
                          
                          <div class="mb-4">
                              <label class="form-label fw-600"><i class="fas fa-comment-dots me-2 text-teal"></i>Your Message</label>
                              <textarea name="message" rows="4" class="form-control bg-light border-0" placeholder="How can we help you?" required></textarea>
                          </div>

                          <div class="text-end">
                              <button type="submit" class="btn-submit">
                                  <span>Send Message</span> <i class="fas fa-paper-plane ms-2"></i>
                              </button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>


<!-- Modal -->
      <div class="modal fade" id="successModal" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content border-0 shadow" style="border-radius: 20px;">
                  <div class="modal-body text-center p-5">
                      <div class="mb-4" style="font-size: 4rem; color: #0ca6a3;">
                          <i class="far fa-check-circle"></i>
                      </div>
                      <h3 class="fw-bold mb-2">Message Sent!</h3>
                      <p class="text-muted">Thank you for reaching out to **Learn Institute of Technology**. One of our counselors will contact you within 24 hours.</p>
                      <button type="button" class="btn-submit mt-3" data-bs-dismiss="modal">Great, Thanks!</button>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- end contact section -->
 
<script>
$(document).ready(function() {
    $('#contactForm').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    $('#successModal').modal('show'); // Show the success modal
                    $('#contactForm')[0].reset(); // Reset the form
                } else {
                    alert(response.message); // Show error message
                }
            },
            error: function() {
                alert('An error occurred while submitting the form. Please try again.');
            }
        });
    });
});
</script>
    <!-- jQery -->
    
  <!-- owl carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- custom js -->
  
  <!-- Google Map -->
  
  <!-- End Google Map -->
  </body>
</html>
