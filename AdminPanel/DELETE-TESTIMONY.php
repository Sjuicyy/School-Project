<?php
$pid = $_POST['pid'];
require_once "CONNECTION.php";
$sql = "DELETE FROM `Testimony` WHERE `Testimony`.`Id` = $pid ";
mysqli_query($conn, $sql);
header('location:testimony.php');
?>