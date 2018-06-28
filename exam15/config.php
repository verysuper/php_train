<?php
    $conn=new mysqli('localhost','root','','hw02');
    if($conn->connect_error){
        die("conn error: ".$conn->connect_error);
    }
    mysqli_query($conn , 'SET NAMES UTF8');
    ini_set('date.timezone','Asia/Taipei');
    $nowTime=strtotime("now");
    $timeTaipei = date("Y-m-d H:i:s",$nowTime);
    $ip = $_SERVER["REMOTE_ADDR"];
    session_start();
    echo $timeTaipei;
    function insert_log($uid,$type,$ip,$currentTime){
        $query = "INSERT INTO login_log VALUES (NULL, '{$uid}', '{$type}', '{$ip}', '{$currentTime}');";
        echo $query;
        $stmt=mysqli_query($conn,$query) or die(mysqli_error());
    }
?>