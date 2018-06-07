<!-- 程式範例：Ch6_4_2.inc --> 
<?php 
// 匯率換算函數
function rateExchange($amount, $rate) {
   $result = $amount * $rate;
   return $result;
}
?>