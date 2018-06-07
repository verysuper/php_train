<!-- 程式範例：Ch14_2_4.php -->
<?php
// 插入Smarty.class.php類別檔
require("Smarty\libs\Smarty.class.php");
$st = new Smarty;  // 建立Smarty物件
// 指定Smarty變數
$st->assign("name", "陳會安");
$st->assign("title", "Ch14_2_4.php");
// 顯示和輸出樣板
$st->display("Ch14_2_4.tpl");
?>
