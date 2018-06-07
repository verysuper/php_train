<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch9_2_3.php</title>
</head>
<body>
<?php 
$file = 'books.txt';  // 檔案名稱
$content = "ASP網頁設計範例教本\r\n";
// 檢查檔案是否可寫
if (is_writeable($file)) {
   // 開啟新增的檔案
   $fp = fopen($file, "a");
   fwrite($fp, $content);  // 寫入檔案內容
   fputs($fp, $content, 15);
   print "新增檔案 $file 成功<br/>";
   fclose($fp);  // 關閉檔案
} else 
   print "檔案 $file 開啟錯誤<br/>";
?>
</body>
</html>