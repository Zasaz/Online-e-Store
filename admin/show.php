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
	<title>Admin Page</title>

	


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
                   
      			
<table class="table" id="records">
<?php
				if($_GET)
				{
					if($_GET['status']=='updated') 
						echo "<span style='color:green'>Record Successfully Updated!</span>";
					else if($_GET['status']=='deleted') 
						echo "<span style='color:green'>Record Successfully Deleted!</span>"; 
					else 
						"<span style='color:red'>Sorry There is some issue, Try Again</span>"; 
				}
			?>
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Post Title</th>
      <th scope="col">Image</th>
      <th scope="col">Operation</th>
      
    </tr>
  </thead>
  <tbody>
  <?php	
	
		$sql="SELECT * FROM post order by id";
		$result=mysqli_query($database,$sql);
		$count=mysqli_num_rows($result);
	
		if ($count > 0) 
		{
			while($row = mysqli_fetch_array($result))
			{
			?>
      <tr>
      <th scope="row"><?=$row["id"]?></th>
      <td><?=$row["post_title"]?></td>
      <td><img src="../assets/uploads/<?=$row["upload_image"]?>" height="35" width="35"  /></td>
      <td><a href="delete.php?id=<?=$row["id"]?>"><span class="glyphicon glyphicon-remove">&nbsp;</span></a> 
			<a href="editpost.php?id=<?=$row["id"]?>"><span class="glyphicon glyphicon-edit"></span></a></td>
      
        </td>
      
      
    </tr>
	<?php
			}
		} 
	?>
    
  </tbody>
</table>
                   
                    
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

	

</body>

</html>
