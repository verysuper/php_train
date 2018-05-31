<?php
$tt = strtotime("+6hour");
$tt2 = date("Y-m-d H:i:s",$tt);
$dataTime = date("Y-m-d H-i-s",strtotime("now"));
$host="localhost";
$dbName="myphp_2018_05";
$charset="UTF8";
$user="root";
$pw="";

try{
    $conn=new PDO(
        "mysql:host={$host};dbname={$dbName};charsset={$charset}",
        $user,$pw);
}
catch(PDOException $ex){
    die("DB error: ".$ex->getMessage());
}
?>