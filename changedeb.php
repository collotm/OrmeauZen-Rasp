 <?php
                            if(isset($_POST["debit"]))
                            {
                              $debit=$_POST["debit"]; // Récupération des variables
                            
                              try
                              {
                                // Insertion des variables
                                $conn->exec('UPDATE controldeb SET debitentre="$debit" WHERE id_bassin=$bassin');
                              }
                                catch(Exception $e)
                              {
                              // En cas d'erreur, on affiche un message et on arrête tout
                                    die('Erreur : '.$e->getMessage());
                              }
                            }
?>