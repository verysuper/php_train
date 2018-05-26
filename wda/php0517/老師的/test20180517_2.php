<?php
include_once("head.php");
if(!empty($_GET["eel"])){
  $dd = $_GET["eel"];   
  $check_sql = "select * from zoo where zoo_seq = '$dd'";
  $ro = mysqli_query($link,$check_sql);
  $totle = mysqli_num_rows($ro);
  if( $totle < 1 ){
    echo "該資料不存在";
  }else{
    $check_sql = "delete from zoo where zoo_seq = '$dd'";
    mysqli_query($link,$check_sql);
    echo "刪除成功";  
  }
}
header("location:list_20180517.php");
?>