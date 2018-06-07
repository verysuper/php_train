<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch4_4_4.php</title>
</head>
<body>
<?php
$a = 23; $b = 24;  // 指定變數值
?>
$a = <?php echo $a ?><br/>
$b = <?php echo $b ?><br/>
等　於:$a == $b 結果為: [<?php echo  $a == $b ?>]<br/>
識　別:$a === $b 結果為: [<?php echo  $a === $b ?>]<br/>
不等於:$a != $b 結果為: [<?php echo $a != $b ?>]<br/>
不等於:$a <> $b 結果為: [<?php echo $a <> $b ?>]<br/>
小　於:$a < $b 結果為: [<?php echo $a < $b ?>]<br/>
大　於:$a > $b 結果為: [<?php echo $a > $b ?>]<br/>
小於等於:$a <= $b 結果為: [<?php echo $a <= $b ?>]<br/>
大於等於:$a >= $b 結果為: [<?php echo $a >= $b ?>]<br/>
</body>
</html>