<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        table{
            margin:auto;
        }
    </style>
</head>
<?php
    include_once('database.php');
    $t1 = floor(microtime()*1000);
    try{
        $sql="select * from vendor";
        // $stmt=$conn->query($sql);
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    catch(PDOException $ex){
        die("DB error: ".$ex->getMessage());
    }
?>
<body>
    <table border='1' style=''>
        <caption>表</caption>
        <tr>
            <th>seq</th>
            <th>name</th>
            <th>con</th>
        </tr>
        <?php
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                echo "  <tr>
                            <td>{$v_seq}</td>
                            <td>{$v_name}</td>
                            <td>{$v_con}</td>
                        </tr>";
            }
            // foreach($stmt as $row)
            // {
            //     echo "<tr>
            //         <td>{$row['v_seq']}</td>
            //         <td>{$row['v_name']}</td>
            //         <td>{$row['v_con']}</td>
            //         </tr>";
            // }
            $t2 = floor(microtime()*1000);
            echo $t1-$t2;
        ?>
        
    </table>
</body>
</html>