<?php
#first if
if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$debit = mysqli_real_escape_string( $conn , $_POST['debit']);

	//Error handelers
	//Check for empty field
	#second if
	if (empty($debit)) {
		header("Location: ../historique.php?control=empty");
		exit();
	} /*firts else*/else {
					//Inser the user into the database
					$sql = "INSERT INTO controldeb (debitentre) VALUES ('$debit');";
					mysqli_query($conn , $sql);
					header("Location: ../historique.php?control=success");
					exit();
				}

} /*second else*/ else {
	header("Location: ../historique.php");
	exit();
}