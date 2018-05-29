<?php
    $dateTime = date("Y-m-d H:i:s",strtotime("now"));
    
    $host = "localhost";
    $dbName = "myphp_2018_04";
    $user = "root";
    $pw = "";

    try{
        //$ip = $_SERVER["REMOTE_ADD"];
        $con=new PDO("mysql:host={$host};dbname={$dbName}",$user,$pw);
        $SESSION_start();
    }
    catch(PDOException $ex){
        die("DB Error: ".$ex->getMessage());
    }
    //echo $dateTime;
    
?>