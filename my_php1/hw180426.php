<?php
	if(!empty($_GET["ooo"]))
	{
		$receive = $_GET["ooo"];
		$result = 1;
		for($i=0;$i<$receive;$i++)
		{
			$result = $result + 2;
			echo $result.'<br>';
		}
	}
?>

<a href="hw180426.php?ooo=1">ooo=1</a><br/>
<a href="hw180426.php?ooo=5">ooo=5</a><br/>
<a href="hw180426.php?ooo=14">ooo=14</a><br/>
<a href="hw180426.php?ooo=7">ooo=7</a><br/>
<a href="hw180426.php">ooo=不傳參數</a><br/>