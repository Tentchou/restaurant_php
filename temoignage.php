

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Restaurant.Bresil.Com</title>
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper-bundle.min.css"> -->
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
  <?php include('includes/header.php');  ?>; 
  <!-- search -->
<form action="" method="post" id="search-form">
    <input type="search" name="" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>


        <!-- gestion des temoignages de clients-->
    
        <section class="testimonials section bg-light">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">What they say</p>
                                    <h2 class="h2-title">What our customers <span>say about us</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="testimonials-img">
                                    <img src="assets/images/testimonial-img.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t1.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:85%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Nilay Hirpara
                                                </h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                                    quisquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t2.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:80%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Ravi Kumawat
                                                </h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                                    quisquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t3.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:89%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Navnit Kumar
                                                </h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                                    quisquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t4.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:100%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Somyadeep Bhowmik
                                                </h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                                    quisquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<section class="review" id="review">
    <h3 class="sub-heading">avis du client</h3>
    <h1 class="heading">Que pensezvous?</h1>

    <div class="swiper mySwiper review-slider">
        <div class="swiper-wrapper">
             <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="image/t1.png" alt="">
                    <div class="user-info">
                        <h3>Baruch Ngami</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Molestiae unde, consequatur, voluptates eveniet pariatur ipsam repellat 
                     dignissimos cumque ipsum perferendis laboriosam, sunt soluta earum obcaecati 
                     odio exercitationem temporibus? Voluptatum, explicabo.</p>
             </div>
             <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="image/t2.png" alt="">
                    <div class="user-info">
                        <h3>Tentchou Romeo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Molestiae unde, consequatur, voluptates eveniet pariatur ipsam repellat 
                     dignissimos cumque ipsum perferendis laboriosam, sunt soluta earum obcaecati 
                     odio exercitationem temporibus? Voluptatum, explicabo.</p>
             </div>
             <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="image/t3.png" alt="">
                    <div class="user-info">
                        <h3>Mr cabrel</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Molestiae unde, consequatur, voluptates eveniet pariatur ipsam repellat 
                     dignissimos cumque ipsum perferendis laboriosam, sunt soluta earum obcaecati 
                     odio exercitationem temporibus? Voluptatum, explicabo.</p>
             </div>
             <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <!-- <i class="fa-sharp fa-solid fa-quote-right"></i> -->
                <div class="user">
                    <img src="image/t4.png" alt="">
                    <div class="user-info">
                        <h3>Wendy</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Molestiae unde, consequatur, voluptates eveniet pariatur ipsam repellat 
                     dignissimos cumque ipsum perferendis laboriosam, sunt soluta earum obcaecati 
                     odio exercitationem temporibus? Voluptatum, explicabo.</p>
             </div>
             <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="image/bongo.jpg" alt="">
                    <div class="user-info">
                        <h3>Famille Nazi</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Molestiae unde, consequatur, voluptates eveniet pariatur ipsam repellat 
                     dignissimos cumque ipsum perferendis laboriosam, sunt soluta earum obcaecati 
                     odio exercitationem temporibus? Voluptatum, explicabo.</p>
             </div>
             <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="image/client5.jpg" alt="">
                    <div class="user-info">
                        <h3>Famille Richard</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Molestiae unde, consequatur, voluptates eveniet pariatur ipsam repellat 
                     dignissimos cumque ipsum perferendis laboriosam, sunt soluta earum obcaecati 
                     odio exercitationem temporibus? Voluptatum, explicabo.</p>
             </div>
             <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="image/client2.jpg" alt="">
                    <div class="user-info">
                        <h3>Famille Reine</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Molestiae unde, consequatur, voluptates eveniet pariatur ipsam repellat 
                     dignissimos cumque ipsum perferendis laboriosam, sunt soluta earum obcaecati 
                     odio exercitationem temporibus? Voluptatum, explicabo.</p>
             </div>
        </div>
    </div>
</section>

<section class="order" id="order">

    <h3 class="sub-heading">Laissez un commentaire !</h3>
    <h1 class="heading">Soyez precis et clair</h1>

    <form action="" method="post">

        <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input type="text" name="nom" id="" placeholder="Entrez votre nom" required>
            </div>
            <div class="input">
                <span>your email</span>
                <input type="email" name="mail" id="" placeholder="votre adresse mail">
            </div>
            <div class="input">
                <span>Photos</span>
                <input type="file" name="image" id="" placeholder="une photos de vous">
            </div>
            <div class="input">
                <span>your message</span>
                <textarea name="description" placeholder="Entrez votre message" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <input type="submit" name="valider" value="Envoyez maintenant" class="btn">
    </form>
</section>
<!-- order section -->

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
    
</body>
</html>

<?php
// session_start();

require_once("commande.php");
require_once("./includes/connexion.php");

if(isset($_POST['valider']))
  {
    if(isset($_POST['nom']) AND isset($_POST['email']) AND isset($_FILES['image']['name']) AND isset($_POST['description']))
    {
    if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_FILES['image']['name']) AND !empty($_POST['description']))
	    {
	    	$nom = htmlspecialchars(strip_tags($_POST['nom']));
	    	$email = htmlspecialchars(strip_tags($_POST['mail']));
	    	$image = htmlspecialchars(strip_tags($_FILES['image']['name']));
            $commentaire = htmlspecialchars(strip_tags($_POST['description']));
          try 
          {
            ajouterCommentaire($nom, $email, $image,$commentaire);
            header('Location: index.php');
              
             }catch (Exception $e) 
          {
          	$e->getMessage();
          }

	    }
    }
  }


// if(!isset($_SESSION['xRttpHo0greL39']))
// {
//     header("Location: ../login.php");
// }

// if(empty($_SESSION['xRttpHo0greL39']))
// {
//     header("Location: ../login.php");
// }


// foreach($_SESSION['xRttpHo0greL39'] as $i){
//   $nom = $i->pseudo;
//   $email = $i->email;
// }

?>