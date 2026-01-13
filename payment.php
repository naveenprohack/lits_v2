
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>pay online - Learn Institute of Technology Service  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="keyword" content="Learn Institute of Technology Service, litsedu, Online courses, eLearning, Online Education,
   Online Training, Online Tutoring, Online Skills Training, Online Instruction, Online Academic Programs, Online Teaching, Online Skills Training, Online Professional Development, coding course, online learning websites, programming classes for beginners, web development classes near me,starting an online course, learning online classes,learning designer courses,it learning courses,virtual online classes, courses it online, interactive online learning, courses websites, learning classes, web development classes online
website classes, web course, course learning, web programming courses, flexible online classes, courses to learn, course development, websites for online classes, web technology course, online learning for students, websites for courses online, top online learning sites">
    <meta name="description" content="Learn Institute of technology provide a various online courses that help you to upskill your career in different domains.">
    <meta name="author" content="litsedu.com">
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <!-- Custom Style CSS -->
  <link rel="stylesheet" type="text/css" href="./css/style.css" />

 <link rel="canonical" href="https://litsedu.com/payment" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
           <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "litsedu",
      "url": "https://litsedu.com",
      "logo": "logo.png",
      "sameAs": [
        "https://www.facebook.com/litsedu",
        "https://www.twitter.com/newsite",
        "https://www.instagram.com/litsedu"
      ]
    }
    </script>
</head>
<body>
    <?php 
include('./dbConnection.php');


  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
  
   // Header Include from mainInclude 
  include('./floatingwi.php'); 

?>

