<?php
  $page="index";
  $title="Home";
  require_once('../header3.php');
?>  


<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
 <h1 style="text-align: center; color:#fff">Monthly Customer Order Info</h1>    <h2>                                                </h2>


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

</head>
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

$sql = "SELECT * FROM ordersm";
$result = mysqli_query($conn, $sql);


if ($result->num_rows > 0) {
    echo "<table align=center border=3>
    <tr>
    <th >  Order Id  </th>
    <th> Email </th>
    <th> Phone </th>
    <th > Transaction Id </th>
    
    
    
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td align=center>".$row["order_id"]. "</td>
        <td>".$row["email"]."</td>
        <td>".$row["phone"]."</td>
        <td>".$row["transaction_id"]."</td>
        "?>

        <?php
        "</tr>";
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




