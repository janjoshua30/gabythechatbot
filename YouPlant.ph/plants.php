 <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "youplant");  

  if(isset($_SESSION['sess_user'])){
    if($_SESSION["user"]=="admin"){
    header("location: admin.php");
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>YouPlant - Plants</title>
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

	<meta charset="utf-8_unicode_520_ci">
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
	</div>

	<div class="container">
		<h2 align="center">Plants</h2><hr>		
	</div>

	<div class="container">
	<?php  
        $query = "SELECT * FROM products WHERE category='Plants' ORDER BY id ASC ";  
        $result = mysqli_query($connect, $query);  
        if(mysqli_num_rows($result) > 0) {  
            while($row = mysqli_fetch_array($result))  
            {  
     ?>

     <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
     	<div class="col-lg-4" style="height: 580px;">  
              <div class="thumbnail" style="padding-top: 20px;">
                 <img src="<?php echo $row["image"]; ?>" style="height: 200px;"> 
                 <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                 <h4 class="text-danger">₱ <?php echo $row["price"]; ?></h4>                                 
                 <p><?php echo $row['descr']; ?></p> 

                <!-- Identify your business so that you can collect the payments. -->
                <input type="hidden" name="business" value="youplant@gmail.com">

                <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="add" value="1">

                <!-- Specify details about the item that buyers will purchase. -->
                <input type="hidden" name="item_name" value='<?php echo $row['name']; ?>'>
                <input type="hidden" name="amount" value=<?php echo $row['price']; ?>>
                <input type="hidden" name="currency_code" value="PHP">

                <!-- Display the payment button. -->
                <input type="image" name="submit"
                src="<?php if(isset($_SESSION['sess_user'])){
                  echo "https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png";
                  } ?>"
                alt="<?php if(isset($_SESSION['sess_user'])){
                  echo "Add to Cart";
                  } ?>">
                <img alt="" width="1" height="1"
                src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
                </form>
              </div>
         
     </div>
     <?php  
          } 
        }  
     ?> 
     </div> 
</form>
</body>
</html>