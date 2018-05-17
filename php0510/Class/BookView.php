<?php
    class BookView { // 宣告BookView類別
        var $id;      // 成員變數
        var $title;
        var $price;
        var $page;    // 儲存網頁內容
        // 成員方法
        function header() {   // HTML網頁開頭
           $this->page = "<html><head><title>";
           $this->page .= "宣告類別與建立物件</title>";
           $this->page .= "</head><body>";
        }
        function content() { // 圖書資料
           $this->page .= "書號: " . $this->id . "<br/>";
           $this->page .= "書名: " . $this->title . "<br/>";
           $this->page .= "書價: " . $this->price . "<br/>";
        }   
        function footer() {   // HTML網頁結尾
           $this->page .= "</body></html>";
        }
        function getPage() {
           return $this->page; // 傳回網頁內容
        }
     }
?>