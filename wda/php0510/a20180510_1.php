<?php
    if(!empty($_POST["oo"]))
    {
        // $oo = $_POST["oo"];
        // if($oo == "a20180510_2.php"){
        //     include("t/a20180510_2.php");
        // }
        // if($oo == "a20180510_3.php"){
        //     include("t/a20180510_3.php");
        // }
        include("t/".$_POST["oo"]);

    }
?>
<form action="a20180510_1.php" method="post">
    <input type="submit" value="a20180510_2.php" name="oo">
    <input type="submit" value="a20180510_3.php" name="oo">
</form> 