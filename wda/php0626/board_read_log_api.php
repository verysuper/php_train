<?php
session_start();
$tt = strtotime("+6hour");
$tt2 = date("Y-m-d H:i:s",$tt);

$link =mysqli_connect("localhost","root","","php2018_06");
mysqli_query($link , 'SET NAMES UTF8'); 

if(empty($_SESSION["talk_no"])){
  $tt3 = date("YmdHis",$tt);
  $_SESSION["talk_no"] = $tt3;
}
  $sql = "select * from board_log where b_l_no = '".$_SESSION["talk_no"]."'";
  $ro = mysqli_query($link , $sql);
  $rr = mysqli_fetch_assoc($ro);
  do{
?>
  <?=$rr["b_l_name"]?>說了：<?=$rr["b_l_cont"]?>　　時間：<?=$rr["b_l_time"]?><br>
<?php
  }while($rr = mysqli_fetch_assoc($ro));
?>