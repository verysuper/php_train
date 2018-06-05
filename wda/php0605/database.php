<?php
$host="localhost";
$dbName="myphp_2018_05";
$charset="UTF8";
$user="root";
$pw="";

try{
    $conn=new PDO(
        "mysql:host={$host};dbname={$dbName};charset={$charset}",
        $user,$pw);
}
catch(PDOException $ex){
    die("DB error: ".$ex->getMessage());
}
?>