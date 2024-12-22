
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant.Bresil.Com</title>
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

<?php include("includes/header.php"); ?>

<!-- search -->
<form action="" method="post" id="search-form">
    <input type="search" name="" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
    

    <section class="book-table section bg-light">
        <div class="book-table-shape">
            <img src="assets/images/table-leaves-shape.png" alt="">
        </div>

        <div class="book-table-shape book-table-shape2">
            <img src="assets/images/table-leaves-shape.png" alt="">
        </div>

        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title text-center mb-5">
                            <p class="sec-sub-title mb-3">Book Table</p>
                            <h2 class="h2-title">Opening Table</h2>
                            <div class="sec-title-shape mb-4">
                                <img src="assets/images/title-shape.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="book-table-info">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="table-title text-center">
                                <h3>Monday to Thrusday</h3>
                                <p>9:00 am - 22:00 pm</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="call-now text-center">
                                <i class="uil uil-phone"></i>
                                <a href="tel:+237 657727514">+237 657727514</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="table-title text-center">
                                <h3>Friday to Sunday</h3>
                                <p>11::00 am to 20:00 pm</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="gallery">
                    <div class="col-lg-10 m-auto">
                        <div class="book-table-img-slider" id="icon">
                            <div class="swiper-wrapper">
                                <a href="assets/images/bt1.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(assets/images/bt1.jpg)"></a>
                                <a href="assets/images/bt2.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(assets/images/bt2.jpg)"></a>
                                <a href="assets/images/bt3.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(assets/images/bt3.jpg)"></a>
                                <a href="assets/images/bt4.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(assets/images/bt4.jpg)"></a>
                                <a href="assets/images/bt1.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(assets/images/bt1.jpg)"></a>
                                <a href="assets/images/bt2.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(assets/images/bt2.jpg)"></a>
                                <a href="assets/images/bt3.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(assets/images/bt3.jpg)"></a>
                                <a href="assets/images/bt4.jpg" data-fancybox="table-slider"
                                    class="book-table-img back-img swiper-slide"
                                    style="background-image: url(assets/images/bt4.jpg)"></a>
                            </div>

                            <div class="swiper-button-wp">
                                <div class="swiper-button-prev swiper-button">
                                    <i class="uil uil-angle-left"></i>
                                </div>
                                <div class="swiper-button-next swiper-button">
                                    <i class="uil uil-angle-right"></i>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

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
    <script src="script.js"></script>

</body>
</html>