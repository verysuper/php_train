<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch8_2_1b.php</title>
</head>
<body>
<?php
header("Refresh: 2");
// header("Refresh:2;url=Ch8_1_2a.php");
$value = rand (10, 30);  // 取得亂數值
echo "更新的亂數值: ". $value. "<br/>";
?>
</body>
</html>