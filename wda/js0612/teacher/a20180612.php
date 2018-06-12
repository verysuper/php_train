<!DOCTYPE>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <title></title>

    <!--<link href="a20180612.css" rel="stylesheet"/>-->
    <style>
    body{
        margin:0px;
    }
    #aa{
      width:100%;
      height:150px;
      background-color:rgba(150, 100, 201, 0.9);
    }
    </style>
  </head>
  <body>
    <div id="aa"></div>
    <span id="a01">AB123123123CD</span><br><br>
    <input id="a02" value="XoX"><br><br>
    <textarea id="cc"></textarea>
  </body>
</html>
<script>
  //xxx = document.getElementById("a01").innerHTML; //從網頁抓值
  //xxx = document.getElementById("a02").value; //從文字欄位抓值
  document.getElementById("a01").innerHTML = "XXXXXXXXXXXXXX"; //把值送到網頁的指定內容
  document.getElementById("a02").value = "OOOOOOOOO"; //把值送到文字欄的指定內容
  document.getElementById("cc").innerHTML = "VV\n01\n02"; //把值送到文字欄位(多行)的指定內容，如要換行用\n

  document.getElementById("aa").style.backgroundColor = "rgba(250, 250, 151, 0.9)";//控制CSS的內容限定一項調整
  document.getElementById("aa").style = "background-color:rgba(200, 200, 101, 0.9);";//控制CSS的內容
   
  //alert(xxx);
</script>