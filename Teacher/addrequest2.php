<?php
session_start();
require_once "CONNECTION.php";
$email_id = $_SESSION['User'];
if (!($_SESSION['status'] == 'logedin')) {
    header('Location:../Loghome.php');
}
$sql = "SELECT * from teachers WHERE Email='$email_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="rform.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                    <li class="nav-item">
                        <a class="nav-link px-3 mx-3 px-lg-2 " aria-current="page" href="../index1.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 mx-3 px-lg-2" href="requests2.php">Requests</a>
                    </li>
                    <li class="nav-item pt-1">
                        <a href="" type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><img src="../img/Teachers/<?php echo $data['Photo'] ?>"
                                class="rounded-circle" height="50px" width="50px" alt=""> </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="myprofile.php
                            " class="dropdown-item" type="button">View Profile</a>
                            <hr class="dropdown-divider" />
                            <a href="../LOGOUT.php" class="dropdown-item" type="button">Log Out</a>
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
                                <h3 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">Add Notice </h3>
                            </div>
                        </div>
                        <form action="ADD-NOTICE2.php" method="POST" class="row justify-content-center round">
                            <div class="col-lg-10 col-md-12 ">
                                <div class="card shadow-lg card-1">
                                    <div class="card-body inner-card">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-10">
                                                <div class="form-group"><label for="Name">Subject</label>
                                                    <input type="text" name='subject' class="form-control" id="Name"
                                                        placeholder="Type the subject" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-lg-10 col-12">
                                                <div class="form-group"> <label for="Message">Message</label> <textarea
                                                        name='message' class="form-control rounded-0" id="Message"
                                                        rows="5" required></textarea>
                                                </div>
                                                <div class="row justify-content-end mb-5">
                                                    <div class="col-lg-4 col-auto "><input type="submit" value="Send"
                                                            class="btn btn-primary btn-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    <script src="js/script.js"></script>
</body>
</html>