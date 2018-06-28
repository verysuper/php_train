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
                    <td><input type="text" name="u_id" id="u_id" required></td>
                </tr>
                <tr>
                    <th>密碼</th>
                </tr>
                <tr>
                    <td><input type="text" name="u_pw" id="u_pw" required></td>
                </tr>
                <tr>
                    <th>Email</th>
                </tr>
                <tr>
                    <td><input type="text" name="u_email" id="u_email" required></td>
                </tr>
                <tr>
                    <th>上傳相片</th>
                </tr>
                <tr>
                    <td><input type="file" name="pic" id="pic" required></td>
                </tr>
                <tr>
                    <td>
                        <hr>
                        <p><input type="submit" name="submit" value="註冊"><p>                        
                        <p><a href="login.php">登入</a></p>
                    </td>
                </tr>
            </table>
            <!-- <input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="2097152" /> -->
            <input type="hidden" name="u_updated" value="<?php echo $timeTaipei; ?>">
        </form>
    </main>
    <!-- _________________________________________________ -->
<?php
    include("_footer.php");
    if (isset($_POST['submit']))
    {
        if(empty($_POST['u_id']))
            exit();
        $uid = $_POST['u_id'];
        $pw = $_POST['u_pw'];
        $email = $_POST['u_email'];
        $updated = $_POST['u_updated'];
        $created=$updated;
        $query = "SELECT * FROM users WHERE u_id = '{$uid}' LIMIT 1";
        $stmt=mysqli_query($conn,$query) or die(mysqli_error());
        // $row = mysqli_fetch_assoc($stmt);
        // print_r($row);
        if($stmt->num_rows==1){
            echo "<script>alert('account existed');</script>";
        }else{
            if($_FILES["pic"]["type"]!="image/jpeg"){
                header ("Location: register.php?msg=請選擇jpg檔");
            }
            else{
                $query = "INSERT INTO users VALUES 
                        (NULL,'$uid','$pw','$email','$created','$updated',0,0);";
                $stmt = mysqli_query($conn, $query) or die(mysqli_error());
                // $seq = mysqli_insert_id($conn);
                $file = $_FILES["pic"];
                if(copy($file['tmp_name'],"images/$uid.jpg")){
                    unlink($file['tmp_name']);
                }
                else{
                    header ("Location: update.php?msg=請重新上傳");
                }
                header ("Location: login.php?msg=register success,請登入");
            }         
        }
    }
?>