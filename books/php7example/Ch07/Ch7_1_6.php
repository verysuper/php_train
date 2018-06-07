<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_1_6.php</title>
</head>
<body>
<?php
// 使用const建立常數陣列
const FRUITS = array(
    "西瓜", 
    "草莓",
    "蘋果",
    "藍莓",
);
print_r(FRUITS);
echo "<br/>";
// 使用define()建立常數陣列
define("ANIMALS", [
    "狗", 
    "猫",
    "猴子",
    "鳥",
]);
echo ANIMALS[1];
echo "<br/>";
echo ANIMALS[2];
echo "<br/>";
?>
</body>
</html>
