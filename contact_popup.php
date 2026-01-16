<style>
    /* Brand Colors & Professional UI */
    .text-teal { color: #0ca6a3 !important; }
    .text-gradient-brand {
        background: linear-gradient(90deg, #0ca6a3, #088a87);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .contact-modal-content {
        border: none;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    /* Pro-Level Input Styling */
    .form-style-input {
        border: 1.5px solid #E2E8F0;
        border-radius: 12px;
        padding: 12px 16px;
        background-color: #F8FAFC;
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        font-size: 0.95rem;
    }

    .form-style-input:focus {
        background-color: #fff;
        border-color: #0ca6a3;
        box-shadow: 0 0 0 4px rgba(12, 166, 163, 0.1);
        outline: none;
    }

    /* Validation States */
    .is-invalid-modern { border-color: #ef4444 !important; }
    .error-hint {
        color: #ef4444;
        font-size: 0.75rem;
        font-weight: 600;
        margin-top: 4px;
        display: none;
    }

    .btn-submit-popup {
        background: linear-gradient(45deg, #0ca6a3, #088a87);
        border: none;
        color: white;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 12px;
        padding: 16px;
        transition: all 0.3s ease;
    }

    .btn-submit-popup:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(12, 166, 163, 0.3);
        filter: brightness(1.1);
    }

    .icon-box-small {
        width: 42px; height: 42px;
        background: rgba(12, 166, 163, 0.08);
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        color: #0ca6a3; margin-right: 15px;
    }
</style>

<div class="modal fade" id="autoContactModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content contact-modal-content">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <div class="row g-4">
                    <div class="col-lg-5 border-end d-none d-lg-block">
                        <h3 class="fw-bold text-gradient-brand mb-3">Join LITS Today</h3>
                        <p class="text-muted mb-4 small">Advance your career with industry-leading technology courses and ISO certified training.</p>
                        
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box-small"><i class="fas fa-phone-alt"></i></div>
                            <div><p class="mb-0 small text-muted">Direct Line</p><span class="fw-bold text-dark">+91 99522 52054</span></div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon-box-small"><i class="fas fa-certificate"></i></div>
                            <div><p class="mb-0 small text-muted">Accreditation</p><span class="fw-bold text-dark">ISO Certified Institute</span></div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="text-center text-lg-start mb-4">
                            <h4 class="fw-bold">Quick Enrollment</h4>
                            <p class="text-muted small">Fill the form, and our counselor will call you.</p>
                        </div>
                        
                        <form id="popupContactForm" action="enquiry_01.php" method="POST" novalidate>
                            <div class="mb-3">
                                <label class="small fw-bold text-muted mb-1">FULL NAME</label>
                                <input type="text" name="name" class="form-control form-style-input" placeholder="e.g. John Doe" required>
                                <div class="error-hint">Please enter your full name</div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="small fw-bold text-muted mb-1">PHONE NUMBER</label>
                                    <input type="tel" name="phone" 
                                           class="form-control form-style-input" 
                                           placeholder="10-digit number" 
                                           pattern="[6-9]{1}[0-9]{9}" 
                                           maxlength="10" 
                                           required>
                                    <div class="error-hint">Enter a valid 10-digit mobile number</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small fw-bold text-muted mb-1">EMAIL (OPTIONAL)</label>
                                    <input type="email" name="email" class="form-control form-style-input" placeholder="email@domain.com">
                                    <div class="error-hint">Please enter a valid email address</div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="small fw-bold text-muted mb-1">COURSE INTEREST</label>
                                <textarea name="message" rows="2" class="form-control form-style-input" placeholder="Tell us which course you are looking for..." required></textarea>
                                <div class="error-hint">Please mention a course or message</div>
                            </div>

                            <button type="submit" class="btn btn-submit-popup w-100" id="popupSubmitBtn">
                                <span>Send Inquiry</span> <i class="fas fa-paper-plane ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    const STORAGE_KEY = 'lits_inquiry_submitted';
    
    // Prevent non-numeric typing in phone field
    $('input[name="phone"]').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    // Handle Form Submission with Pro Validation
    $('#popupContactForm').on('submit', function(e) {
        e.preventDefault();
        let isValid = true;
        const $form = $(this);

        // Reset previous errors
        $form.find('.form-style-input').removeClass('is-invalid-modern');
        $form.find('.error-hint').hide();

        // 1. Validate Required Fields
        $form.find('[required]').each(function() {
            const $input = $(this);
            const $error = $input.siblings('.error-hint');
            
            if (!$input.val().trim()) {
                $input.addClass('is-invalid-modern');
                $error.fadeIn();
                isValid = false;
            } 
            // 2. Pattern Validation (Phone Number)
            else if ($input.attr('pattern')) {
                const regex = new RegExp("^" + $input.attr('pattern') + "$");
                if (!regex.test($input.val())) {
                    $input.addClass('is-invalid-modern');
                    $error.text("Must be 10 digits starting with 6-9").fadeIn();
                    isValid = false;
                }
            }
        });

        // 3. Email format check (if not empty)
        const emailInput = $form.find('input[name="email"]');
        if (emailInput.val().trim() && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.val())) {
            emailInput.addClass('is-invalid-modern');
            emailInput.siblings('.error-hint').fadeIn();
            isValid = false;
        }

        if (!isValid) return false;

        // AJAX Submission Logic
        const submitBtn = $('#popupSubmitBtn');
        submitBtn.prop('disabled', true).find('span').text('Verifying...');

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
                submitBtn.prop('disabled', false).find('span').text('Send Inquiry');
            }
        });
    });

    // Auto-Trigger Logic
    if (localStorage.getItem(STORAGE_KEY) !== 'true') {
        setTimeout(() => {
            if (!$('#autoContactModal').hasClass('show')) {
                $('#autoContactModal').modal('show');
            }
        }, 5000);
    }
});
</script>