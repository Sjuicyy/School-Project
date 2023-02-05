<?php



$conn=mysqli_connect("localhost","root",'','practise');
echo"connection success"."<br>";




$sql = "SELECT * from Customers ";
$result = $conn->query($sql);

?>
<?php while ($data = mysqli_fetch_array($result)) {
    echo '1-' . $data[0] . "<br>";
    echo '2-' . $data[1] . "<br>";
    echo '3-' . $data[2] . "<br>";
    echo '4-' . $data[3] . "<br>";
    echo '5-' . $data[4] . "<br>";
    echo '6-' . $data[5] . "<br>";
    echo '7-' . $data[6] . "<br>";
    echo '8-' . $data[7] . "<br>";
    echo "<br>";
}
echo $data;
?>




<?php
// require_once 'CONNECTION.php';
// $sql = "SELECT customername
// from Customers  
// inner join Orders on Orders.orderid=Customers.customerid   ";
// $result = $conn->query($sql);
// ?>

<?php
//  while ($data = mysqli_fetch_array($result)) {
// echo '1-' . $data[0].  "<br>";
// echo '2-' . $data[1].  "<br>";
// echo '3-' . $data[2].  "<br>";
// echo '4-' . $data[3].  "<br>";
// echo '5-' . $data[4].  "<br>";
// echo '6-' . $data[5].  "<br>";
// echo '7-' . $data[6].  "<br>";
// echo  "<br>";
// }
// echo $data;

?>