<?php
include_once("20180529_head_money.php");
if( !empty($_SESSION["uid"])){
  header("location:20180529_admin.php");
  exit();
}
if($now_block == 1){
  if($now_block_data["bl_type"]==1){ $nbd = "帳號密碼錯誤超過3次";}
echo $nbd." 解鎖時間:".$now_block_data["bl_time"];
}else{

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
    $sql = "insert into login_log value(null,'$id','0','$ip','$tt2')";
    mysqli_query($link,$sql);
    header("location:20180529_admin.php");
  }else{
    $sql = "insert into login_log value(null,'$id','1','$ip','$tt2')";
    mysqli_query($link,$sql);
    //$black_sql = "select * from login_log where ll_ip = '$ip' order by ll_time desc limit 3";
    //$ttt = strtotime("+6hour-30min");
    $ttt = strtotime("+6hour-10min");
    $ttt2 = date("Y-m-d H:i:s",$ttt);
    $black_sql = "select * from login_log where ll_ip = '$ip' and ll_time >='$ttt2' order by ll_time desc limit 3";
    $black_ro = mysqli_query($link,$black_sql);
    $black_totle =mysqli_fetch_assoc($black_ro);
    $now_totle = 0;
    do{
      $now_totle = $now_totle + $black_totle["ll_jo"];
    }while($black_totle =mysqli_fetch_assoc($black_ro));
    if($now_totle == 3){
      $ttt = strtotime("+6hour+10min");
      $ttt2 = date("Y-m-d H:i:s",$ttt);
      echo "封鎖IP";
      $block = "insert into block_log value(null,'$ip','$ttt2','1')";
      mysqli_query($link,$block);
    }
    echo "帳號密碼錯誤";
  }
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