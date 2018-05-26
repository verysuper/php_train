<?php
    /*session_start()限制:
     *必須在所有輸出
     *(echo, print),<html><head>之前使用，
     *否則session都會失敗
     */
    session_start();
    //https://stackoverflow.com/questions/3682615/how-to-fix-the-session-register-deprecated-issue
    // function session_register($name){
    //     global $$name;
    //     $_SESSION[$name] = $$name;
    //     $$name = &$_SESSION[$name]; 
    // }
    // session_register("A");
    // session_register("B");
    $_SESSION['A']=10;
    $_SESSION['B']="Hello My ";
?>
<html>
<title>Session test</title>
<body>
<?php
    echo "Session ID = ".session_id()."<p>";
    // echo "運算前 <br>";
    // echo "A = ".$_SESSION['A']."<br>";
    // echo "B = ".$_SESSION['B']."<p>";
    // $_SESSION['A']++;
    // $_SESSION['B'].="Friend.";
    // echo "運算運算後 <br>";
    // echo "A = ".$_SESSION['A']."<br>";
    // echo "B = ".$_SESSION['B'];
?>
</body>
</html>