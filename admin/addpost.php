<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="../files/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/css/dashboard.css">
	<title>Add Movies</title>

	


</head>

<body>

	<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <i class="fa fa-fw fa-dashboard"></i>Admin Panel
            </a>
        </div>
        <!-- Top Menu Items -->
       <ul class="nav navbar-right top-nav">
                    
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                   
                    <li><a href="logout.php"><i class="fa fa-fw fa-power-off" ></i> Logout</a></li>
                    
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
               
                <li>
                    <a href="addpost.php"><i class="glyphicon glyphicon-plus"></i>  Add Movies</a>
                </li>
                <li>
                    <a href="show.php"><i class="glyphicon glyphicon-remove"></i>  View Movies Data</a>
                </li>
               
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                   
                   
                    
                    <form name="addpost" action="addprocess.php" method="post" enctype="multipart/form-data">
                    <?php 
		if($_GET)
		{
		if($_GET['status']=='yes') 
		{
			echo "<span style='color:green'>Record Entered Successfully!</span>";
			header("Location:addpost.php");
		}
		else "<span style='color:red'>Sorry There is some issue, Try Again</span>"; 
		}
	?>
  <div class="form-group">
    <label for="exampleFormControlInput1">Movie Title</label>
    <input class="form-control form-control-lg" type="text" placeholder="Enter Title" name="post_title" required>
    <label for="exampleFormControlInput1"> Releasing Year</label>
    <input class="form-control form-control-lg" type="text" placeholder="Enter Small Title" name="spost_title" required>

    </div>
  
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Movie Plot</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="post_overview" rows="5" required></textarea>
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Cast</label>
    <input class="form-control form-control-lg" type="text" placeholder="" name="Cast1" required>
    <input class="form-control form-control-lg" type="text" placeholder="" name="Cast2" required>

      </div>
      <label for="exampleFormControlTextareal">Select Category</label>
      <select class="form-control" name="category" required>
      <option value="Choose Category">-Choose Category-</option>
      <option value="Operating System">Operating System</option>
      <option value="Security">Security</option>
      <option value="Multimedia">Multimedia</option>
      <option value="Graphics">Graphics</option>
      <option value="Utilities">Utilities</option>
        </select>
        
        <div class="form-group">
    <label for="exampleFormControlFile1">Download Link</label>
     <input class="form-control form-control-lg" type="text" placeholder="Enter Url" name="downlink" required>
                        </div>
      
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="upload_image" required>
  

    </div>
  
    <div class="form-group">
       <button type="submit" class="btn btn-success">Submit</button> 
    </div>
</form>
                   
                    
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
   


    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->

	<script src="../files/jquery-3.2.1.min.js"></script>
	<script src="../files/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
