<?php
include_once("20180529_head.php");
if(!empty($_POST["my_id"])){
  $my_id = $_POST["my_id"];
  $my_pw = md5($_POST["my_pw"]);
  $my_name = $_POST["my_name"];
  $my_sex = $_POST["my_sex"];
  $time = $tt2;
  $sql="select * from member_0520 where m5_id = '".$my_id."' and  m5_del = 1";
  
  $totle = mysqli_query($link,$sql);
  $totle = mysqli_num_rows($totle);
  if($totle == 0){
    $sql="insert into member_0520 value(NULL,'$my_id','$my_pw','$my_name','$my_sex','$time','1')";
    mysqli_query($link,$sql);
    header("location:20180529_add.php");
  }else{
    echo "帳號已重複";
  }
  
}
?>
<form method="post">
<table width="1024" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle" style="font-size: 20px" width="200" height="60">帳號</td>
    <td align="center" valign="middle" style=" font-size: 20px">
      <input type="text" name="my_id"style="width: 800px; height: 40px;font-size: 20px;"/>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="font-size: 20px" width="200" height="60">密碼</td>
    <td align="center" valign="middle" style="font-size: 20px">
      <input type="password" name="my_pw"style="width: 800px; height: 40px;font-size: 20px;"/>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="font-size: 20px" width="200" height="60">暱稱</td>
    <td align="center" valign="middle" style="font-size: 20px">
      <input type="text" name="my_name"style="width: 800px; height: 40px;font-size: 20px;"/>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="font-size: 20px" width="200" height="60">性別</td>
    <td align="center" valign="middle" style="font-size: 20px">
      <input type="radio" name="my_sex" value= "男" style="width: 14px; height: 14px;">男　　
      <input type="radio" name="my_sex" value= "女" style="width: 14px; height: 14px;">女
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle" style="font-size: 20px" height="60">
      <input type="submit" value = "送出" style="font-size: 26px;width: 800px; height: 45px;" >
    </td>
  </tr>
</table>
</form>