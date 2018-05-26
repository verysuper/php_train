<?php
 
 //echo chr(97);
 $passsword = "";             //先設一個變數用來記錄結果，起始值自訂
 for($i=0;$i<8;$i++){

  $aaaa = rand(97,122);      //生出亂數 範圍是97-122
  $passsword = $passsword .chr($aaaa); //以記錄用的變數以累加的方式來記錄每次執行的結果
  //結果部分把亂數值轉成ASCII碼 

 }
 echo $passsword;
?>