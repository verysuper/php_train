<?php
    function message(){
        echo "函數回傳3個數值<p>";
        return array("hello","my","friend");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    list($msg1,$msg2,$msg3)=message();
    echo "$msg1 $msg2 $msg3";
?>
</body>
</html>