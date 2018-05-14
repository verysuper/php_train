<?php
    session_start();
?>
<html>
<title>Session test</title>
<body>
<?php    
    echo "Session ID = ".session_id()."<p>";
    echo "運算前 <br>";
    echo "A = ".$_SESSION['A']."<br>";
    echo "B = ".$_SESSION['B']."<p>";
    $_SESSION['A']++;
    $_SESSION['B'].="Friend.";
    echo "運算運算後 <br>";
    echo "A = ".$_SESSION['A']."<br>";
    echo "B = ".$_SESSION['B'];
?>
</body>
</html>