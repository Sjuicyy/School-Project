<?php
session_start();
if (!($_SESSION['status'] == 'logedin')) {
  header('Location:Login.php');
}
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
</head>

<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);

    body {
        font-family: "Roboto", sans-serif;
        background: #EFF1F3;
        min-height: 100vh;
        position: relative;
    }

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

    .notification-list {
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 15px;
        margin-bottom: 7px;
        background: #fff;
        -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
        box-shadow: 0 3px 10px rgba(16, 75, 204, 0.06);
    }

    .notification-list--unread {
        border-left: 2px solid #2f89fc;
    }

    .notification-list .notification-list_content .notification-list_img img {
        height: 48px;
        width: 48px;
        border-radius: 50px;
        margin-right: 20px;
    }

    .notification-list .notification-list_content .notification-list_detail p {
        margin-bottom: 5px;
        line-height: 1.2;
    }
</style>

<body>
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark main-navigation" id="navbar"
        style="background-color: #2f89fc;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LOGO</a>

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
                        <a class="nav-link px-3 mx-3 px-lg-2" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 mx-3 px-lg-2" href="#">Batchmates</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-3 mx-3 px-lg-2" href="addnotice.php">Contact</a>
                    </li>

                    <li class="nav-item pt-1">

                        <a href="" type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class='bx bxs-user' style='color:#fffefe;'></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item" type="button">View Profile</a>
                            <hr class="dropdown-divider" />
                            <a href="LOGOUT.php" class="dropdown-item" type="button">Log Out</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="blog">
            <div class="container">
                <section class="mt-4">
                    <div class="container">
                        <h3 class="mb-4 heading-line">Notices<i class='bx bxs-bell' style='color:#2f89fc'></i></h3>
                        <div class="notification-ui_dd-content mb-4">
                            <?php
                            require_once 'CONNECTION.php';
                            $sql = "SELECT * FROM notices";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($data = mysqli_fetch_array($result)) {
                                    ?>

                                    <div class="notification-list notification-list--unread">
                                        <div class="notification-list_content d-flex">
                                            <div class="notification-list_img">
                                                <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">
                                            </div>
                                            <div class="notification-list_detail">
                                                <p><b>Shyam Joshi</b> added a notice.</p>
                                                <p class="text-muted font-weight-bold">
                                                    <?php echo $data['Subject'] ?>
                                                </p>
                                                <p class="text-muted">
                                                    <?php echo $data['Message'] ?>
                                                </p>
                                                <p> <small> <b>Posted :</b> </small> <small class="text-muted">
                                                        <?php echo $data['Date'] ?>
                                                    </small></p>
                                            </div>
                                        </div>
                                    </div>

                                    <?php

                                }
                            }
                            ?>

                        </div>
                    </div>
                </section>


            </div>
        </section>
    </main>

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
</body>

</html>