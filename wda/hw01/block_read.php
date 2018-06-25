<?php 
    include("_header.php");
    if(empty($_SESSION["uid"])){
        header("location:login.php");
        exit();
    }
?>
<!-- _________________________________________________ -->
	<main>
        <table align="center">
            <caption><h1>已刪除</h1></caption>
            <tr>
                <td>id</td>
                <td>uid</td>
                <td>pw</td>
                <td>email</td>
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
        echo "<td><a href='block_update.php?id={$id}'>修改</a></td>";
        echo "</tr>";
    }
?>
        </table>
    </main>
    <!-- _________________________________________________ -->
<?php 
    include("_footer.php");
?>