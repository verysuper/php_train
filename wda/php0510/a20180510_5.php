<?php

    if(!empty($_POST["oo"])){
        $link=mysqli_connect('localhost','root','','php2018');
        mysqli_query($link,'SET names UTF8');
        $sql="select * from zoo";
        $r0 = mysqli_query($link,$sql);
        $row=mysqli_fetch_assoc($r0);
        $cnt = 0;
        //$cnt=mysqli_num_rows($r0);
        do{
            if($_POST["oo"] == $row['zoo_name']){
                echo $row['zoo_name'].'吃'.$row['zoo_food_type'].',總數:'.$row['zoo_cnt'].'<br>';
                $cnt++;
            }
            
        }while($row=mysqli_fetch_assoc($r0));
        if($cnt == 0){
            echo "找不到";
        }
    }    
    
?>
<form action="a20180510_5.php" method="post">
    <input type="text" name="oo">
    <input type="submit" value="submit">
</form> 