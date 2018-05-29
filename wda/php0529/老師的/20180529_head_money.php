<?php
session_start();
$tt = strtotime("+6hour");
$tt2 = date("Y-m-d H:i:s",$tt);
$ip = $_SERVER["REMOTE_ADDR"];
/*
if( empty($_SESSION["uid"])){
  header("location:20180529_login.php");
  exit();
}
*/
$link =mysqli_connect("localhost","root","","myphp_2018_05");
mysqli_query($link , 'SET NAMES UTF8'); 
?>