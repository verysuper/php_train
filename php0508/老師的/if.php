<?php
$aaa = 30;
if( $aaa > 60 ){ //如果
  echo "及格";
}else if($aaa > 50){  //如果未符合前面所有條件的話，如果
  echo "不及格A";
}else if($aaa > 40){
  echo "不及格B";
}else if($aaa > 30){
  echo "不及格C";
}else if($aaa > 20){
  echo "不及格D";
}else{//如果未符合前面所有條件的話
  echo "不及格";
}
echo "<br>";

switch($aaa){
  case 40:
    echo "我是40";
    break;
  case 30:
    echo "我是30";
    break;
  case 20:
    echo "我是20";
    break;
  case 10:
    echo "我是10";
    break;
  default;
    echo "我以上都不是";
}
?>
