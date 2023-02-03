<?php

require_once 'CONNECTION.php';
$sql = "SELECT orderid,contactname,customername,orderdate,country,orderdate from Orders inner join Customers on Customers.customerid=Orders.customerid ";
$result = $conn->query($sql);


?>


<?php while ($data = mysqli_fetch_array($result)) {
echo "1-" . $data[0].  "<br>";
echo '2-' . $data[1].  "<br>";
echo '3-' . $data[2].  "<br>";
echo '4-' . $data[3].  "<br>";
echo '5-' . $data[4].  "<br>";
echo '6-' . $data[5].  "<br>";
echo '7-' . $data[6].  "<br>";
echo '8-' . $data[7].  "<br>";
echo '9-' . $data[8].  "<br>";
echo  "<br>";

    // echo $data['CustomerID'] . "<br>";
    // echo $data['CustomerName'] . "<br><br><br><br><br>";
}

echo $data;

?>




