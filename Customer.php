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
$customername=$_POST['customername'];
$customeremail=$_POST['customeremail'];
$customeremail=$_POST['customeraddress'];
//$expense=$_POST['e'];

$sql = "INSERT INTO customer(C_Name,E_Mail,C_Address)
VALUES ('$customername', '$customeremail','$customeremail')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?>
