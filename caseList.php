<!--Sidan man kommer till när man trycker på Ärenden -->

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
	<!--Headern-->
	<?php include 'header.php'; ?>
	<!--modcaseList listar alla ärenden som finns i databasen-->
	<?php include 'modcaseList.php'; ?>
	
	</div>
</div>

</body>
</html>