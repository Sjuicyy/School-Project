<?php
require_once "CONNECTION.php";

$name = $_POST['name'];
$post = $_POST['post'];
$date = $_POST['date'];
$image = $_FILES["photo"]["name"];

$target2 = "SMC/" . basename($image);


$sql = "INSERT INTO `Smc` (`Id`, `Name`, `Post`, `Since`, `Image`) VALUES (NULL, '$name', '$post', '$date', '$image')";
mysqli_query($conn, $sql);


if (move_uploaded_file($_FILES['photo']['tmp_name'], $target2)) {
    header('location:SMC.php');
} else {
    echo "<script>alert('Something went wrong! Please Retry');</script>";

}

?>