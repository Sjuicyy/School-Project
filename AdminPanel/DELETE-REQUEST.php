<?php
$pid = $_POST['pid'];

require_once "CONNECTION.php";
$sql = "DELETE FROM `notices` WHERE `notices`.`Id` = $pid ";
mysqli_query($conn, $sql);
header('location:request.php')

?>