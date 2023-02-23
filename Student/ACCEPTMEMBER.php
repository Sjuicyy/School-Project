<?php
session_start();
require_once "CONNECTION.php";
$email_id = $_SESSION['User'];
$S_id = $_POST['S_id'];
$sql = "UPDATE `Membership` SET `Status` = 'active' WHERE `Membership`.`S_id` = '$S_id'  ";
mysqli_query($conn, $sql);
header('location:allmembers.php');
?>