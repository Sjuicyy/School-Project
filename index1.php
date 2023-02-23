<?php
session_start();
require_once "CONNECTION.php";
$email_id = $_SESSION['User'];
if (!($_SESSION['status'] == 'logedin')) {
    header('Location:Loghome.php');
}
$sql = "SELECT * from students WHERE Email='$email_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
$rows = mysqli_num_rows($result);
$admin = $data['IsAdmin'];
$number = $data['Contact'];
?>





<?php
$sql = "SELECT * from Membership WHERE S_id='$number' ";
$result1 = mysqli_query($conn, $sql);
$dataMember = mysqli_fetch_array($result1);
$rowMember = mysqli_num_rows($result1);
$status = $dataMember['Status'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student|Admin Panel</title>
    <link rel="icon" href="img/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />




</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);




    <?php if (!($rows == 0) && (($rowMember == 0) or ($status == 'pending'))): ?>
        body {
            height: 100vh;
            overflow-y: hidden;
            padding-right: 15px;
            /* Avoid width reflow */
        }

    <?php endif; ?>


    .heading-line {
        position: relative;
        padding-bottom: 5px;
    }


    .heading-line:after {
        content: "";
        height: 4px;
        width: 93px;
        background-color: #2f89fc;
        position: absolute;
        bottom: 0;
        left: 0;
    }

    .color {
        color: rgb(47, 137, 252);
    }

    .bcolor {
        background-color: rgb(47, 137, 252);
    }

    .m:hover {
        background-color: rgb(111, 86, 237);
    }


    /* The Modal1 (background) */
    .modal1 {
        display: none1;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */

    }

    /* Modal1 Content */
    .modal1-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
</style>

<body>
    <?php if (!($rows == 0) && ($rowMember == 0)): ?>
        <div id="myModal1" class="modal1">
            <!-- Modal1 content -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="modal1-content ">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form action="./Student/MEMBERREQUEST.php" method="POST">
                                    <select class="form-select form-select-lg mb-3" name='type'
                                        aria-label=".form-select-lg example" required>
                                        <option value="basic">साधारण सदस्य (रु ५००)</option>
                                        <option value="lifetime">आजीवन सदस्य (रु ३०००)</option>
                                    </select>
                                    <div class="row">
                                        <div class="col-auto">
                                            <img src="img/qr-generator.png" alt="">
                                        </div>
                                        <div class="col-auto" style="max-width: 400px;">
                                            <h5>Steps</h5>
                                            <p> 1) Save qr code to gallery</p>
                                            <p> 2) Pay the amount using qr code via Esewa or khalti</p>
                                            <p> 3) Copy the transaction code below </p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Transaction Id:</label>
                                        <input type="text" name="code" class="form-control" id="recipient-name" required>
                                    </div>
                                    <input type="hidden" name='contact' value="<?php echo $number ?> ">
                                    <input type="submit" value='Proceed' class="btn w-25 float-end btn-primary">
                                </form>
                                <a href="./LOGOUT.php">
                                    <button class="btn float-enad btn-danger">Log out</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if (!($rows == 0) && ($status == 'pending')): ?>
        <div id="myModal1" class="modal1">
            <!-- Modal1 content -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="modal1-content ">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h4>Your request is pending... We will notify soon !!!</h4>
                                <a href="./LOGOUT.php">
                                    <button class="btn float-end btn-sm btn-primary">Log out</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>




    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark main-navigation" id="navbar"
        style="background-color: #2f89fc;">
        <div class="container-fluid">
            <img src="./img/Banner.png" width="200px" alt="">
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="overlay d-flex d-lg-none"></div>
            <div class="order-lg-2 d-lg-flex w-100 sidebar pb-3 pb-lg-0" style="background-color: #2f89fc;">
                <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0" style="font-size: larger;">
                    <li class="nav-item">
                        <a class="nav-link px-3 mx-3 px-lg-2 active" aria-current="page" href="index1.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <?php if ($rows == 0): ?>
                            <a class="nav-link px-3 mx-3 px-lg-2" href="./Teacher/requests2.php">Requests</a>
                        <?php else: ?>
                            <a class="nav-link px-3 mx-3 px-lg-2" href="./Student/requests.php">Requests</a>
                        <li class="nav-item">
                            <a class="nav-link px-3 mx-3 px-lg-2" href="./Student/batchmates.php">Batchmates</a>
                        </li>
                    <?php endif; ?>
                    </li>

                    <?php if ($rows == 0): ?>
                        <?php
                        $sql = "SELECT * from teachers WHERE Email='$email_id' ";
                        $result = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_array($result);
                        ?>
                        <li class="nav-item pt-1">
                            <a href="" type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><img src="img/Teachers/<?php echo $data['Photo'] ?>"
                                    class="rounded-circle" height="50px" width="50px" alt=""> </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="./Teacher/myprofile.php" class="dropdown-item" type="button">View Profile</a>
                                <hr class="dropdown-divider" />
                                <a href="LOGOUT.php" class="dropdown-item" type="button">Log Out</a>
                            </div>
                        </li>
                    <?php else: ?>
                        <li class="nav-item pt-1">
                            <a href="" type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><img src="img/Students/<?php echo $data['Photo'] ?>"
                                    class="rounded-circle" height="50px" width="50px" alt=""> </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="./Student/myprofile.php" class="dropdown-item" type="button">View Profile</a>
                                <hr class="dropdown-divider" />
                                <?php if ($data['IsAdmin'] == '1'): ?>
                                    <a href="./Student/allmembers.php" class="dropdown-item" type="button">Member Requests</a>
                                    <hr class="dropdown-divider" />
                                <?php endif; ?>
                                <a href="LOGOUT.php" class="dropdown-item" type="button">Log Out</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-2">
        <?php
        require_once 'CONNECTION.php';
        $sql = "SELECT * FROM ANotice";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_array($result)) {
                ?>
                <div class="container mt-2">
                    <div class="row border border-start-0 border-end-0 border-primary border-1">
                        <div class="col-10">
                            <div class="d-flex">
                                <div class="">
                                    <div class="mt-2 mb-2"><img src="AdminPanel/Notices/<?php echo $data['Photo'] ?>"
                                            width="100px" class="" alt="...">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="">
                                        <h5 class="mx-2 mt-2">
                                            <?php echo $data['Subject'] ?>
                                        </h5>
                                    </div>
                                    <p class="text-secondary mx-2 ">
                                        <?php echo $data['Message'] ?>
                                    </p>
                                    <p class="text-secondary mx-2 ">Posted :
                                        <?php echo $data['Date'] ?>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-2">
                            <div class="d-grid d-md-flex justify-content-end mt-4">
                                <a class="text-decoration-none" href="noticedetail.php?id=<?php echo $data['Id'] ?>">
                                    <button type="button"
                                        class="d-flex btn btn-primary btn-sm border bcolor text-light rounded-3">
                                        <span class="material-symbols-outlined mx-2">
                                            visibility
                                        </span>View</button>
                                </a>
                            </div>




                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>







    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

</html>