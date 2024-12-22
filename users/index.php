<?php
session_start();
require_once '../functions/functions.php';

reconnect_auto();
is_connect();

require_once '../includes/headerUser.php';
?>

<h1>Hello <?= $_SESSION['auth']->username ?></h1>
<?php
require_once '../includes/footerUser.php';
?>