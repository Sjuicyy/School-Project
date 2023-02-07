<?php
session_start();
require_once "CONNECTION.php";
$email_id =  $_SESSION['User'];
if (!($_SESSION['status'] == 'logedin')) {
    header('Location:Login.php');
}
$sql = "SELECT * from students WHERE Email='$email_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
$rows = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student|Profile</title>
    <link rel="icon" href="img/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        body {
            color: #1a202c;
            text-align: left;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .btn.btn-twitter {
            background: #69b6f0;
            border-color: #69b6f0;
            color: #fff;
        }

        .btn.btn-twitter:hover {
            background: #519cd6;
        }

        .btn.btn-facebook {
            background: #4f69a2;
            border-color: #4f69a2;
            color: #fff;
        }

        .btn.btn-facebook:hover {
            background: #1a3f96;
        }

        .btn.btn-instagram {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            border-color: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            color: #fff;
        }

        .btn.btn-instagram:hover {
            background: radial-gradient(circle at 30% 107%, #cac04d 0%, #ccc143 5%, #c4382b 45%, #94176c 60%, #1a3ca1 90%);
        }

        .btn.btn-linkedin {
            background: #2884ba;
            border-color: #2884ba;
            color: #fff;
        }

        .btn.btn-linkedin:hover {
            background: #10557e;
        }
    </style>
</head>

<body>


    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark main-navigation" id="navbar"
        style="background-color: #2f89fc;">
        <div class="container-fluid">
            <img src="img/Banner.png" width="200px" alt="">
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="overlay d-flex d-lg-none"></div>
            <div class="order-lg-2 d-lg-flex w-100 sidebar pb-3 pb-lg-0" style="background-color: #2f89fc;">
                <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0" style="font-size: larger;">



                    <?php if ($data['Status'] == 2): ?>
                        <li class="nav-item">
                            <a class="nav-link px-3 mx-3 px-lg-2 " aria-current="page" href="index1.php">Home</a>
                        </li>

                        <li class="nav-item">
                        <?php if ($rows == 0): ?>
                            <a class="nav-link px-3 mx-3 px-lg-2" href="requests2.php">Requests</a>
                        <?php else: ?>
                            <a class="nav-link px-3 mx-3 px-lg-2" href="requests.php">Requests</a>
                        <?php endif; ?>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 mx-3 px-lg-2" href="batchmates.php">Batchmates</a>
                        </li>



                    <?php endif; ?>

                    <li class="nav-item pt-1">
                        <a href="" type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><img src="img/Students/<?php echo $data['Photo'] ?>"
                                class="rounded-circle" height="50px" width="50px" alt=""> </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="myprofile.php" class="dropdown-item" type="button">View Profile</a>
                            <hr class="dropdown-divider" />
                            <a href="LOGOUT.php" class="dropdown-item" type="button">Log Out</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="main-body">
            <?php
            $sql = "SELECT * FROM students WHERE Email= '$email_id' ";
            $result = $conn->query($sql);
            $data = mysqli_fetch_array($result);
            ?>
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="img/Students/<?php echo $data['Photo'] ?>" alt="Admin" class="rounded-circle1"
                                    width="150">
                                <div class="mt-3">
                                    <h4>
                                        <?php echo $data['Name'] ?>
                                    </h4>
                                    <p class="text-secondary mb-1">
                                        <?php echo $data['Profession'] ?>
                                    </p>
                                    <p class="text-muted font-size-sm">
                                        <?php echo $data['Address'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href="<?php echo $data['Facebook'] ?>" type="button"
                                    class="btn btn-facebook text-left w-100 social"><i class="bi bi-facebook"></i>
                                    Facebook</a>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href="" type="button" class="btn mb-m-0 btn-twitter text-left w-100 "><i
                                        class="bi bi-twitter"></i> Twitter</a>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href="" type="button" class="btn mb-m-0 btn-instagram text-left w-100 "><i
                                        class="bi bi-instagram"></i> Instagram</a>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href="" type="button" class="btn mb-m-0 btn-linkedin text-left w-100 "><i
                                        class="bi bi-linkedin"></i> Linkedin</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $data['Name'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $data['Email'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $data['Contact'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $data['Address'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Father's Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $data['Fname'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Batch</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $data['Batch'] ?>
                                </div>
                            </div>
                            <hr>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">About</h6>
                                </div>
                                <div class="col-sm-9 text-secondary mb-0 text-justify">
                                    <?php echo $data['About'] ?>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <a href="requestform.php">
                                    <div class="btn w-100 btn-primary">Edit</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>

</html>