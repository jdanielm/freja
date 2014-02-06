
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
			//If is defined URL variable 'aboutme'
			if(isset($_GET['caselist'])){
			// include page about me
				include('caseList.php');
			//else if is defined URL variable 'interests'
			}else if(isset($_GET['item'])){
			// include page interests
				include('item2.php');
			// in all other cases include the home page
			} else {
				include('modcaseList.php');
			}
		?>
</div>
</div>
	
</body>
</html>