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
$paymenttype=$_POST['paymenttype'];

//$expense=$_POST['e'];

$sql = "INSERT INTO payment(Pay_Type)
VALUES ('$paymenttype')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?>
