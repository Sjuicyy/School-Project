<?php
$pid = $_POST['pid'];
require_once "CONNECTION.php";
$sql = "DELETE FROM `Photos` WHERE `Photos`.`Id` = $pid ";
mysqli_query($conn, $sql);
header('location:Photos.php')
?>