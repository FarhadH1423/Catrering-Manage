<?php
  $page="index";
  $title="Home";
  require_once('../header3.php');
?>  


<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
 <h1 style="text-align: center;color:#fff">Daily Customer Info</h1>    <h2>                                                </h2>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
     table {
  background-color: transparent;
  margin-left: 460px;
}
th {
  height: 43px;
  width: 96px;
  text-align: center;
  color: white;
  background-color: #1B1464;
}
    td {
  height: 55px;
  text-align: center;
}
    tr{background-color:#3C40C6; color: white;}
    body{background-color: #6F1E51;}

</style>
<body>

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

$sql = "SELECT * FROM daily";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center border=1>
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Password</th>
    
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>" . $row["Fname"]. "</td>
        <td>" . $row["Lname"]."</td>
        <td>".$row["email"]."</td>
        <td>".$row["phone"]."</td>
        <td>".$row["Passwor"]."</td>
        
        </tr>";
    }


    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>