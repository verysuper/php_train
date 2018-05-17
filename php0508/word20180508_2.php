<?php
    if(!empty($_GET["oo"]))
    {
        $num=$_GET["oo"];
        $password="";
        for($i=0;$i<$num;$i++)
        {
            $a = rand(65,90);
            $b = rand(0,9);
            $c = rand(1,2);
            if($c==1)
            {
                $password = $password.chr($a);
            }
            else
            {
                $password = $password.$b;
            }
        }
        echo $password;
    }
?>
<br>
<form action="word20180508_2.php" method="get">
    <input type="text" name="oo">
    <input type="submit" value="按鈕">
</form>