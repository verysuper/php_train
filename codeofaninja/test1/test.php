<?php

    
    $sql = "SHOW COLUMNS FROM your-table";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
        echo $row['Field']."<br>";
    }
?>