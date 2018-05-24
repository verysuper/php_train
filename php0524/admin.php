<?php include_once("head_admin.php");?>
<table width="1024" border="1" align="center" cellpadding="10" cellspacing="0">
  <tr>
    <td>帳號：<?=$uid?></td>
  </tr>
  <?php if($lv1 == 1){ ?><tr><td><a href="admin.php?goto=acc">帳號控制</a></td></tr><?php } ?>
  <?php if($lv2 == 1){ ?><tr><td><a href="admin.php?goto=new">消息控制</a></td></tr><?php } ?>
  <?php if($lv3 == 1){ ?><tr><td><a href="admin.php?goto=pic">圖片控制</a></td></tr><?php } ?>
  <?php if($lv4 == 1){ ?><tr><td><a href="admin.php?goto=stop">停權控制</a></td></tr><?php } ?>
</table>
<?php include_once($goto);?>