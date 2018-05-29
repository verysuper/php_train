<?php
    include("database.php");
    try{
        $seq = isset($_POST["seq"])?$_POST["seq"]:die('ERROR: Record ID not found.');
        //foreach($seq as $key => $value)
        for($i=0 ; $i < count($seq) ; $i++)
        {
            $sql = "UPDATE member_05 SET nick={$_POST["nick"][$i]} WHERE seq = ?";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(1, $seq[$i]);
            $stmt->execute();
        }
        header('Location: admin.php');
    }
    catch(PDOException $ex){
        die('ERROR: ' . $ex->getMessage());
    }
?>