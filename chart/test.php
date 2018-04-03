<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ormeauzen;charset=utf8', 'root', 'root');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}

	for($i=0;$i!=30;$i++)
	        {
	                $nombre[$i] = mt_rand(1,50);
	        }

	for ($i=0; $i < 50 ; $i++) {
	// On ajoute une entrée dans la table jeux_video
	$bdd->exec('INSERT INTO ormeauzen(capt_temp, capt_debit) VALUES('rand(15, 30)', 'rand(0, 30)')');
	}
	echo 'Ok';
	?>
</body>
</html>