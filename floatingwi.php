
<!DOCTYPE html>
<html lang="en">
  <head>

   
  <!-- responsive style -->
      
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 <style>
        .floating-whatsapp {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            animation: pulse 1.5s infinite;

        }
       
        .floating-whatsapp a {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
        }
        
        
        
        
           .floating-phone {
            position: fixed;
            bottom: 90px;
            right: 20px;
            background-color:  #DC4C64;
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            animation: pulse 1.5s infinite;

        }
        
           .floating-phone a {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
        }
        #floatingImgBtn {
            position: fixed;
            bottom: 160px;
            right: 20px;
            /*background-color:  #bee4d2ff;*/
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            animation: pulse 1.5s infinite;
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
</style>

</head>
<body>

   <div class="floating-whatsapp">
        <a href="https://wa.me/9952252054" target="_blank" title="Chat with us on WhatsApp">
        <i class="fa-brands fa-whatsapp" style="font-size:2em"></i>
        </a>
    </div>
 
 
   <div class="floating-phone">
        <a href="tel:9952252054" target="_blank" title="contact us">
        <i class="fa fa-phone" style="font-size:2em"></i>
        </a>
    </div>
    <button type="button" id="floatingImgBtn" class="btn btn-primary rounded-circle shadow-lg d-none" 
            data-bs-toggle="modal" data-bs-target="#imagePopupModal">
        <!--<i class="bi bi-image"></i>-->
        <i class="bi bi-patch-check" style="font-size:2em"></i>
    </button>
    
       
       
   </body>
   
   </html>