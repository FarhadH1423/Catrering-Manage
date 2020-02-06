<?php
  $page="index";
  $title="Home";
  require_once('../header3.php');
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
</style>
</head>
<body>
  <div class="container">
        <h1 style="text-align: center;">Cost Information</h1>
    <p style="text-align: center;">Please input all the cost information</p>
    <hr>
    <div class="col-md-6 col-md-offset-3">

<form method="POST" action="costcon.php" style="margin: 0px;">
    <div class="form-group">  
    <label for="vegetable" for ="vegetable"><b>Vegetable</b></label>
    <input type="text" input class="form-control" id="vegetable" type="text" style="margin-bottom:  0px;" placeholder="Enter Vegetable Price" name="vegetable" required>
</div>

<div class="form-group">  
    <label for="fish" for ="fish"><b>Fish</b></label>
    <input type="text" input class="form-control" id="fish" type="text" style="margin-bottom:  0px;" placeholder="Enter Fish Price" name="fish" required>
</div>

<div class="form-group">  
    <label for="meat" for ="meat"><b>Meat</b></label>
    <input type="text" input class="form-control" id="meat" type="text" style="margin-bottom:  0px;" placeholder="Enter Meat Price" name="meat" required>
</div>

<div class="form-group">  
    <label for="grocery" for ="grocery"><b>Grocery</b></label>
    <input type="text" input class="form-control" id="grocery" type="text" style="margin-bottom:  0px;" placeholder="Enter Grocery Price" name="grocery" required>
</div>

<div class="form-group">  
    <label for="others" for ="others"><b>Others</b></label>
    <input type="text" input class="form-control" id="others" type="text" style="margin-bottom:  0px;" placeholder="Enter Other Cost" name="others" required>
</div>


<div class="form-group">  
    <label for="total" for ="total"><b>Total</b></label>
    <input type="text" input class="form-control" id="total" type="text" style="margin-bottom:  0px;" placeholder="Sum of all Cost" name="total" required>
</div>



    
    
    

    <button type="submit" class="registerbtn">Submit</button>
  
 
</form>
  </div>

</div>
</body>
</html>
