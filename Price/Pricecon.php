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
$Dprice=$_POST['Dprice'];
$Wprice=$_POST['Wprice'];
$Mprice=$_POST['Mprice'];

$sql="INSERT INTO price(Dprice, Wprice, Mprice) VALUES ('$Dprice', '$Wprice', '$Mprice')";

if ($conn->query($sql) === TRUE) {

	
	header("location:../done3.php")  ;

    
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>