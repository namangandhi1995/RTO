<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Online Transport services</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Vehicle registration</h2>
  <p>Welcome, Online Transport services, vehicle registration informations are given below: >> for new vehicle<a href="register.html">vehicle registration</a>.</p>
  <hr />

<?php
  
  // Connect to the database 
  $dbc = mysqli_connect('localhost', 'root', '', 'vehicle');

  // Retrieve the score data from MySQL
  $query = "SELECT * FROM vehicle_info";
  $data = mysqli_query($dbc, $query);

  // Loop through the array of score data, formatting it as HTML 
  echo '<table>';
  $i = 0;
  while ($row = mysqli_fetch_array($data)) { 
    // Display the score data
    if ($i == 0) {
      echo '<tr><td colspan="2"></td></tr>';
    }
    echo '<tr><td>';
    
    echo '<strong>vehicle Name:</strong> ' . $row['vehicleName'] . '<br />';
    echo '<strong>Owner Name:</strong> ' . $row['name'] . '</td>';
    echo '</td></tr>';
    }
    
    $i++;
  
  echo '</table>';

  mysqli_close($dbc);
?>
<a href="index.html">Go back to home page>> </a>

</body> 
</html>
