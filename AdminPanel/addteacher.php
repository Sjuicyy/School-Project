<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="rform.css">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
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
                        <a class="nav-link px-3 px-lg-2" href="teachers.php">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2" href="student.php">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 px-lg-2 active" href="request.php">Requests</a>
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

    <div class="container justify-content-center ">
        <div class="card-body px-sm-4 px-0">
            <div class="row justify-content-center mx-auto">
                <div class="col-md-10 col">
                    <h3 class="font-weight-bold ml-md-0 mx-auto text-center">Add Teacher</h3>
                </div>
            </div>
            <div class="row justify-content-center round">
                <div class="col-lg-8 col-md-12 ">
                    <div class="card shadow-lg card-1">
                        <div class="card-body inner-card">
                            <form action="ADD-TEACHER.php" method="POST" enctype="multipart/form-data">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="form-group"> <label for="Mobile-Number">Full Name</label> <input type="text" name="name" class="form-control" id="Mobile-Number" placeholder="">
                                        </div>
                                        <div class="form-group"> <label for="Email">Email</label> <input type="email" name="email" class="form-control" id="Email" placeholder="">
                                        </div>
                                        <div class="form-group"> <label for="Address">Address</label><input type="text" name="address" class="form-control" id="Address" placeholder=""> </div>
                                        <div class="form-group"> <label for="Mobile-Number">Mobile Number</label> <input type="number" name="phone" class="form-control" id="Mobile-Number" placeholder=""> </div>
                                    </div>

                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="form-group"> <label for="Sub">Subject</label><input type="text" name="subject" class="form-control" id="Sub" placeholder=""> </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="form-group"> <label for="Edu">Education</label> <input type="text" name="education" class="form-control" id="Edu" placeholder=""> </div>
                                    </div>

                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="form-group"> <label for="Sdate">Start Date</label> <input type="date" name="sdate" class="form-control" id="Sdate" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="form-group"> <label for="Edate">End Date</label> <input type="date" name="edate" class="form-control" id="Edate" placeholder=""> </div>
                                    </div>

                                    <div class="row col-lg-10 col-md-6 col-sm-12">
                                        <h5><b>Social</h5></b>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="form-group"> <label for="Sdate">Facebook(URL)</label> <input name="facebook" type="text" class="form-control" id="Sdate" placeholder=""> </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="form-group"> <label for="Edate">Twitter(URL)</label> <input name="twitter" type="text" class="form-control" id="Edate" placeholder=""> </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="form-group"> <label for="Sdate">Instagram(URL)</label> <input name="instagram" type="text" class="form-control" id="Sdate" placeholder=""> </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="form-group"> <label for="Edate">Linkedin(URL)</label> <input name="linkedin" type="text" class="form-control" id="Edate" placeholder=""> </div>
                                    </div>
                                </div>


                                <div class="row justify-content-center">
                                    <div class="col-lg-5">
                                        <div class="form-group files"><label class="Photo">Upload Your Photo </label>
                                            <input id="file" name="photo" type="file"  class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12 col-lg-10 col-12">
                                        <div class="form-group"> <label for="About">About</label> <textarea class="form-control rounded-0" name="about" id="About" rows="5"></textarea></div>
                                        <div class="row justify-content-end mb-4">
                                            <div class="col-lg-4 col-auto "><input type="submit" value="SAVE" class="btn btn-primary btn-block">
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
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
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
    <script>
        $(document).ready(function() {
            $(".files").attr('data-before', "Drag file here or click the above button");
            $('input[type="file"]').change(function(e) {
                var fileName = e.target.files[0].name;
                $(".files").attr('data-before', fileName);

            });
        });
    </script>
</body>

</html>