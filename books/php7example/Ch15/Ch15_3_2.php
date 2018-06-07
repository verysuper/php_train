<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ch15_3_2.php</title>
<link rel="stylesheet" href="jquery.mobile-1.4.5.min.css">
<script src="jquery-2.2.0.min.js"></script>
<script src="jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" href="Ch15_3_2.css">    
<script src="Ch15_3_2.js"></script>    
</head>
<body>
<div data-role="page" id="home">
  <div data-role="header">
  <h1>Ch15_3_2</h1>
  </div>
  <div data-role="main" class="ui-content">
    <form action="" data-ajax="false">
      <div class="ui-field-contain">
        <label for="name">姓名:</label>
        <input type="text" name="name" id="name" value="陳會安"/>
      </div>
      <div class="ui-field-contain">
        <select id="type" name="type">
          <option value="date" selected>日期</option>
          <option value="time">時間</option>
        </select>
      </div>  
      <input type="submit" value="送出"/>     
    </form>
    <div class="box">
       <div id="date"></div>
       <div id="myname"></div>
    </div>
    <a href="#" class="tabs ui-btn">載入網頁</a>
  </div>
</div>
</body>
</html>