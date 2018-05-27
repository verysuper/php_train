<?php
session_start();
$time=intval(time());//获取当前日期的unix时间戳
$timeFormat2 = date("Y-m-d H:i:s",intval(time()));
$nowTime=strtotime("now");//获取指定日期的unix时间戳
$timeFormat1 = date("Y-m-d H:i:s",$nowTime);

$conn =mysqli_connect("localhost","root","","php2018");
mysqli_query($conn , 'SET NAMES UTF8'); 

mysqli_query("SET NAMES utf8"); //for chinese words
mysqli_query("SET CHARACTER_SET_CLIENT utf8");//for chinese words
mysqli_query("SET CHARACTER_SET_RESULTS utf8");//for chinese words
mysqli_query("SET CHARACTER SET utf8");
mysqli_query("SET collate utf8_unicode_ci");

$link=mysqli_connect("localhost","root","12341234")
 or die ("無法開啟Mysql資料庫連結"); //建立mysql資料庫連結
mysqli_select_db($link, "markers"); //選擇資料庫markers
$sql = "SELECT * FROM markers"; //在markers資料表中選擇所有欄位
$result = mysqli_query($link,$sql); // 執行SQL查詢
$row = mysqli_fetch_assoc($result); //將陣列以欄位名索引
$row = mysqli_fetch_row($result); //將陣列以數字排列索引
$total_fields=mysqli_num_fields($result); // 取得欄位數
$total_records=mysqli_num_rows($result); // 取得記錄數

?>