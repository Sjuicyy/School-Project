<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin|Add Notice</title>
    <link rel="icon" href="img/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="rform.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);
        body {
            font-family: "Roboto", sans-serif;
        }
    </style>
</head>
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
                <div class="container justify-content-center ">
                    <div class="card-body px-sm-4 px-0">
                        <div class="row justify-content-center">
                            <div class="col-md-10 mb-3">
                                <h3 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">Add SMC Members</h3>
                            </div>
                        </div>
                        <div class="row d-flex round">
                            <div class="col-lg-5 col-md-12 ">
                                <form action="ADD-SMC.php" method="POST" enctype="multipart/form-data">
                                    <div class="card shadow-lg card-1">
                                        <div class="card-body inner-card">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-10">
                                                    <div class="form-group files"><label class="Photo">Upload Photo
                                                        </label>
                                                        <input id="file" type="file" name="photo"
                                                            class="form-control" required  />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12">
                                                    <div class="form-group"><label for="Name">Name</label><input
                                                            type="text" name="name" class="form-control" id="Name"
                                                            placeholder="" required></div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12">
                                                    <div class="form-group"><label for="Name">Post</label><input
                                                            type="text" name="date" class="form-control" id="Name"
                                                            placeholder="" required></div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12">
                                                    <div class="form-group"><label for="Name">Since</label><input
                                                            type="date" name="post" class="form-control" id="Name"
                                                            placeholder="" required></div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end mb-1">
                                                <div class="col-lg-4 col-auto "><input type="submit" value="Save"
                                                        class="btn btn-primary btn-block"></div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </form>
                            <div class="col-lg-2 "></div>
                            <div class="col-lg-5 col-md-12 ">
                                <div class="card shadow-lg card-1">
                                    <?php
                                    require_once 'CONNECTION.php';
                                    $sql = "SELECT * FROM Smc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($data = mysqli_fetch_array($result)) {
                                            ?>
                                            <div class="notification-ui_dd-content mb-4 px-2">
                                                <div class="notification-list_content d-flex mt-3">
                                                    <div class="notification-list_img mx-auto">
                                                        <img src="SMC/<?php echo $data['Image'] ?>" width="100" alt="user">
                                                    </div>
                                                    <div class="notification-list_detail mx-auto">
                                                        <div class="text-muted d-flex font-weight-bold">
                                                            Name:<p class="text-dark">
                                                                <?php echo $data['Name'] ?>
                                                            </p>
                                                        </div>
                                                        <div class="text-muted d-flex font-weight-bold">
                                                            Post:<p class="text-dark">
                                                                <?php echo $data['Post'] ?>
                                                            </p>
                                                        </div>
                                                        <div class="text-muted d-flex font-weight-bold">
                                                            Since:<p class="text-dark">
                                                                <?php echo $data['Since'] ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="mx-auto">
                                                        <form action="DELETE-SMC.php" method="post">
                                                            <button class="bg-none btn btn-danger" type="submit">
                                                                <input type="hidden" name="pid"
                                                                    value="<?php echo $data['Id'] ?>">
                                                                <span class="material-symbols-outlined fs-6 mt-1">
                                                                    delete
                                                                </span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script>$(document).ready(function () {
            $(".files").attr('data-before', "Drag file here or click the above button");
            $('input[type="file"]').change(function (e) {
                var fileName = e.target.files[0].name;
                $(".files").attr('data-before', fileName);
            });
        });</script>
</body>
</html>