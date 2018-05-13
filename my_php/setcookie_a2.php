<?php
    /*setcookie()限制:
     *必須在所有輸出
     *(echo, print),<html><head>之前使用，
     *否則cookie都會失敗
     */
    echo "A = ". $_COOKIE['A'] . "<p>";
    echo "B = ". $_COOKIE['B'] . "<p>";
    echo "取出 Cookie";
?>