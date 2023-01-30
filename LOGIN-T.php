<?php
require_once "CONNECTION.php";
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * from teachers WHERE Email='$email' && Pwd='$password'";
$data = mysqli_query($conn, $sql);
$result = mysqli_num_rows($data);
if ($result == 1) {
    session_start();
    // $_SESSION['User'] = $_POST['email'];
    // $_SESSION['status'] = 'logedin';
    // $_SESSION['id'] = $login_id1;
    echo "login successful";
} else {
    echo "login unsuccessful";
}
?>