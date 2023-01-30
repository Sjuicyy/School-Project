<?php
require_once "connection.php";
session_start();
$email_id = $_SESSION['email'];

$id = '';
$pid = '$email_id';
$subject = $_POST['subject'];
$message = $_POST['message'];
$date = date("Y-m-d");
$sql = "INSERT INTO `notices` (`Id`, `Pid`, `Subject`, `Date`, `Message`) VALUES (NULL, '$pid', '$subject', '$date', '$message')";
mysqli_query($conn,$sql);
// header('ocatio:index1.php');
header('Location:index1.php');


?>