<?php
include_once("20180529_head.php");
if(!empty($_POST["title"])){
  $title = $_POST["title"];
  $con =  $_POST["contect"];
 
  $pic_url = $_FILES["pic"]["tmp_name"];
  $pic_type = $_FILES["pic"]["type"];
  if($pic_type == "image/jpeg"){ $pic2 = ".jpg";}
  if($pic_type == "image/png"){ $pic2 = ".png";}
  $pic_name = date("YmdHis",$tt).$pic2;
  $uid = $_SESSION["uid"];
  $sql = "insert into new_list value(null,'$title','$pic_name','$con','$tt2','$uid','0')";
  mysqli_query($link,$sql);
  copy($pic_url,"X0X/".$pic_name);
}
?>
<form action ="new_add.php" method="post" enctype="multipart/form-data" >
<table width="960" border="1" align="center" cellpadding="0" cellspacing="0" style="font-family: '微軟正黑體'; font-size: 18px;">
  <tr>
    <td width="300" height="50" align="center" valign="middle">標題</td>
    <td align="center" valign="middle" >
      <input type="text" name="title" style="width:95%;height:40px;font-family: '微軟正黑體'; font-size: 18px;"/>
    </td>
  </tr>
  <tr>
    <td align="center" height="50" valign="middle">圖片</td>
    <td align="center" valign="middle">
      <input type="file" name="pic" style="font-family: '微軟正黑體'; font-size: 18px;">
    </td>
  </tr>
  <tr>
    <td align="center" height="210" valign="middle">內文</td>
    <td align="center" valign="middle">
      <textarea name="contect" style="width:95%;height:200px;font-family: '微軟正黑體'; font-size: 18px;"></textarea>
    </td>
  </tr>
  <tr>
    <td colspan="2" height="50" align="center" valign="middle">
      <input type="submit" value="送出">
    </td>
  </tr>
</table>
</form>