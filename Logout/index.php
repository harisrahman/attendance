<?php 

	setcookie("id", "", time() - 60*60);
	$_COOKIE["id"] = "";
	unset($_SESSION);
	unset($_COOKIE);

	header("Location: ../SignIn");



?>