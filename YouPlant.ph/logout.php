<?php
session_start();

	if (isset($_SESSION["sess_user"])) {
		session_destroy();
		session_unset();

		header("location: home.php");
	}
?>