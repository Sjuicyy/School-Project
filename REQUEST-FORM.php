<?php
require_once "CONNECTION.php";
session_start();
$email_id = $_SESSION['User'];
$name = ucwords($_POST['name']);
$contact = $_POST['phone'];
$fname = ucwords($_POST['fathername']);
$address = ucwords($_POST['address']);
$batch = $_POST['batch'];
$profession = $_POST['profession'];
$facebook = $_POST['facebook'];
$about = $_POST['about'];

$image = $_FILES["photo"]["name"];
$target2 = "img/Students/" . basename($image);


if ($image == NULL) {
    $sql = "UPDATE `students` SET `Name` = '$name', `Address` = '$address', `Contact` = '$contact', `Profession` = '$profession', `Fname` = '$fname', `Batch` = '$batch', `Facebook` = '$facebook',`Status`='1', `About` = '$about', `Emsg`=NULL WHERE `students`.`Email` = '$email_id' ";
    mysqli_query($conn, $sql);
    header('location:WAITHERE.php');
} else {
    $sql = "UPDATE `students` SET `Name` = '$name', `Address` = '$address', `Contact` = '$contact', `Profession` = '$profession', `Fname` = '$fname', `Batch` = '$batch',`Photo`='$image', `Facebook` = '$facebook',`Status`='1', `About` = '$about', `Emsg`=NULL WHERE `students`.`Email` = '$email_id' ";
    mysqli_query($conn, $sql);


    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target2)) {
        echo "<script>alert('Successfully Submitted !');</script>";
        header('location:WAITHERE.php');
    } else {
        // header('location:WAITHERE.php');
        echo "<script>alert('Something went wrong! Please Retry');</script>";

    }
}
?>