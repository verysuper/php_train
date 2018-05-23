<?php
    include("head.php");
    if(isset($_POST["c1"]) && isset($_POST["r1"]) && isset($_POST["name"]))
    {        
        // var_dump($_POST["c1"]);
        // var_dump($_POST["r1"]);
        $r1 = $_POST["r1"];
        $sql="INSERT INTO my_food VALUES (NULL,'{訂了{$r1}','{$now_Time}','{$_POST["name"]}')";
        mysqli_query($link,$sql);

        $now = date("Y-m-d",$tt);
        //echo $now;
        //$sql="SELECT * FROM my_food where f_time LIKE '%{$now}%'";  
        $sql="SELECT * FROM my_food where f_time LIKE '%2018-05-22%'";   
        $result=mysqli_query($link,$sql);
        while($row=mysqli_fetch_assoc($result)){
            print_r($row);
        }
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
    <input type="radio" name="r1" id="" value="1">大麥克</br>
    <input type="radio" name="r1" id="" value="2">雙層牛肉吉事堡</br>
    <input type="radio" name="r1" id="" value="3">四盎司牛肉堡</br>
    <input type="text" name="name" id="">輸入編號</br>
    <input type="submit" value="submit">
</form>