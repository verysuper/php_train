<?php
include_once("head.php");
if(!empty($_POST['my_id'])){
  $m_a_id = $_POST["my_id"];
  $m_a_pw = md5($_POST["my_password"]);
  $m_a_word= $_POST["my_work"];
  foreach($_POST["my_level"] as $a){
    $a==1?$a1=1:$a1=0;
    $a==2?$a2=1:$a2=0;
    $a==3?$a3=1:$a3=0;
    $a==4?$a4=1:$a4=0;
  }

  
  $sql = "insert into member_account value(NULL,'$m_a_id','$m_a_pw','$m_a_word','$a1','$a2','$a3','$a4')";
  mysqli_query($link,$sql);

  // for($i=0;$i<count($_POST["my_level"]);$i++){
  //   $sql = "update member_account set ".$_POST["my_level"][$i]." = '1' where m_a_id = '$m_a_id'";
  //   mysqli_query($link,$sql);
  // }
  
}
?>
<form method="post">
<table width="1024" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="368" align="center" valign="middle">帳號</td>
    <td width="650" align="center" valign="middle">
      <input type="text" name="my_id"/>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle">密碼</td>
    <td align="center" valign="middle">
      <input type="password" name="my_password"/>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle">單位</td>
    <td align="center" valign="middle">
      <select name="my_work">
        <option value="1">客服</option>
        <option value="2">營運</option>
        <option value="3">開發部</option>
        <option value="4">系統部</option>
      </select>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle">權限</td>
    <td align="center" valign="middle">
      <input type="checkbox" name="my_level[]" value="1">帳號控制、
      <input type="checkbox" name="my_level[]" value="2">最新消息控制、
      <input type="checkbox" name="my_level[]" value="3">圖片控制、
      <input type="checkbox" name="my_level[]" value="4">停權控制
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle">
      <input type="submit" value="送出" />
      <input type="reset" value="重設" />
    </td>
  </tr>
</table>
</form>