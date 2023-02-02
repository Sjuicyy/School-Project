<?php
require_once "CONNECTION.php";

$subject = $_POST['subject'];
$message = $_POST['message'];
$image = $_FILES["photo"]["name"];
$date = date("Y-m-d");

$target2 = "Notices/" . basename($image);


echo $target2;



    $sql = "INSERT INTO `ANotice` (`Id`, `Subject`, `Message`, `Photo`, `Date`) VALUES (NULL, '$subject', '$message', '$image', '$date'); ";
    mysqli_query($conn, $sql);


    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target2)) {
    header('location:index1.php');
    } else {
        echo "<script>alert('Something went wrong! Please Retry');</script>";

    }

?>