<?php
session_start();

require_once "CONNECTION.php";
$email_id = $_SESSION['User'];

$Rid = $_POST['Rid'];
$sql = "UPDATE `students` SET `Status` = '2' WHERE `students`.`Email` = '$Rid' ";
mysqli_query($conn, $sql);
header('location:allstudent.php');
?>