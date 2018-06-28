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