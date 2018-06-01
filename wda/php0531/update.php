<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
    include("database.php");
    $id=$_GET["id"];
    $sql="select * from news where seq = '{$id}'";    
    // $stmt=$conn->prepare($sql);
    // $stmt->execute();
    // $row=$stmt->fecth();
    $stmt=$conn->query($sql);
    foreach($stmt as $row)
echo
"<body>
    <table border='1'>
        <tr>
            <td>標題</td>
            <td>".$row["title"]."</td>
        </tr>
        <tr>
            <td>圖片</td>
            <td><img src='images/{$row["image"]}' width='200'/></td>
        </tr>
        <tr>
            <td>內文</td>
            <td>".$row["content"]."</td>
        </tr>
    </table>
</body>";
?>
</html>