<?php

	// init connection
	include('db.php');

	// loop through the submitted data
	foreach ($_POST as $strField => $strValue) {

		// 
	
		// get the data
		$arFields[] = $strField;
		$arValues[] = $strValue;
	}
	
	$strUsername = $_POST['user'];
	$strPassword = $_POST['pass'];
	$email = $_POST['email'];

	// for validations..
	// build query
	$strQuery = "SELECT user FROM accounts WHERE user='$strUsername'";

	
	// end of validations
  
	// build query
	$strQuery = "INSERT INTO 
					accounts (".implode(",", $arFields).") 
				VALUES 
					('".implode("','",$arValues)."')";
			

	// execute
	if ($con->query($strQuery)) {

		// get username and pw
		$strUsername = $_POST['username'];
		$strPassword = $_POST['password'];

		// build query
		$strLoginQuery = "INSERT INTO 
							accounts (username, password) 
						  VALUES 
						  	('$strUsername', '$strPassword')";

		// execute
		$con->query($strLoginQuery);

		// redirect
		header("location: register.php?response=success&class=alert-success&message=Registration Success!");
	}
	echo $con->error;

?>