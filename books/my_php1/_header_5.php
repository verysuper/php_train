<?php
  if (empty($_POST['name']))
  exit;
   if (($_POST['name'] != "john") or ($_POST['passwd'] != "1234")):
?>
   <html>
   <title>登入</title>
   <body>
   <B>不正確</B><p>
   <form action=<?php echo $_SERVER['PHP_SELF'] ?> method=post>
   帳號 <input type=text name=name size=10><p>
   密碼 <input type=password name=passwd size=10><p>
   <input type=submit value=" 登入 ">
   <input type=reset  value=" 清除 ">
   </form>
   </body>
   </html>
<?php
   else:
     echo "登入成功 .....<p>";
     echo "帳號 ".$_POST['name']."<br>";
     echo "密碼 ".$_POST['passwd'];
   endif
?>
