<?php 
    include("_header.php");
    if(empty($_SESSION["uid"])){
        header("location:login.php");
        exit();
    }
?>
<!-- _________________________________________________ -->
<main>
    <form action="MultiUpload.php" method="post" enctype="multipart/form-data" name="form1">
        <table align="center">
        <caption><h1>請上傳檔案：</h1></caption>
            <tr><th></th></tr>
            <tr><td><input type="file" name="userFile[]" id="userFile[]" ></td></tr>
            <tr><td><input type="file" name="userFile[]" id="userFile[]" ></td></tr>
            <tr><td><input type="submit" name="button" id="button" value="送出" ></td></tr>
        </table>
        <input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="2097152" >
    </form>
</main>
    <!-- _________________________________________________ -->
<?php 
    include("_footer.php");

    if(empty($_FILES['userFile'])){        
        exit();
    }
    $userfile = $_FILES['userFile'];
    foreach($userfile as $key => $value){
        showDetail($key,$userfile[$key]);
    }
    foreach($userfile['tmp_name'] as $key => $value){
        if($value != NULL){
            fileCopy($key,$value);
        }
    }
    foreach($userfile['tmp_name'] as $key => $value){
        if($value != NULL){
            deleteFile($value);
        }
    }
    function showDetail($msg,$file){
        foreach($file as $key => $value){
            echo "<font color=red>$msg $key:
            </font> $value<br/>";
        }
        echo "<hr/>";
    }
    function fileCopy($key,$file){
        if(copy($file,"images/userupload$key.zip")){
            echo "檔案編號$key 上傳成功!<BR/>";
        }else{
            echo "錯誤：無法複製檔案...<BR/>";
        }
    }

    function deleteFile($file){
        unlink($file);
    }
?>