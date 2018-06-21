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
        <form action="register.php" method="post" id="form1">
            <table align="center">
                <caption><h1>註冊會員</h1></caption>
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
                    <td>Email</td>
                </tr>
                <tr>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="created" value="<?php echo $timeTaipei; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <p>&nbsp;</p>
                        <p><input type="submit" name="submit" value="註冊"><p>                        
                        <p><a href="login.php">登入</a></p>
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
    if (isset($_POST['submit']))
    {
        if(empty($_POST['uid'])){
            exit();
        }
        $uid = $_POST['uid'];
        $pw = $_POST['pw'];
        $email = $_POST['email'];
        $created = $_POST['created'];
        $query = "SELECT * FROM user WHERE uid = '{$uid}' LIMIT 1";
        $stmt=mysqli_query($conn,$query) or die(mysqli_error());
        // $row = mysqli_fetch_assoc($stmt);
        // print_r($row);
        if($stmt->num_rows==1){
            echo "<script>alert('existed');</script>";
        }else{
            $query = "INSERT INTO user VALUES 
                    (NULL,'$uid','$pw','$email','$created','$created',0);";
            $stmt = mysqli_query($conn, $query) or die(mysqli_error());
            echo "<script>alert('success');</script>";
            header ("Location: login.php");
            
        }
    }
?>