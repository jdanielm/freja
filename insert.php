<?php
$con=mysqli_connect("localhost","root","","freja");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//Lägger till prioritet, status, vem som skapat ticketen och ämne
$sql="INSERT INTO cases (requester, status, subject, content)
VALUES ('$_POST[requester]','Waiting','$_POST[subject]','$_POST[content]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
echo "You will be redirected to the frontpage in 2";

mysqli_close($con);
?>
<?php header("Refresh: 2;url=http://localhost/freja/caselist.php"); ?>
