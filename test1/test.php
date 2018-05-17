<?php
    include_once("database.php");
    include_once("category.php");

    // get database connection
    $database = new Database();
    $db = $database->getConnection();

    $category = new Category($db);
    $stmt = $category->read();

    while ($row_category = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row_category);
        echo "<option value='{$id}'>{$name}</option>";
    }
?>