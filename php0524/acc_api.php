<?php
include_once("head_admin.php");
if(!empty($_GET["level"])){
  if($_GET["now"] == 0){ $now = 1;}else{ $now = 0;}
  $lv = $_GET["level"];
  $who = $_GET["who"];
  $qsk="update member_account set m_a_$lv = '$now' where m_a_seq = '$who'";
  mysqli_query($link,$qsk);
}
header("location:admin.php?goto=acc");
?>