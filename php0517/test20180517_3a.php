<?php
    include_once("head.php");
    
    if(!empty($_GET["id"]))
    {
        $id=$_GET["id"];
        $sql = "SELECT * FROM zoo where zoo_seq = $id";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_assoc($result);
        $cnt = mysqli_num_rows($result);
        //echo $cnt;
        if($cnt < 1){
            echo "查無此資料";
        }else{            
            $sql="DELETE FROM zoo  WHERE zoo_seq = $id";
            mysqli_query($link,$sql);
            echo "刪除成功";
        }
    }
    header("Location:test20180517_4.php");
?>