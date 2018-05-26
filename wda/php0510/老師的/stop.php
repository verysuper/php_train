<?php
header("Refresh:3");
$tt = strtotime("+6hour");//當前時間
$tt2 = date("Y-m-d H:i:s",$tt);
$stop_time_start = strtotime("2018-05-10 13:59:00");//停止時間開始
$stop_time_end = strtotime("2018-05-10 14:00:00");//停止時間結束

$ss = 0;//用來判斷現在狀態的變數啟始值是0
if( ($tt >= $stop_time_start)&&($tt <= $stop_time_end) ){ $ss = 1;}//進入停止時間的話改變判斷用的變數為1
if($ss == 1){
  header("location:new_stop.php");
  exit();
}
echo $tt2; 
?>