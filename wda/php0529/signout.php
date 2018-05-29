<?php
    session_start();
    if(!empty($_SESSION["uid"])){
        unset($_SESSION["uid"]);
    }
    header("signin.php");
?>