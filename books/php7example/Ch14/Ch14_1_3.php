<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch14_1_3.php</title>
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
   $sql = "SELECT * FROM students";
   echo "SQL查詢字串: $sql <br/>";
   // 送出UTF8編碼的MySQL指令
   $link->query('SET NAMES utf8');
   // 送出查詢的SQL指令
   if ( $result = $link->query($sql) ) { 
      echo "<b>學生資料:</b><hr/>";  // 顯示查詢結果
      // 取得記錄數
      $total_records = $result->rowCount();
      echo "記錄數: $total_records 筆<br/>"; 
      while( $row = $result->fetch(PDO::FETCH_ASSOC) ){ 
         echo $row["sno"]."-".$row["name"]."<br/>";
      } 
   } 
} catch (PDOException $e) {
   echo "連接失敗: " . $e->getMessage();
}
$link = null;
?>
</body>
</html>
