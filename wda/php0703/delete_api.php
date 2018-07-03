<?php
include_once("db.php");
$no = $_POST["ddd"];

$sql = "update xxx set xxx_del = 1 where xxx_seq = $no";
mysqli_query($link,$sql);

?>