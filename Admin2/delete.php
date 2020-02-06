

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

.h1{

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

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
    body{background-color: #6F1E51;}


</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">Catering Management System</a>
  <div class="header-right">
    <a class="active" href="index.php">Back</a>
    

  </div>


</div>

  <h1 style="text-align: center;color:#fff" > Delete all the Weekly Order Information </h1>
  <div align="center">
  <a href="deletecon.php" class="button">Delete</a>
  </div>
  
  <h1 style="text-align: center;color:#fff"> Delete all the Daily Order Information </h1>
  <div align="center">
  <a href="deleteconD.php" class="button">Delete</a>
  </div>

  <h1 style="text-align: center;color:#fff"> Delete all the Monthly Order Information </h1>
  <div align="center">
  <a href="deleteconM.php" class="button">Delete</a>
  </div>
  

</body>
</html>


