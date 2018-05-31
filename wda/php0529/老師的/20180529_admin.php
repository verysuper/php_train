<?php
include_once("20180529_head.php");
$sql = "SELECT * FROM member_0520 where m5_del = 1";
$ro = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($ro);
?>
<form action="20180529_update.php" method="post">
<table width="1024" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle">帳號</td>
    <td align="center" valign="middle">暱稱</td>
    <td align="center" valign="middle">性別</td>
    <td align="center" valign="middle">申請時間</td>
    <td align="center" valign="middle">操作</td>
  </tr>
<?php do{?>
  <tr>
    <td align="center" valign="middle"><?=$row["m5_id"];?></td>
    <td align="center" valign="middle">
      <input type = "text" name ="update_name[]" value = "<?=$row["m5_name"];?>">
      <input type = "hidden" name ="update_seq[]" value = "<?=$row["m5_seq"];?>">
    </td>
    <td align="center" valign="middle"><?=$row["m5_sex"];?></td>
    <td align="center" valign="middle"><?=$row["m5_time"];?></td>
    <td align="center" valign="middle"><a href="20180529_del.php?del=<?=$row["m5_seq"];?>">刪除</a></td>
  </tr>
<?php }while($row = mysqli_fetch_assoc($ro));?>  
  <tr>
    <td colspan="5" align="center" valign="middle"><input type="submit" value="修改"> 
      <a href="out.php">登出</a>　　　<a href="20180529_add.php">新增</a></td>
  </tr>
</table>
</form>