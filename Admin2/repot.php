<?php
  $page="index";
  $title="Home";
  require_once('../header3.php');
?>  


<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
 <h1 style="text-align: center;">Daily Cost Information</h1>    <h2>                                                </h2>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<style>
 
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
    

    body {
 
}

</style>

</style>
<body style=" background-color: #1B1464; color: white;">

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

$sql = "SELECT * FROM costf";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center border=1 >
    <tr>
    <th>Day</th>
    <th>Vegetable Cost</th>
    <th>Fish Cost</th>
    <th>Meat Cost</th>
    <th>Grocery Cost</th>
    <th>Others Cost</th>
    <th>Total Cost</th>
    
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>" . $row["id"]. "</td>
        <td>" . $row["vegetable"]."</td>
        <td>".$row["fish"]."</td>
        <td>".$row["meat"]."</td>
        <td>".$row["grocery"]."</td>
        <td>".$row["others"]."</td>
        <td>".$row["total"]."</td>
        
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




<html lang="en">
<head>
  <title></title>
 

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
$result= mysqli_query($conn, "SELECT SUM(total) AS totalsum FROM costf");

$row = mysqli_fetch_assoc($result); 

$sum = $row['totalsum'];
//


$result= mysqli_query($conn, "SELECT SUM(t_order) AS totalsum FROM ordersd");

$row = mysqli_fetch_assoc($result); 

$tot = $row['totalsum'];


$q_price = "SELECT * from price WHERE id=1";
$q_price_result = mysqli_query($conn, $q_price);
//$resultq = mysqli_result($q_price_result);
$row=mysqli_fetch_assoc($q_price_result);


//

$query = "SELECT order_id from ordersm";
$q_result = mysqli_query($conn, $query);
$tot2 = mysqli_num_rows($q_result);

$q_price = "SELECT * from price WHERE id=1";
$q_price_result = mysqli_query($conn, $q_price);
//$resultq = mysqli_result($q_price_result);
$row=mysqli_fetch_assoc($q_price_result);




$query = "SELECT order_id from ordersw";
$q_result = mysqli_query($conn, $query);
$tot3 = mysqli_num_rows($q_result);

$q_price = "SELECT * from price WHERE id=1";
$q_price_result = mysqli_query($conn, $q_price);
//$resultq = mysqli_result($q_price_result);
$row=mysqli_fetch_assoc($q_price_result);
$p1=$tot*$row['Dprice'];
$p2=$tot2*$row['Mprice'];
$p3=$tot3*$row['Wprice'];

$earn=$p1+$p2+$p3;
$PoL=$earn-$sum;

?>
<div class="text-center">

  <? 
    //$p1=.$tot*$row['Dprice']
  ?>
  
  <h1>----------------------------------------------------------------------------------------------------</h1>

  <b style="border: 2px solid green; padding: 15px 20px;" >Total Cost  : </b> <?=" ".$sum?>
  
  <h1>----------------------------------------------------------------------------------------------------</h1>
  <b style="border: 2px solid green; padding: 15px 20px;">Total earn from Monthly Customer Order :</b> <?="  ".$tot2*$row['Mprice']?>

  <h1>----------------------------------------------------------------------------------------------------</h1>
  <b style="border: 2px solid green; padding: 15px 20px;" >Total earn from Daily Customer Order :</b> <?="  ".$tot*$row['Dprice']?>
  

  <h1>----------------------------------------------------------------------------------------------------</h1>

  <b style="border: 2px solid green; padding: 15px 20px;" >Total earn from Weekly Customer Order :</b> <?="  ".$tot3*$row['Wprice']?>

 <h1>----------------------------------------------------------------------------------------------------</h1>

  <b  >Total earn in this Month:</b> <?="  ".$earn?><br>
  <b>Total cost in this Month :</b> <?="  ".$sum?><br>

  <b>Profit Or Loss in This Month :</b> <?="  ".$PoL?>


</div>

 
  
  



</body>


<h3 style="text-align: center;">Copyright @ Team Advil</h3>
</html>

