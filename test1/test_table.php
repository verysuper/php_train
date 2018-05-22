<?php
    include_once("database.php");
    include_once("category.php");

    // get database connection
    $database = new Database();
    $db = $database->getConnection();

    $category = new Category($db);
    $stmt = $category->read();
    echo "<table border='1'>";
    while ($row_category = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row_category);
        echo "<tr><td>{$id}</td><td>{$name}</td></tr>";
    }
    echo "</table>";

    //______________________________________________get object public proporty
    include_once("product.php");
    $Product = new Product($db);
    // $col = get_object_vars($Product);
    echo "<table border='1'><tr>";
    foreach(get_object_vars($Product) as $key => $value){
        echo "<td>{$key}</td>";
    }            
    echo "</tr></table>";

?>