<?php 
    include("_header.php");
?>
<!-- _________________________________________________ -->
	<main>
        <form action="login.php" method="post" id="form1">
            <table align="center">
                <caption><h1>登入</h1></caption>
                <tr>
                    <th>帳號</th>
                </tr>
                <tr>
                    <td><input type="text" name="uid" id="uid"></td>
                </tr>
                <tr>
                    <th>密碼</th>
                </tr>
                <tr>
                    <td><input type="text" name="pw" id="pw"></td>
                </tr>
                <tr>
                    <td align='center'>
                        <hr>
                        <p><input type="submit" name="submit" value="登入"><p>                        
                        <p><a href="register.php">註冊</a></p>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="time" value="<?php echo $timeTaipei; ?>">
        </form>
    </main>
    <!-- _________________________________________________ -->
<?php
    include("_footer.php");
    if (isset($_POST['submit'])){
        if(empty($_POST['uid'])){
            exit();
        }
        $uid = $_POST["uid"];
        $pw = $_POST["pw"];
        $currentTime=$_POST["time"];
        $ip = $_SERVER["REMOTE_ADDR"];
        //________________________________
        $query = "SELECT * FROM users WHERE u_id = '{$uid}' LIMIT 1";
        $stmt=mysqli_query($conn,$query) or die(mysqli_error());
        $_type="";
        if($stmt->num_rows < 1){
            echo "<script>alert('account not exist');</script>";
            exit();
        }
        $query = "select * from block_log 
        where uip = '{$ip}' and open_block > '{$currentTime}' 
        order by open_block desc limit 1 ;";
        $stmt = mysqli_query($conn,$query)  or die(mysqli_error());
        if($stmt->num_rows > 0){
            $row =mysqli_fetch_assoc($stmt);
            if($row["type"]==1){
                $msg="帳號密碼錯誤超過3次,IP鎖定,解鎖時間".$row["open_block"];
                echo "<script>alert('{$msg}');</script>";
            }
            $_type="ip被鎖定";//_________log
            $query = "INSERT INTO login_log VALUES (NULL,'{$uid}','{$_type}','{$ip}','{$currentTime}','0');";
            $stmt=mysqli_query($conn,$query) or die(mysqli_error());
            exit();
        }
        $query = "select * from users 
                where u_id = '{$uid}' and u_pw = '{$pw}' LIMIT 1;";
        $stmt = mysqli_query($conn,$query)  or die(mysqli_error());
        if($stmt->num_rows==1){
            $row=mysqli_fetch_assoc($stmt);
            if($row['u_del']==1){
                $_type="帳號被鎖定";//_________log
                $query = "INSERT INTO login_log VALUES (NULL, '{$uid}', '{$_type}', '{$ip}', '{$currentTime}','0');";
                $stmt=mysqli_query($conn,$query) or die(mysqli_error());
                echo "<script>alert('帳號已封鎖,請管理員幫你復活');</script>";
                exit();
            }
            $query = "insert into login_log 
                    values(null,'$uid','登入成功','$ip','$currentTime','0');"; //紀錄登入成功
            $stmt = mysqli_query($conn,$query) or die(mysqli_error());
            $_type="登入成功";//_________log
            $query = "INSERT INTO login_log VALUES (NULL, '{$uid}','{$_type}','{$ip}','{$currentTime}','0');";
            $stmt=mysqli_query($conn,$query) or die(mysqli_error());
            $_SESSION['uid'] = $uid;
            // echo $_SESSION['uid'];
            // exit();
            header("location:index.php");
        }else{            
            $query = "insert into login_log 
                    values(null,'{$uid}','帳號密碼錯誤','$ip','$currentTime','1');";  //紀錄登入失敗
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
                $blockTime = date("Y-m-d H:i:s",strtotime("+5min"));
                $query = "insert into block_log 
                        values(null,'$uid','$ip','$blockTime',1)";
                mysqli_query($conn,$query) or die(mysqli_error());
                $msg= "封鎖IP，{$blockTime} 後再試";
                echo "<script>alert('{$msg}');</script>";
            }
        }
    }
?>