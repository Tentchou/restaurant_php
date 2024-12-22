<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.6.0/dist/glide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.6.0/dist/css/glide.core.min.css" rel="stylesheet">
    <title>Restaurant.Bresil.Com</title>
  
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.6.0/dist/glide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.6.0/dist/css/glide.core.min.css" rel="stylesheet">
   
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
<style>

  
   /* gestion classe expert */

.expert{
    margin-top: 10px;
}

.expert .titre{
    margin-top: 20px;
}

.expert .contenu{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 40px;
}

.expert .contenu .box{
    width: 230px;
    margin: 15px;
}

.expert .contenu .box img{
    position: relative;
    width: 100%;
    height: 200px;
    top: 0;
    left: 0;
    object-fit: cover;
    border-radius: 50%;
    border: .8rem solid #192a56;
}

.expert .contenu .box h3{
    color: #000;
    text-align: center;
    font-weight: 400px;
}

</style>
<body>
      <!-- faire une inclusion du fichaier header.php -->
  <?php include('includes/header.php');  ?>; 

  <!-- search -->
<form action="" method="post" id="search-form">
    <input type="search" name="" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>


  <!-- notre glide -->

<section class="contente">
           <div class="glide__container">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                      <li class="glide__slide">

                        <img src="./image/equipe1.jpg" alt="slide1">
                        <h4>Expert Dessert</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/equipe2.jpg" alt="slide1">
                        <h4>Expert</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/equipe3.jpg" alt="slide1">
                        <h4>Expert</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/equipe4.jpg" alt="slide1">
                        <h4>Expert</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/n2.jpg" alt="slide1">
                        <h4>Expert</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/e.jpg" alt="slide1">
                        <h4>Expert</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/e1.jpg" alt="slide1">
                        <h4>Expert Visions</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/e2.jpg" alt="slide1">
                        <h4>Expert Vegetarient</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/e3.jpg" alt="slide1">
                        <h4>Expert en Viande</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/e4.jpg" alt="slide1">
                        <h4>Expert En Pattes</h4>
                      </li>

                    </ul>
                  </div>

                    <div class="glide__arrows" data-glide-el="controls">
                      <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                      <i class="uil uil-angle-left"></i>
                      </button>
                      <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                      <i class="uil uil-angle-right"></i>
                      </button>
                    </div>
            </div>
        </div>
</section>
       <!-- Section des experts -->
    

    <section class="expert" id="expert">
           <h3 class="sub-heading">Nos Experts</h3>
           <h1 class="heading">Launch a career as a web designer by learning HTML5, CSS3.</h1>
       

        <div class="contenu">

            <div class="box">
                <div class="inbox">
                    <img src="./image/e7.jpg" alt="image">
                </div>

                <div class="text">
                    <h3 class="sub-heading" style="color:#27ae60">Chef Raissa</h3>
                </div>
            </div>
        
            <div class="box">
               <div class="inbox">
                <img src="./image/e1.jpg" alt="image">
               </div>

               <div class="text">
                <h3 class="sub-heading" style="color:#27ae60">Equipe Titan</h3>
               </div>
           </div>

           <div class="box">
            <div class="inbox">
                <img src="./image/e2.jpg" alt="image">
            </div>

            <div class="text">
                <h3 class="sub-heading" style="color:#27ae60">Severin Leroi</h3>
            </div>
           </div>

           <div class="box">
            <div class="inbox">
                <img src="./image/e3.jpg" alt="image">
            </div>

            <div class="text">
                <h3 class="sub-heading" style="color:#27ae60">Franch Leroi</h3>
            </div>
           </div>

           <div class="box">
            <div class="inbox">
                <img src="./image/e4.jpg" alt="image">
            </div>

            <div class="text">
                <h3 class="sub-heading" style="color:#27ae60">Sylvin Le Roi</h3>
            </div>
           </div>

           <div class="box">
            <div class="inbox">
                <img src="./image/e5.jpg" alt="image">
            </div>

            <div class="text">
                <h3 class="sub-heading" style="color:#27ae60">Silvanie de Betene</h3>
            </div>
           </div>

           <div class="box">
            <div class="inbox">
                <img src="./image/e6.jpg" alt="image">
            </div>

            <div class="text">
                <h3 class="sub-heading" style="color:#27ae60">Syslvestre de Rom</h3>
            </div>
           </div>

        </div>
    </section>

    <section class="our-team section">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Our Team</p>
                                    <h2 class="h2-title">Meet our Chefs</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row team-slider">
                            <div class="swiper-wrapper">
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/c1.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Nilay Hirpara</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/c2.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Ravi Kumawat</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/c3.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Navnit Kumar</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/c4.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Pranav Badgal</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/c5.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Priyotosh Dey</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
    </section>

    <!-- footer -->

<?php include('includes/footer.php'); ?>

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
    
     <script>
        new Glide('.glide',{
            type: "carousel",
            perView: 5,
            focusAt: 'center',
            autoplay: 3000,
            arrows: {
                prev: '.glide__arrow--left',
                next: '.glide__arrow--right',
           },
        }).mount();
    </script>
    
</body>
</html>