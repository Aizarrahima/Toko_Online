<?php 
    session_start();
    unset($_SESSION["id_user"]);
    unset($_SESSION["email"]);
    unset($_SESSION["first_name"]);
    unset($_SESSION["status_login"]);
    header("Location: index.php")
?>