<?php

session_start();

if(!isset($_SESSION['xRttpHo0greL39']))
{
    header("Location:login.php");
}

if(empty($_SESSION['xRttpHo0greL39']))
{
    header("Location:login.php");
}

require_once("commande.php");

$nourriture = afficher();

foreach($_SESSION['xRttpHo0greL39'] as $i){
    $nom = $i->pseudo;
    $email = $i->email;
} 
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../responsive.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Tous les produits</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php require_once('../includes/headerAdmin.php');?>

<section>

<div class="album py-5 bg-light">
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <table class="table table-responsive table-dark table-striped" >
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Nom</th>
                <th scope="col">prix</th>
                <th scope="col">Description</th>
                <th scope="col">Type</th>
                <th scope="col">Editer</th>
                </tr>
            </thead>
               
               <?php foreach($nourriture as $row):?>
            <tbody>
                    <tr>
                        <td><?=htmlentities($row->id)?></td>
                        
                        <td>
                            <img src="<?php echo "../image/".$row->image;?>" width="100" height="50" alt="Votre plat" style="border-radius:50%;">
                        </td>
                        <td><?= htmlentities( $row->nom) ?></td>
                        <td style="font-weight: bold; color: green;"><?= htmlentities($row->prix) ?>€</td>
                        <td><?= substr($row->description, 0, 100); ?>...</td>
                        <td><?= htmlentities( $row->type) ?></td>
                        <td><a href="editer.php?id=<?= $row->id ?>"><i class="fa fa-pencil" style="font-size: 30px;"></i></a></td>
                    </tr>
            </tbody>
                 <?php  endforeach ?>
            </table>
    </div>
</div>
</section>

<?php require_once('../includes/footer.php');?>
    
</body>
</html>

