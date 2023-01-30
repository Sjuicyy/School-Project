<?php
require_once "connection.php";
session_start();
$email_id=$_SESSION['User'];
echo $email_id;
$sql = "SELECT * from students WHERE Email='$email_id' ";
$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_array($result);
echo $data['name'];
?>