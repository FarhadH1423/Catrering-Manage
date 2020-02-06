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
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$Passwor=$_POST['Passwor'];

$sql="INSERT INTO daily(Fname, Lname, email, phone, Passwor) VALUES ('$Fname', '$Lname', '$email', '$phone','$Passwor')";

if ($conn->query($sql) === TRUE) {
         header("location: Done2.php");
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>