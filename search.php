<?php
require 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap-4.0.0-beta.2-dist/css/bootstrap.min.css">

		<link rel="stylesheet" href="../project/css/main.css">

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
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
      <form class="form-inline my-2 my-lg-0" >
    
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
             
<div class="container" id="content">
       <div class="row" >	  
           
 
           <?php	
           
           
          $get_value = $_GET['search'];   
        $sql="select * from post where post_title like '%$get_value%'";
		$result=mysqli_query($database,$sql);
		$count=mysqli_num_rows($result);
	
		if ($count > 0) 
            
		{
            
     
           
           ?>
              <div class="container" >
           <h1 >Search results for <?php echo $get_value ; ?>&nbsp;(<?php echo $count;?>)</h1>
    </div>
                
                <?php
            
			while($row = mysqli_fetch_array($result))
			{
			?>
          

           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              
               <div class="card" style="width: 15rem;height: 25rem">
               
  <img class="card-img-top"  src="assets/uploads/<?=$row["upload_image"]?>"  alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title"><?=$row["spost_title"]?></h4>
    <p class="card-text"><?=$row["spost_overview"]?></p>
    <a href="post.php?id=<?=$row["id"]?>" class="btn btn-primary">Read More</a>
  </div>
</div>
           </div>
            <?php
			}
         
		}         
          
        
	?>
  
       </div>
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
