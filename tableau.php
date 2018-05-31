<table cellspacing="0" cellpadding="0" style="border:solid 1px black; font-family:verdana; font-size:12px; border-radius: 10px;"> 
  <thead> 
    <tr style="background-color:lightgrey; height:20px; text-align:center;"> 
      <th style="width:120px;" align="center">Id</th> 
      <th style="width:120px;" align="center">Date</th> 
      <th style="width:120px;" align="center">Température</th>
      <th style="width:120px;" align="center">Débit</th> 
      <th style="width:18px;"></th> 
    </tr> 
  </thead>  
  <tbody> 
    <tr> 
      <td colspan="4"> 
        <div style="overflow:auto; border-top:solid 1px black; border-bottom:solid 1px black;"> 
          <table cellspacing="0" cellpadding="0" style="color:midnightblue; font-family:verdana; font-size:12px; text-align:center; width:100%;"> 
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

              $query="SELECT * FROM mesure WHERE id_bassin=$bassin ORDER BY datetime DESC";
              //echo $query;
              $mesure = $conn->query($query);
              while($row =  $mesure->fetch())
              {

            ?>
            <tr>
              <td style="width:200px;" align="center">
                <?php echo $row['id_mesure']; ?>
              </td>
              <td style="width:200px;" align="center">
                <?php echo $row['datetime']; ?>
              </td>
              <td style="width:200px;" align="center">
                <?php echo $row['temp']; ?>
              </td>
              <td style="width:200px;" align="center">
                <?php echo $row['debit']; ?>
              </td>
            </tr>
          <?php
          }
          $mesure->closeCursor(); // Termine le traitement de la requête
          ?>
          </table>
        </div> 
      </td> 
    </tr> 
  </tbody> 
</table> 