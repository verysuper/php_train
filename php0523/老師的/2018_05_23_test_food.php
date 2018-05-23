<?php
include_once("head.php");

if(!empty($_POST["n1"])){
    $sql = "insert into my_food value( NULL , '".$_POST["nane"]." ','".$_POST["n1"]."','$tt2')";
    mysqli_query($link,$sql);
}
?>
<form method="poSt">
  <input name="n1" type="radio" value="吮指雙雞套餐" />吮指雙雞套餐<br><br>
  <input name="n1" type="radio" value="花生培根咔啦雞腿堡重量級XL套餐" />花生培根咔啦雞腿堡重量級XL套餐<br><br>
  <input name="n1" type="radio" value="咔啦雞腿堡重量級XL套餐" />咔啦雞腿堡重量級XL套餐<br><br>
  <input name="nane" type="text" />輸入編號<br><br>
  <input type="submit" value="送出" />   
</form>