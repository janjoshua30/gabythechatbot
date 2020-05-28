<?php
	include ('action.php');

	// if(!$_SESSION["user_lvl"]=="admin"){
	// 	header("location: home.php");
	// }

?>
<!DOCTYPE html>
<html>
<head>
	<title>YouPlant - Update Products</title>

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
	<center>
	<form method="POST" action="action.php" enctype="multipart/form-data">
	<div class="container-fluid" style="width: 100%; padding: 30px;">
		<div class="col-md-12" style="padding-top: 30px;">
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
			<h2 style="color: green;">Manage Products</h2>
		</div>
		<form action="action.php" method="POST">
		<div class="row">
		<div class="col-md-12">
		<div class="panel panel-success" style="width: 70%;">
			<div class="panel-heading">Product Details</div>
			<div class="panel-body">
				<center>
					<div class="alert <?php echo $_GET['class'] ?>">
						<?php 
							if (isset($_GET['message'])) {
							echo $_GET['message'];
							}
						?>
					</div>
					<p class="pull-left">Go to <a href="manageprd.php" style="color: green;">Inventory</a></p><br>
					<h3>Update Products</h3><br>

					<h4>Please input all details.</h4><br>
					
    				<input type="text" name="pid" class="form-control" style="width: 60%;" placeholder="Product ID" value=<?php $pid ?>><br>
    				<input type="text" name="img" class="form-control" style="width:  60%;" placeholder="Image Path (ex: prod/new/)" value=<?php $img ?>><br>
    				<input type="text" name="pname" class="form-control" style="width: 60%;" placeholder="Product Name" value=<?php $pname ?>><br>
    				<input type="text" name="pric" class="form-control" style="width: 60%;" placeholder="Product Price" value=<?php $pric ?>><br>
					<select name="categ" class="form-control" style="width: 60%;">
    					<option value="Plants">Plants</option>
    					<option value="Seeds">Seeds</option>
    					<option value="Gardening Tools">Gardening Tools</option>
  					</select><br>
    				<textarea type="text" name="descr" class="form-control" style="width: 60%;" placeholder="Product Description"></textarea><br>
    				<input type="text" name="stocks" class="form-control" style="width: 60%;" placeholder="Available Stocks" value=<?php $stocks ?>><br>
    				<button type="submit" name="action" value="edit" class="btn" style="background-color: orange;">Edit <span class="glyphicon glyphicon-edit"></span></button>
    				<button type="submit" name="action" value="delete" class="btn" style="background-color: red; color: white;">Delete <span class="glyphicon glyphicon-remove"></span></button>
				</center>
			</div>
		</div>
		</div>
		</div>

	</div>
	</form>
</center>
</form>
</body>
</html>