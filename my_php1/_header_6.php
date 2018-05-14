<?php
  if (empty($_SERVER['PHP_AUTH_USER'])) {
    header("Content-type: text/html; charset=big5");
    header('WWW-Authenticate: Basic realm=" Authentication "');
    header('HTTP/1.0 401 Unauthorized');
    echo '請輸入正確帳密!';
    exit;
  } else {
    echo "帳號 ".$_SERVER['PHP_AUTH_USER']."<br>";
    echo "密碼 ".$_SERVER['PHP_AUTH_PW']."<p>";
    $correctName="john";
    $correctpwd="1234" ;
     if (($_SERVER['PHP_AUTH_USER'] != $correctName) or 
            ($_SERVER['PHP_AUTH_PW'] !=$correctpwd)){
        echo "失敗, 請開啟視窗重新輸入";
     }else{
     echo "登入成功.....";
     }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
</body>
</html>