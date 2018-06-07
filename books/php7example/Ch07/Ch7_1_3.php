<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_1_3.php</title>
</head>
<body>
<?php 
// 指定陣列元素
$scores = array(22, 16, 30, 24);
$total = 0;
// 使用foreach迴圈計算分數總和
foreach ($scores as $element) {
   echo "$element ";
   $total += $element;
}
echo "<br/>得分總和: ". $total. "<br/>";
print_r($scores);   // 顯示各節分數
echo "<br/>";
?>
</body>
</html>