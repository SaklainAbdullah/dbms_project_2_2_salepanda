<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ec";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$productname=$_POST['productname'];
$productprice=$_POST['productprice'];
$productcolor=$_POST['productcolor'];
$productprice=$_POST['productprice'];
$productsize=$_POST['productsize'];
$productquantity=$_POST['productquantity'];
//$expense=$_POST['e'];

$sql = "INSERT INTO product(P_Name,Price,Color,Size,Quantity)
VALUES ('$productname', '$productprice','$productcolor','$productsize','$productquantity')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?>
