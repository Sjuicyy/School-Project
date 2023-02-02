<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin|Students</title>
    <link rel="icon" href="img/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);

        body {
            background: #f5f5f5;
            font-family: 'roboto', sans-serif;

        }

        /* .grid tr:nth-child(even) {
            background: #fff
        }

        .grid tr:nth-child(odd) {
            background: #f9fafa
        }

        .grid td {
            border: 1px solid #e4e4e4;
            color: #000;
            font-size: 13px;
            height: 10px;
        }

        .grid th {
            background: #fff;
            text-align: center;
            color: #000;
            font-size: 13px;
            font-weight: 600;
            border: 1px solid #e4e4e4;
        } */


        .gv {
            overflow-x: scroll;
        }

        .avatar {
            height: 48px;
            width: 48px;
            border-radius: 50px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #f5f2f2;
        }

        table.table-striped tbody tr:hover {
            background: #d6d0d0;
            cursor: pointer;
        }

        .table td {
            font-size: 15px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
        }

        .table-wrapper {
            min-width: 725px;
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #2f89fc;
            color: #fff;
            padding: 10px 30px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        table.table td i {
            font-size: 20px;
        }

        td .eye:hover {
            transform: scale(1.5);
        }
    </style>
</head>

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
                        <a class="nav-link px-3 px-lg-2" aria-current="page" href="index1.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2" href="profile.php">Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2" href="teachers.php">Teachers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2 active" href="student.php">Students</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2" href="request.php">Requests</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2" href="addnotice.php">Notice</a>
                    </li>

                    <li class="nav-item pt-1">

                        <a href="" type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class='bx bxs-user' style='color:#fffefe;'></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item" type="button">View</a>
                            <a href="#" class="dropdown-item" type="button">Edit Profile</a>
                            <hr class="dropdown-divider" />
                            <a href="#" class="dropdown-item" type="button">Log Out</a>
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
                            <a href="" class="btn btn-primary" style="outline: 1px solid white;"><i class='bx bxs-group bx-sm' style='color:#ffffff' ></i> Student Requests</a>
                        </div>

                    </div>
                    <table id="example" class="table table-striped text-center" style="width:100%">
                        <thead style="background-color: #2f89fc; color: white;">
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Mobile Number</th>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td style="text-align: left;"><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                            class="avatar me-2" alt="Avatar"> Bijen Shrestha</a></td>
                                <td>bizen106@gmail.com</td>
                                <td>Srijananagar-5, Bhaktapur</td>
                                <td>9861437111</td>
                                <td>Computer Science</td>
                                <td><a href="profile.php" title="View" class="eye" data-toggle="tooltip"><i
                                            class="bi bi-eye"></i></a></td>
                            </tr>
                            <tr>
                                <td style="text-align: left;"><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                            class="avatar me-2" alt="Avatar"> Shyam Joshi</a></td>
                                <td>bizen106@gmail.com</td>
                                <td>Srijananagar-5, Bhaktapur</td>
                                <td>9861437111</td>
                                <td>Computer Science</td>
                                <td><a href="profile.php" title="View" class="eye" data-toggle="tooltip"><i
                                            class="bi bi-eye"></i></a></td>
                            </tr>
                            <tr>
                                <td style="text-align: left;"><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                            class="avatar me-2" alt="Avatar"> Sajan Maharjan</a></td>
                                <td>bizen106@gmail.com</td>
                                <td>Srijananagar-5, Bhaktapur</td>
                                <td>9861437111</td>
                                <td>Computer Science</td>
                                <td><a href="profile.php" title="View" class="eye" data-toggle="tooltip"><i
                                            class="bi bi-eye"></i></a></td>
                            </tr>
                            <tr>
                                <td style="text-align: left;"><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                            class="avatar me-2" alt="Avatar"> Aarju Silwal</a></td>
                                <td>bizen106@gmail.com</td>
                                <td>Srijananagar-5, Bhaktapur</td>
                                <td>9861437111</td>
                                <td>Computer Science</td>
                                <td><a href="profile.php" title="View" class="eye" data-toggle="tooltip"><i
                                            class="bi bi-eye"></i></a></td>
                            </tr>
                            <tr>
                                <td style="text-align: left;"><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                            class="avatar me-2" alt="Avatar"> Pritam Bajgain</a></td>
                                <td>bizen106@gmail.com</td>
                                <td>Srijananagar-5, Bhaktapur</td>
                                <td>9861437111</td>
                                <td>Computer Science</td>
                                <td><a href="profile.php" title="View" class="eye" data-toggle="tooltip"><i
                                            class="bi bi-eye"></i></a></td>
                            </tr>
                            <tr>
                                <td style="text-align: left;"><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                            class="avatar me-2" alt="Avatar"> Ram Thapa</a></td>
                                <td>ram@gmail.com</td>
                                <td>Srijananagar-5, Bhaktapur</td>
                                <td>9861437111</td>
                                <td>Computer Science</td>
                                <td><a href="profile.php" title="View" class="eye" data-toggle="tooltip"><i
                                            class="bi bi-eye"></i></a></td>
                            </tr>
                            <tr>
                                <td style="text-align: left;"><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                            class="avatar me-2" alt="Avatar"> Sita Rai</a></td>
                                <td>sita@gmail.com</td>
                                <td>Lagankhel-1, Lalitpur</td>
                                <td>980000000000</td>
                                <td>Math</td>
                                <td><a href="profile.php" title="View" class="eye" data-toggle="tooltip"><i
                                            class="bi bi-eye"></i></a></td>
                            </tr>
                        </tbody>
                        <tfoot style="background-color: #2f89fc; color: white;" class="sticky-bottom">
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Mobile Number</th>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>



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
    <script src="js/script.js"></script>
</body>

</html>