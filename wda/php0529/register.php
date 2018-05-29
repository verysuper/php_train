<?php
    if (empty($_POST['account'])&&
        empty($_POST['pw'])&&
        empty($_POST['nick'])&&
        empty($_POST['sex'])):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="">
<p>註冊帳號</p>
<p>account:<input type="text" name="account" required="required"></p>
<p>password:<input type="password" name="pw" required="required"></p>
<p>Nick:<input type="text" name="nick" required="required"></p>
<p>
    sex:
    <select name="sex" required="required">
        <option value="" selected="selected"></option>
        <option value="f">女</option>
        <option value="m">男</option>
    </select>
</p>
<p><input type="submit" value="送出"><input type="reset" value="重設"></p>
</form>
</body>
</html>

<?php
    else:
        try{
            include_once("database.php");
            $account=htmlspecialchars(strip_tags($_POST['account']));
            $pw=htmlspecialchars(strip_tags($_POST['pw']));
            $nick=htmlspecialchars(strip_tags($_POST['nick']));
            //$sex=htmlspecialchars(strip_tags($_POST['sex']));
            $sex=$_POST['sex'];
            $sql="SELECT EXISTS (select * from member_05 where account = '$account')";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch();
            //echo $result[0];
            if($result[0]<1){
                $sql = "insert into
                        member_05 
                        set
                        seq=NUll,
                        account=:account,
                        password=:pw,
                        nick=:nick,
                        sex=:sex,
                        created=:created";
                $stmt = $con->prepare($sql);
                $stmt->bindParam(':account', $account);
                $stmt->bindParam(':pw', $pw);
                $stmt->bindParam(':nick', $nick);
                $stmt->bindParam(':sex', $sex);
                $stmt->bindParam(':created', $dateTime);
                $stmt->execute();
                echo "帳號建立成功";
            }
            else{
                echo "帳號已存在";
            }

        }
        catch(PDOException $ex){
            die('ERROR: ' . $exception->getMessage());
        }
    exit;
    endif;
?>