<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="icon" href="img/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);

    body {
        font-family: "Roboto", sans-serif;
    }

    .stats {
        padding: 18px 23px;
        -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.25);
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.25);
        display: flex;
        flex-direction: column;
        min-height: 170px;
        margin-bottom: 30px;
    }

    .stats-content {
        display: flex;
        margin-top: auto;
        align-items: flex-end;
    }

    .stats-title {
        font-size: 26px;
        font-weight: 600;
        letter-spacing: .04em;
    }

    .stats-icon {
        display: flex;
        align-items: flex-end;
        font-size: 40px;
    }

    .stats-data {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        margin-left: auto;
    }

    .stats-number {
        font-size: 33px;
        line-height: 33px;
        font-weight: 600;
        letter-spacing: .04em;
    }

    .stats-timeframe {
        opacity: .5;
    }

    .stats-primary {
        color: #fff;
        background: #2f89fc;
    }

    .heading-line {
        position: relative;
        padding-bottom: 5px;
    }

    .heading-line:after {
        content: "";
        height: 4px;
        width: 132px;
        background-color: #2f89fc;
        position: absolute;
        bottom: 0;
        left: 14px;
    }
</style>

<body>
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark main-navigation sticky-top" id="navbar"
        style="background-color: #2f89fc;">
        <div class="container-fluid">
            <a href="index1.php">
                <img src="../img/Banner.png" width="200px" alt="">
            </a>
            <div class="overlay d-flex d-lg-none"></div>
            <div class="order-lg-2 d-lg-flex w-100 sidebar pb-3 pb-lg-0" style="background-color: #2f89fc;">
                <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0" style="font-size: larger;">
                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2 active" aria-current="page" href="index1.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2" href="teachers.php">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2" href="allstudent.php">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2 " href="request.php">Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2" href="notice.php">Notices</a>
                    </li>
                    <li class="nav-item pt-1">
                        <a href="" type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class='bx bxs-user' style='color:#fffefe;'></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="SMC.php" class="dropdown-item" type="button">Add SMC Members</a>
                            <a href="PMC.php" class="dropdown-item" type="button">Add PTA Members</a>
                            <a href="testimony.php" class="dropdown-item" type="button">Add Testimonial</a>
                            <a href="Photos.php" class="dropdown-item" type="button">Add Photos</a>
                            <a href="../LOGOUT.php" class="dropdown-item fw-bold" type="button">Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="dash-content">
        <div class="container-fluid mt-0">
            <div class="row dash-row mx-auto mt-5">
                <h3 class="mb-4 heading-line">Dashboard</h3>
                <div class="col-xl-4 col-md-6">
                    <div class="w-75 mx-5">
                        <a class="text-decoration-none" href="teachers.php">
                            <div class="stats stats-primary" style="height: 350px;">
                                <h3 class="stats-title"> Teachers </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class='bx bxs-chalkboard' style='color:#ffffff'></i>
                                    </div>
                                    <div class="stats-data">
                                        <?php
                                        require_once 'CONNECTION.php';
                                        $sql = "SELECT * FROM teachers";
                                        $result = $conn->query($sql);
                                        $number = mysqli_num_rows($result);
                                        ?>
                                        <div class="stats-number">
                                            <?php echo $number ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="w-75  mx-5 ">
                        <a class="text-decoration-none" href="allstudent.php">
                            <div class="stats stats-primary" style="height: 350px;">
                                <h3 class="stats-title"> Students </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class='bx bxs-book-reader' style='color:#ffffff'></i>
                                    </div>
                                    <div class="stats-data">
                                        <?php
                                        require_once 'CONNECTION.php';
                                        $sql = "SELECT * FROM students";
                                        $result = $conn->query($sql);
                                        $number = mysqli_num_rows($result);
                                        ?>
                                        <div class="stats-number">
                                            <?php echo $number ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="w-75 mx-5">
                        <a class="text-decoration-none" href="request.php">
                            <div class="stats stats-primary" style="height: 350px;">
                                <h3 class="stats-title"> Requests </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class='bx bxs-user-pin'></i>
                                    </div>
                                    <div class="stats-data">
                                        <?php
                                        require_once 'CONNECTION.php';
                                        $sql = "SELECT * FROM notices";
                                        $result = $conn->query($sql);
                                        $number = mysqli_num_rows($result);
                                        ?>
                                        <div class="stats-number">
                                            <?php echo $number ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 ">
                    <div class="w-75 mx-5">
                        <a class="text-decoration-none" class=" text-decoration-none" href="notice.php">
                            <div class="stats stats-primary" style="height: 350px;">
                                <h3 class="stats-title"> Notices </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class='bx bxs-notification'></i>
                                    </div>
                                    <div class="stats-data">
                                        <?php
                                        require_once 'CONNECTION.php';
                                        $sql = "SELECT * FROM Anotice";
                                        $result = $conn->query($sql);
                                        $number = mysqli_num_rows($result);
                                        ?>
                                        <div class="stats-number">
                                            <?php echo $number ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="w-75 mx-5">
                        <div class="stats stats-primary" style="height: 350px;">
                            <h3 class="stats-title"> Total Users </h3>
                            <div class="stats-content">
                                <div class="stats-icon">
                                    <i class='bx bxs-group'></i>
                                </div>
                                <div class="stats-data">
                                    <div class="stats-number">114</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>