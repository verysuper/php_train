<?php 
    include("_header.php");
?>
<!-- _________________________________________________ -->
	<main>
        <form action="register.php" method="post" id="form1" enctype="multipart/form-data">
            <table align="center">
                <caption><h1>註冊會員</h1></caption>
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
                    <th>Email</th>
                </tr>
                <tr>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <!-- <tr>
                    <th>上傳相片</th>
                </tr>
                <tr>
                    <td><input type="file" name="pic" id="pic" /></td>
                </tr> -->
                <tr>
                    <td>
                        <hr>
                        <p><input type="submit" name="submit" value="註冊"><p>                        
                        <p><a href="login.php">登入</a></p>
                    </td>
                </tr>
            </table>
            <!-- <input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="2097152" /> -->
            <input type="hidden" name="created" value="<?php echo $timeTaipei; ?>">
        </form>
    </main>
    <!-- _________________________________________________ -->
<?php    
    include("_footer.php");
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
            echo "<script>alert('account existed');</script>";
        }else{
            $query = "INSERT INTO user VALUES 
                    (NULL,'$uid','$pw','$email','$created','$created',0);";
            $stmt = mysqli_query($conn, $query) or die(mysqli_error());
            // $pid=mysqli_insert_id($conn);
            // $file = $_FILES["pic"];
            // if(strrpos($file['name'],"png")==""){
            //     header ("Location: register.php?msg=aaaaaaaaaaaaaaaaaa");    
            // }
            // else{
            //     if(copy($file['tmp_name'],"images/$pid.png")){
            //         unlink($file['tmp_name']);
            //     }
            // }

            header ("Location: login.php?msg=register success,請登入");            
        }
    }
?>