
<?php 
require_once("connexion.php");
session_start(); 
require_once('./panier/db.php');


//require_once 'connexion.php';
require_once './functions/functions.php';

reconnect_auto();

if (!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $query = "SELECT * FROM utilisateur WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL";
    $req = $access->prepare($query);
    $req->execute(['username' => $_POST['username']]);
    $user = $req->fetch();

    if ($user && password_verify($_POST['password'], $user->password)) {
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = "Connexion éffectuée avec sucess";

        if (isset($_POST['remember'])) {
           $remember_token = generateToken(100);
           $query = "UPDATE utilisateur SET remember_token = ? WHERE id = ?";
           $access->prepare($query)->execute([$remember_token,$user->id]);

           setcookie("remember",$user->id . "::".$remember_token. sha1($user->id ."Ronasdev"),time()+ 60* 60 * 24 * 7);
        }
        header("Location: menu.php");
        exit();
    }else{
        $_SESSION['flash']['danger'] = "Identifiant ou mot de passe incorrect";
    }
}
?>


<header>
    <a href="#" class="logo"><i class="fas fa-utensils"></i>Resto.</a>
    <nav class="navbar">
        <a class="active" href="index.php">Home</a>
        <a href="about.php">about</a>
        <a href="menu.php">menu</a>
        <a href="temoignage.php">review</a>
        <a href="contact.php">contact</a>
        <a href="expert.php">Experts</a>
        <a href="reservation.php">reservation</a>
        <a href="gallery.php">Gallery</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="./panier/checkout.php" class="fas fa-shopping-cart login-btn" id="cart-btn"><span class="sp"><?=array_sum($_SESSION['restaurant'])?></span></a>
        <a href="#" class="fas fa-user" id="cart-user"></a>  
    </div>

    <!-- <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/p1.jpg" alt="">
            <div class="content">
                <h3>Banane malacee</h3>
                <span class="price">$9.45</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/p2.jpg" alt="">
            <div class="content">
                <h3>Banane malacee</h3>
                <span class="price">$9.45</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/p3.jpg" alt="">
            <div class="content">
                <h3>Banane malacee</h3>
                <span class="price">$9.45</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>

        <div class="total">total : $20.78</div>
        <a href="" class="btn">vérifier</a>
    </div> -->

    <!-- login -->
     <form action="" class="login-form" method="post">
        <h3>Connecte-toi</h3>
        <input type="email" placeholder="votre email" class="box" name="username">
        <input type="password" placeholder="votre mot_passe" class="box" name="password">
        <p>mot de passe oublie ? <a href="login/passeOublie.php">Cliquez ici</a></p>
        <p>vous n'avez pas de compte ? <a href="users/register.php">creer maintenant</a></p>
        <input type="submit" value="Se connecter" class="btn" name="valider">
     </form>
</header>



<?php

if(isset($_POST['valider'])){
    if(isset($_POST['mail'], $_POST['pass'])){
        $stmt = $access->prepare('SELECT passwd FROM utilisateur WHERE email = ?');
        $stmt->execute([$_POST['mail']]);
        $hashedpassword = $stmt->fetchColumn();

        if(password_verify($_POST['pass'], $hashedpassword)){
            header('Location: ./index.php'); 
        }else{
            echo"pas de connaxionconnexion";
        }
    }
}



?>

