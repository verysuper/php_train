<?php
include_once("head.php");
if(!empty($_POST["a1"])){
  for($i=0;$i<count($_POST["a1"]);$i++){
    Echo $_POST["a1"][$i];
  }
}
if(!empty($_POST["n1"])){
    Echo $_POST["n1"];
}
?>
<form method="poSt">
  <input name="a1[]" type="checkbox" value="aaa" />  AAA<br><br>
  <input name="a1[]" type="checkbox" value="bbb" />  BBB<br><br>
  <input name="a1[]" type="checkbox" value="ccc" />  CCC<br><br>
  <br><br>
  <input name="n1" type="radio" value="1" />
  <input name="n1" type="radio" value="2" />
  <input name="n1" type="radio" value="3" />
  <input type="submit" value="送出" />   
</form>