<?php
    header("Refresh:3");
    include_once("time.php");
    $now_Time=date("Y-m-d H:i:s",$nowTime1);
    $stop_time_start=strtotime("2018-05-10 13:37:00");
    $stop_time_end=strtotime("2018-05-10 13:38:00");
    $ss=0;
    if($nowTime1>=$stop_time_start && $nowTime1<=$stop_time_end){
        $ss=1;
    }
    if($ss == 1){
        header("Location:new_stop.php");
        exit();
    }
    //header("Location:stop.php");
    echo $now_Time;
    for($i=0;$i<2;$i++){
        
    }
?>
11