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
	<div id="main">
	<?php include 'header.php'; ?>

<?php
// Create connection
$con=mysqli_connect("localhost","root","","freja");
$ID = $_GET['id'];
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($con,"SELECT * FROM cases WHERE id='$ID'");
  $result2 = mysqli_query($con,"SELECT content FROM cases WHERE id='$ID'");
  ?>

	<div id="first">
	<table class="firstTD">
		<tr class="trUnique">
			<th>ID</th>
			<th>Datum</th>
			<th>Prioritet</th>
			<th>Status</th>
			<th>Skapare</th>
			<th>Kategori</th>
			<th>Ämne</th>
		<tr>

		<?php
		while($row = mysqli_fetch_array($result))
 		 {
  			echo "<tr>";
 			echo "<td>" . $row['id'] . "</td>";
  			echo "<td>" . $row['date'] . "</td>";
 			echo "<td>" . $row['priority'] . "</td>";
  			echo "<td>" . $row['status'] . "</td>";
 			echo "<td>" . $row['requester'] . "</td>";
 			echo "<td>" . "" . "</td>";
  			echo "<td>" . $row['subject'] . "</td>";
  			echo "</tr>";
  		}?>

	</table>

	<table class="secondTD">
		<tr class="trUnique">
			<th>Ämne</th>
		</tr>

		<tr>
			<?php
		while($row = mysqli_fetch_array($result2))
 		 {
  			echo "<tr>";
  			echo "<td>" . $row['content'] . "</td>"; 			
  			echo "</tr>";
  		}?>
		</tr>
	</table>

</div>

	</div>
</div>

</body>
</html>
	
