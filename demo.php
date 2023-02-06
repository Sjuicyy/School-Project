<?php


require_once "connection.php";
echo "hello";
$sql = "SELECT * from students";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
echo $data;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <img src="img/Banner.png" width="500" alt="" srcset="">
    <?php
    $image = file_exists('img/' . $data["7"]);
    ?>
    <img src=" " width="500" srcset="">
    <?php if ($image == 1): ?>
        <img src="img/<?php echo $data['7'] ?>" width="200" alt="">
    <?php else: ?>
        <img src="../School_Project/AdminPanel/Teachers/<?php echo $data['7'] ?>" width="200" alt="">
    <?php endif; ?>

    
    <?php if ($image == 1): ?>
        <img src="img/<?php echo $data['7'] ?>" width="200" alt="">
    <?php else: ?>
        <img src="../School_Project/AdminPanel/Teachers/<?php echo $data['7'] ?>" width="200" alt="">
    <?php endif; ?>


    <img src="
    
    
        <?php if ($image == 1): ?>
                    img/<?php echo $data['7'] ?>
        <?php else: ?>
                        ../School_Project/AdminPanel/Teachers/<?php echo $data['7'] ?>
        <?php endif; ?>
    
    
    
    " width="200" alt="">






</body>

</html>