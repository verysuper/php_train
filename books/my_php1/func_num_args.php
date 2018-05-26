<?php
    function var_len(){
        $n=func_num_args();
        echo "總共傳入 $n 個參數<br>";
        $op=func_get_args();
        for($i=0;$i<$n;$i++)
            echo "- $op[$i] <br>";
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
    var_len(1,2,3,4,5,6,7);    
    var_len("hello","php","world");
?>
</body>
</html>