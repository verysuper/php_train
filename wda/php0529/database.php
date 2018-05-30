<?php
    $dateTime = date("Y-m-d H:i:s",strtotime("now"));
    
    $host = "localhost";
    $dbName = "myphp_2018_05";
    $user = "root";
    $pw = "";

    try{
        //$ip = $_SERVER["REMOTE_ADD"];
        $con=new PDO("mysql:host={$host};dbname={$dbName}",$user,$pw);
        
        $ip = $_SERVER["REMOTE_ADDR"];
    }
    catch(PDOException $ex){
        die("DB Error: ".$ex->getMessage());
    }
    //echo $dateTime;
    
?>