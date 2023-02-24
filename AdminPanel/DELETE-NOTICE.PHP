<?php
$id = $_POST['id'];
require_once "CONNECTION.php";
echo $id;
$sql = "DELETE FROM `ANotice` WHERE `Id` = $id ";
mysqli_query($conn, $sql);
header('location:notice.php')
?>