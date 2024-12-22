


<?php 
   session_start();
   require_once "db.php";
   require_once("AjouterPanier.php");
   
   //supprimer les produits
   //si la variable del existe
   if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    //suppression
    unset($_SESSION['restaurant'][$id_del]);
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title>Restaurant.Bresil.Com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="https://unpkg.com/swiper-bundle.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 
 <link rel="stylesheet" href="style.css">
 
</head>

<body class="panier">



   <?php //require_once("../includes/headerAdmin.php") ; ?>
    <a href="../menu.php" class="romeo">Votre Menu</a>
    <section>
        <table>
            <tr>
                <th>Images</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
            <?php 
              $total = 0 ;
              // liste des produits
              //récupérer les clés du tableau session
              $ids = array_keys($_SESSION['restaurant']);
              //s'il n'y a aucune clé dans le tableau
              if(empty($ids)){
                echo "Votre panier est vide";
              }else {
                //si oui 
                $products = mysqli_query($con, "SELECT * FROM nouriture WHERE id IN (".implode(',', $ids).")");

                //lise des produit avec une boucle foreach
                foreach($products as $product):
                    //calculer le total ( prix unitaire * quantité) 
                    //et aditionner chaque résutats a chaque tour de boucle
                    $total = $total + $product['prix'] * $_SESSION['restaurant'][$product['id']] ;
                ?>
                <tr>
                    <td><img src="../image/<?=$product['image']?>" class="img"></td>
                    <td><?=$product['nom']?></td>
                    <td><?=$product['prix']?>€</td>
                    <td><?=$_SESSION['restaurant'][$product['id']] // Quantité?></td>
                    <td><a href="panier.php?del=<?=$product['id']?>"><img src="../image/delete.png"></a></td>
                    
                </tr>

            <?php endforeach ;} ?>

            <tr class="total">
                <th>Total : <?=$total?>€</th>
                <td><a href="panier.php?commande=<?=$product['id']?>"><img src="../image/order.jfif" style="border-radius:100%; width:20%; height: 20%;"></a></td>
            </tr>
        </table>
    </section>

   
</body>
</html>