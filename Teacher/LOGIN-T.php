<?php
require_once "CONNECTION.php";
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * from teachers WHERE Email='$email' && Pwd='$password'";
$data = mysqli_query($conn, $sql);
$result = mysqli_num_rows($data);
if ($result == 1) {
    session_start();
    $_SESSION['batch'] = null;
    $_SESSION['User'] = $_POST['email'];
    $_SESSION['status'] = 'logedin';
    header('location:../index1.php');
    // echo "login successful";
} else {
    session_start();
    $_SESSION['error']="Please enter valid Email or Password";
    header('Location:login2.php');
    // echo "login unsuccessful";
}
?>