<?php 
    require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <nav>
        <label for="show-menu">
            <span><i class="fas fa-bars"></i></span>
			<span>
                
            </span>
        </label>
        <input type="checkbox" id="show-menu">
        <ul id="menu">
            <li><a href="register.php" title="註冊"><i class="fas fa-ambulance"></i></a></li>
            <li><a href="read.php" title="會員"><i class="fas fa-procedures"></i></a></li>
            <li><a href="update.php" title="更新"><i class="fas fa-syringe"></i></a></li>
            <li><a href="block_read.php" title="已刪除"><i class="fas fa-skull"></i></a></li>
<?php 
    if(empty($_SESSION["uid"]))
        echo "<li><a href='login.php' title='登入'><i class='fas fa-sign-in-alt'></i></a></li>";
    else
        echo "<li><a href='logout.php' title='登出'><i class='fas fa-sign-out-alt'></i></a></li>";
?>
        </ul>
    </nav>
<!-- _________________________________________________ -->
	<main>
        <form action="login.php" method="post" id="form1">
            <table align="center">
                <caption><h1>登入</h1></caption>
                <tr>
                    <td>帳號</td>
                </tr>
                <tr>
                    <td><input type="text" name="uid" id="uid"></td>
                </tr>
                <tr>
                    <td>密碼</td>
                </tr>
                <tr>
                    <td><input type="text" name="pw" id="pw"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="time" value="<?php echo $timeTaipei; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <p>&nbsp;</p>
                        <p><input type="submit" name="submit" value="登入"><p>                        
                        <p><a href="register.php">註冊</a></p>
                    </td>
                </tr>
            </table>            
        </form>
    </main>
    <!-- _________________________________________________ -->
	<footer>
		這是頁尾
    </footer>
    </body>
</html>
<?php
    if (isset($_POST['submit'])){
        if(empty($_POST['uid'])){
            exit();
        }
        $uid = $_POST["uid"];
        $pw = $_POST["pw"];
        $currentTime=$_POST["time"];
        $ip = $_SERVER["REMOTE_ADDR"];
        $query = "select * from block_log 
        where uip = '{$ip}' and open_block > '{$currentTime}' 
        order by open_block desc limit 1 ;";
        $stmt = mysqli_query($conn,$query)  or die(mysqli_error());
        if($stmt->num_rows > 0){
            $row =mysqli_fetch_assoc($stmt);
            if($row["type"]==1){
                $msg="帳號密碼錯誤超過3次,解鎖時間".$row["open_block"];
                echo "<script>alert('{$msg}');</script>";
            }
            exit();
        }
        $query = "select * from user 
                where uid = '{$uid}' and pw = '{$pw}' LIMIT 1;";
        $stmt = mysqli_query($conn,$query)  or die(mysqli_error());
        if($stmt->num_rows==1){
            $row=mysqli_fetch_assoc($stmt);
            if($row['del']==1){
                echo "<script>alert('帳號已上鎖,請隔壁幫你開鎖');</script>";
                exit();
            }
            $query = "insert into login_log 
                    values(null,'$uid',0,'$ip','$currentTime');"; //紀錄登入成功
            $stmt = mysqli_query($conn,$query) or die(mysqli_error());
            $_SESSION['uid'] = $uid;
            header("location:read.php");
        }else{            
            $query = "insert into login_log 
                    values(null,'$uid',1,'$ip','$currentTime');";  //紀錄登入失敗
            $stmt = mysqli_query($conn,$query) or die(mysqli_error());
            $records = date("Y-m-d H:i:s",strtotime("-5min"));
            $query = "select * from login_log 
                        where 	uip = '$ip' and status_time >='$records' 
                        order by status_time desc limit 3";  //查詢登入失敗的ip
            $stmt = mysqli_query($conn,$query) or die(mysqli_error());
            $errs=0;
            while($row =mysqli_fetch_assoc($stmt)){
                extract($row);
                $errs = $errs + $status;
            }
            $msg="帳號密碼錯誤,錯誤次數{$errs}";
            echo "<script>alert('{$msg}');</script>";
            if($errs == 3){
                $blockTime = date("Y-m-d H:i:s",strtotime("+10min"));
                $query = "insert into block_log 
                        values(null,'$ip','$blockTime',1)";
                mysqli_query($conn,$query) or die(mysqli_error());
                $msg= "封鎖IP，{$blockTime} 後再試";
                echo "<script>alert('{$msg}');</script>";
            }
        }
    }
?>