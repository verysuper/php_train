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
// echo "123";
// exit();
session_start();
if( empty($_SESSION["uid"])){
    header("location:signin.php");
    exit();
  }
include_once("database.php");
$sql="select * from member_05 where deleted=0";
$stmt = $con->prepare($sql);
$stmt->execute();
$num = $stmt->rowCount();
if($num>0):
?>
<form action="update.php" method="post">
<table border='1'>
<tr>
<th>account</th>
<th>password</th>
<th>nick</th>
<th>sex</th>
<th>action</th>
</tr>
<?php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    echo "<tr>";
    echo "<td><input type='hidden' name='seq[]' value='{$seq}'>{$account}</td>";
    echo "<td>{$password}</td>";
    echo "<td><input type='text' name='nick[]' value='{$nick}'></td>";
    echo "<td>{$sex}</td>";
    echo "<td>
            <a href='delete.php?seq={$seq}'>刪除</a>
        </td>";
    echo "</tr>";
}
echo $ip;
endif;
?>
<tr>
    <td colspan="5" align="center">
        <input type='submit' value='修改'><a href="signout.php">登出</a>
    </td>
</tr>
</table>
</form>
</body>