<?php
    include_once("database.php");
    include_once("category.php");

    // get database connection
    $database = new Database();
    $db = $database->getConnection();

    // $category = new Category($db);
    // $stmt = $category->read();
    // echo "<table border='1'>";
    // while ($row_category = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     extract($row_category);
    //     echo "<tr><td>{$id}</td><td>{$name}</td></tr>";
    // }
    // echo "</table>";
    //______________________________________________get object public proporty
    include_once("product.php");
    //$Product = new Product($db);
    // var_dump(get_object_vars($Product)); //打印变量的相关信息
    // echo "<table border='1'><tr>";
    // foreach(get_object_vars($Product) as $key => $value){
    //     echo "<td>{$key}</td>";
    // }            
    // echo "</tr></table>";

    $stmt = $db->prepare( "SELECT * FROM products" );
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<form method='post'><table border='1'><tr>";
    $numCol = count($result[0]);
    $numRow = $stmt->rowCount();
    //$colName = array();
    $total=0;
    foreach($result[0] as $key => $value){
        $colName[$total]  = $key;
        echo "<td>{$key}</td>";
        $total++;
    }
    echo "</tr>";
    // while($result){
    for($i=0;$i<$numRow;$i++){
        echo "<tr>";
        for($j=0;$j<$numCol;$j++){
            // echo "<td>{$result[$i][$colName[$j]]}</td>";
            echo "<td><input type='text' name='{$colName[$j]}[]' value='{$result[$i][$colName[$j]]}'></td>";
        }
        echo "</tr>";
    }    
    echo "<tr><td colspan='$numCol'><input type='submit' value='修改'></td></tr></table></form>";
    //_____________________________________________________________
    //1.CREATE TEMPORARY TABLE temp ... ENGINE = MEMORY;
    //2.INERT INTO temp ... VALUES ..., ...;
    //3.UPDATE target, temp SET target.name = temp.name WHERE target.id = temp.id;
    if($numRow > 0)
    {
        $sql = "CREATE TEMPORARY TABLE temp (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `name` varchar(32) NOT NULL,
            `description` text NOT NULL,
            `price` int(11) NOT NULL,
            `category_id` int(11) NOT NULL,
            `created` datetime NOT NULL,
            `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`)
          ) ENGINE = MEMORY DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;";
            $stmt = $db->prepare( $sql );
            $stmt->execute();
    }

?>