<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
    include_once("head.php");
    if(!empty($_GET["name"]) && !empty($_GET["food"]) && !empty($_GET["amount"]))
    {
        $name=$_GET["name"];
        $food=$_GET["food"];
        $amount=$_GET["amount"];
        $sql = "INSERT INTO zoo VALUES (NULL,'$name','$food',$amount);";
        mysqli_query($link,$sql);
    }
    else
    {
        echo "不可空白";
    }   

?>
<body>
<form action="test20180517_1.php" method="get">
    name<input type="text" name="name"><br><br>
    food<input type="text" name="food"><br><br>
    amount<input type="text" name="amount"><br><br>
    <input type="submit">
</form>

</body>
</html>