<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch14_1_4.php</title>
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
   $sql = "SELECT * FROM students WHERE sno>=?";
   echo "SQL查詢字串: $sql <br/>";
   // 送出UTF8編碼的MySQL指令
   $link->query('SET NAMES utf8');
   $stmt = $link->prepare($sql);    // 準備SQL指令字串
   $stmt->execute(array("S003"));   // 執行SQL指令字串   
   // 送出查詢的SQL指令
   if ( $result = $stmt->fetchAll(PDO::FETCH_ASSOC) ) { 
      echo "<b>學生資料(>=S003):</b><br/>";  // 顯示查詢結果
      // 取得記錄數
      $total_records = $stmt->rowCount();
      echo "記錄數: $total_records 筆<br/>"; 
      foreach( $result as $row ){ 
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
