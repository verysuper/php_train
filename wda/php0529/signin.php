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
if(isset($_POST["account"]))
{
    $account = $_POST["account"];
    try{
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
        die('ERROR: ' . $ex->getMessage());
    }
}
?>