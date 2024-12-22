

<?php

require_once('../panier/db.php');
session_start();

if(!isset($_SESSION['user-name'])){
    header('location: login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant.Bresil.Com</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>Hi , <span>User</span></h3>
            <h1>welcome <span><?php $_SESSION['user-name'];?></span></h1>
            <p>this is an user page</p>
            <a href="login_form.php" class="btn">login</a>
            <a href="inscription.php" class="btn">register</a>
            <a href="deconecter.php" class="btn">logout</a>
        </div>
    </div>
</body>
</html>