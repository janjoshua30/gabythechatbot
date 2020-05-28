<?php
  include('db.php');
  session_start();

	if($_SESSION["user"]=="admin"){
		header("location: admin.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>YouPlant - About</title>
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
		div.btn-group a:hover {
    		background-color: #53ff1a;
		}
		a.btn:hover {
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
	<div id="whole" class="container fluid" style="margin: 0 auto; background-color: white">
	<div class="banner" style="padding-top:50px; ">
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
      <?php } ?>

  			</center>
		</div>
	<hr>
	<center><h2>About YouPlant</h2></center>
	<hr>

	<div class="container">
		<center><img src="images/logoo.jpg"></center>
		<hr>
		<div class="rows">
		<div class="col-md-6">
		<p>Flowers? Plants? Tools? Welcome to <strong>YouPlant</strong>, your one-stop online shop for everything about gardening. From seeds to plant needs, YouPlant has it in store for you.</p>

		<p>YouPlant offers all gardening essentials – a variety of flowers, plants, seeds, and gardening tools – all of these in one shop at our page. It saves time, money, and energy.</p>

		<p>YouPlant aims to satisfy its buyers with high-quality, yet affordable products and convenience in both shopping and delivery.</p>

    <p>YouPlant is powered by <a href="https://paypal.com">Paypal</a>, so buying our products is guaranteed safe, secure, and fast!</p>
		</div>
		<div class="col-md-6">
				<address>
       			<strong>YouPlant, Inc.</strong><br>
   				Online Plant Shop<br>
        		Cavite State University Indang, Cavite<br>
        		<abbr title="Phone">P:</abbr> +639479687070
      			</address>
        		<address>
        		<strong>Developers:</strong><br>
        		Casiserano, Jeanne Carla B. <a data-toggle="modal" data-target="#jeanne" style="color: green; cursor: pointer;"><span class="glyphicon glyphicon-info-sign"></span></a><br>
        		<div id="jeanne" class="modal fade" role="dialog">
        			<div class="modal-dialog">
        				<div class="modal-content">
        					<div class="modal-header">
          						<button type="button" class="close" data-dismiss="modal">&times;</button>
          						<h4 class="modal-title">Developers</h4>
        					</div>
        					<div class="modal-body">
          						<center><h3 style="color: green;">Jeanne Carla B. Casiserano</h3>
          						<img src="images/dev/jeanne.jpg" class="img-circle" style="height: 150px;"><br>
          						</center>
          						<h4><ul>
          							<li>Web Design</li>
          							<li>Documentation</li>
                        <li>Products</li>
          						</ul></h4>
        					</div>
        				</div>
      				</div>  
      			</div>
        		Oros, Wally S. <a data-toggle="modal" data-target="#wally" style="color: green; cursor: pointer;"><span class="glyphicon glyphicon-info-sign"></span></a><br>
        		<div id="wally" class="modal fade" role="dialog">
        			<div class="modal-dialog">
        				<div class="modal-content">
        					<div class="modal-header">
          						<button type="button" class="close" data-dismiss="modal">&times;</button>
          						<h4 class="modal-title">Developers</h4>
        					</div>
        					<div class="modal-body">
          						<center><h3 style="color: green;">Wally S. Oros</h3>
          						<img src="images/dev/wally.jpg" class="img-circle" style="height: 150px;">
          						</center>
          						<h4><ul>
          							<li>Web Design</li>
                        <li>Documentation</li>
                        <li>Products</li>
          						</ul></h4>
        					</div>
        				</div>
      				</div>  
      			</div>
        		Ricarte, Joshua <a data-toggle="modal" data-target="#josh" style="color: green; cursor: pointer;"><span class="glyphicon glyphicon-info-sign"></span></a><br>
        		<div id="josh" class="modal fade" role="dialog">
        			<div class="modal-dialog">
        				<div class="modal-content">
        					<div class="modal-header">
          						<button type="button" class="close" data-dismiss="modal">&times;</button>
          						<h4 class="modal-title">Developers</h4>
        					</div>
        					<div class="modal-body">
          						<center><h3 style="color: green;">Joshua Ricarte</h3>
          						<img src="images/dev/josh.jpg" class="img-circle" style="height: 150px;">
          						</center>
       								<h4><ul>
                        <li>Programming</li>
          							<li>Database</li>
                        <li>Web Design</li>
                        <li>Graphics</li>
          							<li>Documentation</li>
                        <li>STRESS!</li>
          						</ul></h4>
        					</div>
        				</div>
      				</div>  
      			</div>
        		<br>
        		Contact us at <a href="https://www.gmail.com">youplant@gmail.com</a>
        		</address>
		</div>
		</div>
	</div>

	</div>
</body>
</html>
