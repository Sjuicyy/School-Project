<?php
require_once "CONNECTION.php";
$email = $_POST['email'];
$password = $_POST['password'];
$sql0 = "SELECT * from students where Email='$email' ";
$result = mysqli_query($conn, $sql0);
$data = mysqli_num_rows($result);





if ($data == 1) {
    echo 'Sorry email already used. Please use another email to login!!';
} else {
    $sql = "INSERT INTO `students` (`Name`, `Address`, `Contact`, `Email`, `Profession`, `Fname`, `Batch`, `Photo`, `Facebook`, `Pwd`, `Status`, `About`) VALUES (NULL, NULL,  '$email' , '$email', NULL, NULL, NULL, NULL, NULL, '$password', NULL, NULL)";
    $result = mysqli_query($conn, $sql);
    header('Location:Loghome.php');
}
?>