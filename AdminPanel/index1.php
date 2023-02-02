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
    
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);

    body {
        font-family: "Roboto", sans-serif;

    }
</style>

<body>
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark main-navigation sticky-top" id="navbar"
        style="background-color: #2f89fc;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Panel</a>
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
                        <a class="nav-link px-3 px-lg-2" href="student.php">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2" href="request.php">Requests</a>
                    </li>
                    <li class="nav-item pt-1">

                        <a href="" type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class='bx bxs-user' style='color:#fffefe;'></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item" type="button">View</a>
                            <a href="#" class="dropdown-item" type="button">Edit Profile</a>
                            <hr class="dropdown-divider" />
                            <a href="../LOGOUT.php" class="dropdown-item" type="button">Log Out</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <a href="addnotice.php">
        <div class="btn btn-primary m-3 float-end"> + Add Notice</div>

    </a>



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
                                <div class="mt-2 mb-2"><img src="Notices/<?php echo $data['Photo'] ?>" width="100px" class="" alt="...">
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <h5 class="mx-2 mt-2"><?php echo $data['Subject'] ?></h5>
                                </div>
                                <p class="text-secondary mx-2 "><?php echo $data['Message'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-grid d-md-flex justify-content-end mt-4">
                            <button type="button" class="d-flex btn btn-primary btn-sm border bcolor text-light rounded-3 m">
                                <span class="material-symbols-outlined mx-2">
                                    visibility
                                </span>View</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php

        }
    }
    ?>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>