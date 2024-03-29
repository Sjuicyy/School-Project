<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin|Request</title>
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
        width: 115px;
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
<nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark main-navigation sticky-top" id="navbar"
        style="background-color: #2f89fc;">
        <div class="container-fluid">
        <a href="index1.php">
                <img src="../img/Banner.png" width="200px" alt="">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
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
    <main>
        <section class="blog">
            <div class="container">
                <section class="mt-4">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="mb-4 heading-line">All Requests</h3>
                            </div>
                        </div>
                        <div class="notification-ui_dd-content mb-4">
                            <?php
                            require_once 'CONNECTION.php';
                            $sql = "SELECT * FROM (SELECT Name,Contact,Photo FROM teachers UNION SELECT Name,Contact,Photo FROM students) AS P INNER JOIN notices ON P.Contact = notices.Pid ORDER BY Date DESC";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                    <div class="notification-list notification-list--unread">
                                        <div class="notification-list_content d-flex">
                                            <div class="notification-list_img">
                                                <?php $image = file_exists('../img/Students/' . $data["Photo"]) ?>
                                                <img src="
                                                                        <?php if ($image == 1): ?>
                                                                                            ../img/Students/<?php echo $data['Photo'] ?>
                                                                        <?php else: ?>
                                                                                            ../School_Project/AdminPanel/Teachers/<?php echo $data['Photo'] ?>
                                                                        <?php endif; ?>
                                                                        " alt="<?php echo $data['Photo'] ?>">
                                            </div>
                                            <div class="notification-list_detail">
                                                <p>By:
                                                    <a class="text-decoration-none"
                                                        href="profile.php?id=<?php echo $data['Contact'] ?>">
                                                        <?php echo $data['Name'] ?></b>
                                                    </a>
                                                </p>
                                                <p class="text-muted font-weight-bold">
                                                    <?php echo $data['Subject'] ?>
                                                </p>
                                                <p class="text-muted">
                                                    <?php echo $data['Message'] ?>
                                                </p>
                                                <p> <small> <b>Posted :</b> </small> <small class="text-muted">
                                                        <?php
                                                        echo $data['Date']
                                                            ?>
                                                    </small></p>
                                            </div>
                                        </div>
                                        <div>
                                            <form action="DELETE-REQUEST.php" method="post">
                                                <button class="bg-none btn btn-danger" type="submit">
                                                    <input type="hidden" name="pid" value="<?php echo $data['Id'] ?>">
                                                    <span class="material-symbols-outlined mt-1">
                                                        delete
                                                    </span>
                                                </button>
                                            </form>
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