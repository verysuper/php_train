<?php
include_once("db.php");
$sql="select * from xxx where xxx_del  = 0";
$ro=mysqli_query($link,$sql);
$rr = mysqli_fetch_assoc($ro);
?>
<script src="jquery-3.3.1.min.js "></script>
<table width="1024" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle">姓名</td>
    <td align="center" valign="middle">電話</td>
    <td align="center" valign="middle">地址</td>
    <td align="center" valign="middle">操作</td>
  </tr>
<?php do{?>
  <tr id="d<?=$rr["xxx_seq"]?>">
    <td height="33" align="center" valign="middle">
      <input id="a1<?=$rr["xxx_seq"]?>" value = "<?=$rr["xxx_name"]?>" onclick = "save_now_word('a1<?=$rr["xxx_seq"]?>')" onchange="zzz('<?=$rr["xxx_seq"]?>','a1')" >
    </td>
    <td align="center" valign="middle">
      <input id="a2<?=$rr["xxx_seq"]?>" value = "<?=$rr["xxx_tel"]?>" onclick = "save_now_word('a2<?=$rr["xxx_seq"]?>')"  onchange="zzz('<?=$rr["xxx_seq"]?>','a2')">
    </td>
    <td align="center" valign="middle">
      <input id="a3<?=$rr["xxx_seq"]?>" value = "<?=$rr["xxx_con"]?>" onclick = "save_now_word('a3<?=$rr["xxx_seq"]?>')"  onchange="zzz('<?=$rr["xxx_seq"]?>','a3')">
    </td>
    <td align="center" valign="middle"><input type="button" value="刪除" onclick="sss(<?=$rr["xxx_seq"]?>)"></td>
  </tr>
<?php }while($rr = mysqli_fetch_assoc($ro));?>
</table>
<script>
  var now_word="";
  function save_now_word(nw){
    now_word = document.getElementById(nw).value;
  }
  function zzz(oo,xx){
    zz = xx+oo;
    if(confirm("確認是否修改")){
      vv = document.getElementById(zz).value;
      $.post("update_api.php",{xx,oo,vv},function(){
        alert("修改完成");
      });
    }else{
      alert("不要亂點");
      document.getElementById(zz).value = now_word;
    }
  }

  function sss(ddd){
    if(confirm("確認是否刪除")){
      $.post("delete_api.php",{ddd},function(){
        document.getElementById("d"+ddd).innerHTML="";
        //document.getElementById("d"+ddd).style.display="none";
      });
    }else{
      alert("不要亂刪");
    }
  }
</script>