<?php
  try
  {
    // On se connecte à MySQL
    $conn = new mysqli( 'localhost', 'root', 'btsir123', 'ormeaux' );
  }
  
  catch(Exception $e)
  {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
  }
    // On récupère tout le contenu de la table mesure
    if(isset($_GET["bassin"]))
    $bassin=$_GET["bassin"];

	//echo $bassin;

	// Fetch the data
	$query = "SELECT * FROM mesure WHERE id_bassin = 1 ORDER BY datetime";
	$result = $conn->query( $query ); 

	// All good?
	if ( !$result ) {
	  // Nope
	  $message  = 'Invalid query: ' . $conn->error . "n";
	  $message .= 'Whole query: ' . $query;
	  die( $message );
	}

	// Set proper HTTP response headers
	header( 'Content-Type: application/json' );

	// Print out rows
	$data = array();
	while ( $row = $result->fetch_assoc() ) {
	  $data[] = $row;
	}
	echo json_encode( $data );

	// Close the connection
	mysqli_close($conn);
?>