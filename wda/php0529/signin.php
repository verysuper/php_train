<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<form action="" method="post">
    <p>登入</p>
    <P>account:<input type="text" name="account" required="required"></P>
    <P>password:<input type="password" name="pw" required="required"></P>
    <p><input type="submit" value="送出"></p>
</form>
</body>
</html>

<?php

include("database.php");
$message = 0;
if(isset($_POST["account"]))
{
    $account = $_POST["account"];
    try{
        if($ip_status != "")
            throw new PDOException($ip_status);
        $sql = "select password from member_05 where account = ? and deleted = 0";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(1, $account);
        $stmt->execute();
        $result = $stmt->fetch();
        if($result[0] < 1)
        {
            throw new PDOException("無此帳號");
        }
        $pw = isset($_POST["pw"])?$_POST["pw"]:die('ERROR: password don\'t null.');
        if($pw == $result[0])
        {
            session_start();
            $_SESSION["uid"] = $account;
            header("location:admin.php");
        }
        else
        {
            throw new PDOException("密碼錯誤");
        }
    }
    catch(PDOException $ex){
        $message = 1;
        //die('ERROR: ' . $ex->getMessage());
        echo 'ERROR: ' . $ex->getMessage() .'';
    }
    finally
    {
        $sql="insert into login_log value(
            null,'{$account}','{$message}','{$ip}','{$dateTime}')";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $time = date("Y-m-d H:i:s",strtotime("-10min"));
        $sql = "select * from login_log 
        where ll_ip = '{$ip}' and ll_time >='{$time}' order by ll_time desc limit 3";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        //$num = $stmt->rowCount();
        $wrong_total = 0;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $wrong_total = $wrong_total + $ll_jo;
        }
        if($wrong_total==3)
        {
            $retime = date("Y-m-d H:i:s",strtotime("+10min"));
            echo ",錯誤次數超過3次,封鎖ip";
            $sql="insert into block_account value(null,'{$ip}','{$retime}',1)";
            $stmt = $con->prepare($sql);
            $stmt->execute();
        }
    }
}
?>