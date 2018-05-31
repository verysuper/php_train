<?php
include_once("20180529_head.php");
$sql = "select * from new_list ";
$s91 = mysqli_query($link,$sql);
$xx = mysqli_fetch_assoc($s91); 
?>
<table width="960" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle">標題</td>
    <td align="center" valign="middle">圖片</td>
    <td align="center" valign="middle">時間</td>
    <td align="center" valign="middle">建立者</td>
    <td align="center" valign="middle">開放</td>
    <td align="center" valign="middle">操作</td>
  </tr>
<?php do{?>
  <tr>
    <td align="center" valign="middle"><?=$xx["nl_title"];?></td>
    <td align="center" valign="middle"><img src="X0X/<?=$xx["nl_pic"];?>" width="100"></td>
    <td align="center" valign="middle"><?=$xx["nl_time"];?></td>
    <td align="center" valign="middle"><?=$xx["nl_who"];?></td>
    <td align="center" valign="middle"><?=$xx["nl_seq"];?></td>
    <td align="center" valign="middle"><a href="new_con.php?delete=<?=$xx["nl_seq"];?>">修改</a></td>
  </tr>
<?php }while($xx = mysqli_fetch_assoc($s91)); ?>
  <tr>
    <td colspan="6" align="center" valign="middle"><a href="new_add.php">新增</a></td>
  </tr>
</table>
