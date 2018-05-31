<?php
include_once("20180529_head.php");
if(!empty($_POST["update_seq"])){
  for($i=0;$i<count($_POST["update_seq"]);$i++){
    $m5_seq = $_POST["update_seq"][$i];
    $m5_name = $_POST["update_name"][$i];  
    $sql = "update member_0520 set  m5_name = '$m5_name' where m5_seq = '".$m5_seq."'";
    echo $sql;
    mysqli_query($link,$sql);
  }

}
header("location:20180529_admin.php");
?>