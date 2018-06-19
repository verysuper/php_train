<?php
session_start();
$link =mysqli_connect("localhost","root","","php2018_06");
mysqli_query($link , 'SET NAMES UTF8'); 
$tt = strtotime("+6hour");
$tt2 = date("Y-m-d H:i:s",$tt);
$t5min = strtotime("+6hour-5min");
$t5min2 = date("Y-m-d H:i:s",$t5min);
$ip = $_SERVER["REMOTE_ADDR"];

/*
1.把網頁的輸入的內容送給處理的頁面
2.處理的頁面接收到內容後轉換成資料庫的語法
3.資料庫的語法 - 搜尋帳號和密碼是否相符的
4.是的話登入，不是的話顯示錯誤
5.不管是或否每次的登入都要記錄結果(直接新增到資料庫的資料表中:失敗計數 1 成功計數 0)
6.以IP搜尋登入紀錄最新的3次(5分鐘內)，並統計成功與失敗的次數(計數)
7.計數總和>=3 則禁止登入，且不進入步驟 3之後的內容，並顯示您的IP被封鎖30分鐘
*/
$sql="select * from block_ip where b_l_ip = '".$ip."' and b_l_t2 >= '".$tt2."'";
$bb = mysqli_query($link,$sql);
$bbb = mysqli_num_rows($bb);

if($bbb >= 1){
  $bt = mysqli_fetch_assoc($bb);
  echo "0ㄉ帳號被鎖ㄌ，封鎖時間：".$bt["b_l_t2"];
  exit();
}

if(!empty($_POST["my_id"])){
  $my_id = $_POST["my_id"];
  $my_pw = md5($_POST["my_pw"]);
  $sql="select * from my_account where m_a_id = '".$my_id."' and m_a_pw = '".$my_pw."'";
  $rr = mysqli_query($link,$sql);
  $rrr = mysqli_num_rows($rr);

  if($rrr == 1 ){
    $_SESSION['uid'] = $my_id;
    $sql = "insert into account_log value(null,'$my_id','0','$tt2','$ip')";
    mysqli_query($link,$sql);
    header("location:account.php");
  }else{
    $sql = "insert into account_log value(null,'$my_id','1','$tt2','$ip')";
    mysqli_query($link,$sql);
    echo "帳號密碼錯誤";
  }
  
//==============================================================================
  $s91="select * from account_log where a_l_time > '$t5min2' and a_l_ip = '$ip' order by a_l_seq desc limit 3";
  $nn = mysqli_query($link,$s91);
  $nnn = mysqli_fetch_assoc($nn);
  $now_error = 0;   //計算失敗次數的變數，起始值是0
  do{
    $now_error = $now_error + $nnn["a_l_jago"];//計算失敗次數的變數  
  }while($nnn = mysqli_fetch_assoc($nn));

  if($now_error >= 3){
    $t30min = strtotime("+6hour+30min");
    $t30min2 = date("Y-m-d H:i:s",$t30min);
    $sql = "insert into block_ip value(null,'$ip','$tt2','$t30min2')";
    mysqli_query($link,$sql);
    header("location:login.php");
    exit();
  }
}
?>
<form method="post">
<table width="1024" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="300" height="40" align="center" valign="middle">帳號</td>
    <td height="40" align="center" valign="middle">
      <input type="text" name="my_id" id="my_id" />
    </td>
  </tr>
  <tr>
    <td height="40" align="center" valign="middle">密碼</td>
    <td height="40" align="center" valign="middle">
      <input type="password" name="my_pw" id="my_pw" />
    </td>
  </tr>
  <tr>
    <td height="40" colspan="2" align="center" valign="middle">
      <input type="submit" name="button" id="button" value="送出" />
    </td>
  </tr>
</table>
</form>