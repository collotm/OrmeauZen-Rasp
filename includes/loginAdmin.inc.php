<?php

session_start();

#first if
if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string( $conn, $_POST['uid'] );
	$pwd = mysqli_real_escape_string( $conn, $_POST['pwd'] );

	//Error handerlers
	//Check if this input are empty
	#second if
	if (empty($uid) || empty($pwd)) {
		header("Location: ../signinAdmin.php?login=empty");
		exit();
	}/*second else*/ else {
		$sql = "SELECT * FROM administrateur WHERE user_uid='$uid' OR user_email='$uid'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		#third if
		if ($resultCheck < 1) {
			header("Location: ../signinAdmin.php?login=error2");
			exit();
		}/*third else*/ else {
			#forth if
			if ($row = mysqli_fetch_assoc($result)) {
				//de-hashing the password
				$hashedPwdCheck = password_verify($pwd , $row['user_pwd']);
				#fifth if
				if ($hashedPwdCheck == false) {
					header("Location: ../signinAdmin.php?login=error3");
					exit();
				} /*fifth else*/ elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../espaceAdmin.php?login=success");
					exit();
				}
			}
		}
	}
}/*first else*/ else {
	header("Location: ../signinAdmin.php?login=error1");
	exit();
}