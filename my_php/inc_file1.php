<?php require("var.inc") ?>
<html>
<title>Require()</title>
<meta charset="UTF-8">
<body>
<?php
	require("add.inc") ;// 檔案不可有回傳值，只允許func回傳
	$a=10 ;
	$b=20 ;
    echo "Sum = ".add($a,$b) ."<br>"; 
    echo "__________________________<br>";
    echo "height = $Height" ;
	echo CrLf ;
	echo "width = $Width". CrLf ;
	echo "area = " ;
	echo $Width*$Height ;
	echo CrLf ;
	echo "perimeter = " ;
    echo 2*($Width+$Height) ;
    echo CrLf ;
    echo "__________________________<br>";
    $a=10 ;
	$b=20 ;
	$c=include ("add_include.inc") ; //檔案可有回傳值
    echo "A,B和是 $c <br>" ;
    echo "__________________________<br>";
    for ($i=1; $i<=2; $i++)
        require_once "add.inc";
    echo "10+20=".add(10,20)."<br>";
    echo "__________________________<br>";
    echo "require() 引入檔前 <p>";
    require("NotExist.inc");
    echo "require() 引入檔後";


?>
</body>
</html>