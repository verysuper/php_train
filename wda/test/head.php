<?php
session_start();
$time=intval(time());//获取当前日期的unix时间戳
$nowTime=strtotime("now");//获取指定日期的unix时间戳
$timeFormat = date("Y-m-d H:i:s",$nowTime);

// $link =mysqli_connect("localhost","root","","php2018");
// mysqli_query($link , 'SET NAMES UTF8'); 
//_________mysqli 改成 PDO
$host = "localhost";
$db_name = "wda20181";
$username = "root";
$password = "";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);    
}
// show error
catch(PDOException $exception){
    die("Connection error: " . $exception->getMessage());    
}
//echo "連線成功";
?>
