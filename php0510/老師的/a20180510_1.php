<form action="a20180510_1.php" method="post">
  <input type="submit" value = "1" name="oo">
  <input type="submit" value = "2" name="oo">
  <input type="submit" value = "3" name="oo">
  <input type="submit" value = "5" name="oo">
</form>
<br>
<?php
if(!empty($_POST["oo"])){
  if($_POST["oo"]=="1"){ $oo1 = "a20180510_1_1.php";}
  if($_POST["oo"]=="2"){ $oo1 = "a20180510_1_2.php";}
  if($_POST["oo"]=="3"){ $oo1 = "a20180510_1_3.php";}
  if($_POST["oo"]=="5"){ $oo1 = "a20180510_1_4.php";}
  
  include($oo1);
}
if(!empty($_GET["xx"])){
  include($_GET["xx"]);
}
?>

<form action="a20180510_1.php?xx=a20180510_1_1.php" method="post">
  <input type="submit" value = "A1">
</form>

<form action="a20180510_1.php?xx=a20180510_1_2.php" method="post">
  <input type="submit" value = "a2">
</form>

<form action="a20180510_1.php?xx=a20180510_1_3.php" method="post">
  <input type="submit" value = "v3">
</form>

<form action="a20180510_1.php?xx=a20180510_1_4.php" method="post">
  <input type="submit" value = "V4">
</form>

<br>
<a href="a20180510_1.php?xx=a20180510_1_1.php">A1</a> 
<a href="a20180510_1.php?xx=a20180510_1_2.php">B2</a>  
<a href="a20180510_1.php?xx=a20180510_1_3.php">C3</a>  
<a href="a20180510_1.php?xx=a20180510_1_4.php">D4</a>
<br>