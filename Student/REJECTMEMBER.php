<?php
session_start();
require_once "CONNECTION.php";
$email_id = $_SESSION['User'];
$S_id = $_POST['S_id'];


$sql = "DELETE FROM `Membership` WHERE `Membership`.`S_id` = $S_id ";



mysqli_query($conn, $sql);
header('location:allmembers.php');
?>