<?php  

require 'dbconfig.php';
session_start();
$rows=1;

if (isset($_POST['login_submit']))
	{
		$username = stripcslashes($_POST['username']);
		$password = md5(stripcslashes($_POST['password']));
		$query = "SELECT * FROM accounts WHERE user_name ='$username' and user_password = '$password'";
		$result = mysqli_query($database, $query);
		$rows = mysqli_num_rows ($result);
		
        if ($rows==1)
        {   
            $_SESSION["username"] = $username;
            header("Location: index.php");
        }
    else
    {
        
    }
        
		
	}
	


?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="../files/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/css/login.css">
	<title>Login</title>

	

</head>

<body>
   

	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
                              <div id="title">
       
       Software Portal
   </div>
								<a href="#" class="active" id="login-form-link">Login</a>
							
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="login.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									
									
									<?php
                                        if ($rows!=1)
                                        {
                                            ?>
                                            <div class="alert alert-danger" id="msg">
										<strong>Wrong!</strong> Username or Password.
									</div>
                                            <?php
                                        }
                                    ?>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login_submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>
															</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="../files/jquery-3.2.1.min.js"></script>
	<script src="../files/bootstrap.min.js"></script>
    <script src="../admin/js/login.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
            
		});
	</script>

</body>

</html>
