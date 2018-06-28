<?php 
    include("_header.php");
    if(empty($_SESSION["uid"])){
        header("location:login.php");
        exit();
    }
    $uid = $_SESSION["uid"];
    $query="select * from users where u_id = '$uid';";
    $stmt=mysqli_query($conn,$query)  or die(mysqli_error());
    $row=mysqli_fetch_assoc($stmt);
    // extract($row);
    echo $row["u_admin"];
    if($row["u_admin"] == '0'){
        header("location:index.php?msg=權限不足");
        exit();
    }
?>
<!-- _________________________________________________ -->
	<main>
        <table align="center">
            <caption><h1>管理</h1></caption>
            <tr>
                <td>uid</td>
                <td>pw</td>
                <td>email</td>
                <td>封鎖</td>
                <!-- <td>權限</td> -->
                <td>action</td>
            </tr>
<?php
    $query="select * from users";// where del=0;";
    $stmt=mysqli_query($conn,$query)  or die(mysqli_error());
    while($row=mysqli_fetch_assoc($stmt)){
        extract($row);
        echo "<tr>";
        echo "<td>{$u_id}</td>";
        echo "<td>{$u_pw}</td>";
        echo "<td>{$u_email}</td>";
        echo "<td>{$u_del}</td>";
        // echo "<td>{$u_admin}</td>";
        echo "<td><a href='delete.php?id={$u_id}'>封鎖</a></td>";
        echo "</tr>";
    }
?>
        </table>
    </main>
    <!-- _________________________________________________ -->
<?php 
    include("_footer.php");
?>