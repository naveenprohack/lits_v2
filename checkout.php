<?php 
include('./dbConnection.php');


  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 

session_start();

?>
<?php


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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
  
  <div class="container mt-5">
  

    <!-- Payment Options -->
   <div class="container mt-5">
    <div class="row">
        <!-- Payment Form -->
        <div class="col-lg-8 offset-lg-2 shadow p-4 bg-light mb-4">
            <h3 class="mb-4 text-center">Welcome to Learn Institute Of Technology Service  Payment Page</h3>
            <form  id="paymentForm">
                <div class="mb-3 row">
                    <label for="ORDER_ID" class="col-sm-4 col-form-label">Order ID</label>
                    <div class="col-sm-8">
                        <input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo 'ORDS' . rand(10000, 99999999); ?>" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label>
                    <div class="col-sm-8">
                        <input id="CUST_ID" class="form-control" tabindex="2" maxlength="28" size="28" name="CUST_ID" autocomplete="off" >
                    </div>
                </div><div class="mb-3 row">
                    <label for="CUST_ID" class="col-sm-4 col-form-label">phone number</label>
                    <div class="col-sm-8">
                        <input id="numstu" class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
                    <div class="col-sm-8">
                        <input id="TXN_AMOUNT" title="TXN_AMOUNT" class="form-control" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php if(isset($_POST['id'])){ echo $_POST['id']; } ?>" oninput="calculateTotal()" placeholder="Enter Amount">
                    </div>
                </div>
                <!-- GST Calculation and Total Amount Display -->
                <div class="mb-3 row">
                    <label for="GST_AMOUNT" class="col-sm-4 col-form-label">GST (18%)</label>
                    <div class="col-sm-8">
                        <input id="GST_AMOUNT" class="form-control" type="text" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="TOTAL_AMOUNT" class="col-sm-4 col-form-label">Total Amount</label>
                    <div class="col-sm-8">
                        <input id="TOTAL_AMOUNT" class="form-control" type="text" readonly>
                    </div>
                </div>
                <div class="text-center">
                    <button id="" class="btn btn-primary">Pay with Razorpay</button>
                    <a href="./courses" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
            <small class="form-text text-muted text-center mt-2">Note: Complete Payment by Clicking Checkout Button</small>
        </div>
    </div>

    <!-- Payment Options -->
    <div class="row">
        <!-- Bank Transfer Option -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    Bank Transfer
                </div>
                <div class="card-body  text-center">
                      <img src="image/UNIONBANk.png" alt="Google Pay Logo" class="img-fluid mb-3" style="max-width: 50px;">
                    <p class="card-text">Bank Name: UNION BANK OF INDIA</p>
                    <p class="card-text">Account Number: 2237 1101 1000 069</p>
                    <p class="card-text">IFSC Code: UBIN0822370</p>
                    <p class="card-text">Account Holder: LEARN INSTITUTE OF TECHNOLOGY SERVICE</p>
                </div>
            </div>
        </div>
        <!-- Google Pay Option -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white text-center">
                    Google Pay
                </div>
                <div class="card-body text-center">
                    <img src="image/GPAY.png" alt="Google Pay Logo" class="img-fluid mb-3" style="max-width: 50px;">
                    <p class="card-text">
                        NAME : LEARN INSTITUTE OF TECHNOLOGY SERVICE
                    </p>                    
                    <p class="card-text">Phone Number: +91 9952252054</p>
                </div>
            </div>
        </div>
       
       
    </div>
</div>






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

</div>


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
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- Font Awesome JS -->
  <script type="text/javascript" src="js/all.min.js"></script>
  <!-- Custom JavaScript -->
  <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
<?php  ?>
