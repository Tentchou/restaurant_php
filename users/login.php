<?php
session_start();

require_once '../includes/connexion.php';
require_once '../functions/functions.php';

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
        header("Location: index.php");
        exit();
    }else{
        $_SESSION['flash']['danger'] = "Identifiant ou mot de passe incorrect";
    }
}
?>
<?php require_once '../includes/headerUser.php'; ?>
<div class="col-md-8 col-md-offset-2">
    <h1 style="color:white">S'inscrire</h1>
    <form action="" method="post">
        <fieldset>
            <div class="form-group">
                <label for="pseudo">Pseudo ou email</label>
                <input type="text"  class="form-control" name="username" placeholder="Entrez un nom valide" required/>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Entrez votre mot de passe" required/>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe <a href="remember.php">(J'ai oublié mon mot de passe)</a> </label>
                
            </div>
            <div class="form-group">
                <label for="password"> <input type="checkbox" name="remember" value="1"> Se souvenir de moi</label>

            </div>
            <button type="submit" class="btn btn-primary ">S'inscrire</button>
        </fieldset>
    </form>
</div>

<?php
require_once '../includes/footerUser.php';
?>