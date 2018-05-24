<?php
include_once("head.php");
if(!empty($_SESSION['user_id'])){
  header("location:admin.php");
  exit();
}

if(!empty($_POST['my_id'])){
  $id = $_POST['my_id'];
  $pw = md5($_POST['my_pw']);
  $s91 = "select * from member_account where m_a_id = '".$id."' and m_a_pw = '".$pw."'";
  $xx = mysqli_query($link,$s91);
  $totle = mysqli_num_rows($xx);
  if($totle == 1){
    $_SESSION['user_id'] = $id;
    header("location:admin.php");
  }else{
    echo "帳號密碼錯誤";
  }
}
?>
<form method="post">
<table width="1024" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle" width="200" height = "50">帳號</td>
    <td align="center" valign="middle">
      <input type="text" name="my_id" style="width:800px;height:40px;font-family: '微軟正黑體'; font-size: 24px;"/>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle" width="200" height = "50">密碼</td>
    <td align="center" valign="middle">
      <input type="password" name="my_pw" style="width:800px;height:40px;font-family: '微軟正黑體'; font-size: 24px;"/>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle" height = "50">
      <input type="submit" value="送出"  style="width:800px;height:40px;font-family: '微軟正黑體'; font-size: 30px;"/>
    </td>
  </tr>
</table>
</form>