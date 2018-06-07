<?php
require_once("phpqrcode.php");
$data = "http://www.flag.com.tw/";  // 資料
$level = "L";  // 校正等級
$size = 4;   // 尺寸
QRcode::png($data, FALSE, $level, $size);     
?> 
