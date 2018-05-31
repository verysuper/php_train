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
$blook = "select * from block_log where bl_ip = '$ip' and bl_time > '$tt2' order by bl_time desc limit 1";
$bb = mysqli_query($link,$blook);
$now_block = mysqli_num_rows($bb);
$now_block_data = mysqli_fetch_assoc($bb);
?>