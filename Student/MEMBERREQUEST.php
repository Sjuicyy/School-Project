<?php
require_once "CONNECTION.php";
session_start();
$email_id = $_SESSION['User'];
$number = $_POST['contact'];
$type = ($_POST['type']);
$code = ($_POST['code']);
$date = date("Y-m-d");


echo $type;
echo $code;
echo $number;
echo $date;

$sql = "INSERT INTO `Membership` (`id`, `Date`, `S_id`, `Type`, `Post`, `Status`, `Remarks`) VALUES (NULL, '$date', '$number', 'basic', NULL, 'pending', '$code')";


mysqli_query($conn, $sql);
header('location:../index1.php');

?>