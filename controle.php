<?php
  try
  {
    // On se connecte à MySQL
    $conn = new PDO('mysql:host=localhost;dbname=ormeaux;charset=utf8', 'root', 'btsir123');
  }
  
  catch(Exception $e)
  {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
  }
    // On récupère tout le contenu de la table mesure
    if(isset($_GET["bassin"]))
    $bassin=$_GET["bassin"];
    // On affiche chaque entrée une à une
    $query= "SELECT * FROM mesure WHERE id_bassin=$bassin ORDER BY datetime DESC LIMIT 1";
    $mesure = $conn->query($query);
    $val_mesure =  $mesure->fetch();   
?>

<?php
  if(isset($_POST["debit"]))
    {
      $debit=$_POST["debit"]; // Récupération des variables
                            
      try
      {
        // Insertion des variables
        $query="UPDATE controldeb SET debitentre=$debit WHERE id_bassin=$bassin";
        $conn->exec($query);
      }
                                
      catch(Exception $e)
      {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/iconf.ico">

    <title>controle</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap4/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="visualisation.css" rel="stylesheet">
  </head>

  <body>

    <main role="main">

        <div class="container" align="center">
          <div class="row">
    	<!-- Temp only !!! -->
            <div class="col-md-4">
              <div class="card mb-5 box-shadow">
                <div class="card-body">
                  <table>
                    <tr> 
                      <th width="200">
                        <p></p>
                      </th>
                      <th>
                        <p class="temp"><img src="images/temp.png" /></p>
                      </th>
                      <th width="200">
                        <p></p>
                      </th>
                    </tr>

                    <tr>
                      <th width="200" height="40">
                        <p></p>
                      </th> 
                      <td class="valeur" align="center">
                        <?php echo $val_mesure['temp']; ?>°C
                      </td>
                      <th width="200"  height="40">
                        <p></p>
                      </th> 
                    </tr>
                  </table>
                </div>
              </div>
            </div>

    	<!-- Control only !!! -->
            <div class="col-md-4" align="center">
              <div class="card mb-5 box-shadow">
                <div class="card-body">
                  <table>
                    <tr>
                      <td colspan="3" align="center">
                        <p>Veuillez entrer le débit désiré</p>
                      </td>
                    </tr>

                    <tr>
                      <td align="center"> 
                        <p>&nbsp;</p>
                      </td>
                      <td colspan="3" align="center">
                        <form action="" method="POST">
                        <input id="debit" name="debit" type="number" min="0" max="1000" value="<?php echo $val_mesure['debit']; ?>"/>
                      </td>
                      <td align="center">
                        <p>L/h</p>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">
                        <p>&nbsp;</p>
                      </td>
                      <td align="center">
                      	<p></p>
                      </td>
                      <td align="center">
                        <p>&nbsp;</p>
                      </td>
                    </tr>

                    <tr>
                      <th width="200">
                        <p></p>
                      </th>
                      <td align="center">
        				          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" onclick="return confirm('Voulez-vous vraiment changer le débit ?');">Ok</button>
                        </form>
                      </td>
                      <th width="200">
                        <p></p>
                      </th>
                    </tr>                    

                  </table>
                </div>
              </div>
            </div>

    	<!-- Deb only !!! -->
            <div class="col-md-4">
              <div class="card mb-5 box-shadow">
                <div class="card-body">
                  <table>
                    <tr> 
                      <th width="200">
                        <p></p>
                      </th>
                        <p class="deb"><img src="images/deb.png" /></p>
                      </th>
                      <th width="200">
                        <p></p>
                      </th>
                    </tr>

                    <tr>
                      <th width="200" height="40">
                        <p></p>
                      </th> 
                      <td class="valeur" align="center">
                        <?php echo $val_mesure['debit']; ?> L/h
                      </td>
                      <th width="200"  height="40">
                        <p></p>
                      </th> 
                    </tr>

                  </table>
                </div>
              </div>
            </div>
           </div>
          </div>
        </div>

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap4/dist/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap4/dist/js/vendor/popper.min.js"></script>
    <script src="bootstrap4/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap4/dist/js/vendor/holder.min.js"></script>
  </body>
</html>