<?php
    if(!empty($_POST["oo"]) && !empty($_POST["xx"]))
    {
        $oo=$_POST["oo"];
        $xx=$_POST["xx"];
        if($oo>$xx)
        {
            echo "oo=".$oo;
        }
        else if($xx>$oo)
        {
            echo "xx=".$xx;
        }
        else
        {
            echo '兩個一樣大';
        }
    }
?>
<br>
<!-- url 使用post送參數 -> server 必須使用post接 -->
<!-- <a href="word20180508_1.php?oo=1&xx=5">oo=1&xx=5</a><br/>
<a href="word20180508_1.php?oo=3&xx=2">oo=3&xx=2</a><br/>
<a href="word20180508_1.php?oo=2&xx=4">oo=2&xx=4</a><br/>
<a href="word20180508_1.php?oo=3&xx=3">oo=3&xx=3</a><br/>
<a href="word20180508_1.php?oo=1&xx=1">oo=1&xx=1</a><br/>

<form action="word20180508_1.php?oo=2&xx=3" method="post">
    <input type="submit" value="按鈕1">
</form> -->

<form action="word20180508_1.php" method="post">
    <input type="text" name="oo">
    <input type="text" name="xx">
    <input type="submit" name="按鈕2">
</form>