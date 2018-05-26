<?php
$link =mysqli_connect("localhost","root","","php2018");//mysqli_connect("localhost","帳號","密碼","資料庫名稱")
mysqli_query($link , 'SET NAMES UTF8');   //設定編碼

$s91 = 'SELECT * FROM zoo';    //把SQL語法的字串，用變數記錄起來
$r0 = mysqli_query($link,$s91);//用變數$ro紀錄執行SQL語法的結果
//如果是新增、修改、刪除的話 只需要 mysqli_query($link,$s91); 就可以了

$row = mysqli_fetch_assoc($r0);//把執行的結果轉成陣列
$cnt = mysqli_num_rows($r0);//計算執行的結果的資料筆數

do{
  echo $row['zoo_name']."-".$row['zoo_food_type']."<Br>";
}while($row = mysqli_fetch_assoc($r0));


?>