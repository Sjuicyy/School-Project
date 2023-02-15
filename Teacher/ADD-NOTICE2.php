<?php
require_once "CONNECTION.php";
session_start();
$email_id = $_SESSION['User'];
$sql = " SELECT * from teachers WHERE Email='$email_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
$pid = $data['Contact'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$date = date("Y-m-d");
$sql = "INSERT INTO `notices` (`Id`, `Pid`, `Subject`, `Date`, `Message`) VALUES (NULL, '$pid', '$subject', '$date', '$message')";
mysqli_query($conn,$sql);
header('Location:requests2.php');
?>