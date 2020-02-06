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

// sql to delete a record
$sql = "DELETE FROM ordersm";
mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
         header("location: ../Done3.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>