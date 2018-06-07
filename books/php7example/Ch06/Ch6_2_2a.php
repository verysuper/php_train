<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch6_2_2a.php</title>
<?php 
// 匯率換算函數
function rateExchange(int $amount, float $rate) : float {
   $result = $amount * $rate;
   return $result;
}
?>
</head>
<body>
<?php
$amount = 1000;
$rate = 32.5;
// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=". $result ."元<br/>";
?>
</body>
</html>