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
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $Passwor = mysqli_real_escape_string($conn,$_POST['Passwor']); 
      
      $sql = "SELECT email FROM admin WHERE email = '$email' and Passwor = '$Passwor'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         $_SESSION['login_user'] = $email;
         
         header("location: Admin2/index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
          echo $error;
      }
   }
?>