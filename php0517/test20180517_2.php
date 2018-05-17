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
    if(!empty($_GET["id"]))
    {
        $id=$_GET["id"];
        $sql = "SELECT * FROM zoo where zoo_seq = $id";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_assoc($result);
        $cnt = mysqli_num_rows($result);
        //echo $cnt;
        if($cnt < 1){
            echo "查無此資料";
        }else{            
            $sql="DELETE FROM zoo  WHERE zoo_seq = $id";
            mysqli_query($link,$sql);
            echo "刪除成功";
        }
    }

?>
<body>
    <form action="test20180517_2.php" method="get">
        id <input type="text" name="id"><br><br>
        <input type="submit">
    </form>
</body>
</html>