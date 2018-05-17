<?php
    include_once("head.php");
    $sql="select * from zoo";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);
    // while($row=mysqli_fetch_assoc($result)){
    //     echo $row['zoo_name']."<br>";
    // }

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
    <tr>
        <td><?php echo $row["zoo_name"] ?></td>
        <td><?php echo $row["zoo_food_type"] ?></td>
        <td><?php echo $row["zoo_cnt"] ?></td>
        <td><?php echo $row["zoo_seq"] ?></td>
        <td><a href="test20180517_3a.php?id=<?php echo $row["zoo_seq"] ?>">刪除</td>
    </tr>
<?php }while($row=mysqli_fetch_assoc($result)); ?>
</table>

