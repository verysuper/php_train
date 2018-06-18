<?php 
    require_once("config.php");
    if(empty($_SESSION["uid"])){
        header("location:login.php");
        exit();
    }
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
        <table align="center">
            <caption><h1>已刪除</h1></caption>
            <tr>
                <td>id</td>
                <td>uid</td>
                <td>pw</td>
                <td>email</td>
                <td>created</td>
                <td>updated</td>
                <td>del</td>
                <td>action</td>
            </tr>
<?php
    $query="select * from user where del=1;";
    $stmt=mysqli_query($conn,$query)  or die(mysqli_error());
    while($row=mysqli_fetch_assoc($stmt)){
        extract($row);
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td>{$uid}</td>";
        echo "<td>{$pw}</td>";
        echo "<td>{$email}</td>";
        echo "<td>{$created}</td>";
        echo "<td>{$updated}</td>";
        echo "<td>{$del}</td>";
        echo "<td><a href='block_update.php?id={$id}'>修改</a></td>";
        echo "</tr>";
    }
?>
        </table>
    </main>
    <!-- _________________________________________________ -->
	<footer>
		這是頁尾
    </footer>
    </body>
</html>
<?php
    if(!empty($_GET['msg'])){
        echo "<script>alert('{$_GET['msg']}');</script>";
    }
?>