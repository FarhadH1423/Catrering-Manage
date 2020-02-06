<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
  .header-img {
  height: 100%;
  width: 100%;
}
.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }

}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">Catering Management System</a>
  
</div>



</body>
</html>

<body>

<div class="navbar" >
  <div class="header-right">
  <a href="../index.php">Home</a>
  <a href="../Price/Price.php">Package price</a>
  <div class="dropdown">
    <button class="dropbtn">Customer Info <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../Admin2/MonthlyV.php">Monthly</a>
      <a href="../Admin2/WeeklyV.php">Weekly</a>
      <a href="../Admin2/DailyV.php">Daily</a>
    </div> 
  </div> 

<div class="dropdown">
    <button class="dropbtn">Orders <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../Admin2/Dorder.php">Daily</a> 
      <a href="../Admin2/Worder.php">Weekly</a> 
      <a href="../Admin2/Morder.php">Monthly</a> 
    </div> 
  </div> 
  
  <a href="../Admin2/repot.php">Report</a>
  <a href="../Admin2/specialP.php">Set Special Packages</a>
  <a href="../Admin2/cost.php">Cost Inf</a>
  <a href="../Admin2/delete.php">Delete</a>

  <a href="../index.php">Logout</a>
</div>
</div>

<img class="header-img" src="../images/2.jpg">

</body>
</html>
