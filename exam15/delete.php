<?php
    require_once("config.php");
    if(empty($_SESSION["uid"])){
        header("location:login.php");
        exit();
    }
    $uid = $_SESSION["uid"];
    $query="select * from users where u_id = '$uid';";
    $stmt=mysqli_query($conn,$query)  or die(mysqli_error());
    $row=mysqli_fetch_assoc($stmt);
    // extract($row);
    echo $row["u_admin"];
    if($row["u_admin"] == '0'){
        header("location:login.php?msg=權限不足");
        exit();
    }
    if(!empty($_REQUEST["id"])){//_________log
        $_type="封鎖帳號:".$_REQUEST["id"];//_________log
        $query = "INSERT INTO login_log VALUES (NULL, '{$_SESSION["uid"]}','{$_type}','{$ip}','{$timeTaipei}','0');";
        $stmt=mysqli_query($conn,$query) or die(mysqli_error());
        
        $query="update users set u_updated='{$_REQUEST['updated']}', u_del=1  where u_id='{$_REQUEST["id"]}';";
        $stmt=mysqli_query($conn,$query) or die(mysqli_error());
        header("location:admin.php?msg=修改成功");
    }    
?>