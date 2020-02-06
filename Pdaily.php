<?php
	$page="arts";
	$title="Arts";
	require_once('header.php');
	
?>	

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
td {
  text-align: center;
  height: 25px;
  width: 200px;
 
}
th{
  text-align: center;
}

table {
	margin-left: 500px;
}
#table2{
margin-left: 410px;
}


</style>
</head>
</html>


	
		  <div class="row art_inner">
			<div class="col-md-12">
                <div class="panel panel-default">
				  <div class="panel-heading"> Daily Packages</div>
				  


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




$sql = "SELECT Dprice FROM Price";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0)
 {
    echo "<table align=center border=3>
    <tr>
    <th>Daily Price</th>
    
    
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>" . $row["Dprice"]. "</td>
        
        
        </tr>";
    }


    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>

<br>
<br>

<table align="center" border="2px" id="table2">
  <tr>
    <th>Day</th>
    <th>Item</th>
  </tr>
  <tr>
    <td>Saturday</td>
    <td>Fish</td>
  </tr>
  <tr>
    <td>Sunday</td>
    <td>Meat</td>
  </tr>

  <tr>
    <td>Monday</td>
    <td>Khicuri</td>
  </tr>
  <tr>
    <td>Tuesday</td>
    <td>Vorta-vaji</td>
  </tr>
  <tr>
    <td>Wednesday</td>
    <td>Chiken_curry</td>
  </tr>
  <tr>
    <td>Thursday</td>
    <td>Biriyani</td>
  </tr>

</table>



                  <div class="panel-body">
                    <p class="about_us_info">
						
                    </p>
                  </div>
                </div>
                </div>
           
		
    </div>

    

		  
<?php
	require('footer.php');
?>