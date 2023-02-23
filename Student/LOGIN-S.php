<?php
require_once "CONNECTION.php";
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * from students WHERE Email='$email' && Pwd='$password'";
$data = mysqli_query($conn, $sql);
$result = mysqli_num_rows($data);
$data1 = mysqli_fetch_array($data);
if ($result == 1) {
    session_start();
    $_SESSION['batch'] = $data1['Batch'];
    $_SESSION['User'] = $_POST['email'];
    $_SESSION['status'] = 'logedin';
    $_SESSION['id'] = $login_id;
    echo "login successful";
    header('Location:WAITHERE.php');
} else {
    session_start();
    $_SESSION['error'] = "Please enter valid Email or Password";
    header('Location:Login.php');
}
?>