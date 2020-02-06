<?php
  $page="index";
  $title="Home";
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

    body{background-color: #6F1E51;}

</style>
</head>
<body>
  <div class="container">
        <h1 style="text-align: center;">Add Price</h1>
    <hr>
    <div class="col-md-6 col-md-offset-3">

<form method="POST" action="Pricecon.php" style="margin: 0px;">
    <div class="form-group">  
    <label for="Dprice" for ="Dprice"><b>Add Daily Price</b></label>
    <input type="text" input class="form-control" id="Dprice" type="text" style="margin-bottom:  0px;" placeholder="Enter Daily Price" name="Dprice" required>
</div>

<div class="form-group">  
    <label for="Wprice" for ="Wprice"><b>Add Weekly Price</b></label>
    <input type="text" input class="form-control" id="Wprice" type="text" style="margin-bottom:  0px;" placeholder="Enter Weekly Price" name="Wprice" required>
</div>

<div class="form-group">  
    <label for="Mprice" for ="Mprice"><b>Add Monthly Price</b></label>
    <input type="text" input class="form-control" id="Mprice" type="text" style="margin-bottom:  0px;" placeholder="Enter Monthly Price" name="Mprice" required>
</div>
    

    <button type="submit" class="registerbtn">Submit</button>
  
 
</form>
  </div>

</div>
</body>
</html>
