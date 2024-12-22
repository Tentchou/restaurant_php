
<?php
session_start();

require_once("commande.php");

if(!isset($_SESSION['xRttpHo0greL39']))
{
    header("Location: login.php");
}

if(empty($_SESSION['xRttpHo0greL39']))
{
    header("Location: login.php");
}


foreach($_SESSION['xRttpHo0greL39'] as $i){
  $nom = $i->pseudo;
  $email = $i->email;
}

require_once("commande.php");

if(isset($_POST['valider']))
  {
    if(isset($_POST['nom']) AND isset($_POST['description']) AND isset($_POST['description']) AND isset($_FILES['image']['name']) and isset($_POST['type']))
    {
    if(!empty($_POST['nom']) AND !empty($_POST['description']) AND !empty($_POST['prix']) AND !empty($_FILES['image']['name']) AND !empty($_POST['type']) )
	    {
	    	$nom = htmlspecialchars(strip_tags($_POST['nom']));
            $description = htmlspecialchars(strip_tags($_POST['description']));
	    	$prix = htmlspecialchars(strip_tags($_POST['prix']));
	    	$image = htmlspecialchars(strip_tags($_FILES['image']['name']));
            $type = htmlspecialchars(strip_tags($_POST['type']));
	    	
          try 
          {
            ajouter($nom, $description,$prix, $image,$type);
            header('Location: afficher.php');
          } 
          catch (Exception $e) 
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

<section class="order" id="order">
    <h3 class="sub-heading">Ajoutez un nouveau plat</h3>
    <h1 class="heading">Hummm quelle saveur !</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="inputBox">
            <div class="input">
                <span>Nom</span>
                <input type="text" name="nom" id="" placeholder="Entrez  nom" required>
            </div>
            <div class="input">
                <span>Prix</span>
                <input type="text" name="prix" id="" placeholder="Entrez le prix" required>
            </div>
            <div class="input">
                <span>Image</span>
                <input type="file" name="image" id="" placeholder="Image du plat" required>
            </div>
            <div class="input">
                <span>Type</span>
                <input type="text" name="type" id="" placeholder="Image du plat" required>
            </div>
            
            <div class="input">
                <span>Description</span>
                <textarea name="description" placeholder="Decrire le plat" id="" cols="30" rows="10"></textarea>
            </div> 
        </div>
        <input type="submit" name="valider" value="Enregistrer maintenant" class="romeo" >
    </form>
</section>


<?php require_once('../includes/footer.php');?>
</body>
</html>