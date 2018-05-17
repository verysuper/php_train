<?php
include_once("head.php");
$sql = "select * from zoo";
$ro = mysqli_query($link,$sql);
$cc = mysqli_fetch_assoc($ro);

?>
<table width="1024" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle">動物名稱</td>
    <td align="center" valign="middle">動物食物</td>
    <td align="center" valign="middle">動物數量</td>
    <td align="center" valign="middle">動物編號</td>
    <td align="center" valign="middle">操作</td>
  </tr>
<?php do{?>
<form action = "update20180517.php" method="post">
  <tr>
    <td align="center" valign="middle"><input type="text" name="zoo_name" value="<?php echo $cc['zoo_name'];?>"></td>
    <td align="center" valign="middle"><input type="text" name="zoo_food_type" value="<?=$cc['zoo_food_type'];?>"></td>
    <td align="center" valign="middle"><input type="text" name="zoo_cnt" value="<?=$cc['zoo_cnt'];?>"></td>
    <td align="center" valign="middle"><input type="text" name="zoo_seq" value="<?=$cc['zoo_seq'];?>"></td>
    <td align="center" valign="middle">
      <a href="test20180517_2.php?eel=<?php echo $cc['zoo_seq'];?>">刪除</a>　<input type="submit" value="修改">
    </td>
  </tr>
</form>
<?php }while($cc = mysqli_fetch_assoc($ro));?>
</table>
