<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch14_1_2.php</title>
</head>
<body>
<?php
$dsn = "mysql:dbname=myschool;host=localhost;port=3306";
$username = "root";
$password = "A12345678";
try {
   // 建立MySQL伺服器連接和開啟資料庫 
   $link = new PDO($dsn, $username, $password);
   // 指定PDO錯誤模式和錯誤處理
   $link->setAttribute(PDO::ATTR_ERRMODE, 
                PDO::ERRMODE_EXCEPTION);
   echo "成功建立MySQL伺服器連接和開啟myschool資料庫"; 
} catch (PDOException $e) {
   echo "連接失敗: " . $e->getMessage();
}
$link = null;
?>
</body>
</html>
