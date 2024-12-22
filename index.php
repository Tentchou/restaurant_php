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

<!-- <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>
        <div class="form-box login">
            <div class="form-details">
                <h2>Welcome Back</h2>
                <p>Please log in using your personal information to stay connected with us.</p>
            </div>
            <div class="form-content">
                <h2>LOGIN</h2>
                <form action="#">
                    <div class="input-field">
                        <input type="text" required>
                        <label>Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <a href="#" class="forgot-pass-link">Forgot password?</a>
                    <button type="submit">Log In</button>
                </form>
                <div class="bottom-link">
                    Don't have an account?
                    <a href="#" id="signup-link">Signup</a>
                </div>
            </div>
        </div>
        <div class="form-box signup">
            <div class="form-details">
                <h2>Create Account</h2>
                <p>To become a part of our community, please sign up using your personal information.</p>
            </div>
            <div class="form-content">
                <h2>SIGNUP</h2>
                <form action="#">
                    <div class="input-field">
                        <input type="text" required>
                        <label>Enter your email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" required>
                        <label>Create password</label>
                    </div>
                    <div class="policy-text">
                        <input type="checkbox" id="policy">
                        <label for="policy">
                            I agree the
                            <a href="#" class="option">Terms & Conditions</a>
                        </label>
                    </div>
                    <button type="submit">Sign Up</button>
                </form>
                <div class="bottom-link">
                    Already have an account? 
                    <a href="#" id="login-link">Login</a>
                </div>
            </div>
        </div>
    </div> -->

<!-- search -->
<form action="" method="post" id="search-form">
    <input type="search" name="" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
    
    <!-- home section -->
 <section class="home" id="home">
    <div class="swiper mySwiper home-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide slide">
                <div class="content">
                    <span>Nos Plats Specials</span>
                    <h3>Riz kankan</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia iste fugiat vel.</p>
                    <a href="contact.php" class="btn">Commandez maintenant</a>
                </div>
                <div class="image">
                    <img src="image/img4.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Nos Plats Specials</span>
                    <h3>Porc roti</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia iste fugiat vel.</p>
                    <a href="#" class="btn">Commandez maintenant</a>
                </div>
                <div class="image">
                    <img src="image/img5.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Nos Plats Specials</span>
                    <h3>Viande frite</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia iste fugiat vel.</p>
                    <a href="#" class="btn">Commandez maintenant</a>
                </div>
                <div class="image">
                    <img src="image/img2.png" alt="">
                </div>
            </div>
        </div>

        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
        <div class="swiper-pagination"></div>
        <!-- <div class="autoplay-progress">
            <svg viewBox="0 0 0 0">
              <circle cx="0" cy="0" r="0"></circle>
            </svg>
            <span></span>
        </div> -->

    </div>
 </section>
<!-- home section -->

<!-- section dishes -->
<section class="dishes" id="dishes">
    <h3 class="sub-heading">Nos Palts</h3>
    <h1 class="heading">Plats Populaires</h1>

    <div class="box-container">
        <div class="box">
            <a href="" class="fas fa-heart"></a>
            <a href="" class="fas fa-eye"></a>
            <img src="image/img11.webp" alt="image plats">
            <h3>Nourriture Savoureuse</h3>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">Ajouter au panier</a>
        </div>

        <div class="box">
            <a href="" class="fas fa-heart"></a>
            <a href="" class="fas fa-eye"></a>
            <img src="image/koki.jpg" alt="image plats">
            <h3>Nourriture Savoureuse</h3>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">Ajouter au panier</a>
        </div>
        <div class="box">
            <a href="" class="fas fa-heart"></a>
            <a href="" class="fas fa-eye"></a>
            <img src="image/kok.jpg" alt="image plats">
            <h3>Nourriture Savoureuse</h3>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">Ajouter au panier</a>
        </div>
        <div class="box">
            <a href="" class="fas fa-heart"></a>
            <a href="" class="fas fa-eye"></a>
            <img src="image/n4.jpg" alt="image plats">
            <h3>Nourriture Savoureuse</h3>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">Ajouter au panier</a>
        </div>
        <div class="box">
            <a href="" class="fas fa-heart"></a>
            <a href="" class="fas fa-eye"></a>
            <img src="image/bongo.jpg" alt="image plats">
            <h3>Nourriture Savoureuse</h3>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">Ajouter au panier</a>
        </div>

        <div class="box">
            <a href="" class="fas fa-heart"></a>
            <a href="" class="fas fa-eye"></a>
            <img src="image/banane.jpg" alt="image plats">
            <h3>Nourriture Savoureuse</h3>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">Ajouter au panier</a>
        </div>

        <div class="box">
            <a href="" class="fas fa-heart"></a>
            <a href="" class="fas fa-eye"></a>
            <img src="image/taro.jpg" alt="image plats">
            <h3>Nourriture Savoureuse</h3>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">Ajouter au panier</a>
        </div>

        <div class="box">
            <a href="" class="fas fa-heart"></a>
            <a href="" class="fas fa-eye"></a>
            <img src="image/sanga.jpg" alt="image plats">
            <h3>Nourriture Savoureuse</h3>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">Ajouter au panier</a>
        </div>

        <div class="box">
            <a href="" class="fas fa-heart"></a>
            <a href="" class="fas fa-eye"></a>
            <img src="image/riz.jpg" alt="image plats">
            <h3>Nourriture Savoureuse</h3>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">Ajouter au panier</a>
        </div>
    </div>
</section>
<!-- section dishes -->

<div class="bg-pattern bg-light repeat-img" style="background-image: url(assets/images/blog-pattern-bg.png);">
                <section class="blog-sec section" id="blog">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sec-title text-center mb-5">
                                        <p class="sec-sub-title mb-3">Our blog</p>
                                        <h2 class="h2-title">Latest Publications</span></h2>
                                        <div class="sec-title-shape mb-4">
                                            <img src="assets/images/title-shape.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/blog/blog1.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">September.15.2021</p>
                                            <a href="#" class="h4-title">Energy Drink which you can make at home.</a>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                                explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                                blanditiis amet ad.</p>
                                            <a href="#" class="sec-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/blog/blog2.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">October.15.2021</p>
                                            <a href="#" class="h4-title">Fresh Veggie and rice combo for dinner.</a>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                                explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                                blanditiis amet ad.</p>
                                            <a href="#" class="sec-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/blog/blog3.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">November.15.2021</p>
                                            <a href="#" class="h4-title">Chicken burger with double nuggets</a>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                                explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                                blanditiis amet ad.</p>
                                            <a href="#" class="sec-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="newsletter-sec section pt-0">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 m-auto">
                                    <div class="newsletter-box text-center back-img white-text"
                                        style="background-image: url(assets/images/news.jpg);">
                                        <div class="bg-overlay dark-overlay"></div>
                                        <div class="sec-wp">
                                            <div class="newsletter-box-text">
                                                <h2 class="h2-title">Subscribe our newsletter</h2>
                                                <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit ad
                                                    veritatis.</p>
                                            </div>
                                            <form action="#" class="newsletter-form">
                                                <input type="email" class="form-input"
                                                    placeholder="Enter your Email Here" required>
                                                <button type="submit" class="sec-btn primary-btn">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    <!--  gestion footer  -->

<?php include('includes/footer.php'); ?>

    <!-- gestion du script  -->
    <!-- <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });

     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }
 </script> -->

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