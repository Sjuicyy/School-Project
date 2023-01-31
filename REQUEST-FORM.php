<?php
require_once "CONNECTION.php";
session_start();
$status=1;
$email_id = $_SESSION['User'];
$name= ucwords($_POST['name']);
$contact=$_POST['phone'];
$fname=ucwords($_POST['fathername']);
$address=ucwords($_POST['address']);
$batch=$_POST['batch'];
$profession = $_POST['profession'];
$facebook=$_POST['facebook'];
$about=$_POST['about'];
$sql="UPDATE `students` SET `Name` = '$name', `Address` = '$address', `Contact` = '$contact', `Profession` = '$profession', `Fname` = '$fname', `Batch` = '$batch', `Facebook` = '$facebook',`Status`='$status', `About` = '$about', `Emsg`=NULL WHERE `students`.`Email` = '$email_id' ";
mysqli_query($conn, $sql);
header('location:WAITHERE.php');
?>