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
	<link rel="stylesheet" href="css/style.css" type="text/css">
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
            <!-- <li><a href="register.php" title="註冊"><i class="fas fa-ambulance"></i></a></li>
            <li><a href="read.php" title="會員"><i class="fas fa-procedures"></i></a></li>            
            <li><a href="block_read.php" title="已刪除"><i class="fas fa-skull"></i></a></li>
            <li><a href="MultiUpload.php" title="上傳檔案"><i class="fas fa-syringe"></i></a></li> -->
            <li><a href="register.php" title="註冊">註冊</a></li>
            <li><a href="read.php" title="會員">會員</a></li>            
            <li><a href="block_read.php" title="已刪除">已刪除</a></li>
            <li><a href="MultiUpload.php" title="上傳檔案">上傳檔案</a></li>
<?php 
    // if(empty($_SESSION["uid"]))
    //     echo "<li><a href='login.php' title='登入'><i class='fas fa-sign-in-alt'></i></a></li>";
    // else
    //     echo "<li><a href='logout.php' title='登出'><i class='fas fa-sign-out-alt'></i></a></li>";
    if(empty($_SESSION["uid"]))
        echo "<li><a href='login.php' title='登入'>登入</a></li>";
    else
        echo "<li><a href='logout.php' title='登出'>登出</a></li>";
?>
        </ul>
    </nav>