
<?php

require_once("commande.php");

$Produits=afficher();

if(isset($_GET['pdt'])){
    
    if(!empty($_GET['pdt']) OR is_numeric($_GET['pdt']))
    {
        $id = $_GET['pdt'];

    }
}

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.80.0">
<title>Restaurant.Bresil.Com</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


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

<?php include('includes/header.php'); ?>

<!-- search -->
<form action="" method="post" id="search-form">
    <input type="search" name="" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<br><br><br><br><br><br>

<main>

<div class="album py-5 bg-light">
<div class="container" style="display: flex; justify-content: center">

    <div class="row">
<div class="col-md-2"></div>
<?php foreach($Produits as $produit){ if($produit->id == $id){ ?> 
        <div class="col-md-8">
            <div class="card shadow-sm" style="padding: 3px;">
                <h3 align="center"  ><?= $produit->nom ?></h3>
                <img src="<?= "./image/".$produit->image;?>" style="width: 100%">

                <div class="card-body" style="color: #192a56;font-weight: bold;font-family: 'Poppins', sans-serif; font-size:90px;">
                <p class="texte"><?= $produit->description ?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="contact.php?pdt=<?= $produit->id ?>"><button type="button" class="btn btn-sm btn-success">Commander</button></a><br>
                    <a href="./panier/AjouterPanier.php?id=<?=$produit->id?>"><button type="button" class="btn btn-sm btn-success">Add to cart</button></a>
                    </div>
                    <small class="text" style="font-weight: bold;"><?= $produit->prix ?>€</small>
                </div>
                </div>
            </div>
            </div>
<?php }} ?>

<div class="col-md-2"></div>
    </div>
</div>
</div>

</main>


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
