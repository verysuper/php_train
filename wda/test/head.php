<?php
session_start();
$time=intval(time());//获取当前日期的unix时间戳
$nowTime=strtotime("now");//获取指定日期的unix时间戳
$timeFormat = date("Y-m-d H:i:s",$nowTime);

$link =mysqli_connect("localhost","root","","php2018");
mysqli_query($link , 'SET NAMES UTF8'); 
?>
