<?php
session_start();
require_once('../includes/connexion.php');
require_once('../functions/functions.php');

if (!empty($_POST)) {

    $errors = array();
    // Pseudo
    if (empty($_POST['username']) || !preg_match("#^[a-zA-Z0-9_]+$#", $_POST['username'])) {
        $errors['username'] = "Votre pseudo n'est pas valide";
    } else {
        // SELECT * FROM users WHERE username = post
        $query = "SELECT * FROM utilisateur WHERE username = ?";
        $req = $access->prepare($query);
        $req->execute([$_POST['username']]);
        if ($req->fetch()) {
            $errors['username'] = "Ce pseudo n'est plus disponible";
        }
    }

    // Email
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Votre email n'est pas valide";
    } else {
        // SELECT * FROM users WHERE email = post
        $query = "SELECT * FROM utilisateur WHERE email = ?";
        $req = $access->prepare($query);
        $req->execute([$_POST['email']]);
        if ($req->fetch()) {
            $errors['email'] = "Cet email est déjà pris";
        }
    }

    // Password
    if (empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']) {
        $errors['password'] = "Vous devez rentrez un mot de passe valide et confirmé";
    }

    if (empty($errors)) {
        $query = "INSERT INTO utilisateur SET username = ?,email = ?, password=?, confirmation_token = ?";
        $req = $access->prepare($query);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $token = generateToken(60);

        $req->execute([$_POST['username'], $_POST['email'], $password,$token]);
        
        $UserId = $access->lastInsertId();

        $mail = $_POST['email'];
        $subject = "Confirmation du compte chez Restaurant.Bresil.Com";
        $message = "Afin de confirmer votre compte,merci de cliquer sur ce lien\n\n
        http://localhost/gestion_compte_utilisateur/confirm.php?id=$UserId&token=$token";
        mail($mail, $subject, $message);

        $_SESSION['flash']['success'] = "Compte créé avec sucèss. Veillez vérifier votre boite mail afin de confirmer votre compte";

        header("Location: login.php");
        exit();
    }
}
?>

<?php
require_once '../includes/headerUser.php';
?>
<div class="col-md-8 col-md-offset-2">
    <h1 style="color: #fff;">S'inscrire</h1>

<?php
if(!empty($errors)):?>
<div class="alert alert-danger">
    <p>vous n'avez pas remplir le formulaire correctement !!</p>
    <ul>
       <?php foreach($errors as $error):?>
           <li><?= $error; ?></li>
       <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>


    <h1 style="color:#27ae60;">S'inscrire</h1>
    <form action="" method="post">
        <fieldset>
            <div class="form-group">
                <label for="pseudo">Nom d'utilisateur</label>
                <input type="text"  class="form-control" name="username" placeholder="Entrez un nom valide" required/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Entrez votre Email valide" required/>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Entrez votre mot de passe" required/>
            </div>
            <div class="form-group">
                <label for="password">Confirmer votre mot de passe</label>
                <input type="password"  class="form-control" name="password_confirm" placeholder="Confirmer votre mot de passe" required/>
            </div>
            <button type="submit" class="btn btn-primary ">S'inscrire</button>
           
        </fieldset>
    </form>
</div>

<?php
require_once '../includes/footerUser.php';
?>