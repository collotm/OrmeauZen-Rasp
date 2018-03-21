<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	//Check for empty fields
	if (empty($email) || empty($pwd)) {
		header("Location: ../signin.php?signin=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$", $email)) {
			header("Location: ../signin.php?signin=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signin.php?signin=email");
				exit();
			}
		}
	}


} else {
	header("Location: ../signin.php");
	exit();
}