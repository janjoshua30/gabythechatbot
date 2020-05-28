<?php
	include('db.php');
	session_start();

	if(isset($_SESSION['sess_user'])){
		if($_SESSION["user"]=="admin"){
		header("location: admin.php");
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>YouPlant - Home</title>
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/car.css">
	<link rel="icon" href="images/favicon.png">


</head>
<body>
	<form method="POST" accept="action.php">
	<div id="whole" class="container" style="margin: 0 auto; background-color: white;">
	<div class="banner" style="padding-top:85px; ">
		<img class="banner" src="images/banner.jpg" alt="thumb">
	</div>

	<div class="navbar navbar-fixed-top" style="background-color: white;">
		<center>
			<?php   
			if(isset($_SESSION["sess_user"])){ 
			    $un=$_SESSION['sess_user'];
			    echo "<h4>Welcome, <b style='color:green'>$un!</b></h4>";
			}
			?>
 
  			<a class="btn btn-default" href="home.php" style="border:none; padding:15px; font-size: 16px;">Home</a>
  			<div class="btn-group">
   				<button class="btn btn-default dropdown-toggle" type="submit" data-toggle="dropdown" style="font-size: 17px; padding: 14px 16px;">Categories<span class="caret"></span></button>
    				<ul class="dropdown-menu">
      					<li><a href="plants.php">Plants</a></li>
						<li><a href="seeds.php">Seeds</a></li>
      					<li><a href="tools.php">Gardening Tools</a></li>
    				</ul>
  			</div>
  			<a class="btn btn-default" href="about.php" style="border:none; padding:15px; font-size: 16px;">About</a>
  			<?php if(isset($_SESSION['sess_user'])){ ?>
  				<a href="logout.php" class="btn btn-default" style="border:none; padding:15px; font-size: 16px;">Logout</a>
  				<a class="btn btn-default" href="profile.php" style="border:none; padding:15px; font-size: 16px;">Account</a>
				<?php }else{ ?>
 				<a href="login.php" class="btn btn-default" style="border:none; padding:15px; font-size: 16px;">Login</a>
			<?php }

			?>
		</center>
	</div>
	<h2 align="center">PERSONAL INFORMATION</h2>
	<center>
	<div class="panel-body">
		<a data-toggle="modal" data-target="#upload" class="btn btn-success" style="padding: 10px;">Change Password<span class="glyphicon"></span></a>
			<div class="modal fade" id="upload">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
          						<h4 class="modal-title">CHANGE YOUR PASSWORD</h4>
						</div>
							<div class="modal-body">
								<center>
									<h4>Current Password</h4>
										<input type="password" name="curpass" class="form-control" placeholder="Current Password" required><br>
									<h4>New Password</h4>
										<input type="password" name="newpass" class="form-control" placeholder="New Password" required><br>
									<h4>Repeat New Password</h4>
										<input type="password" name="repass" class="form-control" placeholder="Repeat New Password" required><br>
										<div class="modal-footer">
											<button type="submit" name="action" value="cpass" class="btn" style="padding: 10px;">Submit</button>
										</div>
								</center>
							</div>
					</div>
				</div>
			</div>
		</div>
	</center>
	<div>
		<?php
		$sql = "SELECT * FROM accounts WHERE user='$_SESSION[user]';";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);

	if($row){
		echo "<h2>Name: " . $row['first_name'] . " " . $row['last_name'] . "<br><br>" . "Email: " . $row['email'] . "<br><br>" . "Address: " . $row['address'];
	}
	?>
	
</body>
</html>