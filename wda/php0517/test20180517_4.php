<?php
    include_once("head.php");
    $sql="select * from zoo";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);

?>

<table border="1">
    <tr>
        <td>name</td>
        <td>food</td>
        <td>amount</td>
        <td>no</td>
        <td>action</td>
    </tr>
<?php do{ ?>
<form method="post" action="test20180517_4a.php">
    <tr>
        <td><input type="text" name="zoo_name" value="<?php echo $row["zoo_name"] ?>"></td>
        <td><input type="text" name="zoo_food_type" value="<?php echo $row["zoo_food_type"] ?>"></td>
        <td><input type="text" name="zoo_cnt" value="<?php echo $row["zoo_cnt"] ?>"></td>
        <td><input type="text" name="zoo_seq" value="<?php echo $row["zoo_seq"] ?>"></td>
        <td><a href="test20180517_3a.php?id=<?php echo $row["zoo_seq"] ?>">刪除</a>
            <input type="submit" value="修改">
            </td>
    </tr>
</form>
<?php }while($row=mysqli_fetch_assoc($result)); ?>
</table>
