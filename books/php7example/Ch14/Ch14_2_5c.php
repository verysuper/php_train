<!-- 程式範例：Ch14_2_5c.php -->
<?php
// 含括Smarty.class.php類別檔
require("Smarty\libs\Smarty.class.php");
$st = new Smarty;  // 建立Smarty物件
// 指定陣列元素
$scores = array(22, 16, 30, 24);
$arr = array( "color"=>"黑色", "name"=> "陳會安", 
              "shape"=>"三角形");
// 指定Smarty變數
$st->assign("scores", $scores);
$st->assign("arr", $arr);
// 顯示和輸出樣板
$st->display("Ch14_2_5c.tpl");
?>
