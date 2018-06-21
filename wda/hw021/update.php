<?php 
    require_once("config.php");
    if(empty($_SESSION["uid"])){
        header("location:login.php");
        exit();
    }
    if(empty($_REQUEST['id'])){
        header("location:read.php?msg=請選擇一個人");
        exit();
    }
    $id=$_REQUEST['id'];
    $query="select * from user where id = '{$id}';";
    $stmt=mysqli_query($conn,$query)  or die(mysqli_error());
    $row=mysqli_fetch_assoc($stmt);
    if (isset($_POST['submit'])){        
        $fileName=strtotime("now")."_".$_FILES["pic"]["name"];
        echo "檔案名稱: ".$fileName."<br/>";//------------        
        exit();//------------
        switch($_POST['submit']){
            case 'edit':
                $query="update user set 
                        pw='{$_REQUEST['pw']}', 
                        email='{$_REQUEST['email']}', 
                        pic=''
                        updated='{$_REQUEST['updated']}' 
                        where id='{$id}';";
                break;
            case 'delete':
                $query="update user set 
                updated='{$_REQUEST['updated']}',
                del=1  
                where id='{$id}';";
                break;
            default:
                exit();
        }
        $stmt=mysqli_query($conn,$query);
        if(!$stmt){
            die(mysqli_error());
        }
        else{
            // echo "update success";
            header("location:read.php?msg=修改成功");
            exit();
        }
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
        <form action="update.php" method="post" id="form1" enctype="multipart/form-data">
            <table align="center">
                <caption><h1>更新</h1></caption>
                <tr>
                    <td>帳號</td>
                </tr>
                <tr>
                    <td><?php echo $row['uid']; ?></td>
                </tr>
                <tr>
                    <td>密碼</td>
                </tr>
                <tr>
                    <td><input type="text" name="pw" id="pw" value="<?php echo $row['uid']; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                </tr>
                <tr>
                    <td><input type="text" name="email" id="email" value="<?php echo $row['email']; ?>"></td>
                </tr>
                <tr>                    
                    <td>上傳圖片</td>
                </tr>
                <tr>                    
                    <td><input type="file" name="pic" id="pic"></td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="updated" value="<?php echo $timeTaipei; ?>">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>&nbsp;</p>
                        <p><input type="submit" name="submit" value="edit">
                        &nbsp;
                        &nbsp;
                        <input type="submit" name="submit" value="delete"></p>
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