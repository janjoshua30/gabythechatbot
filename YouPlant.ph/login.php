<!DOCTYPE html>
<html>
<head>
	<title>YouPlant - Login</title>

		<style type="text/css">
		body{
			min-height: 100%;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
			background-size: cover;
		}
		div.btn-group {
   			border: 1px solid #f1f1f1;
  		 	background-color: #ffffff;
		}
		div.btn-group button {
    		background-color: inherit;
    		border: none;
    		outline: none;
    		cursor: pointer;
    		transition: 0.3s;
		}
		div.btn-group button:hover {
    		background-color: #53ff1a;
		}
		div.button button.active {
    		background-color: #53ff1a;
		}
		.banner{
			width: 100%;
		}
		.row{
			padding-bottom: 20px;
			padding-left: 10px;
			padding-right: 10px;
		}
	</style>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/car.css">
	<link rel="icon" href="images/favicon.png">

</head>
<body background="images/bg.jpg">
	<form action="action.php" method="POST">
	<div class="container-fluid" style="width: 50%; padding: 30px;">
		<div class="col-md-12" style="padding-top: 30px;">
		<div class="alert <?php echo $_GET['class'] ?>">
			<?php 
				if(isset($_GET['message'])) {
					echo $_GET['message'];
					}
			?>
		</div>
			<center>
				<img src="images/logoo.jpg" style="height: 150px;">
				<h2 style="color: green;">Welcome to YouPlant!</h2>
			</center>
		</div>
		
		<div class="row">
		<div class="col-md-12">
		<div class="panel panel-success">
			<div class="panel-heading">Enter Username and Password</div>
			<div class="panel-body">
			<form action="" method="POST">  
			Username: <input type="text" name="user" class="form-control" placeholder="Username" required><br />  
			Password: <input type="password" name="pass" class="form-control" placeholder="Password" required><br /> 
			<p>Don't have an account? <a href="register.php" style="color: green;">Sign Up</a></p>
			<button type="submit" value="login" name="action" class="btn btn-success pull-right">Login</button>
			<a href="home.php" class="btn btn-success pull-left">Home</a>
		</form>  

			
			</div>
		</div>
		</div>
		</div>
	</div>

</body>
</html>