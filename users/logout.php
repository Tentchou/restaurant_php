
<?php
session_start();
setcookie("remember", "", -1);
unset($_SESSION['auth']);
$_SESSION['flash']['success'] = "Vous êtes deconnectez avec sucess";

header("Location: login.php");
