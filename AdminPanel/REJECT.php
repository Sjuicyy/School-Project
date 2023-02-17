<?php
session_start();
require_once "CONNECTION.php";
$email_id = $_SESSION['User'];
$Rid = $_POST['Rid'];
$msg = $_POST['msg'];
$sql = "UPDATE `students` SET `Status` = NULL , `Emsg`='$msg' WHERE `students`.`Email` = '$Rid' ";
mysqli_query($conn, $sql);
header('location:allstudent.php');
?>