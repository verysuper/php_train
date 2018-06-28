<?php
    require_once("config.php");
    if(!empty($_SESSION["uid"])){//_________log
        $_type="{$_SESSION["uid"]}登出";//_________log
        $query = "INSERT INTO login_log VALUES (NULL, '{$_SESSION["uid"]}','{$_type}','{$ip}','{$timeTaipei}','0');";
        $stmt=mysqli_query($conn,$query) or die(mysqli_error());
        unset($_SESSION["uid"]);
    }
    header("location:login.php");
?>