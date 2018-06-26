<?php
session_start();
$tt = strtotime("+6hour");
$tt2 = date("Y-m-d H:i:s",$tt);

$link =mysqli_connect("localhost","root","","php2018_06");
mysqli_query($link , 'SET NAMES UTF8'); 

$id = "bz";
if(empty($_SESSION["talk_no"])){
  $tt3 = date("YmdHis",$tt);
  $_SESSION["talk_no"] = $tt3;
}
if(!empty($_POST["my_talk"])){
  $sql = "insert into board_log value (null,'".$id."','".$_POST["my_talk"]."','".$_SESSION["talk_no"]."','".$tt2."','127.0.0.1')";
  mysqli_query($link , $sql);
}
?>