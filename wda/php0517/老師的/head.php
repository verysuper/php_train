<?php
session_start();
$tt = strtotime("+6hour");
$tt2 = date("Y-m-d H:i:s",$tt);

$link =mysqli_connect("localhost","root","","php2018");
mysqli_query($link , 'SET NAMES UTF8'); 
?>