<?php
    include("database.php");
    try{
        $seq = isset($_GET["seq"])?$_GET["seq"]:die('ERROR: Record ID not found.');
        $sql = "UPDATE member_05 SET deleted=1 WHERE seq = ?";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(1, $seq);
        if($stmt->execute()){
            header('Location: admin.php');
        }else{
            die('Unable to delete record.');
        }
    }
    catch(PDOException $ex){
        die('ERROR: ' . $ex->getMessage());
    }
?>