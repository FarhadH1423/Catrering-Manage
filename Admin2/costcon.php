<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "cateringms";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}
//conncetion code for passenger table
$vegetable=$_POST['vegetable'];
$fish=$_POST['fish'];
$meat=$_POST['meat'];
$grocery=$_POST['grocery'];
$others=$_POST['others'];
$total=$_POST['total'];

$sql="INSERT INTO costf(vegetable, fish, meat, grocery, others,total) VALUES ('$vegetable', '$fish', '$meat', '$grocery','$others','$total')";

if ($conn->query($sql) === TRUE) {
         header("location: ../Done3.php");
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>