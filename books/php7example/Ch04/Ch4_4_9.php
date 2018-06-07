<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch4_4_9.php</title>
</head>
<body>
<?php 
echo "程式執行開始.....<br/>";
// 指定變數值
$x = 55;
$y = 0;
$r = @($x / $y); // 測試的錯誤程式碼
//  顯示錯誤訊息
echo "程式錯誤: " . $php_errormsg . "<br/>";
echo "程式執行結束.....<br/>";
?>
</body>
</html>