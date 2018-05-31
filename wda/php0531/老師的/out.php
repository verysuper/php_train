<?php
session_start();
if(!empty($_SESSION["uid"])){
  unset($_SESSION["uid"]);
}
header("location:20180529_login.php");
?>