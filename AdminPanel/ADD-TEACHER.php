<?php
require_once "CONNECTION.php";
session_start();
$email_id = $_SESSION['User'];



$name = ucwords($_POST['name']);
$email = $_POST['email'];
$contact = $_POST['phone'];
$subject = $_POST['subject'];
$address = ucwords($_POST['address']);
$education = $_POST['education'];
$sdate = $_POST['sdate'];
$edate = $_POST['edate'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];
$linkedin = $_POST['linkedin'];
$about = $_POST['about'];
$image = $_FILES["photo"]["name"];
$target2 = "Teachers/" . basename($image);
    $sql = "INSERT INTO `teachers` (`Name`, `Address`, `Subject`, `Contact`, `Email`, `Education`, `Fdate`, `Tdate`, `Photo`, `Facebook`, `Twitter`, `Instagram`, `Linkedin`, `About`) 
    VALUES ('$name', '$address', '$subject', '$contact', '$email', '$education', '$sdate', '$edate', '$image', '$facebook', '$twitter', '$instagram', '$linkedin', '$about')";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target2)) {
        echo "<script>alert('Successfully Submitted !');</script>";
        header('location:teachers.php');
    } else {
        // header('location:WAITHERE.php');
        echo "<script>alert('Something went wrong! Please Retry');</script>";
    }
?>