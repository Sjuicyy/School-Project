<?php
session_start();
$email_id = $_SESSION['User'];
if (!($_SESSION['status'] == 'logedin')) {
    header('Location:Login.php');
}
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
</head>

<body>

    <div class="container justify-content-center ">
        <div class="card-body px-sm-4 px-0">
            <div class="row justify-content-center mx-auto">
                <div class="col-md-10 col">
                    <h3 class="font-weight-bold ml-md-0 mx-auto text-center">Student Request Form </h3>
                    <p class="  ml-md-0 ml-2 text-center"> Fill up the form with your genuine details. </p>
                </div>
            </div>
            <div class="row justify-content-center round">
                <?php
                require_once 'CONNECTION.php';
                $sql = "SELECT * FROM students where email='$email_id '";
                $result = $conn->query($sql);
                $data = mysqli_fetch_array($result);
                ?>
                <div class="col-lg-8 col-md-12 ">
                    <div class="card shadow-lg card-1">
                        <form action="REQUEST-FORM.php" method="POST">
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

                                    <!-- <div class="row justify-content-center"> -->

                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="form-group"> <label for="batch">Batch</label> <select name="batch"
                                                class="form-control">
                                                <option>
                                                    <?php echo $data['Batch']; ?>
                                                </option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                            </select> </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="form-group"> <label for="profession">Profession</label> <input
                                                name="profession" value="<?php echo $data['Profession']; ?>"
                                                class="form-control">
                                            </input></div>
                                    </div>
                                    <!-- </div> -->


                                    <div class="form-group"> <label for="Mobile-Number">Facebook(URL:)</label>
                                        <input type="text" name="facebook" value="<?php echo $data['Facebook']; ?>"
                                            class="form-control" id="Mobile-Number" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <div class="form-group files"><label class="Photo">Upload Your Photo </label>
                                        <input name="Photo" id="file" type="file" accept="" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-lg-10 col-12">
                                    <div class="form-group"> <label for="About">About</label> <textarea name="about"
                                            value="<?php echo $data['About']; ?>" class="form-control rounded-0"
                                            id="About" rows="5"></textarea></div>
                                    <div class="row justify-content-end mb-4">

                                        <div class="col-lg-4 col-auto "><button type="sumbit"
                                                class="btn btn-primary btn-block"><small
                                                    class="font-weight-bold">Request</small></button>
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
</body>

</html>