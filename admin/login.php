
<?php

session_start();

require_once "commande.php";

if(isset($_SESSION['xRttpHo0greL39']))
{
    if(!empty($_SESSION['xRttpHo0greL39']))
    {
        header("Location: afficher.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
   <title>Restaurant.Bresil.Com</title>
</head>
<body>
    
<?php require_once '../includes/headerLogin.php'; ?>
<br><br><br><br><br>
<div class="col-md-8 col-md-offset-2">
    <h1>S'inscrire</h1>
    <form action="" method="post">
        <fieldset>
            <div class="form-group">
                <label for="pseudo">email</label>
                <input type="email"  class="form-control" name="username" placeholder="Entrez un nom valide" required/>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Entrez votre mot de passe" required/>
            </div>
            <button type="submit" name="envoyer" class="btn btn-primary ">S'inscrire</button>
        </fieldset>
    </form>
</div>
</body>
</html>

<?php

if(isset($_POST['envoyer']))
{
    if(!empty($_POST['username']) AND !empty($_POST['password']))
    {
        $login = htmlspecialchars(strip_tags($_POST['username'])) ;
        $motdepasse = htmlspecialchars(strip_tags($_POST['password']));

        $admin = getAdmin($login, $motdepasse);

        if($admin){
            $_SESSION['xRttpHo0greL39'] = $admin;
            header('Location: afficher.php');
        }else{
            header('Location: index.php');
        }
    }

}
