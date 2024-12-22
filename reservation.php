

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant.Bresil.Com</title>

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
 #reservation{
    background-image: url(./image/our-speciality-item1.jpg);
    background-size: cover;
    margin-top: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    flex-direction: column;
}
#reservation form{
    display: flex;
    background-color: rgba(0,0,0,0.05);
    padding: 25px;
    border-radius: 6px;
    flex-direction: column;
    width: 350px;
}
#reservation form label{
    margin-bottom: 8px;
    font-size: 14px;
}
#reservation form input{
    margin-bottom: 8px;
    font-size: 14px;
    padding: 5px;
    border: 1px solid transparent;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    outline: 0;
}
#reservation form input:focus{
    outline: 1.2px solid #27ae60;
}
#reservation form input[type="submit"]{
    margin-top: 15px;
    color: #fff;
    background-color: #27ae60;
    border: 1px solid #27ae60;
}

.service_liste{
    padding: 10px 10%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}
.service img{
    cursor: pointer;
    margin-left: .5rem;
    height: 5rem;
    line-height: 4.5rem;
    width: 5rem;
    text-align: center;
    font-size: 1.7rem;
    color: #192a56;
    border-radius: 50%;
    background: #192a56;
    
}
.service img:hover{
    color: #fff;
    background: var(--green);
    transform: rotate(360deg);
}

.service{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin: 25px auto;
}
.service p{
    color: #333;
}

hr{
    background-color: #ccc;
    border: 0;
    height: 2px;
    width: 100%;
}
.footer_text{
    text-align: center;
    font-size: 15px;
    padding: 8px 0;
}
.footer_text span{
    color: #27ae60;
}
.toggle_menu{
    display: none;
}
</style>
<body>
      <!-- faire une inclusion du fichaier header.php -->
  <?php include('includes/header.php');  ?>
  <!-- search -->
<form action="" method="post" id="search-form">
    <input type="search" name="" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<br><br><br><br><br>
<!-- order section -->
<!-- <section class="order" id="order" style=" background-image: url(image/our-speciality-item1.jpg);background-size: cover;">
    <h3 class="sub-heading">Commandez maintenant</h3>
    <h1 class="heading">gratuit et rapide</h1>

    <form action="" method="post">
        <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input type="text" name="" id="" placeholder="Entrez votre nom">
            </div>
            <div class="input">
                <span>your number</span>
                <input type="text" name="" id="" placeholder="Entrez votre numero">
            </div>
            <div class="input">
                <span>your order</span>
                <input type="text" name="" id="" placeholder="nom de nourriture">
            </div>
            <div class="input">
                <span>additional food</span>
                <input type="text" name="" id="" placeholder="nourriture supplémentaire">
            </div>
            <div class="input">
                <span>how musch</span>
                <input type="number" name="" id="" placeholder="nombre de commande">
            </div>
            <div class="input">
                <span>date and time</span>
                <input type="datetime-local" name="" id="" placeholder="date et heure">
            </div>
            <div class="input">
                <span>your address/span>
                <textarea name="" placeholder="Entrez votre Addresse" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
                <span>your message</span>
                <textarea name="" placeholder="Entrez votre message" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <input type="submit" value="Commandez maintenant" class="btn">
    </form>
</section> -->
<!-- order section -->
       
<section id="reservation">
       <h3 class="sub-heading">Reservation</h3>
       <h1 class="heading">Fill this form to make a reservation</h1>
        <form action="" method="post">
            <label for="Your Name">Your Name</label>
            <input type="text">
            <label for="mail">Your Email</label>
            <input type="text">
            <label for="number">Your Number</label>
            <input type="text">
            <label for="reservation">Reservation Date</label>
            <input type="date">
            <input type="submit" value="Make The Reservation">
        </form>
</section>

<section>
    <div class="service_liste">
            <div class="service">
                <img src="image/clock.png" alt="">
                <h2>Ouverture</h2>
                <p>10h30 a 21h45</p>
                <p>23h45 a 9h30</p>
            </div>
            <div class="service">
                <img src="image/pin.png" alt="">
                <h2>Adresse</h2>
                <p>Douala-Cameroun</p>
                <p>Benin-Cotonou</p>
            </div>
            <div class="service">
                <img src="image/email.png" alt="">
                <h2>Emails</h2>
                <p>email@gmail.com</p>
                <p>tentchouromeo58@gmail.com</p>
            </div>
            <div class="service">
                <img src="image/call.png" alt="">
                <h2>Numbers</h2>
                <p>+237 657727514</p>
                <p>+237 678065506</p>
            </div>
            <hr>
    </div>
</section>


    <div class="carte">
    <h3 class="sub-heading">Nous sommes situe</h3>
    <h1 class="heading">Douala-Cameroun/Ndopassi</h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.848891602342!2d9.76568567357573!3d4.051227946948375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610dc8c7ded9f3%3A0x4d15c16f956c2e14!2sNdogpassi%20village!5e0!3m2!1sfr!2scm!4v1712597271850!5m2!1sfr!2scm" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    <br><br><br><br>
    <div class="bg-pattern bg-light repeat-img" style="background-image: url(assets/images/blog-pattern-bg.png);">
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


    <!-- footer -->

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
</html>