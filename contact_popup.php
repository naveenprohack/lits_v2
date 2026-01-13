<?php
/**
 * Contact Popup Component
 * Includes: CSS, HTML Modal, and Timer Logic
 */
?>

<style>
    /* Brand Colors & Typography */
    .text-teal { color: #0ca6a3 !important; }
    .text-gradient-brand {
        background: linear-gradient(90deg, #0ca6a3, #088a87);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    /* Modal Styling */
    .contact-modal-content {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    .form-style-input {
        border-radius: 10px;
        padding: 12px;
        border: 1px solid #e9ecef;
        background-color: #f8f9fa;
        transition: all 0.3s;
    }

    .form-style-input:focus {
        background-color: #fff;
        border-color: #0ca6a3;
        box-shadow: 0 0 0 0.25rem rgba(12, 166, 163, 0.1);
    }

    .btn-submit-popup {
        background: linear-gradient(45deg, #0ca6a3, #088a87);
        border: none;
        color: white;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 12px;
        padding: 15px;
        transition: all 0.3s;
    }

    .btn-submit-popup:hover {
        background: linear-gradient(45deg, #f57c00, #e64a19);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(245, 124, 0, 0.3);
    }

    .icon-box-small {
        width: 40px;
        height: 40px;
        background: rgba(12, 166, 163, 0.1);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0ca6a3;
        margin-right: 12px;
    }
</style>

<div class="modal fade" id="autoContactModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content contact-modal-content">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <div class="row g-4">
                    <div class="col-lg-5 border-end d-none d-lg-block">
                        <h3 class="fw-bold text-gradient-brand mb-3">Join LITS Today</h3>
                        <p class="text-muted mb-4">Advance your career with industry-leading technology courses.</p>
                        
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box-small"><i class="fas fa-phone-alt"></i></div>
                            <div><p class="mb-0 small text-muted">Direct Line</p><span class="fw-bold">+91 99522 52054</span></div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box-small"><i class="fas fa-certificate"></i></div>
                            <div><p class="mb-0 small text-muted">Certification</p><span class="fw-bold">ISO Certified Institute</span></div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="text-center text-lg-start mb-4">
                            <h4 class="fw-bold">Quick Enrollment</h4>
                            <p class="text-muted small">Fill the form, and our counselor will call you.</p>
                        </div>
                        
                        <form id="popupContactForm" action="enquiry_01.php" method="POST">
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control form-style-input" placeholder="Full Name" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="phone" class="form-control form-style-input" placeholder="Phone Number" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" name="email" class="form-control form-style-input" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="mb-4">
                                <textarea name="message" rows="3" class="form-control form-style-input" placeholder="Which course are you interested in?" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-submit-popup w-100">
                                Send Inquiry <i class="fas fa-paper-plane ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="popupSuccessModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content text-center p-4 border-0" style="border-radius: 20px;">
            <div class="text-success mb-3" style="font-size: 3rem;"><i class="fas fa-check-circle"></i></div>
            <h4 class="fw-bold">Success!</h4>
            <p class="text-muted small">We have received your message. Our team will contact you shortly.</p>
            <button class="btn btn-dark w-100 mt-2" data-bs-dismiss="modal" style="border-radius:10px;">Close</button>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    const REPEAT_INTERVAL = 60000; // 2 Minutes in milliseconds
    const START_DELAY = 5000;       // First appearance after 5 seconds
    const STORAGE_KEY = 'lits_inquiry_submitted';
    function hasUserSubmitted() {
        return localStorage.getItem(STORAGE_KEY) === 'true';
    }
    // Function to launch the modal
    function triggerPopup() {
        // Check if modal is already open or if user just closed it
        if (!hasUserSubmitted() && !$('#autoContactModal').hasClass('show')) {
            $('#autoContactModal').modal('show');
        }
    }

    if (!hasUserSubmitted()) {
        setTimeout(triggerPopup, START_DELAY);        
        setInterval(triggerPopup, REPEAT_INTERVAL);
    }

    // 3. AJAX Submission
    $('#popupContactForm').on('submit', function(e) {
        e.preventDefault();
        const $form = $(this);
        const submitBtn = $form.find('button[type="submit"]');

        // Prevent double clicks
        submitBtn.prop('disabled', true).text('Sending...');

        $.ajax({
            type: 'POST',
            url: $form.attr('action'),
            data: $form.serialize(),
            dataType: 'json',
            success: function(data) {
                if (data.status === 'success') {
                    localStorage.setItem(STORAGE_KEY, 'true');
                    $('#autoContactModal').modal('hide');
                    $('#popupSuccessModal').modal('show');
                    $form[0].reset();
                } else {
                    alert('Error: ' + data.message);
                }
            },
            error: function() {
                alert('Connection error. Please try again.');
            },
            complete: function() {
                submitBtn.prop('disabled', false).html('Send Inquiry <i class="fas fa-paper-plane ms-2"></i>');
            }
        });
    });
});
</script>