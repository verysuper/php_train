<!-- 程式範例：Ch14_2_5a.php -->
<?php
// 含括Smarty.class.php類別檔
require("Smarty\libs\Smarty.class.php");
$st = new Smarty;  // 建立Smarty物件
// 指定Smarty變數
$st->assign("name", "joe chen");
$st->assign("msg", "This is a book.");
$st->assign("body", "<name>江小魚</name>");
$st->assign("str", "This is a pen.");
// 顯示和輸出樣板
$st->display("Ch14_2_5a.tpl");
?>
