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
      $sql="insert into m_pic value(null,'".$now_files_name."')";
      mysqli_query($link,$sql);
    }
  }
}
?>
<form method="post" enctype="multipart/form-data">
  <input type="button" value="新增" onclick = "add_pic()"/>　　<input type="submit" value="送出" /><br><br>
  <span id="aa"><input type="file" name="mypic[]"/><br><br></span>
</form>



<script>
  function add_pic(){
      var my_file = '<input type="file" name="mypic[]"/><br><br>' ;
      document.getElementById("aa").innerHTML = document.getElementById("aa").innerHTML + my_file; 
  }
</script>