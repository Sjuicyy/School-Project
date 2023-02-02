<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .bcolor {
            background-color: rgb(47, 137, 252);
        }

        .color {
            color: rgb(47, 137, 252);
        }

        .btn1:hover {
            opacity: 0.8;
        }

        .btn1 {
            color: #ffffff;
        }
        .col1{
            color: rgb(26,231,17);
        }
    </style>
    <title>Little Angle School</title>
</head>

<body class="" style="background-color:#99e6e335; height: 900px;">
    <!-- heading start -->

    <!-- heading end -->
    <!-- login body  -->
    <div class="container mt-5  rounded-3 p-3 "
        style="height:780px;background-color:white; max-width:650px;border:2px solid rgb(26,231,17)">
        <img class="mt-5 border border-2 "
            src="img/Banner.png"
            width="100%">
        <br><br>
        <div class="row  mt-5">
            <p class="color h1">LOG IN AS</p>
        </div>
      
        <div class=" container mt-5">
            <a href="login.php">
                <button class="w-100 bcolor btn1 rounded-3 mt-4 h4 p-2 border-0" style="letter-spacing: 2px;" >Student </button>
            </a>
            <a href="login.php">
            <button class="w-100 bcolor btn1 rounded-3 mt-5 h4 p-2 border-0" style="letter-spacing: 2px;" >Teacher</button>
            </a>
        </div>

        <center>
            <div class="mt-3">
            <a  href="AdminPanel/Login.php">
                <div class="btn btn-secondary mt-5"  >
                    Admin
                </div>
                </a> 
            </div>
        </center>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>