<?php
    include_once("head.php");

    if(!empty($_POST["zoo_name"]))
    {
        //var_dump($_POST["zoo_name"]);
        for($i = 0 ; $i < count($_POST["zoo_name"]) ; $i++)
        {
            $sql="UPDATE zoo 
            SET zoo_name='{$_POST["zoo_name"][$i]}',
            zoo_food_type='{$_POST["zoo_food_type"][$i]}',
            zoo_cnt='{$_POST["zoo_cnt"][$i]}' 
            WHERE zoo_seq = {$_POST["zoo_seq"][$i]}";
            //mysqli_query($link,$sql,MYSQLI_USE_RESULT);
            echo mysqli_query($link,$sql,MYSQLI_USE_RESULT);
        }        
    }
    $sql="select * from zoo";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);
?>
<form method="post" action="">
<table border="1">
    <tr>
        <td>no</td>
        <td>name</td>
        <td>food</td>
        <td>amount</td>        
        <!-- <td>action</td> -->
    </tr>
<?php do{ ?>
    <tr>
        <td><?php echo $row["zoo_seq"] ?></td>
        <td><input type="text" name="zoo_name[]" value="<?php echo $row["zoo_name"] ?>"></td>
        <td><input type="text" name="zoo_food_type[]" value="<?php echo $row["zoo_food_type"] ?>"></td>
        <td><input type="text" name="zoo_cnt[]" value="<?php echo $row["zoo_cnt"] ?>"></td>
        <input type="hidden" name="zoo_seq[]" value="<?php echo $row["zoo_seq"] ?>">
        <!-- <td><a href="test20180517_3a.php?id=<?php echo $row["zoo_seq"] ?>">刪除</a></td> -->
    </tr>

<?php }while($row=mysqli_fetch_assoc($result)); ?>
    <tr>
        <td colspan="5"><input type="submit" value="修改"></td>
    </tr>
</table>
</form>