<?php
include_once("20180529_head.php");
if(!empty($_GET["del"])){
  $dd = $_GET["del"];
  //$sql = "delete from member_0520 where m5_seq = '".$dd."'";
  $sql = "update member_0520 set  m5_del = 0 where m5_seq = '".$dd."'";
  mysqli_query($link,$sql);
}
header("location:20180529_admin.php");
?>