<?php
  include_once("head.php");
  if(isset($_POST["zoo_name"])){

    $zoo_name = $_POST["zoo_name"];
    $zoo_food_type = $_POST["zoo_food_type"];
    $zoo_cnt = $_POST["zoo_cnt"];
    $zoo_seq = $_POST["zoo_seq"];
    $sql = "update zoo set zoo_name='$zoo_name', zoo_food_type ='$zoo_food_type' , zoo_cnt = '$zoo_cnt'
            where zoo_seq = '$zoo_seq'";
    mysqli_query($link,$sql);
  }
  header("location:list_20180517.php");
?>