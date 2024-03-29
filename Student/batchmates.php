<?php
session_start();
require_once "CONNECTION.php";
$email_id = $_SESSION['User'];
$batch = $_SESSION['batch'];
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
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);
    body {
        font-family: "Roboto", sans-serif;
        background: #EFF1F3;
        min-height: 100vh;
        position: relative;
    }
</style>
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
                    <li class="nav-item">
                        <a class="nav-link px-3 mx-3 px-lg-2 " aria-current="page" href="../index1.php">Home</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link px-3 mx-3 px-lg-2" href="../Student/requests.php">Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 mx-3 px-lg-2 active" href="batchmates.php">Batchmates</a>
                    </li>
                    <li class="nav-item pt-1">
                        <a href="" type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><img src="../img/Students/<?php echo $data['Photo'] ?>"
                                class="rounded-circle" height="50px" width="50px" alt=""> </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="myprofile.php" class="dropdown-item" type="button">View Profile</a>
                            <hr class="dropdown-divider" />
                            <?php if ($data['IsAdmin'] == '1'): ?>
                                    <a href="allmembers.php" class="dropdown-item" type="button">Member Requests</a>
                                    <hr class="dropdown-divider" />
                                <?php endif; ?>
                            <a href="../LOGOUT.php" class="dropdown-item" type="button">Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row gv">
            <div class="col-md-12">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="d-flex justify-content-between">
                            <h3 class="heading-line">Students</h3>
                        </div>
                    </div>
                    <table id="example" class="table table-striped text-center" style="width:100%">
                        <thead style="background-color: #2f89fc; color: white;">
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Mobile Number</th>
                                <th>Father's Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'CONNECTION.php';
                            $sql = "SELECT * FROM students where Batch = '2013' ";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <td style="text-align: left;">
                                            <img src="../img/Students/<?php echo $data['Photo'] ?>" width="50px"
                                                class="avatar me-2 bold" alt="Avatar">
                                            <span class="fw-bold">
                                                <?php echo $data['Name'] ?>
                                            </span>
                                        </td>
                                        <td>
                                            <?php echo $data['Email'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['Address'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['Contact'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['Fname'] ?>
                                        </td>
                                        <td><a href="../profile.php?id=<?php echo $data['Contact'] ?>" title="View" class="eye"
                                                data-toggle="tooltip"><i class="bi bi-eye"></i></a></td>
                                    </tr>
                                <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src=" https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                "order": [[0, "asc"]],
                // "ordering": false
                "columnDefs": [{
                    "targets": [1, 2, 3, 4, 5],
                    "orderable": false
                }]
            });
        });
    </script>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>