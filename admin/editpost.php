
<?php
require 'dbconfig.php';

include 'auth.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="../files/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/css/dashboard.css">
	<title>Add Post</title>

	


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
                <i class="fa fa-fw fa-dashboard"></i>Admin Dashboard
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
                    <a href="addpost.php"><i class="glyphicon glyphicon-plus"></i>  Add Post</a>
                </li>
                <li>
                    <a  href="show.php"><i class="glyphicon glyphicon-remove"></i>  View Post</a>
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
                   
                   
                     <?php	
		$id = $_GET['id'];
		$sql="SELECT * FROM post WHERE id='$id'";
		
        $result=mysqli_query($database,$sql);
		$count=mysqli_num_rows($result);
			
		if ($count > 0) 
		{
			$row = mysqli_fetch_array($result);
		} 
	
	?>
                    <form name="addpost" action="editprocess.php" method="post" enctype="multipart/form-data">
                    
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Edit Record</label>
                            <input type="hidden" name="hiddenupload_image" value="<?=$row["upload_image"]?>" />
	                        <input class="form-control form-control-lg" type="hidden" name="hiddenid" value="<?=$row["id"]?>" />
	                        <br>
                        </div>
                        
                            
  <div class="form-group">
    <label for="exampleFormControlInput1">Post Title</label>
    <input class="form-control form-control-lg" type="text" placeholder="Enter Title" name="post_title" value="<?=$row["post_title"]?>" required>
    <label for="exampleFormControlInput1"> Small Post Title</label>
    <input class="form-control form-control-lg" type="text" placeholder="Enter Small Title" name="spost_title" value="<?=$row["spost_title"]?>" required>
  </div>
  
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Post Overview</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="post_overview" rows="5" value=""  required><?=$row["post_overview"]?></textarea>
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">System Requirement</label>
    <input class="form-control form-control-lg" type="text" placeholder="" name="system_requirement" value="<?=$row["system_requirement"]?>" required>
    <input class="form-control form-control-lg" type="text" placeholder="" name="system_requirement1" value="<?=$row["system_requirement1"]?>" required>
    <input class="form-control form-control-lg" type="text" placeholder="" name="system_requirement2" value="<?=$row["system_requirement2"]?>" required>
    <input class="form-control form-control-lg" type="text" placeholder="" name="system_requirement3" value="<?=$row["system_requirement3"]?>" required>
  
      </div>
      
      <label for="exampleFormControlTextareal">Select Category</label>
      <select class="form-control" name="category"  >
      <option value=""><?php echo $row["category"]  ?></option>
      <option value="Operating System">Operating System</option>
      <option value="Security">Security</option>
      <option value="Multimedia">Multimedia</option>
      <option value="Graphics">Graphics</option>
       <option value="Utilities">Utilities</option>
        </select>
        
         <div class="form-group">
    <label for="exampleFormControlFile1">Download Link</label>
     <input class="form-control form-control-lg" type="text" placeholder="Enter Url" name="downlink" value="<?=$row["downlink"]?>" required>
                        </div>
        
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="upload_image" value="" required>
  </div>
  
    <div class="form-group">
       <button type="submit" class="btn btn-success">Update</button> 
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
