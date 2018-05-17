<?php
if(!empty($_POST["xx"])){
$link =mysqli_connect("localhost","root","","php2018");//mysqli_connect("localhost","帳號","密碼","資料庫名稱")
mysqli_query($link , 'SET NAMES UTF8');   //設定編碼

$oo = $_POST["xx"];
$s91 = "SELECT * FROM zoo where zoo_name = '$oo'";    //把SQL語法的字串，用變數記錄起來
$r0 = mysqli_query($link,$s91);//用變數$ro紀錄執行SQL語法的結果


$row = mysqli_fetch_assoc($r0);//把執行的結果轉成陣列
$cnt = mysqli_num_rows($r0);//計算執行的結果的資料筆數
  if($cnt <> 0){
do{

    echo $row['zoo_name']."-".$row['zoo_cnt']."-".$row['zoo_food_type']."<Br>";

}while($row = mysqli_fetch_assoc($r0));
  }else{ echo "查無此動物";}
}
?>
<form action="20180510-5.php" method="post">
  <input type="text" name="xx">
  <input type="submit" value="送出">
</form>