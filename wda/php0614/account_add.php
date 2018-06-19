<?php


?>
<style>
.word{
	font-size: 24px;
	font-family: '微軟正黑體';
	color: #333;
}
#oo{
  background-image: url(a04.png);
  background-color: #FFF;
  width: 114px;
  height: 111px;
  background-size:100% 100%;
}
</style>
<form action="a_a.php" method="post" name = "ya_ya">
<table width="1024" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="50" align="center" valign="middle"><span class="word">帳號</span></td>
    <td align="center" valign="middle">
      <input name="my_id" type="text" id="my_id" size="100" />
    </td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle"><span class="word">密碼</span></td>
    <td align="center" valign="middle">
      <input name="my_pw" type="password" id="my_pw" size="100" />
    </td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle"><span class="word">姓名</span></td>
    <td align="center" valign="middle">
      <input name="my_name" type="text" id="my_name" size="100" />
    </td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle"><span class="word">電話</span></td>
    <td align="center" valign="middle">
      <input name="my_tel" type="text" id="my_tel" size="100" />
    </td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle"><span class="word">地址</span></td>
    <td align="center" valign="middle">
      <input name="my_con" type="text" id="my_con" size="100" />
    </td>
  </tr>
  <tr>
    <td height="150" colspan="2" align="center" valign="middle">
      <div id="oo"></div>
    	<a href="javascript:xxx();"><img src="a01.png" width="114" height="111"></a>
      <div style="background-image: url(a02.png); background-color: #FFF; width: 114px; height: 111px;background-size:100% 100%;" onclick="xxx();"></div>
      <input type="submit" style="border-style: none;background-image: url(a03.png); background-color: #FFF; width: 114px; height: 111px;background-size:100% 100%;"/>
    </td>
  </tr>
</table>
</form>
<script>
  function xxx(){
    document.ya_ya.submit(); //指定的form(name = yaya) 執行submit;
  }
  document.getElementById("oo").onclick=function(){
    xxx();
  }
</script>