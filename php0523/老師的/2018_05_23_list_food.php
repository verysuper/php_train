<?php
include_once("head.php");
/*
  $open_time = date("Y-m-d",$tt)." 00:00:00";
  $stop_time = date("Y-m-d",$tt)." 23:59:59";
  
  $sql = "select * from my_food where m_f_time >= '$open_time' and m_f_time <= '$stop_time'";
  $dcc = mysqli_query($link,$sql);
  $oq = mysqli_fetch_assoc($dcc);
do{
  echo $oq['m_f_seq']."-".$oq['m_f_who']."-".$oq['m_f_food']."-".$oq['m_f_time']."<br>";
}while($oq = mysqli_fetch_assoc($dcc));
*/
  $open_time = date("Y-m-d",$tt)." 00:00:00";
  $stop_time = date("Y-m-d",$tt)." 23:59:59";
  $open_time = strtotime($open_time);//把當前的時間範圍轉成數字
  $stop_time = strtotime($stop_time);//把當前的時間範圍轉成數字
  
  $sql = "select * from my_food";
  $dcc = mysqli_query($link,$sql);
  $oq = mysqli_fetch_assoc($dcc);
do{
  $food_time = strtotime($oq['m_f_time']);
  if(($food_time >= $open_time) && ( $food_time <= $stop_time)){
    echo $oq['m_f_seq']."-".$oq['m_f_who']."-".$oq['m_f_food']."-".$oq['m_f_time']."<br>";
  }
}while($oq = mysqli_fetch_assoc($dcc));

?>
