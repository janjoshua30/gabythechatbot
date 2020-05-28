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
  			<!-- <div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
			</ul> -->
  			<?php if(isset($_SESSION['sess_user'])){ ?>
  				<a href="logout.php" class="btn btn-default" style="border:none; padding:15px; font-size: 16px;">Logout</a>
  				<a class="btn btn-default" href="profile.php" style="border:none; padding:15px; font-size: 16px;">Account</a>
				<?php }else{ ?>
 				<a href="login.php" class="btn btn-default" style="border:none; padding:15px; font-size: 16px;">Login</a>
			<?php }

			?>
		</center>
	</div>
		

	<div>
		<h2 align="center">RECOMMENDED PLANTS</h2>
		<hr>
	</div>

  	<div class="container">
		<center>
		<div id="carousel1" class="carousel slide my-4" data-ride="carousel" style="height: 400px; width: 650px;">
			<ol class="carousel-indicators">
				<li data-target="#carousel1" data-slide-to="0" class="0"></li>
				<li data-target="#carousel1" data-slide-to="1"></li>
				<li data-target="#carousel1" data-slide-to="2"></li>
				<li data-target="#carousel1" data-slide-to="3"></li>
				<li data-target="#carousel1" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="reco/echeveriapulidonis.jpg">
					<div class="carousel-caption">
						<h3>Echeveria<br>Pulidonis</h3>
						<a href="plants.php" class="pull-right" style="color: green;">Click for more proucts</a>
					</div>
				</div>
				<div class="item">
					<img src="reco/gollum.jpg">
					<div class="carousel-caption">
						<h3>Gollum</h3>
						<a href="plants.php" class="pull-right" style="color: green;">Click for more products</a>
					</div>
				</div>
				<div class="item">
					<img src="reco/oldladycactus.jpg">
					<div class="carousel-caption">
						<h3>Old Lady<br>Cactus</h3>
						<a href="plants.php" class="pull-right" style="color: green;">Click for more products</a>
					</div>
				</div>
				<div class="item">
					<img src="reco/cactus.jpg">
					<div class="carousel-caption">
						<h3>Cactus</h3>
						<a href="plants.php" class="pull-right" style="color: green;">Click for more products</a>
					</div>
				</div>
				<div class="item">
					<img src="reco/fishhookcactus.jpg">
					<div class="carousel-caption">
						<h3>Fish Hook<br>Cactus</h3>
						<a href="plants.php" class="pull-right" style="color: green;">Click for more products</a>
					</div>
				</div>			
			</div>
			<a href="#carousel1" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
			<a href="#carousel1" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
		</div>
		</center>
	</div>

	<div>
		<h2 align="center">FEATURED ITEMS</h2>
		<hr>
	</div>
	<div class="row">
		<center>
		<div class="col-md-4">
			<img src="feat/boug.png" height="125px" width="100px" class="thumbnail">
			<h4 class="media-heading"><strong>Bougainvillea</strong></h4>
			<p>Bougainvillea is also a very attractive genus for Bonsai enthusiasts, due to their ease of training and their radiant flowering during the spring.They can be kept as indoor houseplants in temperate regions and kept small by bonsai techniques.</p>
			<a href="plants.php" class="pull-right">Click for more proucts</a>
		</div>
		<div class="col-md-4">
			<img src="feat/eflame.jpg" height="125px" width="100px" class="thumbnail">
			<h4 class="media-heading"><strong>Eternal Flame</strong></h4>
			<p>The name 'Eternal Flame' comes from the yellow and orange flowers that resemble a flame. They grow on the top of the stems, a little higher than the leaves. Their sepals are rose - red and are not clearly visible among the yellow-orange bracts.</p>
			<a href="plants.php" class="pull-right">Click for more products</a>
		</div>
		<div class="col-md-4">
			<img src="feat/tigjaw.jpg" height="125px" width="100px" class="thumbnail">
			<h4 class="media-heading"><strong>Faucaria Tigrina Tiger Jaws</strong></h4>
			<p>The Tiger jaws displays bright yellow arching long slim petals. These bloom from fall - early winter and require at least 3 hours or more direct sun to bloom. Flowers will open up around midday then close up before the evening.</p>
			<a href="plants.php" class="pull-right">Click for more products</a>
		</div>
		</center>
	</div>

	<div class="row">
		<center>
		<div class="col-md-4">
			<img src="feat/wateringcan .png" height="100px" width="125px" class="thumbnail">
			<h4 class="media-heading"><strong>Watering can</strong></h4>
			<p>A watering can (or watering pot) is a portable container, usually with a handle and a spout, used to water plants by hand.</p>
			<a href="tools.php" class="pull-right">Click for more products</a>
		</div>
		<div class="col-md-4">
			<img src="feat/sunflower.jpg" height="125px" width="100px" class="thumbnail">
			<h4 class="media-heading"><strong>Sunflower Seeds</strong></h4>
			<p> Sunflower seeds are more commonly eaten as a snack than as part of a meal. They can also be used as garnishes or ingredients in various recipes. The seeds may be sold as in-shell seeds or dehulled kernels. The seeds can also be sprouted and eaten in salads.</p>
			<a href="plants.php" class="pull-right">Click for more products</a>
		</div>
		<div class="col-md-4">
			<img src="feat/bush.jpg" height="125px" width="100px" class="thumbnail">
			<h4 class="media-heading"><strong>Rainbow Elephant Bush</strong></h4>
			<p>Beautiful shrubby plant with mahogany-colored stems that are accented by highly succulent yellow leaves with green midstripes. </p>
			<a href="plants.php" class="pull-right">Click for more ptoducts</a>
		</div>
		</center>
	</div>

	<hr>

		<div class="row">
			<div class="col-md-4">
				<h4>Follow Us!</h4>
				<ul>
					<li><a href="https://www.facebook.com">Facebook</a></li>
					<li><a href="https://www.instagram.com">Instagram</a></li>
					<li><a href="https://www.twitter.com">Twitter</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4>Questions? Suggestions?</h4>
				Contact our <a href="https://www.gmail.com">Customer Support!</a>
			</div>
			<div class="col-md-4">
			</div>
	</div>

	</div>
	</form>
	<?php
// build query for searching
$strQuery = "SELECT * FROM accounts";
// execute
if ($hQuery = $con->query($strQuery)) {
//get data
while($row=$hQuery->fetch_assoc()){

       		       
}    
}    
?>
</body>
</html>