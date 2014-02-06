<meta charset="utf-8">
<link rel="stylesheet" href="freja.css">


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

		<tr>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>6</td>
			<td>7</td>
		</tr>

	</table>

	<table class="secondTD">
		<tr class="trUnique">
			<th>Ämne</th>
		</tr>

		<tr>
			<th>Innehåll</th>
		</tr>
	</table>

	<?php
			//If is defined URL variable 'aboutme'
			if(isset($_GET['?id=1'])){
			// include page about me
				echo 'Katten';
			//else if is defined URL variable 'interests'
			}else if(isset($_GET['?id=2'])){
			// include page interests
				echo 'Hunden';
			// in all other cases include the home page
			} else {
				include('404.php');
			}
		?>
</div>
	
