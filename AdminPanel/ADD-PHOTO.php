<?php
require_once "CONNECTION.php";
$image = $_FILES["photo"]["name"];

$target2 = "Photos/" . basename($image);


echo $target2;



$sql = "INSERT INTO `Photos` (`Id`, `Photos`) VALUES (NULL, '$image')";
mysqli_query($conn, $sql);


if (move_uploaded_file($_FILES['photo']['tmp_name'], $target2)) {
    header('location:Photos.php');
} else {
    echo "<script>alert('Something went wrong! Please Retry');</script>";
}
?>