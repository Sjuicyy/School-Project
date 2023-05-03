<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>Notices</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/fancybox/css/jquery.fancybox.css">
  <link rel="stylesheet" href="../assets/css/theme.css">




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <!-- <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel='stylesheet'> -->
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>




  <style>
    .justify {
      text-align: justify;
    }

    .bot {
      border-bottom: 3px solid #e5e5e5;
    }

    table {
      table-layout: fixed;
    }

    th,
    td {
      overflow: hidden;
    }
  </style>


</head>

<body>
  <!-- Back to top button -->
  <div class="back-to-top"></div>
  <header class="mb-3">

    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
      <div class="container">
        <a href="index.php" class="navbar-brand"><img src="../assets/img/Banner.png" style="max-width: 250px;"></span></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item ">
              <a href="index.php" class="nav-link">गृहपृष्ठ</a>
            </li>
            <li class="nav-item ">
              <a href="about.php" class="nav-link">हाम्रो बारेमा </a>
            </li>
            <li class="nav-item">
              <a href="society.php" class="nav-link">समुदायहरु</a>
            </li>
            <li class="nav-item ">
              <a href="Ex-students.php" class="nav-link">पूर्व विद्यार्थी</a>
            </li>
            <li class="nav-item active">
              <a href="notices.php" class="nav-link">सूचनाहरु</a>
            </li>
            <li class="nav-item">
              <a href="photos.php" class="nav-link">फोटोहरू</a>
            </li>
            <!--            <li class="nav-item">-->
            <!--              <a href="blog.html" class="nav-link">News</a>-->
            <!--            </li>-->
            <li class="nav-item">
              <a href="contact.php" class="nav-link">सम्पर्क</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->
    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(../assets/img/bg_image_3.jpg);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.php">गृहपृष्ठ</a></li>
                <li class="breadcrumb-item active" aria-current="page">सूचनाहरु</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">सूचनाहरु</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>





  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
  <div class="container" style="overflow-x:auto;">
    <table id="example" style="width: 100%;">

      <thead>
        <th>
          <h4 class="mb-0">Recent</h4>
        </th>

      </thead>

      <tbody>
        <?php
        require_once 'CONNECTION.php';
        $sql = "SELECT * FROM ANotice";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($data = mysqli_fetch_array($result)) {
        ?>
            <tr>
              <td class="bot" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data['Id'] ?>">
                <a href="#" style="text-decoration: none;">
                  <div class="media text-muted d-flex justify-content-between">
                    <div style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
                      <p class="media-body mb-0 mr-3 justify" style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">

                      <div style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
                        <strong> <?php echo $data['Subject'] ?></strong>
                      </div>

                      <div style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
                        <span><?php echo $data['Message'] ?></span>
                      </div>
                      </p>
                    </div>
                    <div>
                      <img src="../../AdminPanel/Notices/<?php echo $data['Photo'] ?>" alt="" class=" rounded" width="40" height="42">
                    </div>
                  </div>
                </a>
              </td>
            </tr>



            <div class="modal fade" id="exampleModal<?php echo $data['Id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">

                  <div class="modal-header d-flex justify-content-end">
                    <a href="notices.php">
                      <button type="button" class="btn-close btn  btn-lg" data-bs-dismiss="modal" aria-label="Close">X
                      </button>
                    </a>
                  </div>
                  <div class="modal-header">
                    <h5 class="    modal-title badge text-wrap text-break h5 text-start text-dark w-75" id="exampleModalLabel">
                      Subject :
                      <?php echo $data['Subject'] ?>
                    </h5>
                    <p class="h5 text-end badge text-wrap text-break text-start text-dark w-25" style="width: 10rem;" id="exampleModalLabel">Date
                      :
                      <?php echo $data['Date'] ?>
                      </>
                  </div>
                  <div class="modal-body mx-auto">
                    <center>
                      <img src="../../AdminPanel/Notices/<?php echo $data['Photo'] ?>" width="90%" class="img-fluid" alt="" srcset="">
                    </center>
                  </div>
                  <div class="modal-footer">
                    <p>
                      <?php echo $data['Message'] ?>
                    </p>
                    <a href="notices.php">
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>




        <?php
          }
        }
        ?>






      </tbody>
    </table>
  </div>









  <footer class="page-footer mt-5">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3 py-3">
          <h3>Reve<span class="fg-primary">Tive.</span></h3>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Contact Information</h5>
          <p>301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
          <p>Email: example@mail.com</p>
          <p>Phone: +00 112323980</p>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">Career</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">News & Feed</a></li>
            <li><a href="../../AdminPanel/Login.php">Admin Panel</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Newsletter</h5>
          <form action="#">
            <input type="text" class="form-control" placeholder="Enter your email">
            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
          </form>
        </div>
      </div>
      <hr>
      <div class="row mt-4">
        <div class="col-md-6">
          <p>Copyright 2020. This template designed by <a href="https://macodeid.com">MACode ID</a></p>
        </div>
        <div class="col-md-6 text-right">
          <div class="sosmed-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
            <a href="#"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- <script src="../assets/js/jquery-3.5.1.min.js"></script> -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>
  <script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="../assets/js/google-maps.js"></script>
  <script src="../assets/js/theme.js"></script>








  <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
  <script type='text/javascript'>
    $(document).ready(function() {
      $('#example').DataTable({
        "pageLength": 5,
        "language": {
          "decimal": "",
          "emptyTable": "No notice available",
          "info": "Showing _START_ to _END_ of _TOTAL_ notices",
          "infoEmpty": "Showing 0 to 0 of 0 entries",
          "infoFiltered": "(filtered from _MAX_ total notices)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Show _MENU_ notices",
          "loadingRecords": "Loading...",
          "processing": "",
          "search": "Search:",
          "zeroRecords": "No matching notice found",
          "paginate": {
            "first": "First",
            "last": "Last",
            "next": "Next",
            "previous": "Previous"
          },
          "aria": {
            "sortAscending": ": activate to sort column ascending",
            "sortDescending": ": activate to sort column descending"
          }
        }
      });
    });
  </script>

  <script type='text/javascript'>
    var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function(e) {
      e.preventDefault();
    });
  </script>



</body>

</html>