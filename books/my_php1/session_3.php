<?php
   session_start();
   $_SESSION['A']=10;
   $_SESSION['B']=20;
   $_SESSION['C']=30;
   echo "session_id = ".session_id()."<br>";
   echo "A = ".$_SESSION['A']."<br>";
   echo "B = ".$_SESSION['B']."<br>";
   echo "C = ".$_SESSION['C']."<p>";


//    session_unregister("A");
   session_unset();//釋放所有session變數
   session_destroy();//取消所有註冊資料
    echo "session_id = ".session_id()."<br>";
    echo "A = ".$_SESSION['A']."<br>";
    echo "B = ".$_SESSION['B']."<br>";
    echo "C = ".$_SESSION['C']."<p>";  
?>

