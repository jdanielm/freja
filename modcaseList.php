
	<!--modcaseList listar alla ärenden som finns i databasen-->
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="freja.css">

<?php
// Create connection
$con=mysqli_connect("localhost","root","","freja");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $result = mysqli_query($con,"SELECT * FROM cases");

  ?>

	<div id="first">
	<table class="firstTD">
		<tr class="trUnique">
			<th>Ticket number</th>
			<th>Date</th>
			<th>Priority</th>
			<th>Status</th>
			<th>Requester</th>
			<th>Subject</th>
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
  			echo "<td>" . '<a href="item2.php?id='.$row['id'].'">  ' . $row['subject'] . '  </a>' . "</td>";
  			echo "</tr>";
  		}?>

		<!--<tr>
			<td>1</td>
			<td>2013/12/4</td>
			<td>Låg</td>
			<td>Öppen</td>
			<td>Daniel Martinsson</td>
			<td><a href="item2.php?1">Skrivaren har slut på papper</a></td>
		</tr>

		<tr>
			<td>2</td>
			<td>2013/12/4</td>
			<td>Hög</td>
			<td>Ej läst</td>
			<td>Daniel Martinsson</td>
			<td><a href="item2.php?2">Det snöar i serverrummet</a></td>
		</tr>-->
	</table>
	</div>
