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
	<title>YouPlant - Manage Products</title>

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
			<div class="alert <?php echo $_GET['class'] ?>">
				<?php 
					if (isset($_GET['message'])) {
						echo $_GET['message'];
						}
				?>
			</div>
		<div class="col-md-12">
		<div class="panel panel-success">
			<div class="panel-heading">Product Details</div>
			<div class="panel-body">
					<a data-toggle="modal" data-target="#upload" class="btn btn-success" style="padding: 10px;">Add Products <span class="glyphicon glyphicon-upload"></span></a>
						<div class="modal fade" id="upload">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
          								<h4 class="modal-title">Add Products</h4>
									</div>
									<div class="modal-body">
										<center>
											<h4>Upload Image: </h4><input type="file" name="imgup" id="imgup" required>
											<p>Note: Nothing will happen if you upload the same picture more than once! 
											Put the image to be uploaded on YouPlant/prod/new first before uploading it!</p><br>
											<input type="text" name="prdname" class="form-control" placeholder="Product Name" required><br>
											<select name="cat" class="form-control">
    											<option value="Plants">Plants</option>
    											<option value="Seeds">Seeds</option>
    											<option value="Gardening Tools">Gardening Tools</option>
  											</select><br>
											<input type="text" name="prdprice" class="form-control" placeholder="Product Price" required><br>
											<textarea name="prdescr" class="form-control" placeholder="Product Description" required></textarea><br>
											<input type="text" name="prdstk" class="form-control" placeholder="Available Stocks" required><br>
										<div class="modal-footer">
											<button type="submit" name="action" value="addprd" class="btn" style="padding: 10px;">Add Products</button>
										</div>
										</center>
									</div>
								</div>
							</div>
						</div>
					<a href="update.php" class="btn btn-info" style="padding: 10px;">Update Products <span class="glyphicon glyphicon-edit"></span></a>
				<table class="table-bordered">
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
					<td><center><img src="<?php echo $row["image"]; ?>" style="height: 120px;" class="thumbnail" alt="Nothing to show"></center></td>
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
	</form>
</center>
</form>
</body>
</html>