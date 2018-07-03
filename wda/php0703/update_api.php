<?php
include_once("db.php");
$no = $_POST["oo"];
$la = $_POST["xx"];
$up = $_POST["vv"];
/*
//===========================方式1===========================
if($la =="a1"){$word = "xxx_name";}
if($la =="a2"){$word = "xxx_tel";}
if($la =="a3"){$word = "xxx_con";}
//===========================方式1===========================
*/
//===========================方式2===========================
$laa["a1"] = "xxx_name";
$laa["a2"] = "xxx_tel";
$laa["a3"] = "xxx_con";
$word = $laa[$la]; 
//===========================方式2===========================
$sql = "update xxx set $word = '$up' where xxx_seq = $no";
mysqli_query($link,$sql);

?>