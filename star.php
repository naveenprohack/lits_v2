<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Five Star Rating</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .star-rating .bi-star-fill {
            color: #ffc107;
        }
        .star-rating .bi-star {
            color: #adb5bd;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h3>Rate this course:</h3>
    <div class="star-rating">
        <!-- Star icons that are clickable -->
        <i class="bi bi-star" data-rating="1"></i>
        <i class="bi bi-star" data-rating="2"></i>
        <i class="bi bi-star" data-rating="3"></i>
        <i class="bi bi-star" data-rating="4"></i>
        <i class="bi bi-star" data-rating="5"></i>
    </div>
    <!-- Hidden input to store the rating value -->
    <input type="hidden" name="rating" id="rating" value="0">
</div>

<!-- Bootstrap JS and dependencies (Popper.js and Bootstrap's JavaScript) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Handle star click event
        $('.star-rating .bi').on('click', function() {
            var rating = $(this).data('rating'); // Get the rating value
            $('#rating').val(rating); // Set the hidden input value
            
            // Remove active class from all stars
            $('.star-rating .bi').removeClass('bi-star-fill').addClass('bi-star');
            
            // Add active class to clicked star and all previous stars
            $(this).prevAll().addBack().removeClass('bi-star').addClass('bi-star-fill');
        });
    });
</script>
</body>
</html>
