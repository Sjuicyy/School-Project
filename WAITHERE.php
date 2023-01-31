<?php
require_once "CONNECTION.php";
session_start();
$email_id = $_SESSION['User'];
$sql = "SELECT * from students WHERE Email='$email_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);

$status = $data['Status'];

if ($status == 0) {
    header('location:requestform.php');
} elseif ($status == 2) {
    header('location:index1.php');
}
?>
<?php if ($status == 1): ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container d-flex">


    <div class="alert alert-primary mt-3 w-75" role="alert">
        Your request has been sumbitted. Please wait for response!!!
    </div>
    <a href="myprofile.php">
        <button class="btn btn-primary mt-3 mx-2" style="height: 48px;">View Request</button>
    </a>
</div>
<?php endif; ?>