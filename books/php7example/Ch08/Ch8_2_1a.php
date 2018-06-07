<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch8_2_1a.php</title>
</head>
<body>
<?php 
$value = rand (1, 3);  // 取得亂數值
// 轉址到其他網頁或URL網址
switch ( $value ) {
   case 1:
      header("Location: Ch8_1_2.php");
      break;
   case 2:
      header("Location: http://www.hinet.net");
      break;
   case 3:
      header(
       "Location: http://localhost:8080/Ch03/Ch3_1_1.html");
      break;
}
exit();
echo "使用header()函數轉址到其他網頁或PHP程式<br/>";
?>
</body>
</html>