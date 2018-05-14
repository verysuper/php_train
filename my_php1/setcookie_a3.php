<?php
    /*setcookie()限制:
     *必須在所有輸出
     *(echo, print),<html><head>之前使用，
     *否則cookie都會失敗
     */
   //加上時間參數，可跨瀏覽器存取
   //相對時間 (秒)
   setcookie("A","10",time()+3600);//1 hour
   //絕對時間 (時,分,秒,月,日,年)
   setcookie("B","10",mktime(0,0,0,6,20,2018));//2018/6/20前
   echo "已設定 Cookie ";
?>