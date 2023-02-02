<?php
session_start();
require_once "CONNECTION.php";
$email_id = $_SESSION['User'];
$msg = $_POST['msg'];
$sql = "UPDATE `students` SET `Status` = NULL , `Emsg`='$msg' WHERE `students`.`Email` = '$email_id' ";
mysqli_query($conn, $sql);
echo "aaa";
?>