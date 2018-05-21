<?php
    include_once("database.php");
    include_once("zoo.php");

    // get database connection
    // $database = new Database();
    // $db = $database->getConnection();

    // $Zoo = new Zoo($db);
    // $stmt = $Zoo->read();

    // while ($row_zoo = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     extract($row_zoo);
    //     echo "{$zoo_name}<br/>";
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
<?php 
    $database = new Database();
    $db = $database->getConnection();
    
    $Zoo = new Zoo($db);
    $stmt = $Zoo->read();
    while ($row_zoo = $stmt->fetch(PDO::FETCH_ASSOC)){ 
        extract($row_zoo);
        echo "<form method='post' action='test20180517_4a.php'>";
        echo    "<tr>";
        echo        "<td><input type='text' name='zoo_name' value='$zoo_name'></td>";
        echo        "<td><input type='text' name='zoo_food_type' value='$zoo_food_type'></td>";
        echo        "<td><input type='text' name='zoo_cnt' value='$zoo_cnt'></td>";
        echo        "<td><input type='text' name='zoo_seq' value='$zoo_seq'></td>";
        echo        "<td><a href='test20180517_3a.php?id='$zoo_seq'>刪除</a>";
        echo            "<input type='submit' value='修改'>";
        echo            "</td>";
        echo    "</tr>";
        echo"</form>";
     } 
 ?>
</table>