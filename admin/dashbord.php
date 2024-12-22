
<?php
    session_start(); 
    require_once("../functions/auth.php"); 
    //   forcer_utilisateur_connecte();
    //   if(!est_connecte()){
    //     header('Location : /login.php');
    //     exit();
    //   }    



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
    <title>Restaurant.Bresil.Com</title>
    <script src="https://kit.fontawesome.com/61523b4b4d.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php require_once('../includes/headerAdmin.php'); ?>
    <br><br><br><br><br>
    <?php
       require_once("../functions/compteur.php"); 
       $annee = (int)date('Y');
       $annee_selection = empty($_GET['annee'])? null : (int)$_GET['annee'];
       $mois_selection = empty($_GET['mois'])? null : $_GET['mois'];

       if($annee_selection && $mois_selection){
        $total = nombre_vue_mois($annee_selection, $mois_selection);
        $detail = nombre_vue_details_mois($annee_selection, $mois_selection);
       }else{
          $total = nombre_vue();
       }
       
      
       $mois = [
        '01' => 'Janvier',
        '02' => 'Fevrier',
        '03' => 'Mars',
        '04' => 'Avril',
        '05' => 'Mai',
        '06' => 'Juin',
        '07' => 'Juillet',
        '08' => 'Aout',
        '09' => 'Septembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'Decembre',
       ];
    ?>

    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <?php for($i = 0; $i < 5; $i++):?>
                    <a class="list-group-item <?= $annee - $i === $annee_selection ? 'active' : '';?>" href="dashbord.php?annee=<?=$annee - $i?>"><?=$annee - $i?></a>
                    <?php if($annee - $i === $annee_selection):?>
                        <div class="list-group">
                            <?php foreach($mois as $numero => $nom):?>
                                <a class="list-group-item <?=$numero === $mois_selection ? 'active' : '';?>" href="dashbord.php? annee=<?=$annee_selection?>&mois=<?= $numero ?>"><?=$nom?></a>
                            <?php endforeach;?>
                        </div>
                    <?php endif; ?>  
                <?php endfor ?>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <strong style="font-size:4em; "><?= $total ?></strong><br>
                    <p style="color:#27ae60; font-size:1.5rem;  font-weight: bolder;">Visite<?=$total > 1? 's' : ''?> total</p>
                </div>
            </div>
            <br><br><br><br>

            <?php if(isset($detail)): ?>
                <h2 style="color:#27ae60; font-size:2rem;  font-weight: bolder;">Details des Visites par mois</h2>
                <table class="table table-responsive table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Annee</th>
                            <th>Mois</th>
                            <th>Jour</th>
                            <th>Nombre de visite</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($detail as $ligne): ?>
                        <tr>
                            <td><?=$ligne['annee']?></td>
                            <td><?=$ligne['mois']?></td>
                            <td><?=$ligne['jour']?></td>
                            <td><?=$ligne['visites']?> visite<?=$ligne['visites'] > 1 ? 's' : '' ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>

    <?php include("../includes/footer.php");?>
</body>
</html>