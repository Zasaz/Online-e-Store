<?php
require 'dbconfig.php';


$post_title		           = $_POST['post_title'];
$spost_title		      = $_POST['spost_title']; 
$post_overview		        = $_POST['post_overview']; 
$system_requirement		   = $_POST['system_requirement']; 
$system_requirement1		= $_POST['system_requirement1']; 
$system_requirement2		= $_POST['system_requirement2']; 
$system_requirement3		= $_POST['system_requirement3']; 
$category		             = $_POST['category']; 
$downlink                   = $_POST['downlink'];
$upload_image			    = $_FILES['upload_image']["name"];


	$newName=$post_title."-".$upload_image;
	
	
	if($upload_image!="")
	{
		move_uploaded_file($_FILES['upload_image']['tmp_name'], '../assets/uploads/'.$newName);
		
		
	}
	
 $sql = "INSERT INTO post (post_title,spost_title,post_overview,spost_overview,system_requirement,system_requirement1,system_requirement2,system_requirement3,category,downlink,upload_image)
VALUES ('$post_title','$spost_title','$post_overview','$post_overview','$system_requirement','$system_requirement1','$system_requirement2','$system_requirement3','$category','$downlink','$newName');";

$result = mysqli_query( $database,$sql);
 
if(!$result)
{
  die('Could not enter data: ' . mysqli_error($database));
}

header("Location: addpost.php?status=yes");
 

mysqli_close($database);
?>