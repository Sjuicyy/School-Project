<?php 
$conn=mysqli_connect("localhost","root",'','practise');
echo"connection success"."<br>";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>