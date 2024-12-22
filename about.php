<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper-bundle.min.css"> -->
    <title>Restaurant.Bresil.Com</title>
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper-bundle.min.css"> -->
     <!-- <link rel="stylesheet" href="https://unpkg.com/swiper-bundle.min.css"> -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <!-- for icons  -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
     <!-- bootstrap  -->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <!-- for swiper slider  -->
     <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
 
     <!-- fancy box  -->
     <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
     <!-- custom css  -->
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="responsive.css">
</head>
<body>

    <!-- faire une inclusion du fichaier header.php -->
<?php include('includes/header.php');?>

<!-- search -->
<form action="" method="post" id="search-form">
    <input type="search" name="" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
<br><br><br><br><br><br>
    
<!-- A propos -->

<section class="about" id="about">
    <h3 class="sub-heading">A propos de Nous</h3>
    <h1 class="heading">Plats Populaires</h1>
    <div class="row">
        <div class="image">
            <img src="image/img6.png" alt="image">
        </div>

        <div class="content">
            <h3>la meilleure nourriture du pays</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto 
                animi esse sint enim, asperiores quis delectus amet impedit consequatur eum praesentium libero
                 porro iure, cupiditate modi veritatis ex ab molestiae nisi qui maxime nam. Amet quibusdam cum 
            </p>
            <p>animi esse sint enim, asperiores quis delectus amet impedit consequatur eum praesentium libero
                porro iure, cupiditate modi veritatis ex ab molestiae nisi qui maxime nam. Amet quibusdam cum </p>

            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>livraison gratuite</span>
                </div>

                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>faciliter le paiement</span>
                </div>

                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>Prestations 24h/7</span>
                </div>
            </div>

            <a href="#" class="btn">voir plus</a>
        </div>
    </div>
</section>
<!-- A propos -->

            <section class="two-col-sec section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="sec-img mt-5">
                                <img src="assets/images/pizza.png" alt="" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="sec-text">
                                <h2 class="xxl-title">Chicken Pepperoni</h2>
                                <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolores
                                    eligendi earum eveniet soluta officiis asperiores repellat, eum praesentium nihil
                                    totam. Non ipsa expedita repellat atque mollitia praesentium assumenda quo
                                    distinctio excepturi nobis tenetur, cum ab vitae fugiat hic aspernatur? Quos
                                    laboriosam, repudiandae exercitationem atque a excepturi vel. Voluptas, ipsa.</p>
                                <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. At fugit laborum
                                    voluptas magnam sed ad illum? Minus officiis quod deserunt.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="two-col-sec section pt-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-1 order-2">
                            <div class="sec-text">
                                <h2 class="xxl-title">Chicken Pepperoni</h2>
                                <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolores
                                    eligendi earum eveniet soluta officiis asperiores repellat, eum praesentium nihil
                                    totam. Non ipsa expedita repellat atque mollitia praesentium assumenda quo
                                    distinctio excepturi nobis tenetur, cum ab vitae fugiat hic aspernatur? Quos
                                    laboriosam, repudiandae exercitationem atque a excepturi vel. Voluptas, ipsa.</p>
                                <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. At fugit laborum
                                    voluptas magnam sed ad illum? Minus officiis quod deserunt.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-2 order-1">
                            <div class="sec-img">
                                <img src="assets/images/sushi.png" alt="" width="100%" height="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          
            
<!-- section dishes -->
    <!--  gestion footer  -->

<?php include('includes/footer.php'); ?>



 <!-- loader container -->
<div class="loader-container">
    <img src="image/lg.gif" alt="">
</div>
<!-- loader container -->

<!-- jquery  -->
<script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!-- fontawesome  -->
    <script src="assets/js/font-awesome.min.js"></script>

    <!-- swiper slider  -->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- mixitup -- filter  -->
    <script src="assets/js/jquery.mixitup.min.js"></script>

    <!-- fancy box  -->
    <script src="assets/js/jquery.fancybox.min.js"></script>

    <!-- parallax  -->
    <script src="assets/js/parallax.min.js"></script>

    <!-- gsap  -->
    <script src="assets/js/gsap.min.js"></script>

    <!-- scroll trigger  -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- scroll to plugin  -->
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <!-- rellax  -->
    <!-- <script src="assets/js/rellax.min.js"></script> -->
    <!-- <script src="assets/js/rellax-custom.js"></script> -->
    <!-- smooth scroll  -->
    <script src="assets/js/smooth-scroll.js"></script>

    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- custom js  -->
    <script src="main.js"></script>
    <!-- gestion du script javascript -->
     <script src="script.js"></script>
</body>
</body>
</html>