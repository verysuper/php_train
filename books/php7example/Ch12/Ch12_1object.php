<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch12_1object.php</title>
</head>
<body>
<?php
// 是否是表單送回
if ( isset($_POST["Query"]) ) {
   // 取得SQL指令
   $sql = stripslashes($_POST["Sql"]);
   echo "<small>SQL指令:<b> $sql </b><br>";
   // 建立mysqli物件啟
   $mysqli = new mysqli("localhost", "root", "A12345678") 
         or die("無法開啟MySQL資料庫連接!<br/>");
   $mysqli->select_db("myschool");  // 選擇myschool資料庫
   // 送出UTF8編碼的MySQL指令
   $mysqli->query('SET NAMES utf8');
   // 執行SQL查詢
   $result = $mysqli->query($sql); 
   if ( $mysqli->errno != 0 ) {
      echo "錯誤代碼: ".$mysqli->errno."<br/>";
      echo "錯誤訊息: ".$mysqli->error."<br/>";     
   } 
   else { 
      echo "<table border=1>";
      echo "<tr>";
      while ( $meta = $result->fetch_field() )
         echo "<td><small>".$meta->name."</small></td>";
      echo "</tr>";
      // 取得欄位數
      $total_fields = $result->field_count;
      while ($rows = $result->fetch_array(MYSQLI_NUM)) {
         echo "<tr>";
         for ( $i = 0; $i < $total_fields; $i++ )
            echo "<td><small>".$rows[$i]."</small></td>";
         echo "</tr>";
      }
      echo "</table>";
      // 取得記錄數
      $total_records = $result->num_rows;
      echo "記錄總數: $total_records 筆<br></small>";
      $result->close();
   }
   $mysqli->close(); // 關閉資料庫連接
}
else
   $sql = "SELECT * FROM students"; 
?>
<form method="post" action="Ch12_1object.php">
<textarea name="Sql" cols="50"><?php echo $sql ?></textarea>
<input type="submit" name="Query" value="查詢">
</form>
</body>
</html>