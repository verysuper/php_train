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
    echo "<hr>寫入檔案<p>";
    if (!$fp=fopen("number.txt","w")){
        echo "檔案無法開啟";
        exit;
    }
    for ($i=1; $i<=9; $i++){
        $len=fputs($fp,$i) ;
        echo "寫入 $i ==> 寫入長度 : $len<br>" ;
    }
    fclose($fp) ;
    echo "寫入成功";
    //__________________________________________
    echo "<hr>讀取檔案<p>";
    $f=fopen("number.txt","r") ;
    $s=fgets($f) ;
    echo "讀取內容 : $s <p>" ;
    fclose($f) ;
    //_________________________________________
    echo "<hr>讀取多行檔案<p>";
    $fp=fopen("board.txt","r");
    $i=0 ;
    echo "<table width=200 border=0><caption>公告</caption>";
    while (!feof($fp)){ //feof()->是否讀取到最後
        $str=fgets($fp) ;
        $i++;
        $i%2==0 ? $color="ffffc2" : $color="d2ffff";
        echo "<tr bgcolor=$color><td width=20>$i</td><td>$str</td></tr>" ;
    }
    fclose($fp) ;
    echo "</table><p>";
    echo "共 $i 公告事項";
    //____________________________________________
    echo "<hr>網站計數器<p>";
    if (file_exists("count.txt")){
        $ff=fopen("count.txt","r") ;
        $c=fgets($ff) ;
        $c>0 ? $c++ : $c=1 ; //debug 18/05/13
        fclose($ff) ;
    }else{
        $c=1 ;
    }
    $ff=fopen("count.txt","w");//檔案若不存在會重新建立一個
    fputs($ff,$c) ;
    fclose($ff) ;
    echo $c ;
?>
</body>
</html>