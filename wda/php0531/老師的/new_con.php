<?php
include_once("20180529_head.php");
if(!empty($_GET["delete"])){
  $cc = $_GET["delete"];
  $sql="select * from new_list where nl_seq='$cc'";
  $s91 = mysqli_query($link,$sql);
  $oo = mysqli_fetch_assoc($s91);
}
?>
<table width="960" border="1" align="center" cellpadding="10" cellspacing="0">
  <tr>
    <td><?=$oo["nl_title"]?></td>
  </tr>
  <tr>
    <td><img src="X0X/<?=$oo["nl_pic"];?>"></td>
  </tr>
  <tr>
    <td><?=nl2br($oo["nl_cont"])?></td>
  </tr>
</table>