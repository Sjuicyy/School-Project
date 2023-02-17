<?php
session_start();
require_once "CONNECTION.php";
$email_id = $_SESSION['User'];
if (!($_SESSION['status'] == 'logedin')) {
    header('Location:../Loghome.php');
}
$sql = "SELECT * from students WHERE Email='$email_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
$rows = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="rform.css">
    <link rel="icon" href="img/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark main-navigation" id="navbar"
        style="background-color: #2f89fc;">
        <div class="container-fluid">
            <img src="../img/Banner.png" width="200px" alt="">
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="overlay d-flex d-lg-none"></div>
            <div class="order-lg-2 d-lg-flex w-100 sidebar pb-3 pb-lg-0" style="background-color: #2f89fc;">
                <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0" style="font-size: larger;">
                    <?php if ($data['Status'] == 2): ?>
                        <li class="nav-item">
                            <a class="nav-link px-3 mx-3 px-lg-2 " aria-current="page" href="../index1.php">Home</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link px-3 mx-3 px-lg-2" href="requests.php">Requests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 mx-3 px-lg-2" href="batchmates.php">Batchmates</a>
                        </li>
                    <?php endif; ?>
                    <?php if ($data['Photo'] == Null): ?>
                        <a href="../LOGOUT.php">
                            <p class="text-light text-decoration-none">Log Out</p>
                        </a>
                    <?php else: ?>
                        <li class="nav-item pt-1">
                            <a href="" type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><img src="../img/Students/<?php echo $data['Photo'] ?>"
                                    class="rounded-circle" height="50px" width="50px" alt=""> </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="./myprofile.php" class="dropdown-item" type="button">View Profile</a>
                                <hr class="dropdown-divider" />
                                <a href="../LOGOUT.php" class="dropdown-item" type="button">Log Out</a>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container justify-content-center ">
        <div class="card-body px-sm-4 px-0">
            <div class="row justify-content-center mx-auto">
                <div class="col-md-10 col">
                    <h3 class="font-weight-bold ml-md-0 mx-auto text-center">Student Request Form </h3>
                    <p class="  ml-md-0 ml-2 text-center"> Fill up the form with your genuine details. </p>
                </div>
            </div>
            <div class="row justify-content-center round">
                <?php if ($data['Emsg'] == !NULL): ?>
                    <div class="alert  alert-danger mt-3 w-75" role="alert">
                        <?php echo $data['Emsg']; ?>
                    </div>
                <?php endif; ?>
                <div class="col-lg-8 col-md-12 ">
                    <div class="card shadow-lg card-1">
                        <form action="REQUEST-FORM.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body inner-card">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="form-group"> <label for="Mobile-Number">Full Name</label> <input
                                                type="text" name="name" value="<?php echo $data['Name']; ?>"
                                                class="form-control" id="Mobile-Number" placeholder=""> </div>
                                        <div class="form-group"> <label for="Mobile-Number">Mobile Number</label> <input
                                                type="number" name="phone" value="<?php echo $data['Contact']; ?>"
                                                class="form-control" id="Mobile-Number" placeholder=""> </div>
                                        <div class="form-group"> <label for="Fname">Father's Name</label> <input
                                                type="text" name="fathername" value="<?php echo $data['Fname']; ?>"
                                                class="form-control" id="Fname" placeholder=""> </div>
                                        <div class="form-group"> <label for="Address">Address</label><input type="text"
                                                name="address" value="<?php echo $data['Address']; ?>"
                                                class="form-control" id="Address" placeholder=""> </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5 col-md-6 col-sm-12">
                                            <div class="form-group"> <label for="batch">Batch</label>
                                                <select name="batch" class="form-control">
                                                    <option>
                                                        <?php echo $data['Batch']; ?>
                                                    </option>
                                                    <option>2012</option>
                                                    <option>2013</option>
                                                    <option>2014</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6 col-sm-12">
                                            <div class="form-group"> <label for="profession">Profession</label> <input
                                                    name="profession" value="<?php echo $data['Profession']; ?>"
                                                    class="form-control">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="form-group"> <label for="Mobile-Number">Facebook(URL:)</label>
                                                <input type="text" name="facebook"
                                                    value="<?php echo $data['Facebook']; ?>" class="form-control"
                                                    id="Mobile-Number" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <div class="form-group files"><label class="Photo">Upload Your Photo
                                                </label>
                                                <input type="file" name="photo" id="file" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 col-lg-10 col-12">
                                            <div class="form-group"> <label for="About">About</label> <input
                                                    style="min-height: 100px;" name="about"
                                                    value="<?php echo $data['About']; ?>" class="form-control rounded-0"
                                                    id="About" rows="5">
                                            </div>
                                            <div class="row justify-content-end mb-4">
                                                <div class="col-lg-4 col-auto "><button type="sumbit" name="submit"
                                                        value="Request" class="btn btn-primary btn-block"><small
                                                            class="font-weight-bold">Request</small></button>
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
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".files").attr('data-before', "Drag file here or click the above button");
            $('input[type="file"]').change(function (e) {
                var fileName = e.target.files[0].name;
                $(".files").attr('data-before', fileName);
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>
</html>