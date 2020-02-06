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

<form method="POST" action="specialPcon.php" style="margin: 0px;">
    <div class="form-group">  
    <label for="Saturday" for ="Saturday"><b>Saturday</b></label>
    <input type="text" input class="form-control" id="Saturday" type="text" style="margin-bottom:  0px;" placeholder="Set Menu" name="Saturday" required>
</div>

<div class="form-group">  
    <label for="Sunday" for ="Sunday"><b>Sunday</b></label>
    <input type="text" input class="form-control" id="Sunday" type="text" style="margin-bottom:  0px;" placeholder="Set Menu" name="Sunday" required>
</div>

<div class="form-group">  
    <label for="Monday" for ="Monday"><b>Monday</b></label>
    <input type="text" input class="form-control" id="Monday" type="text" style="margin-bottom:  0px;" placeholder="Set Menu" name="Monday" required>
</div>

<div class="form-group">  
    <label for="Tuesday" for ="Tuesday"><b>Tuesday</b></label>
    <input type="text" input class="form-control" id="Tuesday" type="text" style="margin-bottom:  0px;" placeholder="Set Menu" name="Tuesday" required>
</div>

<div class="form-group">  
    <label for="Wednesday" for ="Wednesday"><b>Wednesday</b></label>
    <input type="text" input class="form-control" id="Wednesday" type="text" style="margin-bottom:  0px;" placeholder="Set Menu" name="Wednesday" required>
</div>

<div class="form-group">  
    <label for="Tursday" for ="Thursday"><b>Thursday</b></label>
    <input type="text" input class="form-control" id="Thursday" type="text" style="margin-bottom:  0px;" placeholder="Set Menu" name="Thursday" required>
</div>

    

    <button type="submit" class="registerbtn">Submit</button>
  
 
</form>
  </div>

</div>
</body>
</html>
