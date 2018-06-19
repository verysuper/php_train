<style>
body{
  margin:0px;
}
#my_word{
	width: 100%;
	height: 500px;
	background-color: #f03bff;
	font-family: "微軟正黑體";
	font-size: 24px;
	color: #FFF;
}
#back{
  width:100vw;
  height:100vh;
  background:rgba(0,0,0,0.4);
  position:fixed;
  top:0px;
  left:0px;
}
#look{
  width:500px;
  height:400px;
  background-image:url(a01.jpg);
  background-size:100%;
  background-repeat:no-repeat;
  background-position:0 center;
  position:fixed;
  top:50%;
  left:50%;
  margin:-200px 0 0 -250px;
}
#look_close{
  width:50px;
  height:50px;
	font-family: "微軟正黑體";
	font-size: 50px;
  background-color:#222;
	color: #FFF;
  display:block;
  cursor: pointer;
  position:fixed;
  top:50%;
  left:50%;
  margin:-140px 0 0 -250px;
}
#ccc{
  width:800px;
  height:500px;
  background-color:#ffe9d3;
  position:fixed;
  top:50%;
  left:50%;
  margin:-250px 0 0 -400px;
  
}
</style>
<div id="my_word"></div><br>
<input type="button" value="alert" onclick="a01()"><br><br>
<input type="button" value="confirm" onclick="a02()"><br><br>
<input type="button" value="prompt" onclick="a03()"><br><br>
<input type="button" value="JavaScript" onclick="a04()"><br><br>
<input type="button" value="打開廣告" onclick="open_back()"><br><br>
<div id="back" onclick="close_back()"></div>
<a href = "http://www.kfcclub.com.tw/" target="new">
<div id="look"></div>
</a>
<div id="look_close" onclick="close_back()">X</div>

<div id="ccc">
  <div style="width:180px;height:50px;font-family:'微軟正黑體';font-size:36px;margin:30px auto;">請輸入文字</div>
  <div style="width:400px;height:50px;font-family:'微軟正黑體';font-size:36px;margin:10px auto;">
    <input id="xx" style="width:400px;height:50px;font-family:'微軟正黑體';font-size:36px;">
  </div>
  <div style="width:180px;height:50px;font-family:'微軟正黑體';font-size:36px;margin:0 auto;">
    <input type="button" value="送出" style="width:100px;height:50px;font-family:'微軟正黑體';font-size:36px;margin:20px;" onclick="my_post()">
    <input type="button" value="取消" style="width:100px;height:50px;font-family:'微軟正黑體';font-size:36px;margin:20px;"onclick="my_close()">
  </div>
</div>
<script>
function a01(){
  alert("alert功能");
}

function a02(){
  if(confirm("確認是否購買")){
    alert("0選擇ㄌ是");  
  }else{
    alert("否");
  }
}
function a03(){
  var aaa;
  if( aaa = prompt("請輸入文字")){
    add_word(aaa); 
  }else{
    alert("取消輸入");  
  }
}
function a04(){
  document.getElementById("ccc").style.display="block";
}
function my_close(){
  document.getElementById("ccc").style.display="none";
  document.getElementById("xx").value = "";
}
function my_post(){
  xxx = document.getElementById("xx").value;
  my_close();
  add_word(xxx);      
}
function add_word(ooxx){
  document.getElementById("my_word").innerHTML = document.getElementById("my_word").innerHTML + ooxx + "<br>";
}
function close_back(){
  document.getElementById("back").style.display="none";
  document.getElementById("look").style.display="none";
  document.getElementById("look_close").style.display="none";
}
function open_back(){
  document.getElementById("back").style.display="block";
  document.getElementById("look").style.display="block";
  document.getElementById("look_close").style.display="block";
}
function go_to(){
  document.location.href="http://www.kfcclub.com.tw/";
}
close_back();
</script>