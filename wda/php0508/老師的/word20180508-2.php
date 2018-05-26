<?php
if(!empty($_POST['jj'])){

  $password = "";
  for($i=0;$i<$_POST['jj'];$i++){
    $c1 = rand(0,61);
/*    
0 1 2 3 4 5 6 7 8 9 a b c d e f g h i j k l m n o p q r s t u v w x y z
*/                     
//10之後的值轉成ASCII碼，英文大寫的A是從65開始，把10轉成65需補上55
    if( ($c1 >=10) && ($c1 <=35) ){
      $c1 = chr($c1+55);
    }elseif($c1 >=36){
      $c1 = chr($c1+61);    
    }
    $password = $password.$c1; 
  }
  echo $password;
}
?>
<form action="word20180508-2.php" method="post">
  <input type="text" name="jj">
  <input type="submit" value="送出">
</form>