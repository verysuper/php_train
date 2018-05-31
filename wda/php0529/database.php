<?php
    $dateTime = date("Y-m-d H:i:s",strtotime("now"));
    
    $host = "localhost";
    $dbName = "myphp_2018_05";
    $user = "root";
    $pw = "";
    $ip_status= "" ;
    try{
        //$ip = $_SERVER["REMOTE_ADD"];
        $con=new PDO("mysql:host={$host};dbname={$dbName};charset=UTF8",$user,$pw);        
        $ip = $_SERVER["REMOTE_ADDR"];
        $sql="select * from block_account 
            where bl_ip = '{$ip}' and bl_time > '{$dateTime}' 
            order by bl_time desc limit 1";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        
        $num = $stmt->rowCount();
        //print_r($result);
        if($num > 0)
        {
            $result = $stmt->fetch();
            $ip_status = "請".$result["bl_time"]."後再試";
            //echo $id_status;
        }

    }
    catch(PDOException $ex){
        die("DB Error: ".$ex->getMessage());
    }
    //echo $dateTime;
    
?>