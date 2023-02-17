<?php
require_once "CONNECTION.php";
$name = $_POST['name'];
$post = $_POST['post'];
$message = $_POST['message'];
$image = $_FILES["photo"]["name"];
$target2 = "Testim/" . basename($image);
$sql = "INSERT INTO `Testimony` (`Id`, `Name`, `Post`, `Message`, `Image`) VALUES (NULL, '$name', '$post', '$message', '$image')";
mysqli_query($conn, $sql);
if (move_uploaded_file($_FILES['photo']['tmp_name'], $target2)) {
    header('location:testimony.php');
} else {
    echo "<script>alert('Something went wrong! Please Retry');</script>";
}
?>