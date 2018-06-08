<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<form id="form1" name="form1" method="post" enctype="multipart/form-data">
  
  <label for="fileField">File:</label>
  <input type="file" name="file" id="fileField">
  <input type="submit" name="submit" id="submit" value="送出">
</form>
	
</body>
</html>
<?php
    if (!copy($_FILES["file"]["tmp_name"], $_FILES["file"]["name"])) 
    print ("檔案: copy失敗<br/>");
 else
    print "檔案: copy成功<br/>";
?>