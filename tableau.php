<table cellspacing="0" cellpadding="0" style="border:solid 1px black; font-family:verdana; font-size:12px; border-radius: 10px;"> 
  <thead> 
    <tr style="background-color:lightgrey; height:20px;"> 
      <th style="width:120px;">Id</th> 
      <th style="width:120px;">Date</th> 
      <th style="width:120px;">Température</th>
      <th style="width:120px;">Débit</th> 
      <th style="width:18px;"></th> 
    </tr> 
  </thead>  
  <tbody> 
    <tr> 
      <td colspan="4"> 
        <div style="height:300; overflow:auto; width:100%; border-top:solid 1px black; border-bottom:solid 1px black;"> 
          <table cellspacing="0" cellpadding="0" style="color:midnightblue; font-family:verdana; font-size:12px; text-align:center;"> 
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

              // Si tout va bien, on peut continuer

              // On récupère tout le contenu de la table mesure
              $reponse = $conn->query('SELECT * FROM bassin');

              // On affiche chaque entrée une à une
              while ($donnees = $reponse->fetch())
                {

                 $mesure = $conn->query("SELECT * FROM mesure WHERE id_bassin=$donnees[id] ORDER BY datetime DESC");
                 $val_mesure =  $mesure->fetch();

            ?>
            <tr>
              <td style="width:200px;" align="center">
                <?php echo $val_mesure['id_mesure']; ?>
              </td>
              <td style="width:200px;" align="center">
                <?php echo $val_mesure['datetime']; ?>
              </td>
              <td style="width:200px;" align="center">
                <?php echo $val_mesure['temp']; ?>
              </td>
              <td style="width:200px;" align="center">
                <?php echo $val_mesure['debit']; ?>
              </td>
            </tr>
          </table>
          <?php
          }
          $reponse->closeCursor(); // Termine le traitement de la requête
          ?>
        </div> 
      </td> 
    </tr> 
  </tbody> 
</table> 