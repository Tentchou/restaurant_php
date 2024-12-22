<?php 

session_start(); 
require("commande.php");

// if(!isset($_SESSION['xRttpHo0greL39']))
// {
//     header("Location:login.php");
// }

// if(empty($_SESSION['xRttpHo0greL39']))
// {
//     header("Location: login.php");
// }

$nourriture=afficher();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper-bundle.min.css"> -->
    <title>Restaurant.Bresil.Com</title>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.6.0/dist/glide.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.6.0/dist/css/glide.core.min.css" rel="stylesheet">

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


<section class="contente" style="background:url(image/c.jpg);background-size: cover;background-repeat: no-repeat;background-position: bottom;">
           <div class="glide__container">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                      <li class="glide__slide">

                        <img src="./image/kok.jpg" alt="slide1">
                        <h4>Dessin de animation anime</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/banane.jpg" alt="slide1">
                        <h4>Dessin de animation anime</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/bongo.jpg" alt="slide1">
                        <h4>Dessin de animation anime</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/porc.jpg" alt="slide1">
                        <h4>Dessin de animation anime</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/plat2.jpg" alt="slide1">
                        <h4>Dessin de animation anime</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/plat1.jpg" alt="slide1">
                        <h4>Dessin de animation anime</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/plat3.jpg" alt="slide1">
                        <h4>Dessin de animation anime</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/plat4.jpg" alt="slide1">
                        <h4>Dessin de animation anime</h4>
                      </li>

                      <li class="glide__slide">
                        <img src="./image/plat5.jpg" alt="slide1">
                        <h4>Dessin de animation anime</h4>
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
    

<!-- menu -->
<section class="menu" id="menu">
    <h3 class="sub-heading">Notre menu</h3>
    <h1 class="heading">Spécialité du jour</h1>

    <div class="box-container">
      <?php 
        //inclure la page de connexion
        include_once "./panier/db.php";
        //afficher la liste des produits
        $stmt = $con->prepare('SELECT * FROM nouriture ORDER BY RAND() LIMIT 8');
        $stmt->execute();

        //recuperation des produits dans un tableau
        $produits = array();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){
            $produits[] = array(
                'nom'=>$row['nom'],
                'description'=>$row['description'],
                'prix'=>$row['prix'],
                'image'=>$row['image']
            );
        }
        
        
        //melange aleatoires des produits
        shuffle($produits);

        //affichage des produits
         $i = 0;
         while($i < count($produits)){ 
            for($j = 0; $j < $produits; $j++){
                if(isset($produits[$i])){
        ?>
        <div class="box">
            <div class="image">
                <img src="image/<?=$produits[$i]['image']?>" alt="" id="ig">
                <a href="#" class="fas fa-heart"></a>
            </div>

            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3><?=$produits[$i]['nom']?></h3>
                <p><?=$produits[$i]['description']?></p>
                <a href="./panier/AjouterPanier.php?id=<?=$i?>" class="btn">Ajouter panier</a>
                <span class="prices"><?=$produits[$i]['prix']?>€</span>
            </div>
        </div>
          
            <?php  $i++; } } }?>
    </div>
</section>

<section style="background-image: url(assets/images/menu-bg.png);"
                class="our-menu section bg-light repeat-img" id="menu">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    
                                    <h2 class="h2-title">wake up early, <span>eat fresh & healthy</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-tab-wp">
                            <div class="row">
                                <div class="col-lg-12 m-auto">
                                    <div class="menu-tab text-center">
                                        <ul class="filters">
                                            <div class="filter-active"></div>
                                            <li class="filter" data-filter=".all, .breakfast, .lunch, .dinner">
                                                <img src="assets/images/menu-1.png" alt="">
                                                All
                                            </li>
                                            <li class="filter" data-filter=".breakfast">
                                                <img src="assets/images/menu-2.png" alt="">
                                                Breakfast
                                            </li>
                                            <li class="filter" data-filter=".lunch">
                                                <img src="assets/images/menu-3.png" alt="">
                                                Lunch
                                            </li>
                                            <li class="filter" data-filter=".dinner">
                                                <img src="assets/images/menu-4.png" alt="">
                                                Dinner
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="menu-list-row">
                            <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                            <?php foreach($nourriture as $produit): ?>
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="<?= "./image/".$produit->image;?>" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title"><?= $produit->nom ?></h3>
                                            <p>120 calories</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b><?= $produit->type ?></b>
                                                </li>
                                                <li>
                                                    <p>Person</p>
                                                    <b><?= $produit->id ?></b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b><?= $produit->prix ?>€</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                       <a href="voir.php?pdt=<?= $produit->id ?>"><i class="uil uil-plus"></i></a>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?> 
                                
                               <!-- <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/2.png" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.3
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Grilled Chicken</h3>
                                            <p>80 calories</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Non Veg</b>
                                                </li>
                                                <li>
                                                    <p>Persons</p>
                                                    <b>1</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rs. 359</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/3.png" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Panner Noodles</h3>
                                            <p>100 calories</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Veg</b>
                                                </li>
                                                <li>
                                                    <p>Persons</p>
                                                    <b>2</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rs. 149</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/4.png" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Chicken Noodles</h3>
                                            <p>120 calories</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Non Veg</b>
                                                </li>
                                                <li>
                                                    <p>Persons</p>
                                                    <b>2</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rs. 379</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/5.png" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Bread Boiled Egg</h3>
                                            <p>120 calories</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Non Veg</b>
                                                </li>
                                                <li>
                                                    <p>Persons</p>
                                                    <b>2</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rs. 99</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/6.png" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Immunity Dish</h3>
                                            <p>120 calories</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Veg</b>
                                                </li>
                                                <li>
                                                    <p>Persons</p>
                                                    <b>2</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Rs. 159</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- menu -->
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
</body>
</html>