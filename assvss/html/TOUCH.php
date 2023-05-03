<?php
require_once "CONNECTION.php";
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$sql = "INSERT INTO `Touch` (`Id`, `Name`, `Email`, `Subject`, `Message`) VALUES (NULL, '$name', '$email', '$subject', '$message')";
mysqli_query($conn, $sql);
header('location:index.php')
?>