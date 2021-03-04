<?php
require 'dbconfig.php';

include 'auth.php';


$id	= $_GET['id']; 

$viewsql="SELECT upload_image FROM post where id='$id'";
$viewresult=mysqli_query($database,$viewsql);
$viewrow = mysqli_fetch_array($viewresult);

$upload_image = $viewrow["upload_image"];
		
$sql = "DELETE from post WHERE id='$id' ";
 
$result = mysqli_query( $database,$sql);

if($result)
{
  	unlink('../assets/uploads/'.$upload_image);
	echo "yes";
	header("Location: show.php?status=deleted");
}
else
{
die('Could not enter data: ' . mysqli_error($database));
}
 
	
 

mysqli_close($database);
?>