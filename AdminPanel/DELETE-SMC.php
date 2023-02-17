<?php
$pid = $_POST['pid'];
require_once "CONNECTION.php";
$sql = "DELETE FROM `Smc` WHERE `Smc`.`Id` = $pid ";
mysqli_query($conn, $sql);
header('location:SMC.php')
?>