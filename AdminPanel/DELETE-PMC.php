<?php
$pid = $_POST['pid'];
require_once "CONNECTION.php";
$sql = "DELETE FROM `Pmc` WHERE `Pmc`.`Id` = $pid ";
mysqli_query($conn, $sql);
header('location:PMC.php')

?>