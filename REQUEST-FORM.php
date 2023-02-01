<?php
require_once "CONNECTION.php";
session_start();
$status=1;
$email_id = $_SESSION['User'];
$name= ucwords($_POST['name']);
$contact=$_POST['phone'];
$fname=ucwords($_POST['fathername']);
$address=ucwords($_POST['address']);
$batch=$_POST['batch'];
$profession = $_POST['profession'];
$facebook=$_POST['facebook'];
$about=$_POST['about'];





echo $name . '<br> '; 

echo ($name = $_FILES["photo"]["name"]."</br>");


$image = $_FILES["photo"]["name"] . '<br> ';
// $image = $_FILES['photo']['name']; 

// $image=$_POST['photo'];


echo $image;

// $target2 = "img/Students/" . basename($image);






// $sql="UPDATE `students` SET `Name` = '$name', `Address` = '$address', `Contact` = '$contact', `Profession` = '$profession', `Fname` = '$fname', `Batch` = '$batch',`Photo`='$image', `Facebook` = '$facebook',`Status`='$status', `About` = '$about', `Emsg`=NULL WHERE `students`.`Email` = '$email_id' ";
// mysqli_query($conn, $sql);





// if (move_uploaded_file($_FILES['photo']['tmp_name'], $target2)) {
//     echo "<script>alert('Successfully Submitted !');</script>";
//     header('Location: index.php');
// } else {
//     echo "<script>alert('Something went wrong! Please Retry');</script>";
// }



// header('location:WAITHERE.php');
?>