<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch12_1.php</title>
</head>
<body>
<?php
// 是否是表單送回
if ( isset($_POST["Query"]) ) {
   // 取得SQL指令
   $sql = stripslashes($_POST["Sql"]);
   echo "<small>SQL指令:<b> $sql </b><br/>";
   // 開啟MySQL的資料庫連接
   $link = @mysqli_connect("localhost", "root", "A12345678") 
         or die("無法開啟MySQL資料庫連接!<br/>");
   mysqli_select_db($link, "myschool");  // 選擇myschool資料庫
   //送出UTF8編碼的MySQL指令
   mysqli_query($link, 'SET NAMES utf8'); 
   // 執行SQL查詢
   $result = @mysqli_query($link, $sql); 
   if ( mysqli_errno($link) != 0 ) {
      echo "錯誤代碼: ".mysqli_errno($link)."<br/>";
      echo "錯誤訊息: ".mysqli_error($link)."<br/>";      
   } 
   else { 
      echo "<table border=1>";
      echo "<tr>";
      while ( $meta = mysqli_fetch_field($result) )
         echo "<td><small>".$meta->name."</small></td>";
      echo "</tr>";
      // 取得欄位數
      $total_fields = mysqli_num_fields($result);
      while ($rows = mysqli_fetch_array($result, MYSQLI_NUM)) {
         echo "<tr>";
         for ( $i = 0; $i < $total_fields; $i++ )
            echo "<td><small>".$rows[$i]."</small></td>";
         echo "</tr>";
      }
      echo "</table>";
      // 取得記錄數
      $total_records = mysqli_num_rows($result);
      echo "記錄總數: $total_records 筆<br/></small>";
      mysqli_free_result($result);
   }
   mysqli_close($link); // 關閉資料庫連接
}
else
   $sql = "SELECT * FROM students"; 
?>
<form method="post" action="Ch12_1.php">
<textarea name="Sql" cols="50"><?php echo $sql ?></textarea>
<input type="submit" name="Query" value="查詢">
</form>
</body>
</html>