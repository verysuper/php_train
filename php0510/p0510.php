<?php
    include("other/xxx.html");
    require("other/xxx.html");
    include("Class/BookView.php");

    $page = new BookView();  // 建立物件
    $page->id = "P697";      // 存取成員變數
    $page->title = "ASP網頁設計範例教本";
    $page->price = 650;
    $page->header();         // 呼叫成員方法
    $page->content();
    $page->footer();
    echo $page->getPage();   // 顯示網頁內容
?>