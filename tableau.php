<h2 align="center">
  Tableau des données du bassin n° <?php echo $bassin ?>
</h2>

<div style="width: 90%;">
  <table class="table table-striped" style="text-align: center;"> 
    <thead> 
      <tr style="background-color:#30cde6; height:20px; text-align:center;"> 
        <th style="width:120px;" align="center">Id</th> 
        <th style="width:120px;" align="center">Date</th> 
        <th style="width:120px;" align="center">Température (°C)</th>
        <th style="width:120px;" align="center">Débit (L/h)</th> 
        <th style="width:18px;"></th> 
      </tr> 
    </thead>
  </table>
  <div style="height: 530px; overflow: auto;">
  <table class="table table-striped">  
    <tbody class=".table-dark.table-striped" id="conteneur">
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
    </tbody> 
  </table> 
</div>
</div>