<?php
    session_start();
    if(isset($_SESSION["LOGIN"]) || $_SESSION["LOGIN"] != true){
        unset($_SESSION['LOGIN']);
        session_destroy();
        header('Location:home.php');
    }
?>