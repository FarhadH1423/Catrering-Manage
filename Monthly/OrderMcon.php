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
$email=$_POST['email'];
$phone=$_POST['phone'];

$num0 = (rand(10,100));
    $num1 = date("Ymd");
    $num2 = (rand(100,1000));
    $num3 = time();
    $randnum = $num0 . $num1 . $num2 . $num3;

$sql="INSERT INTO ordersm(email, phone,transaction_id ) VALUES ('$email', '$phone','$randnum' )";


    


if ($conn->query($sql) === TRUE) {
    header("location: pyament.php");
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }



    

?>