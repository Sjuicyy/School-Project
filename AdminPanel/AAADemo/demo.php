<?php
require_once 'CONNECTION.php';
$sql = "SELECT * from Customers ";
$result = $conn->query($sql);
?>


<?php while ($data = mysqli_fetch_array($result)) {
    echo $data['CustomerID'] . "<br>";
    echo $data['CustomerName'] . "<br>";
}
?>
