<?php
include_once("20180529_head_money.php");
if( !empty($_SESSION["uid"])){
  header("location:20180529_admin.php");
  exit();
}
if(!empty($_POST["my_id"])){
  $id = $_POST["my_id"];
  $pw = md5($_POST["my_pw"]);
  $time = $tt2;
  $ip = $_SERVER["REMOTE_ADDR"];
  $sql = "select * from member_0520 where m5_id = '$id' and m5_pw = '$pw' and m5_del = 1";
  $totle = mysqli_query($link,$sql);
  $totle = mysqli_num_rows($totle);
  if($totle == 1){
    $_SESSION["uid"] = $id;
    header("location:20180529_admin.php");
  }else{
    echo "帳號密碼錯誤";
  }
}
?>
<form method="post">
<table width="960" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="300" height="50" align="center" valign="middle">帳號</td>
    <td align="center" valign="middle">
      <input type="text" name="my_id">
    </td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle">密碼</td>
    <td align="center" valign="middle">
      <input type="password" name="my_pw">
    </td>
  </tr>
  <tr>
    <td height="50" colspan="2" align="center" valign="middle">
      <input type="submit" value="登入">
    </td>
  </tr>
</table>
</form>