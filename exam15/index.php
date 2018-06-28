<?php 
    include("_header.php");
    // if(empty($_SESSION["uid"])){
    //     header("location:login.php");
    //     exit();
    // }
?>
<!-- _________________________________________________ -->
	<main>
        <table align="center">
            <caption><h1>會員</h1></caption>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td>狀態</td>
                <td>權限</td>
            </tr>
<?php
    $query="select * from users";
    $stmt=mysqli_query($conn,$query)  or die(mysqli_error());
    while($row=mysqli_fetch_assoc($stmt)){
        extract($row);
        echo "<tr>";
        echo "<td>{$seq}</td>";
        echo "<td>{$u_id}</td>";
        echo "<td>{$u_email}</td>";
        echo "<td>{$u_del}</td>";
        echo "<td>{$u_admin}</td>";
        // echo "<td><a href='update.php?id={$id}'>修改</a></td>";
        echo "</tr>";
    }
?>
        </table>
    </main>
    <!-- _________________________________________________ -->
<?php 
    include("_footer.php");
?>