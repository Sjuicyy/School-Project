<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            height: 1000px;
        }

        .bcolor {
            background-color: rgb(47, 137, 252);
        }

        .color {
            color: rgb(47, 137, 252);
        }

        .btn1 {
            color: white;
        }

        .btn1:hover {
            color: rgba(0, 0, 0, 0);
        }
        .col1{
            color: rgb(26,231,17);
        }
    </style>
    <title>Little Angle School</title>
</head>

<body style="background-color:#99e6e335 ;">
    <!-- heading start -->
    <div class=" container-fluid text-center">
        <div class="container mt-5 w-50 bg-white rounded-3"
            style="height:880px;max-width:650px;border:2px solid rgb(26,231,17)">
            <form method="POST" action="LOGIN-A.php" class="card border-0 w-100">
                <img class="mt-5 border border-2 "
                    src="../img/Banner.png"
                    width="100%">
                <div class="card-body mt-3">
                    <h1 class="card-title color text-center col1" style="letter-spacing: 10px;">S.S.V.S.S</h1>
                </div>
                <input class="form-control-lg  w-75 mx-auto p-2 mt-3" type="email"
                    name="email" placeholder="Email Address" style="border:2px solid rgb(26,231,17)">
                <input class="form-control-lg  w-75 mx-auto p-2 mt-5" type="password"
                    name="password" placeholder="Password" style="border:2px solid rgb(26,231,17)">
                <input type="submit" value="Log In"
                    class="btn1  bcolor text-light border-0 rounded-3 fs-5 w-75 p-2 mx-auto mt-5"
                    style="letter-spacing: 2px;">
                <div class=" w-100 px-5 mt-2 text-end">
                    <a class="text-decoration-none" href="">Forgot Password?</a>
                </div>
                <p class=" text-center mt-3 h5 border-2 color">OR</p>
                <div class="text-center mt-3 ">
                    <a href="#"
                        class="fa fs-1 mx-2 w-25 p-2 px-3 text-decoration-none text-light bcolor border rounded-3 btn1 fa-facebook"></a>
                    <a href="#"
                        class="fa fs-1 mx-2 w-25 p-2 px-3 text-decoration-none text-light bg-danger border rounded-3 btn1 fa-google"></a>
                </div>
                <div class="row mt-3">
                    <div class="col  text-center">
                        Need an account? <a class="color text-decoration-none mx-auto" href="./signup.php"> SIGN UP</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>