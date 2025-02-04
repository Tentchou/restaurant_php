<?php
require_once '../includes/connexion.php';
require_once '../functions/functions.php';

if (!empty($_POST) && !empty($_POST['email'])) {
    $query = "SELECT * FROM utilisateur WHERE email =? AND confirmed_at IS NOT NULL";
    $req = $access->prepare($query);
    $req->execute([$_POST['email']]);

    $user = $req->fetch();

    if ($user) {
        session_start();
        $reset_token  = generateToken(100);
        $query = "UPDATE utilisateur SET reset_token = ?, reset_at = NOW() WHERE id =?";
        $req = $access->prepare($query);
        $req->execute([$reset_token, $user->id]);

        $mail = $_POST['email'];
        $subject = "Réinitialisation de votre mot de passe";
        $message = "Afin de réinitialiser votre mot de passe, merci de cliquer sur ce lien \n\n
        <a href='http://localhost/gestion_compte_utilisateur/reset.php?id=$user->id&token=$reset_token'><a/>";

        mail($mail, $subject, $message);

        $_SESSION['flash']['success'] = "Les intructions du rappel du mot de passe vous ont été envoyées par email";
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['flash']['danger'] = "Aucun compte ne correspond à cet email";
    }
}
?>
<?php require_once '../includes/headerUser.php'; ?>

<div class="col-md-8 col-md-offset-2">
    <h1 style="color: #fff;">Rappel du mot de passe</h1>

    <form action="" method="post">
        <fieldset>
            <div class="from-group">
                <label for="email">Votre email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group" style="margin-top: 20px;">
                <input class="btn btn-primary" type="submit" value="Soumettre">
            </div>
        </fieldset>
    </form>
</div>

<?php
require_once '../includes/footerUser.php';
?>