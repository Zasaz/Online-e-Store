<?php
require 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap-4.0.0-beta.2-dist/css/bootstrap.min.css">

		<link rel="stylesheet" href="css/main.css">

	<title>Software Portal</title>

	

	

</head>

<body >
   
     
      
       <div class="container-fluid" >
          <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="indexx.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item "><a class="nav-link" href="categoryop.php">Operating System</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item "><a class="nav-link" href="categorysecure.php">Security</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item "><a class="nav-link" href="categorymultimedia.php">Multimedia</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item "><a class="nav-link" href="categorygraphics.php">Graphics</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item "><a class="nav-link" href="categoryutillities.php">Utilities</a></li>
      
     
    </ul>
    <ul class="navbar-nav navbar-right">
     
       <li class="nav-item ">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
       <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
        </li>
      </ul>
  </div>
</nav>
 
       </div>
   
   
   <div id="title">
       
       Software Portal
   </div>
   
<div class="container" id="post">
   <div class="row" >
           <?php	
         $id	= $_GET['id'];
	    $sql="SELECT * FROM post WHERE id='$id'";
		$result=mysqli_query($database,$sql);
		$count=mysqli_num_rows($result);
	
		if ($count > 0) 
		{
			while($row = mysqli_fetch_array($result))
			{
			?>
          
           <div class="col-lg-12 col-md-12 col-sm-12">
               <h2><?=$row["post_title"]?></h2>
               <p><?=$row["post_overview"]?></p>
                         
           </div>
           <div class="col-lg-12 col-md-12 col-sm-12 " id="image">
           <img src="assets/uploads/<?=$row["upload_image"]?>"  style="width: 35rem;height: 25rem;">
            </div>
           
            <div class="col-lg-12 col-sm-12" >
                <h2>System Requirements For Window 10</h2>
               
               <p>Before you start Window 10 free download, make sure your PC meets minimum system requirements.</p>
               <ul>
                   <li><?=$row["system_requirement"]?></li>
                   <li><?=$row["system_requirement1"]?></li>
                   <li><?=$row["system_requirement2"]?></li>
                   <li><?=$row["system_requirement3"]?></li>
                  
               </ul>
                </div>
               
               <div class="col-lg-12 col-md-12 col-sm-12">
               <a href="<?=$row["downlink"]?>" Download class="btn btn-info btn-lg ">Download </a>
                </div>
            </div>
            
            <?php
			}
		} 
	?>
    </div>

   <br><br>
    <footer align="center" >
     <span>&copy; Copyright 2017 SoftwarePortal.com All Rights Reserved </span>
    </footer>

	<script src="bootstrap-4.0.0-beta.2-dist/js/jquery-slim.min.js"></script>
<script src="bootstrap-4.0.0-beta.2-dist/js/popper.min.js"></script>
<script src="bootstrap-4.0.0-beta.2-dist/js/bootstrap.min.js"></script>


</body>

</html>
