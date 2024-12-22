
<?php

function est_connecte(): bool{
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

//fonction de connection
function forcer_utilisateur_connecte(): void{
    if(!est_connecte()){
        header('Location : /login.php');
        exit();
    }
}