<?php
	include('db.php');

	session_start();

	if(!empty($_POST['action'])){
	$action=$_POST['action'];

	if($action=='login'){
		$user=$_POST['user'];
		$pass=$_POST['pass'];

		$query="SELECT * FROM accounts WHERE user='$user' AND pass='$pass' ";
		$runquery=mysqli_query($con, $query);
		$count=mysqli_num_rows($runquery);

		if($count==1){
			$row=mysqli_fetch_array($runquery);
			$_SESSION["id"] = $row["id"];
			$_SESSION["sess_user"] = $row["user"];
			$_SESSION["user"]=$row['user'];

			if($_SESSION["user"] =="admin"){
				header("location: admin.php");
			}
			else{
				header("location: home.php");
			}
		}
		else{
			header("location: login.php?response=success&class=alert-danger&message=Invalid Username or Password!");
		}
	}

	//uploading image wala pa yung ibang something
	else if($action=='addprd'){
		$target_dir = "prod/new/";
		$uploadOk = 1;
		$target_file = $target_dir . basename($_FILES["imgup"]["name"]);
    	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    	$cat=$_POST['cat'];
    	$prdname=$_POST['prdname'];
    	$prdprice=$_POST['prdprice'];
    	$stocks=$_POST['prdstk'];
    	$descr=$_POST['prdescr'];

    	//check if totoong pic
    	if(isset($_POST["action"])) {
			$check = getimagesize($_FILES["imgup"]["tmp_name"]);
			if($check !== false) {
					$uploadOk = 1;  //picture sya	
				} 
				else {
					$uploadOk = 0;  //hindi picture
				}
			}
			//rename pag tulad 
			do{  
				if (file_exists($target_file)) {
					$target_file = $target_dir . "img" . $counter . basename($_FILES["imgup"]["name"]);
					$counter++;
					$uploadOk = 0;
				} 
				else {
					$uploadOk = 1;
				}
			} while ($uploadOk == 0);
			//Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
				header("location:profile.php?result=err_upload");
				$uploadOk = 0;
			}
			//Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				header("location:profile.php?result=err_upload");
			}

		if(!is_numeric($prdprice)){
			header("location: manageprd.php?response=failed&class=alert-danger&message=Invalid Input on Price!");
			exit();
		}
		if(!is_numeric($stocks)){
			header("location: manageprd.php?response=failed&class=alert-danger&message=Invalid Input on Stocks!");
			exit();
		}

		$query="INSERT INTO products VALUES(NULL, '$cat', '$prdname', '$prdprice', '$stocks', '$target_file', '$descr') ";
		$runquery=mysqli_query($con, $query);
		header("location: manageprd.php?response=success&class=alert-success&message=Product Successfully Added!");
	}

	//search di nagana
	else if($action=='#'){
		$srId=$_POST['srId'];
		$strQuery = "SELECT * FROM products WHERE id = '$srId'";
		if ($hQuery = $con->query($strQuery)) {
			while($row=$hQuery->fetch_assoc()){
			$pid=$row["id"];
			$img=$row['image'];
			$pname=$row['name'];
			$pric=$row['price'];
			$categ=$row['category'];
			$descr=$row['descr'];
			$stocks=$row['stocks'];

			echo "<input type='text' name='pid' class='form-control' style='width: 60%;' placeholder='Product ID' value='$pid' ><br>";
    		echo "<input type='text' name='img' class='form-control' style='width:  60%;' placeholder='Image Path (ex: prod/new/)'' value='$img'><br>";
    		echo "<input type='text' name='pname'class='form-control' style='width: 60%;' placeholder='Product Name' value='$pname'><br>";
    		echo "<input type='text' name='pric' class='form-control' style='width: 60%;' placeholder='Product Price' value='$pric'><br>";
			echo "<input type='text' name='categ' class='form-control' style='width: 60%;' value='$categ'>";
    		echo "<textarea name='descr' class='form-control' style='width: 60%;' placeholder='Product Description' value='$descr'></textarea><br>";
   			echo "<input type='text' name='stocks' class='form-control' style='width: 60%;'' placeholder='Available Stocks' value='$stocks'><br>";
			
			}
		}
	}

	else if($action=='edit'){
		$id=$_POST['srId'];
		$pid=$_POST['pid'];
		$img=$_POST['img'];
		$pname=$_POST['pname'];
		$pric=$_POST['pric'];
		$categ=$_POST['categ'];
		$descr=$_POST['descr'];
		$stocks=$_POST['stocks'];

		$strQuery="UPDATE products SET id='$pid' , image='$img', name='$pname', price='$pric', category='$categ', descr='$descr', stocks='$stocks' WHERE id='$pid' ";
		$con -> query($strQuery);
		header("location: update.php?response=success&class=alert-success&message=Product Successfully Updated!");
	}

	else if($action=='delete'){
		$pid=$_POST['pid'];
		$findid="SELECT * FROM products WHERE id=$pid";
		$runfind=mysqli_query($con, $findid);
		$count=mysqli_num_rows($runfind);
		if(!$count==0){
			$query="DELETE FROM products WHERE id='$pid' ";
			$runquery=mysqli_query($con, $query);
			header("location: update.php?response=success&class=alert-success&message=Product Successfully Deleted!");
		}
		else{
			header("location: update.php?response=success&class=alert-danger&message=Product ID does not exist!");
		}
		
	}

	else if($action=='addcart'){
		$id=$_SESSION['id'];
		
		$sql="SELECT * FROM products";
		$runsql=mysqli_query($con, $sql);
		$row=mysqli_fetch_array($runsql);
		$pid=$row['id'];

		if(isset($_SESSION['sess_user'])){
			$query="SELECT * FROM products WHERE id=$pid";
			
		}
	}

	else if($action=='cpass'){
		$password = $_POST['curpass'];
		$newpass = $_POST['newpass'];
		$repass = $_POST['repass'];
		if(isset($_POST["action"])) {
			$Update = "UPDATE accounts SET pass='$_POST[repass]' WHERE user='$_SESSION[user]'";
			$con -> query($update);
			header("location: login.php?response=success&class=alert-success&message=Password Successfully Changed!");
		}
	}

}
?>