<?php 
    include("_header.php");
    if(empty($_SESSION["uid"])){
        header("location:login.php");
        exit();
    }
    // if(empty($_REQUEST['id'])){
    //     header("location:read.php?msg=請選擇一個人");
    //     exit();
    // }
    // $id=$_REQUEST['id'];
    $id=$_SESSION["uid"];
    $query="select * from users where u_id = '{$id}';";
    $stmt=mysqli_query($conn,$query)  or die(mysqli_error());
    $row=mysqli_fetch_assoc($stmt);
    if (isset($_POST['submit'])){
        switch($_POST['submit']){
            case 'edit':
                $query="update users set 
                        u_pw='{$_REQUEST['pw']}', 
                        u_email='{$_REQUEST['email']}', 
                        u_updated='{$_REQUEST['updated']}' 
                        where u_id='{$id}';";
                if($_FILES["pic"]["error"] == 0)
                {
                    $_type="修改圖片";//_________log
                    $query = "INSERT INTO login_log VALUES (NULL, '{$_SESSION["uid"]}','{$_type}','{$ip}','{$timeTaipei}','0');";
                    $stmt=mysqli_query($conn,$query) or die(mysqli_error());
                    copy($_FILES["pic"]['tmp_name'],"images/$id.jpg");
                    // if(copy($_FILES["pic"]['tmp_name'],"images/$id.jpg")){
                    //     unlink($_FILES["pic"]['tmp_name']);
                    // }
                }
                break;
            case 'delete':
                $query="update users set 
                u_updated='{$_REQUEST['updated']}',
                u_del=1  
                where u_id='{$id}';";
                break;
            default:
                exit();
        }
        $stmt=mysqli_query($conn,$query);
        if(!$stmt){
            die(mysqli_error());
        }
        // else{            
        //     echo "<script>alert('修改成功');</script>";
        // }
        $_type="更新會員資料";//_________log
        $query = "INSERT INTO login_log VALUES (NULL, '{$id}','{$_type}','{$ip}','{$_REQUEST['updated']}','0');";
        $stmt=mysqli_query($conn,$query) or die(mysqli_error());
        $query="select * from users where u_id = '{$id}';";
        $stmt=mysqli_query($conn,$query)  or die(mysqli_error());
        $row=mysqli_fetch_assoc($stmt);
        header("location:update.php?msg=修改成功");
    }
?>
<!-- _________________________________________________ -->
	<main>
        <form action="update.php" method="post" id="form1" enctype="multipart/form-data">
            <table align="center">
                <caption><h1>更新</h1></caption>
                <tr>
                    <th><img src="images/<?php echo $row['u_id']; ?>.jpg" alt="" width="200px"></th>
                </tr>
                <tr>
                    <th>帳號</th>
                </tr>
                <tr>
                    <td><?php echo $row['u_id']; ?></td>
                </tr>
                <tr>
                    <th>密碼</th>
                </tr>
                <tr>
                    <td><input type="text" name="pw" id="pw" value="<?php echo $row['u_pw']; ?>"></td>
                </tr>
                <tr>
                    <th>Email</th>
                </tr>
                <tr>
                    <td><input type="text" name="email" id="email" value="<?php echo $row['u_email']; ?>"></td>
                </tr>
                <tr>
                    <th>上傳相片</th>
                </tr>
                <tr>
                    <td><input type="file" name="pic" id="pic"></td>
                </tr>
                <tr>
                    <td align='center'>
                        <p><input type="submit" name="submit" value="edit"></p>
                        <?php 
                            // if($id=="admin"){
                            //     echo "&nbsp";
                            //     echo "&nbsp";
                            //     echo "&nbsp";
                            //     echo "<input type='submit' name='submit' value='delete'></p>";
                            // }
                        ?>                        
                    </td>
                </tr>
            </table>
            <tr>
            <input type="hidden" name="updated" value="<?php echo $timeTaipei; ?>">
            <input type="hidden" name="id" value="<?php echo $row['u_id']; ?>">
        </form>            
    </main>
    <!-- _________________________________________________ -->
<?php 
    include("_footer.php");
?>