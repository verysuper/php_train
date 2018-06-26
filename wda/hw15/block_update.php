<?php 
    include("_header.php");
    if(empty($_SESSION["uid"])){
        header("location:login.php");
        exit();
    }
    if(empty($_REQUEST['id'])){
        header("location:block_read.php?msg=請選擇一個人");
        exit();
    }
    $id=$_REQUEST['id'];
    $query="select * from user where id = '{$id}';";
    $stmt=mysqli_query($conn,$query)  or die(mysqli_error());
    $row=mysqli_fetch_assoc($stmt);
    if (isset($_POST['submit'])){        
        switch($_POST['submit']){
            case 'edit':
                $query="update user set 
                        pw='{$_REQUEST['pw']}', 
                        email='{$_REQUEST['email']}', 
                        updated='{$_REQUEST['updated']}' 
                        where id='{$id}';";
                break;
            case 'Revert':
                $query="update user set 
                updated='{$_REQUEST['updated']}',
                del=0  
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
            header("location:block_read.php?msg=修改成功");
            exit();
        }
    }
?>
<!-- _________________________________________________ -->
	<main>
        <form action="block_update.php" method="post" id="form1">
            <table align="center">
                <caption><h1>更新</h1></caption>
                <tr>
                    <th>帳號</th>
                </tr>
                <tr>
                    <td><?php echo $row['uid']; ?></td>
                </tr>
                <tr>
                    <th>密碼</th>
                </tr>
                <tr>
                    <td><input type="text" name="pw" id="pw" value="<?php echo $row['uid']; ?>"></td>
                </tr>
                <tr>
                    <th>Email</th>
                </tr>
                <tr>
                    <td><input type="text" name="email" id="email" value="<?php echo $row['email']; ?>"></td>
                </tr>
                <tr>
                    <td align='center'>
                        <p><input type="submit" name="submit" value="edit">
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <input type="submit" name="submit" value="Revert"></p>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="updated" value="<?php echo $timeTaipei; ?>">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        </form>
    </main>
    <!-- _________________________________________________ -->
<?php 
    include("_footer.php");
?>