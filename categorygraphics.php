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
   
 <div class="container" id="content">
       <div class="row" >
        <?php


// define how many results you want per page
$results_per_page = 3;
// find out the number of results stored in database
$sql="SELECT * FROM post WHERE category='Graphics'";
$result = mysqli_query($database, $sql);
$number_of_results = mysqli_num_rows($result);
// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);
// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;
// retrieve selected results from database and display them on page
$sql="SELECT * FROM post  WHERE category='Graphics' LIMIT " . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($database, $sql);
while($row = mysqli_fetch_array($result)) {?>
  
          
	  
           
           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="card" id="card" style="width: 14rem;height: 25rem" >
  <img class="card-img-top"  src="assets/uploads/<?=$row["upload_image"]?>"  alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title"><?=$row["spost_title"]?></h4>
    <p class="card-text"><?=$row["spost_overview"]?></p>
    <a href="post.php?id=<?=$row["id"]?>" class="btn btn-primary">Read More</a>
  </div>
</div>
           </div>
           
           <?php
           } ?>
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br> </div>
           <?php
           
// display the links to the pages
for ($page=1;$page<=$number_of_pages;$page++) {?>
  <div class="pagcenter" id="pag">
  <ul class="pagination pagination-lg ">
   
    <li class="page-item" align="center" ><?php echo '<a  class="page-link" href="categorygraphics.php?page=' . $page . '">' . $page . '</a> '; ?> </li>
    
  </ul>
           </div>
   
  <?php
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
