<?php 
    session_start();
    unset($_SESSION["user_portal"]);
    header("location: pagina_inicial.php");
?>