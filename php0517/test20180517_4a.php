<?php
    include_once("head.php");
    
    if(isset($_POST["zoo_seq"]))
    {
        $id=$_POST["zoo_seq"];
        $name=$_POST["zoo_name"];
        $food=$_POST["zoo_food_type"];
        $cnt=$_POST["zoo_cnt"];           
        $sql="UPDATE zoo SET zoo_name='$name',zoo_food_type='$food',zoo_cnt='$cnt' WHERE zoo_seq = $id";
        mysqli_query($link,$sql);
    }
    header("Location:test20180517_4.php");
?>
