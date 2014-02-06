<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Case list</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="freja.css">
</head>

<body>
<div id="wrapper">
<?php
// Create connection
$con=mysqli_connect("localhost","root","","freja");

  $ID = $_GET['id'];
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($con,"SELECT * FROM cases WHERE id='$ID' ");

echo "<table border='0'>
<tr>
<th>id</th>
<th>date</th>
<th>priority</th>
<th>status</th>
<th>requester</th>
<th>subject</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['priority'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";
  echo "<td>" . $row['requester'] . "</td>";
  echo "<td>" . $row['subject'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);

echo '<pre>';
var_dump($_POST);
var_dump($_GET);
echo '</pre>';

?>
</div>
	
</body>
</html>