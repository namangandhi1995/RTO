<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Online Transport Department</title>
</head>
<body>
  <h2>Vehicle Registration Information>> and for new Registration of vehicle<a href="register.html">click here</a> </h2>

<?php

$vehicleName=$_POST['vehicleName'];
$vehicleNumber=$_POST['vehicleNumber'];
$vehicleModel=$_POST['vehicleModel'];
$vehicleWeight=$_POST['vehicleWeight'];
$name = $_POST['name'];



  $dbc = mysqli_connect('localhost', 'root', '', 'vehicle')
    or die('Error connecting to MySQL server.');

  $query = "INSERT INTO vehicle_info (vehicleName, vehicleNumber, vehicleModel, vehicleWeight, " .
    "name) " .
    "VALUES ('$vehicleName', '$vehicleNumber', '$vehicleModel', '$vehicleWeight', '$name')";
    

  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');

  mysqli_close($dbc);

  echo 'Thanks for submitting the form.<br />';
  echo 'vehicle Number ' . $vehicleNumber;
  echo 'vehicle Model ' . $vehicleModel . '<br />';
  echo 'Number of owner: ' . $name . '<br />';
  
  ?>
  <a href="index.html">Go to home Page </a> <br/>
  <a href="view.php">Registration Information here</a>

  

 

</body>
</html>
