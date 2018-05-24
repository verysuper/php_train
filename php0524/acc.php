<?php
include_once("head_admin.php");
if($lv1 != 1){
  header("location:admin.php");
  exit();
}
$cal= "select * from member_account";
$cc = mysqli_query($link,$cal);
$oc = mysqli_fetch_assoc($cc);
$yn[] = "關閉";
$yn[] = "<span style='color:#F00;'>開啟</span>";
?>
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>

<table width="1024" border="1" align="center" cellpadding="10" cellspacing="0">
  <tr>
    <td colspan="7" align="center">帳號控制</td>
  </tr>
  <tr>
    <td align="center">帳號</td>
    <td align="center">部門</td>
    <td align="center">帳號控制</td>
    <td align="center">最新消息控制</td>
    <td align="center">圖片控制</td>
    <td align="center">停權控制</td>
    <td align="center">關閉帳號</td>
  </tr>
<?php do{?>
  <tr>
    <td align="center"><?=$oc["m_a_id"];?></td>
    <td align="center"><?=$word[$oc["m_a_word"]];?></td>
    <td align="center">
      <a href="acc_api.php?now=<?=$oc["m_a_1"];?>&level=1&who=<?=$oc["m_a_seq"];?>"><?=$yn[$oc["m_a_1"]];?></a>
    </td>
    <td align="center">
      <a href="acc_api.php?now=<?=$oc["m_a_2"];?>&level=2&who=<?=$oc["m_a_seq"];?>"><?=$yn[$oc["m_a_2"]];?></a>
    </td>
    <td align="center">
      <a href="acc_api.php?now=<?=$oc["m_a_3"];?>&level=3&who=<?=$oc["m_a_seq"];?>"><?=$yn[$oc["m_a_3"]];?></a>
    </td>
    <td align="center">
      <a href="acc_api.php?now=<?=$oc["m_a_4"];?>&level=4&who=<?=$oc["m_a_seq"];?>"><?=$yn[$oc["m_a_4"]];?></a>
    </td>
    <td align="center"></td>
  </tr>
<?php }while($oc = mysqli_fetch_assoc($cc));?>
  <tr>
    <td colspan="7" align="center"></td>
  </tr>
</table>
