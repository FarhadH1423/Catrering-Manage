<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cateringms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      
      $transaction_id = mysqli_real_escape_string($conn,$_POST['transaction_id']); 
      



      $sql = "SELECT order_id FROM ordersm WHERE transaction_id = '$transaction_id'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         $_SESSION['login_user'] = $order_id;
         
         header("location:../Done.php");
      }else {
         $error = "Your Login Name or Password is invalid";
          echo $error;
      }
   }
?>


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



$sql = "INSERT INTO price (Dprice)
SELECT Mprice FROM Price";



if ($conn->query($sql) === TRUE) {
   
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>