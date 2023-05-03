<?php
require_once "CONNECTION.php";
$email = $_POST['email'];
$password = $_POST['password'];
if ($email=='admin@gmail.com' && $password='admin') {
    // session_start();
    // $_SESSION['batch'] = $data1['Batch'];
    // $_SESSION['User'] = $_POST['email'];
    // $_SESSION['status'] = 'logedin';
    // $_SESSION['id'] = $login_id;
    // echo "login successful";
    header('Location:index1.php');
} else {
    echo "login unsuccessful";
}
?>
