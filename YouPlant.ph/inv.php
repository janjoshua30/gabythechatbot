<?php
	include('db.php');

	session_start();
	
	// if(!$_SESSION["user_lvl"]=="admin"){
	// 	header("location: home.php");
	// }

		$query="SELECT * FROM products ORDER BY id ASC ";
		$runquery=mysqli_query($con, $query);
		$count=mysqli_num_rows($runquery);
?>

<!DOCTYPE html>
<html>
<head>
	<title>YouPlant - Inventory</title>

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
	<div class="container-fluid" style="width: 100%; padding: 30px;">
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
			<h2 style="color: green;">Inventory</h2>
		</div>
		
		<div class="row">
		<div class="col-md-12">
		<div class="panel panel-success">
			<div class="panel-heading">Product Details</div>
			<div class="panel-body">
				<table class="table">
				<tr>
					<td><strong>Product ID</strong></td>
					<td><strong><center>Product Image</center></strong></td>
					<td width="100px"><strong>Product Name</strong></td>
					<td width="100px"><strong>Category</strong></td>
					<td width="100px"><strong>Product Price</strong></td>
					<td><strong><center>Product Description</center></strong></td>
					<td><strong>Available Stocks</strong></td>
				</tr>
				<?php
					if(!$count==0){
					while($row=mysqli_fetch_array($runquery)){
				?>
				<tr>
					<td><b><p><center><?php echo $row["id"]; ?></center></b></p></td>
					<td><center><img src="<?php echo $row["image"]; ?>" style="height: 120px;"></center></td>
					<td><b><p><center><?php echo $row["name"]; ?></center></p></p></td>
					<td><b><p><center><?php echo $row["category"]; ?></center></p></p></td>
					<td><b><p><center>₱ <?php echo $row["price"]; ?></center></p></p></td>
					<td style="padding: 10px;"><p><?php echo $row["descr"]; ?></p></td>
					<td><p><center><?php echo $row["stocks"]; ?></center></p></td>
				</tr>
				<?php
					}
				}
				?>
				</table>
			</div>
		</div>
		</div>
		</div>

	</div>
</center>
</form>
</body>
</html>