<?php
    include("head.php");
    if(isset($_POST["c1"]) && isset($_POST["r1"]))
    {        
        var_dump($_POST["c1"]);
        var_dump($_POST["r1"]);
        $c1 = $_POST["c1"];
        // for($i = 0 ; $i < count($c1) ; $i++)
        // {
            
        // }   
    }
    else
    {
        echo "請輸入";
    }
?>
<form action="" method="post">
    <input type="checkbox" name="c1[]" id="" value="a">a</br>
    <input type="checkbox" name="c1[]" id="" value="b">b</br>
    <input type="checkbox" name="c1[]" id="" value="c">c</br>
    <input type="radio" name="r1" id="" value="1">1</br>
    <input type="radio" name="r1" id="" value="2">2</br>
    <input type="radio" name="r1" id="" value="3">3</br>
    <input type="submit" value="submit">
</form>