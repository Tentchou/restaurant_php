

<?php

session_start();

require("commande.php");

if(!isset($_SESSION['xRttpHo0greL39']))
{
    header("Location:login.php");
}

if(empty($_SESSION['xRttpHo0greL39']))
{
    header("Location: login.php");
}

$nourriture=afficher();

foreach($_SESSION['xRttpHo0greL39'] as $i){
  $nom = $i->pseudo;
  $email = $i->email;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Restaurant.Bresil.com</title>
   
    
</head>
<body>
 
<?php require_once('../includes/headerAdmin.php');?>

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<form method="post">
  <div class="mb-3">

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Identifiant du produit</label>

    <input type="number" class="form-control" name="idproduit" required>
  </div>

  <button type="submit" name="valider" class="romeo">Supprimer le produit</button>
</form>

      </div>
</div>
</div>
</div>

<section class="menu" id="menu">
    <h3 class="sub-heading">Notre menu</h3>
    <h1 class="heading">Spécialité du jour</h1>

     

    <div class="box-container">
    <?php foreach($nourriture as $produit): ?>
        <div class="box">
            <h3><?= $produit->id ?></h3>
            <div class="image">
                <img src="<?= "../image/".$produit->image;?>" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>

            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3><?= $produit->nom ?></h3>
                <p><?= $produit->description ?></p>
                <a href="#" class="romeo">Ajouter panier</a>
                <span class="prices"><?= $produit->prix ?>$</span>
            </div>
        </div>
        <?php endforeach ?> 

    </div>

</section>

<?php require_once('../includes/footer.php');?>


<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['idproduit']))
    {
    if(!empty($_POST['idproduit']) AND is_numeric($_POST['idproduit']))
	    {
	    	$idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));

          try 
          {
            supprimer($idproduit);
            
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }
	    	


	    }
    }
  }

?>


</body>
</html>