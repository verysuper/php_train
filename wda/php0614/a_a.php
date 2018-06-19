<?php
$link =mysqli_connect("localhost","root","","php2018_06");
mysqli_query($link , 'SET NAMES UTF8'); 

$my_id = $_POST["my_id"];
$my_pw = md5($_POST["my_pw"]);
$my_name = $_POST["my_name"];
$my_tel = $_POST["my_tel"];
$my_con = $_POST["my_con"];
$sql = "insert into my_account value(null,'".$my_id."','".$my_pw."','".$my_name."','".$my_tel."','".$my_con."');";
mysqli_query($link,$sql);
header("location:account_add.php");
?>