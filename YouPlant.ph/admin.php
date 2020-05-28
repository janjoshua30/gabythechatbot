<?php
	include('db.php');
	session_start();

	// if(!$_SESSION["user"]=="admin"){
	// header("location: admin.php");
	// 	}
	 
?>
<!DOCTYPE html>
<html>
<head>
	<title>YouPlant - Admin</title>

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
		a.btn-default:hover {
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
	<center>
	<form method="POST">
	<div class="container-fluid" style="width: 50%; padding: 30px;">
		<div class="col-md-12" style="padding-top: 30px;">
		<div class="alert <?php echo $_GET['class'] ?>">
			<?php 
				if (isset($_GET['message'])) {
					echo $_GET['message'];
					}
			?>
		</div>
		<div class="navbar navbar-fixed-top" style="background-color: white;">
   			<a class="btn btn-default" href="admin.php" style="border:none; padding:15px; font-size: 16px;">Home</a>
  			<?php if(isset($_SESSION['sess_user'])){ ?>
  				<a href="logout.php" class="btn btn-default" style="border:none; padding:15px; font-size: 16px;">Logout</a>
				<?php }else{ ?>
 				<a href="login.php" class="btn btn-default" style="border:none; padding:15px; font-size: 16px;">Login</a>
			<?php } ?>

  			</div>

  		<div>
			<img src="images/logoo.jpg" style="height: 150px;">
			<h2 style="color: green;">Welcome Admin!</h2>
		</div>
		
		<div class="row">
		<div class="col-md-12">
		<div class="panel panel-success">
			<div class="panel-heading">What do you want to do today?</div>
			<div class="panel-body">
				<h3>
					<a href="inv.php" style="color: green;">View Inventory</a><br><br>
					<a href="manageprd.php" style="color: green;">Manage Products</a><br><br>
					
				</h3>
			</div>
		</div>
		</div>
		</div>

	</div>
</center>
</form>
</body>
</html>