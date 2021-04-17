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
$adminname=$_POST['adminname'];
$adminaccountnumber=$_POST['adminaccountnumber'];
//$expense=$_POST['e'];

$sql = "INSERT INTO admin(A_Name,A_ACNo)
VALUES ('$adminname', '$adminaccountnumber')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?>
