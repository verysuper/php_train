<?php
    /*setcookie()限制:
     *必須在所有輸出
     *(echo, print),<html><head>之前使用，
     *否則cookie都會失敗
     */
   setcookie("A","10");
   setcookie("B","Hello, I am B.");
   echo "已設定 Cookie ";
?>