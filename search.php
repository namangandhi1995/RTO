<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("vehicle") or die(mysql_error());
if(isset($_POST['submit']))
{
$query = $_POST['query'];
?>
<html>
<head>
<title><?php  echo $query;?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
$min_length = 1;
if(strlen($query) >= $min_length)
{
$query = htmlspecialchars($query);
$query = mysql_real_escape_string($query);
echo "<table border='0' width='300' align='center' cellpadding='1' cellspacing='1'>";
echo "<tr align='center' bgcolor='#002C40' style='color:#FFF'>
<td height='35px' width='150px'>vehicleNumber</td> <td>OwnerName</td>

</tr>";
$raw_results =

mysql_query("SELECT * FROM vehicle_info WHERE (`vehicleNumber` = '".$query."') OR (`vehicleNumber` ='%".$query."')");
if(mysql_num_rows($raw_results) > 0)
{
while($results = mysql_fetch_array($raw_results))
{
echo "<tr align='center' bgcolor='#0f7ea3'>

<td height='25px'>".$results['vehicleNumber']."</td> <td>".$results['name']."</td>

</tr>" ;
}

}
else{
echo "<tr align='center' bgcolor='#6C0000'>

<td colspan='2' height='25px'>No results</td><tr>";
echo "</table>";
}
}
else{
echo "Minimum length is ".$min_length;
}}

?>
<a href="index.html">Go back to homepage</a>
</body>
</html> 