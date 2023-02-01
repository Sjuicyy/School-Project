<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="rform.css">
    <style>
         @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);
         body{
            font-family: "Roboto", sans-serif;
         }
    </style>
  </head>

<body>

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
                            <form action="" method="post"></form>
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="form-group"> <label for="Mobile-Number">Full Name</label> <input
                                            type="text" name="" class="form-control" id="Mobile-Number" placeholder="">
                                    </div>
                                    <div class="form-group"> <label for="Email">Email</label> <input
                                            type="email" name="" class="form-control" id="Email" placeholder="">
                                    </div>
                                    <div class="form-group"> <label for="Address">Address</label><input type="text"
                                            name="" class="form-control" id="Address" placeholder=""> </div>
                                    <div class="form-group"> <label for="Mobile-Number">Mobile Number</label> <input
                                            type="number" name="" class="form-control" id="Mobile-Number"
                                            placeholder=""> </div>
                                </div>

                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group"> <label for="Sub">Subject</label><input type="text"
                                            class="form-control" id="Sub" placeholder=""> </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group"> <label for="Edu">Education</label> <input type="text"
                                            class="form-control" id="Edu" placeholder=""> </div>
                                </div>

                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group"> <label for="Sdate">Start Date</label> <input type="date"
                                            class="form-control" id="Sdate" placeholder=""> </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group"> <label for="Edate">End Date</label> <input type="date"
                                            class="form-control" id="Edate" placeholder=""> </div>
                                </div>

                                <div class="row col-lg-10 col-md-6 col-sm-12"><h5><b>Social</h5></b></div>
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group"> <label for="Sdate">Facebook(URL)</label> <input type="text"
                                        class="form-control" id="Sdate" placeholder=""> </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group"> <label for="Edate">Twitter(URL)</label> <input type="text"
                                            class="form-control" id="Edate" placeholder=""> </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group"> <label for="Sdate">Instagram(URL)</label> <input type="text"
                                        class="form-control" id="Sdate" placeholder=""> </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group"> <label for="Edate">Linkedin(URL)</label> <input type="text"
                                            class="form-control" id="Edate" placeholder=""> </div>
                                </div>
                            </div>
                            </form>

                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="form-group files"><label class="Photo">Upload Your Photo </label> <input
                                            id="file" type="file" accept="" class="form-control" /></div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-lg-10 col-12">
                                    <div class="form-group"> <label for="About">About</label> <textarea
                                            class="form-control rounded-0" id="About" rows="5"></textarea></div>
                                    <div class="row justify-content-end mb-4">
                                        <div class="col-lg-4 col-auto "><button type="button"
                                                class="btn btn-primary btn-block"><small
                                                    class="font-weight-bold">Request</small></button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script>$(document).ready(function () {
            $(".files").attr('data-before', "Drag file here or click the above button");
            $('input[type="file"]').change(function (e) {
                var fileName = e.target.files[0].name;
                $(".files").attr('data-before', fileName);

            });
        });</script>
</body>

</html>