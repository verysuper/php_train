<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_1_4.php</title>
<?php
// 函數參數的傳值呼叫
function arrayByValue($a) {
   $a[0] = 0;   // 將索引0設為0
   return $a;   // 傳回陣列
}
// 函數參數的傳址呼叫
function arrayByRef(&$a) {
   $a[0] = 0;   // 將索引0設為0
}
?>
</head>
<body>
<?php 
$a = array(1, 2, 3, 4);  // 指定陣列元素
$b = array(5, 6, 7);
$c = $b + $a;  // 陣列的指定敘述與聯集
echo "\$a=>"; print_r($a); echo "<br/>";
echo "\$b=>"; print_r($b); echo "<br/>";
echo "\$c=\$b+\$a=>"; print_r($c); echo "<br/>";
// 陣列運算子
if ( $a == $b ) 
   echo "\$a和\$b陣列相等!<br/>";  // 相等
if ( $a != $b )
   echo "\$a和\$b陣列不相等!<br/>";// 不相等
$d = arrayByValue($a);  // 函數的陣列參數
echo "執行\$d = arrayByValue(\$a);後<br/>";
echo "\$a=>"; print_r($a); echo "<br/>";
echo "\$d=>"; print_r($d); echo "<br/>";
arrayByRef($a);
echo "呼叫arrayByRef(\$a)函數後: <br/>";
echo "\$a=>"; print_r($a); echo "<br/>";
?>
</body>
</html>