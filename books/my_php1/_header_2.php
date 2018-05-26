<?php
  if (empty($_GET['choose'])):
?>
  <html>
  <title>多向轉址</title>
  <body>
  請選擇:<br>
  <form action=<?php echo $_SERVER['PHP_SELF'];// 將表單內容送給自己
   ?> method=get>
  <input type=radio name=choose value=1>游泳<br>
  <input type=radio name=choose value=2>健行<br>
  <input type=radio name=choose value=3>登山<br>
  <input type=submit value=" 選好了 ">
  </form>
  </body>
  </html>
<?php
  else:
  $hostname=$_SERVER['HTTP_HOST'];//get server host name
  $abs_path=dirname($_SERVER['PHP_SELF']);//get path
  $filename=$_GET['choose'].".htm";
  header("Location: http://".$hostname.$abs_path."/".$filename);
  exit;
  endif
?>