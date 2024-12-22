
<?php

require_once '../includes/connexion.php';

$userId = $_GET['id'];
$token = $_GET['token'];

$query = "SELECT * FROM utilisateur WHERE id = ?";
$req = $access->prepare($query);
$req->execute([$userId]);
$user = $req->fetch();

if ($user && $token == $user->confirmation_token) {
    session_start();
    $query = "UPDATE utilisateur SET confirmation_token = NULL,confirmed_at = NOW() WHERE id = ?";
    $req = $access->prepare($query);
    $req->execute([$userId]);
    $_SESSION['flash']['success'] = "Votre compte a bien été validé";
    $_SESSION['auth'] = $user;

    header('Location: index.php');
} else {
    $_SESSION['flash']['danger'] = "Ce compte n'existe pas";
    header('Location: login.php');
}


