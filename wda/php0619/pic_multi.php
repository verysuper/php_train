<?php
session_start();
$tt = strtotime("+6hour");
$tt2 = date("YmdHis",$tt);

$link =mysqli_connect("localhost","root","","php2018");
mysqli_query($link , 'SET NAMES UTF8'); 

if(!empty($_FILES["mypic"])){
  for($i=0;$i<count($_FILES["mypic"]);$i++){
    if(!empty($_FILES["mypic"]["name"][$i])){
      $now_files_name = $tt2.$i.".jpg";
      copy($_FILES["mypic"]["tmp_name"][$i],"xx/".$now_files_name); 
      //echo $_FILES["mypic"]["name"][$i]."<br>";
      
    }
  }
}
?>
<form method="post" enctype="multipart/form-data">
  <input type="button" value="新增" />　　<input type="submit" value="送出" /><br><br>
  <input type="file" name="mypic[]"/><br><br>
  <input type="file" name="mypic[]"/><br><br>
  <input type="file" name="mypic[]"/><br><br>
  <input type="file" name="mypic[]"/><br><br>
</form>