<div class="container mt-5">
    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 20px;">
                <div class="card-header bg-dark text-white p-4 text-center border-0">
                    <h4 class="mb-0 fw-bold">Secure Payment Portal</h4>
                    <p class="small mb-0 opacity-75">Learn Institute Of Technology Service</p>
                </div>
                <div class="card-body p-4 p-md-5 bg-white">
                    <form id="paymentForm">
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small text-uppercase">Course ID </label>
                                <input id="ORDER_ID" class="form-control bg-light border-0 fw-bold" name="ORDER_ID" value="<?php echo 'LITS' . rand(10000, 999999); ?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small text-uppercase">Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-text border-0">+91</span>
                                    <input id="numstu" class="form-control" name="CUST_ID" placeholder="98765 43210" maxlength="10" required>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold small text-uppercase">Student Email Address</label>
                                <input id="CUST_ID" type="email" class="form-control" name="CUST_ID" placeholder="name@example.com" required>
                            </div>
                        </div>

                        <div class="p-4 rounded-4 mb-4" style="background-color: #f8f9fa;">
                            <div class="row align-items-center">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <label class="form-label fw-bold small">Base Amount</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white">₹</span>
                                        <input id="TXN_AMOUNT" class="form-control fw-bold" type="number" value="<?php if(isset($_POST['id'])){ echo $_POST['id']; } ?>" oninput="calculateTotal()" placeholder="0.00">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <label class="form-label fw-bold small">GST (18%)</label>
                                    <input id="GST_AMOUNT" class="form-control-plaintext fw-semibold text-muted px-2" readonly value="₹0.00">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold small text-success">Total Payable</label>
                                    <input id="TOTAL_AMOUNT" class="form-control border-0 bg-transparent fs-4 fw-bolder text-success p-0" readonly value="₹0.00">
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold py-3 shadow-sm" style="border-radius: 12px; background: #0ca6a3; border:none;">
                                <i class="fas fa-shield-check me-2"></i> Pay Securely with Razorpay
                            </button>
                            <a href="./courses" class="btn btn-link text-muted text-decoration-none small mt-2">Cancel Transaction</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <h5 class="fw-bold mb-3 px-2">Other Methods</h5>
            
            <div class="card border-0 shadow-sm mb-4" style="border-radius: 15px;">
                <div class="card-body p-4 text-center">
                    <img src="image/UNIONBANk.png" alt="Bank" class="mb-3" style="height: 40px;">
                    <h6 class="fw-bold text-primary">Bank Transfer</h6>
                    <hr class="my-3 opacity-10">
                    <div class="text-start small">
                        <p class="mb-1 text-muted">A/C Number:</p>
                        <p class="fw-bold mb-3">2237 1101 1000 069</p>
                        <p class="mb-1 text-muted">IFSC Code:</p>
                        <p class="fw-bold mb-3">UBIN0822370</p>
                        <p class="mb-1 text-muted">Holder Name:</p>
                        <p class="fw-bold small mb-0">LEARN INSTITUTE OF TECHNOLOGY SERVICE</p>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm" style="border-radius: 15px; background: linear-gradient(to bottom right, #ffffff, #f0fff4);">
                <div class="card-body p-4 text-center">
                    <img src="image/GPAY.png" alt="GPay" class="mb-3" style="height: 40px;">
                    <h6 class="fw-bold text-success">Google Pay / UPI</h6>
                    <hr class="my-3 opacity-10">
                    <p class="small text-muted mb-1">UPI Phone Number</p>
                    <p class="fs-5 fw-bold text-dark">+91 99522 52054</p>
                </div>
            </div>
            
            <div class="mt-4 text-center p-3">
                <i class="fas fa-lock text-muted me-2"></i>
                <span class="small text-muted">SSL Encrypted Payment System</span>
            </div>
        </div>
    </div>
</div>

<script>
    function calculateTotal() {
        const amount = parseFloat(document.getElementById('TXN_AMOUNT').value) || 0;
        const gst = amount * 0.18;
        const total = amount + gst;

        document.getElementById('GST_AMOUNT').value = "₹" + gst.toLocaleString('en-IN', {minimumFractionDigits: 2});
        document.getElementById('TOTAL_AMOUNT').value = "₹" + total.toLocaleString('en-IN', {minimumFractionDigits: 2});
    }
    // Initialize calculation on page load
    window.onload = calculateTotal;
</script>






 <?php 
    // Footer Include from mainInclude 
    include('./mainInclude/footer.php'); 
    
  ?>  
<!-- JavaScript to calculate GST and Total Amount -->
<script>
    function calculateTotal() {
        const amount = parseFloat(document.getElementById('TXN_AMOUNT').value) || 0;
        const gst = amount * 0.18;  // 18% GST
        const totalAmount = amount + gst;

        document.getElementById('GST_AMOUNT').value = gst.toFixed(2);
        document.getElementById('TOTAL_AMOUNT').value = totalAmount.toFixed(2);
    }
</script>
<script>
$(document).ready(function(){
    $('#paymentForm').submit(function(e){
        e.preventDefault();

        let billing_name = $('#ORDER_ID').val();
        let billing_mobile = $('#numstu').val();
        let billing_email = $('#CUST_ID').val();
        let payAmount = $('#TOTAL_AMOUNT').val();

        if(billing_name === "" || billing_mobile === "" || payAmount === ""){
            alert("Please fill all the required fields");
            return;
        }

        $.ajax({
            type: 'POST',
            url: 'submitpayment.php',
            data: {
                billing_name: billing_name,
                billing_mobile: billing_mobile,
                billing_email: billing_email,
                payAmount: payAmount,
                action: 'payOrder'
            },
            dataType: 'json',
            encode: true
        }).done(function(data){
            if(data.res === 'success'){
                var options = {
                    "key": data.razorpay_key,
                    "amount": data.userData.amount, // Amount in smallest currency unit (paise)
                    "currency": "INR",
                    "name": "lits",
                    "description": data.userData.description,
                    "order_id": data.userData.rpay_order_id, // Razorpay order ID
                    "handler": function (response){
                        $.post('submitpayment.php', {
                            razorpay_payment_id: response.razorpay_payment_id,
                            razorpay_order_id: response.razorpay_order_id,
                            billing_name: billing_name,
                            billing_email: billing_email,
                            billing_mobile: billing_mobile,
                            payAmount: payAmount,
                            action: 'verifyPayment'
                        }, function(data) {
                            if (data.status === 'success') {
                                window.location.replace("print-details.php?oid="+response.razorpay_order_id + "&rp_payment_id=" + response.razorpay_payment_id);
                            } else {
                                alert('Payment verification failed. Please contact support.');
                            }
                        }, 'json');
                    },
                    "prefill": {
                        "name": billing_name,
                        "email": billing_email,
                        "contact": billing_mobile
                    },
                    "theme": {
                        "color": "#3399cc" // Customize the checkout theme color
                    },
                    "method": { // Enabling EMI option
                        "emi": true
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();
            } else {
                alert("Payment initiation failed. Please try again. " + data.message);
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            alert('Payment initiation failed: ' + textStatus + ', ' + errorThrown);
        });
    });
});
</script>


  <!-- Include the Razorpay JavaScript SDK -->
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script>
    document.getElementById('rzp-button1').onclick = function(e){
      var options = {
        "key": 'rzp_live_ryxLCctilGE3So',
        "amount": <?php if(isset($_POST['id'])){echo $_POST['id']; }?> * 100, // amount in the smallest currency unit
        "currency": "INR",
        "name": "lits",
        "description": "live Transaction",
        "image": "image/Logo.png",
        "handler": function (response){
          alert(response.razorpay_payment_id);
          document.getElementById("myform").submit();
        },
      "method": {
        "emi": true // Enables EMI as a payment method
      },
      "prefill": { // Optional: Prefill customer details
        "name": "John Doe", 
        "email": "johndoe@example.com",
        "contact": "9876543210"
      },
      "theme": {
        "color": "#3399cc" // Optional: Customize the checkout color
      }
      };
      var rzp = new Razorpay(options);
      rzp.open();
      e.preventDefault();
    }
  </script>
  
  
 
  <!-- Jquery and Boostrap JavaScript -->
  
  <!-- Font Awesome JS -->
  <script type="text/javascript" src="js/all.min.js"></script>
  <!-- Custom JavaScript -->

</body>
</html>
<?php  ?>
