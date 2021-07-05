<?php
include_once 'products/DataProduct.php';
include_once 'products/Product.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../kkk/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../kkk/css/animate.css">

    <link rel="stylesheet" href="../kkk/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../kkk/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../kkk/css/magnific-popup.css">

    <link rel="stylesheet" href="../kkk/css/aos.css">

    <link rel="stylesheet" href="../kkk/css/ionicons.min.css">

    <link rel="stylesheet" href="../kkk/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../kkk/css/jquery.timepicker.css">


    <link rel="stylesheet" href="../kkk/css/flaticon.css">
    <link rel="stylesheet" href="../kkk/css/icomoon.css">
    <link rel="stylesheet" href="../kkk/css/style.css">
</head>
<body class="goto-here">
<div class="py-1 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">+ 1235 2355 98</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">youremail@email.com</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                        <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">Vegefoods</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="shop.php">Shop</a>
                        <a class="dropdown-item" href="cart.php">Cart</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap hero-bread" style="background-image: url('https://anhnendep.net/wp-content/uploads/2015/07/hinh-nen-trai-cay-dep-2.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="../kkk/html/index.html">Home</a></span> <span class="mr-2"><a href="../kkk/html/index.html">Product</a></span> <span>Product Single</span></p>
                <h1 class="mb-0 bread">Product Single</h1>
            </div>
        </div>
    </div>
</div>






<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="../kkk/js/jquery.min.js"></script>
<script src="../kkk/js/jquery-migrate-3.0.1.min.js"></script>
<script src="../kkk/js/popper.min.js"></script>
<script src="../kkk/js/bootstrap.min.js"></script>
<script src="../kkk/js/jquery.easing.1.3.js"></script>
<script src="../kkk/js/jquery.waypoints.min.js"></script>
<script src="../kkk/js/jquery.stellar.min.js"></script>
<script src="../kkk/js/owl.carousel.min.js"></script>
<script src="../kkk/js/jquery.magnific-popup.min.js"></script>
<script src="../kkk/js/aos.js"></script>
<script src="../kkk/js/jquery.animateNumber.min.js"></script>
<script src="../kkk/js/bootstrap-datepicker.js"></script>
<script src="../kkk/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="../kkk/js/google-map.js"></script>
<script src="../kkk/js/main.js"></script>

<script>
    $(document).ready(function(){

        var quantitiy=0;
        $('.quantity-right-plus').click(function(e){

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if(quantity>0){
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>

</body>
</html>