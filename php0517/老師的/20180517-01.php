<?php
  include_once("head.php");
  $z00 = '水鹿';
  $z00_food = '草';
  $zoo_cnt = 20;
  $sql = "insert into zoo value(NULL,'$z00','$z00_food','$zoo_cnt');";
  mysqli_query($link,$sql);
?>