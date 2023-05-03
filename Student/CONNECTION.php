<?php 
$conn=mysqli_connect("localhost","root","root",'School');
// echo"success";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>