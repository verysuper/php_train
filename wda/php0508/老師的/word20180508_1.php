<?php
if( (!empty($_GET['oo'])) && (!empty($_GET['xx'])) ){
  $oo = $_GET['oo'];
  $xx = $_GET['xx'];

  if($oo > $xx){
    echo "oo ".$oo;
  }else if( $oo < $xx){
    echo "xx ".$xx;
  }else{
    echo "兩個一樣大";
  }
}

?>
<form action="word20180508_1.php">
  <input type="hidden" name = "oo" value="2">
  <input type="hidden" name = "xx" value="1">
  <input type="submit" value="按鈕1">
</form>

<form action="word20180508_1.php?oo=1&xx=1" method="post"><input type="submit" value="按鈕2"></form>
<form action="word20180508_1.php?oo=2&xx=4" method="post"><input type="submit" value="按鈕3"></form>

<form action="word20180508_1.php">
  <input type="hidden" name = "oo" value="4">
  <input type="hidden" name = "xx" value="2">
  <input type="submit" value="按鈕4">
</form>
<form action="word20180508_1.php">
  <input type="hidden" name = "oo" value="5">
  <input type="hidden" name = "xx" value="2">
  <input type="submit" value="按鈕5">
</form>