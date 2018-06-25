<?php
    $conn=new mysqli('localhost','root','','hw1');
    if($conn->connect_error){
        die("conn error: ".$conn->connect_error);
    }
    mysqli_query($conn , 'SET NAMES UTF8');
    ini_set('date.timezone','Asia/Taipei');
    $nowTime=strtotime("now");
    $timeTaipei = date("Y-m-d H:i:s",$nowTime);
    // $ip = $_SERVER["REMOTE_ADDR"];
    session_start();
    echo $timeTaipei;
?>