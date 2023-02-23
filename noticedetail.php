<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <!-- Modal -->
  <div class="modal1 fade1" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <?php
        $id = $_GET['id'];
        require_once 'CONNECTION.php';
        $sql = "SELECT * FROM ANotice where Id= $id";
        $result = $conn->query($sql);
        $data = mysqli_fetch_array($result);
        ?>
        <div class="modal-header d-flex justify-content-end">
            <a href="index1.php">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              </button>
            </a>
        </div>
        <div class="modal-header">
          <h5 class="modal-title badge text-wrap text-break h5 text-start text-dark w-75" id="exampleModalLabel">
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
          <img src="AdminPanel/Notices/<?php echo $data['Photo'] ?>" width="90%" class="img-fluid" alt="" srcset="">
          </center>
        </div>
        <div class="modal-footer">
          <p>
            <?php echo $data['Message'] ?>
          </p>
          <a href="index1.php">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>