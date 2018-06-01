<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
  include_once("database.php");
  $sql = "select * from news";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
?>
<body>
<table width="200" border="1">
  <tr>
    <th>標題</th>
    <td>圖片</td>
    <td>時間</td>
    <td>建立者</td>
    <td>開放</td>
    <td>操作</td>
  </tr>
<?php
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    echo "<tr>";
    echo "<td>{$title}</td>";
    echo "<td><img src='images/{$image}' width='200'/></td>";
    echo "<td>{$time}</td>";
    echo "<td>{$creater}</td>";
    echo "<td>{$close}</td>";
    echo "<td><a href='update.php?id={$seq}'>修改</a></td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>