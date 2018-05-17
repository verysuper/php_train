<?php
include_once("head.php");
if(isset($_POST["aa"])){
  $a1 =$_POST["aa"];
  $b2 =$_POST["bb"];
  $bc =$_POST["cc"];
  $cccc  = "insert into zoo value(NULL,'$a1','$b2','$bc');";
  mysqli_query($link,$cccc);
}
?>

<form method="post">
  動物名稱　<input type="text" name="aa"><br><br>
  動物食物　<input type="text" name="bb"><br><br>
  動物數量　<input type="text" name="cc"><br><br>
  <input type="submit">
</form>