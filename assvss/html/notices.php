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



  <style>
    .bot {
      border-bottom: 1px solid #e5e5e5;
    }

    .justify {
      text-align: justify;
    }
  </style>


</head>

<body>
  <!-- Back to top button -->
  <div class="back-to-top"></div>
  <header class="mb-3">

    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
      <div class="container">
        <a href="index.php" class="navbar-brand"><img src="../assets/img/Banner.png"
            style="max-width: 250px;"></span></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
          aria-expanded="false" aria-label="Toggle navigation">
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
    <div class="page-banner bg-img bg-img-parallax overlay-dark"
      style="background-image: url(../assets/img/bg_image_3.jpg);">
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
















  <main role="main" class="container ">
    <div class="my-3 p-3 bg-white rounded box-shadow">
      <h4 class="bot pb-2 mb-0">Recent</h4>

      <?php
      require_once 'CONNECTION.php';
      $sql = "SELECT * FROM ANotice";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($data = mysqli_fetch_array($result)) {
          ?>

          <a href="noticedetail.php?id=<?php echo $data['Id'] ?>" style="text-decoration: none; ">
            <div class="media text-muted pt-3">
              <p class="media-body pb-3 mb-0 mr-3 bot justify"
                style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
                <strong class="d-block" style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
                  <?php echo $data['Subject'] ?>
                </strong>
                <span>
                  <?php echo $data['Message'] ?>
                </span>

              </p>
              <img src="../../AdminPanel/Notices/<?php echo $data['Photo'] ?>" alt="" class=" rounded" width="40"
                height="42">
            </div>
          </a>
        <?php
        }
      }
      ?>
    </div>
  </main>



  </div>
  </main>
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
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>
  <script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="../assets/js/google-maps.js"></script>
  <script src="../assets/js/theme.js"></script>
</body>

</html>