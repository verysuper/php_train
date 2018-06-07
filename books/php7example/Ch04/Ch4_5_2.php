<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch4_5_2.php</title>
</head>
<body>
<?php
// 指定變數值
$a = 17;  $b = 5;
echo "\$a = $a : ";
echo "\$b = $b<br/>";
$c = $a / $b;
echo "\$a / \$b = $c<br/>";
$c = (int) ($a / $b);
echo "(int)(\$a / \$b) = $c<br/>";
$c = (string) $a . (string) $b;
echo "(string)\$a . (string)\$b = $c<br/>";
?>
</body>
</html>