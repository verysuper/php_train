<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch6_4.php</title>
<?php 
include "Ch6_4_1.inc";
include_once("Ch6_4_2.inc");
?>
</head>
<body>
<?php
require "Ch6_4_1.inc"; 
$amount = 1000;
$rate = 32.5;
// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=". $result ."元<br/>";
require ("Ch6_4_1.inc"); 
$file = "Ch6_4_1.inc";
require $file;
?>
</body>
</html>