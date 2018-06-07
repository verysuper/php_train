<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch6_6_2.php</title>
</head>
<body>
<?php
$filename = "Ch6_6_2.txt";
$fp = @fopen($filename, "r")  // 開啟檔案
     or exit("錯誤: 檔案 $filename 開啟錯誤!<br/>");
fclose($fp);  // 關閉檔案
?>
</body>
</html>