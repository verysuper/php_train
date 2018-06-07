<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch4_3.php</title>
</head>
<body>
<?php 
// 指定變數值
$a = 5678;   $b = -1234;
$c = 0234;   $d = 0x1A;
$e = 0x3fc;
echo "5678 = $a<br/>";  // 顯示變數值
echo "-1234 = $b<br/>";
echo "0234 = $c<br/>";
echo "0x1A = $d<br/>";
echo "0x3fc = $e<br/>";
// 指定浮點變數值
$j = 2.345; $k = 1.2345e3; $l = 7E-4;
echo "2.345 = $j<br/>";  // 顯示變數值
echo "1.2345e3 = $k<br/>";
echo "7E-4  = $l<br/>";
// 指定字串變數值
$str1 = 'PHP+MySQL+AJAX網頁程式設計';
$str2 = "Hello World!";
// 顯示字串變數值, 內含逸出字元
echo "\$str1 = $str1<br/>";
echo "\$str2 = $str2<br/>";
echo "換行\t符號<br/>";
echo "\"Escape\"逸出字元<br/>";
echo "'PHP'與MySQL網頁\\設計\\<br/>";
?>
</body>
</html>