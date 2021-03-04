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
                    
                   <h1>Hi Rockey :)</h1>
                   
                    
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
