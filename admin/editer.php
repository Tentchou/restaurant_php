

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

if(!isset($_GET['id'])){
    header("Location: afficher.php");
}

if(empty($_GET['id']) OR !is_numeric($_GET['id'])){
    header("Location: afficher.php");
}

if(isset($_GET['id'])){
    
    if(!empty($_GET['id']) OR is_numeric($_GET['id']))
    {
        $id = $_GET['id'];
        $nourriture = afficherUnProduit($id);
    }
}

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
 
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="logo navbar-brand " href="../" style="color:#192a56; font-size:2.5rem;font-weight: bolder;"><i class="fas fa-utensils" style="color:#27ae60;"></i>Resto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="../admin/afficher.php">Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="../admin/">Nouveau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="supprimer.php">Suppression</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="font-weight: bold; color: green" href="" >Modification</a>
        </li>
      </ul>
      <div style="margin-right: 500px">
        <h5 style="color: #545659; opacity: 0.5;">Connecté en tant que:</h5>
      </div>
      <a class="btn btn-danger d-flex" href="destroy.php">Se deconnecter</a>
    </div>
  </div>
</nav>
        


<section class="order" id="order">
    <h3 class="sub-heading">Modifier un plat</h3>
    <h1 class="heading">Hummm quelle saveur !</h1>

    <?php foreach ($nourriture as $row): ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="inputBox">
            <div class="input">
                <span>Nom</span>
                <input type="text" name="nom" id="" placeholder="" required value="<?= $row->nom ?>">
            </div>
            <div class="input">
                <span>Prix</span>
                <input type="number" name="prix" id="" placeholder="" required value="<?= $row->prix ?>">
            </div>
            <!-- <div class="input">
                <span>Image</span>
                <input type="file" name="image" id="" placeholder="" required value="<?php //$row->image ?>">
            </div> -->
            
            <div class="input">
                <span>Description</span>
                <textarea name="description" placeholder="" id="" cols="30" rows="10" required><?= $row->description ?></textarea>
            </div> 
        </div>
        <input type="submit" name="valider" value="Enregistrer" class="romeo" >
    </form>
    <?php endforeach ?>
</section>

<?php require_once('../includes/footer.php');?>

<?php
if(isset($_POST['valider']))
    {
        if(isset($_POST['nom']) AND isset($_POST['description']) AND isset($_POST['description'])) 
        {
        if(!empty($_POST['nom']) AND !empty($_POST['description']) AND !empty($_POST['prix']))
            {
                $nom = htmlspecialchars(strip_tags($_POST['nom']));
                $description = htmlspecialchars(strip_tags($_POST['description']));
                $prix = htmlspecialchars(strip_tags($_POST['prix']));
                // $image = htmlspecialchars(strip_tags($_FILES['image']['name']));
                
                if(isset($_GET['id'])){
    
                    if(!empty($_GET['id']) OR is_numeric($_GET['id']))
                    {
                        $id = $_GET['id'];
                    }
                }

            try 
            {
                modifier($nom, $description, $prix,$id);
                header('Location: afficher.php');
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

