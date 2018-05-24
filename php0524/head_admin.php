<?php
include_once("head.php");
if(empty($_SESSION['user_id'])){
  header("location:login.php");
  exit();
}
$ooo = "select * from member_account where m_a_id = '".$_SESSION['user_id']."'";
$cc = mysqli_query($link,$ooo);
$oo = mysqli_fetch_assoc($cc);
$uid = $oo["m_a_id"];
$lv1 = $oo["m_a_1"];
$lv2 = $oo["m_a_2"];
$lv3 = $oo["m_a_3"];
$lv4 = $oo["m_a_4"];

$goto = "admin_main.php";
if(!empty($_GET["goto"])){
  $goto =$_GET["goto"].".php";
}
?>