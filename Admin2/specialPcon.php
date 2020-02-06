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
$Saturday=$_POST['Saturday'];
$Sunday=$_POST['Sunday'];
$Monday=$_POST['Monday'];
$Tuesday=$_POST['Tuesday'];
$Wednesday=$_POST['Wednesday'];
$Thursday=$_POST['Thursday'];

$sql="INSERT INTO specialp(Saturday, Sunday, Monday, Tuesday, Wednesday,Thursday) VALUES ('$Saturday', '$Sunday', '$Monday', '$Tuesday','$Wednesday','$Thursday')";

if ($conn->query($sql) === TRUE) {
         header("location: ../Done3.php");
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>