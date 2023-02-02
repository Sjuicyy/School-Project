<?php
session_start();
require_once "CONNECTION.php";
$email_id = $_SESSION['User'];
$sql = "UPDATE `students` SET `Status` = '2' WHERE `students`.`Email` = '$email_id' ";
mysqli_query($conn, $sql);
echo "aaa";
?>