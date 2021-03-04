<?php
require 'dbconfig.php';

$id		                = $_POST['hiddenid'];
$oldupload_image		= $_POST['hiddenupload_image']; 

$post_title		        = $_POST['post_title']; 
$spost_title		        = $_POST['spost_title']; 
$post_overview		    = $_POST['post_overview']; 
$system_requirement		= $_POST['system_requirement']; 
$system_requirement1		= $_POST['system_requirement1']; 
$system_requirement2		= $_POST['system_requirement2']; 
$system_requirement3		= $_POST['system_requirement3']; 
$category       		= $_POST['category']; 
$downlink                   = $_POST['downlink'];
$upload_image			= $_FILES['upload_image']["name"];  ;  

	if($upload_image!="")
	{
		$newName=$post_title."-".$upload_image;
		move_uploaded_file($_FILES['upload_image']['tmp_name'], '../assets/uploads/'.$newName);
		if($oldupload_image!="" && $oldupload_image != $newName )
		{
			unlink('../assets/uploads/'.$oldupload_image);
		}
		$sql = "UPDATE post SET 
        post_title='$post_title',spost_title='$spost_title',post_overview='$post_overview',system_requirement='$system_requirement',system_requirement1='$system_requirement1',system_requirement2='$system_requirement2',system_requirement3='$system_requirement3',category='$category',downlink='$downlink',upload_image='$newName' WHERE id='$id';";
		
	}
	else
	{
		$upload_image=$oldupload_image;
		$sql = "UPDATE post SET 
        post_title='$post_title',spost_title='$spost_title',post_overview='$post_overview',system_requirement='$system_requirement',system_requirement1='$system_requirement1',system_requirement2='$system_requirement2',system_requirement3='$system_requirement3',category=$category,
        downlink='$downlink',upload_image='$upload_image' WHERE id='$id';";
	}

$result = mysqli_query( $database,$sql);
 
if(!$result)
{
  die('Could not enter data: ' . mysqli_error($database));
}
header("Location: show.php?status=updated"); 

mysqli_close($database);
?>