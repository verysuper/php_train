<!-- 程式範例：Ch14_2_5b.php -->
<?php
// 含括Smarty.class.php類別檔
require("Smarty\libs\Smarty.class.php");
$st = new Smarty;  // 建立Smarty物件
// 指定Smarty變數
$st->assign("grade", 78);
$st->assign("height", 158);
// 顯示和輸出樣板
$st->display("Ch14_2_5b.tpl");
?>
