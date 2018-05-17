<?php
    $link=mysqli_connect('localhost','root','','php2018');
    mysqli_query($link,'SET names UTF8');
    $sql="select * from zoo where zoo_food_type != '噴'";
    $r0 = mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($r0);
    do{
        echo $row['zoo_name'].'吃'.$row['zoo_food_type'].',總數:'.$row['zoo_cnt'].'<br>';
    }while($row=mysqli_fetch_assoc($r0));
    
?>
