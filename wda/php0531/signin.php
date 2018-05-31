<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
if(!isset($_POST["account"]) && !isset($_POST["pw"])){
?>
<body>
<form action="" method="post">
    <p>登入</p>
    <P>account:<input type="text" name="account" required></P>
    <P>password:<input type="password" name="pw" required></P>
    <p><input type="submit" value="送出"></p>
</form>
</body>
</html>

<?php
}
else
{
    try{
        include("database.php");
        $account=$_POST["account"];
        $pw=$_POST["pw"];
        $sql = "select password from member_05 where account = ?";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(1,$account);
        $stmt->execute();
        if($num = $stmt->rowCount() != 1)
            throw new PDOException("無此帳號");
        $result = $stmt->fetch();
        print_r($result);
        if($pw != $result["password"])
            throw new PDOException("密碼錯誤");
        session_start();
        $_SESSION["uid"] = $account;
        header("location:news_create.php");
    }
    catch(PDOException $ex){
        die("Sign in Message: ".$ex->getMessage());
    }
}
?>