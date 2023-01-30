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
    </style>
    <title>Little Angle School</title>
</head>

<body style="background-color:#99e6e335 ;">
    <!-- heading start -->
    <div class=" container-fluid text-center">
    <div class="container mt-5 w-50 bg-white border border-3 border-primary rounded-3"
        style="height:880px;max-width:650px">
        <form method="POST" action="Slogin.php" class="card border-0 w-100">
            <img class="mt-5 border border-2 "
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz1m04w68aRdNB7iYunL7Jm67YbbPhTUjtvw&usqp=CAU"
                width="100%">
            <div class="card-body">
                <h1 class="card-title color text-center" style="letter-spacing: 10px;">HAVARD</h1>
                <h4 class="card-text color text-center" style="letter-spacing: 3px;">Medical School</h4>
            </div>
            <input class="form-control-lg border border-3 border-primary w-75 mx-auto p-2 mt-5" type="email" name="email"
                placeholder="Email Address">
            <input class="form-control-lg border border-3 border-primary w-75 mx-auto p-2 mt-4" type="password" name="password"
                placeholder="Password">
            <div class="form-check mx-5 mt-3">
                <input class="form-check-input color" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label color text-decoration-none" for="flexCheckDefault">
                    Remember me?
                </label>
            </div>
            <input type="submit" value="Submit" class="btn1 bcolor text-light border-0 rounded-3 fs-5 w-75 p-2 mx-auto mt-4" style="letter-spacing: 2px;">
            <div class=" w-100 px-5 mt-2 text-end">
                <a class="text-decoration-none" href="">Forgot Password?</a>
            </div>
            <p class=" text-center mt-3 h5 border-2 color">OR</p>
            <div class="text-center mt-3 ">
                <a href="#" class="fa fs-1 mx-2 w-25 p-2 px-3 text-decoration-none text-light bcolor border rounded-3 btn1 fa-facebook"></a>
                <a href="#" class="fa fs-1 mx-2 w-25 p-2 px-3 text-decoration-none text-light bg-danger border rounded-3 btn1 fa-google"></a>
            </div>
            <div class="row mt-3">
                <div class="col  text-center">
                    Need an account? <a class="color text-decoration-none mx-auto" href="./signup.php"> SIGN UP</a>
                </div>
            </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

</body>

</html>