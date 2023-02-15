<?php
session_start();
require_once "CONNECTION.php";
$email_id = $_SESSION['User'];
$sql = "SELECT * from students WHERE Email='$email_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);

$status = $data['Status'];

if ($status == 0) {
    header('location:requestform.php');
} elseif ($status == 2) {
    header('location:../index1.php');
}
?>
<?php if ($status == 1): ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark main-navigation" id="navbar"
        style="background-color: #2f89fc;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="../img/Banner.png" width="200px" alt=""> </a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="overlay d-flex d-lg-none"></div>
            <div class="order-lg-2 d-lg-flex w-100 sidebar pb-3 pb-lg-0" style="background-color: #2f89fc;">
                <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0" style="font-size: larger;">
                 

                    <li class="nav-item pt-1">
                        <a href="" type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">  <img src="../img/Students/<?php echo $data['Photo']?>" class="rounded-circle" height="50px" width="50px" alt=""></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="myprofile.php" class="dropdown-item" type="button"> Profile</a>
                            <hr class="dropdown-divider" />
                            <a href="../LOGOUT.php" class="dropdown-item" type="button">Log Out</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



    <div class="container d-flex">


        <div class="alert alert-primary mt-3 w-75" role="alert">
            Your request has been sumbitted. Please wait for response!!!
        </div>
        <a href="myprofile.php">
            <button class="btn btn-primary mt-3 mx-2" style="height: 48px;">View Request</button>
        </a>
    </div>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

<?php endif; ?>