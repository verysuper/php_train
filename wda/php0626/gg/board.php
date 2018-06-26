<?php
session_start();
$tt = strtotime("+6hour");
$tt2 = date("Y-m-d H:i:s",$tt);

if(empty($_SESSION["talk_no"])){
  $tt3 = date("YmdHis",$tt);
  $_SESSION["talk_no"] = $tt3;
}
?>
<!DOCTYPE>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title></title>
  <script src="jquery-3.3.1.min.js"></script>
  <style>
  body{
    margin:0px;
  }
  #all_talk{
    width:1024px;
    height:500px;
    background-color:#faf1b6;
    margin:0 auto;
    overflow:auto;
    padding:10px;
  }
  #all_talk_back{
    width:1024px;
    height:500px;
    background-image:url(load.gif);
    display:block;
    background-size:50px 50px;
    background-repeat:no-repeat;
    background-position:center center;
    position:fixed;
    left:50%;
    margin:0 0 0 -512px;    
  }
  #intpu_talk{
    width:250px;
    height:25px;
    margin:10px auto;
  }
  </style>
  </head>
  <body>
    <div id="all_talk_back"></div>
    <div id="all_talk"></div>
    <div id="intpu_talk">
      <input id="my_talk">　<input type ="button" value="說話" onclick="del_log()">
    </div>
  </body>
</html>
<!--
1.送出文字欄位的值or內容並處理他 (不限定使用技術)
  1-1 開啟頁面時設定一組本次談話的編號以session儲存(使用者端)
  1-2 開啟頁面時設定一組本次談話的編號以session儲存(客服端)(由使用者設定的session) 練習時先不管她
  1-3 把對話的內容送出交給api處理(新增用)
  1-4 api接受到內容記錄在log中(db)
2.讀取資料庫中本次談話的內容並顯示在頁面上 (建議使用ajax)
  2-1 設定定時送出訊息給api請他提供log中的對話紀錄(搜尋用)
  2-2 api收到訊息後撈db資料並回傳給頁面
  2-3 頁面接收到回傳值後顯示在網頁上
結束時清空session
-->
<SCRIPT>
function no_load(){
  $("#all_talk_back").hide();
}
function now_load(){
  setTimeout(function(){
    now_load();
    $.post("board_read_log_api.php",{},function(wha){
      document.getElementById("all_talk").innerHTML = wha;
      no_load();
    });
  },3000);   //1000=1秒
}
now_load();
var nodclick = 1; 
function del_log(){
  if(nodclick == 1){
    nodclick = 2;

    my_talk = document.getElementById("my_talk").value;
    if(my_talk.length >  0){
      $.post("board_add_log_api.php",{my_talk},function(){
        document.getElementById("my_talk").value="";
        $("#all_talk_back").show();
      });
    }else{
      alert("請輸入內容");
    }
    nodclick = 1;
  }else{
    alert("請不要連續點擊");
  }
}
</SCRIPT>