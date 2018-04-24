

<div class="col-md-3">
              <div class="card mb-5 box-shadow">
                <div class="card-body">
                  <table>
                    <tr> 
                      <th>
                        <p class="temp"><img src="images/temp.png" /></p>
                      </th>
                      <th>
                        <p class="nbassin" align="center"><a href="historique.php?bassin='<?php echo $donnees['id_bassin']; ?>'">Bassin n°<?php echo $donnees['id_bassin']; ?></a></p>
                      </th>
                      <th>
                        <p class="deb"><img src="images/deb.png" /></p>
                      </th>
                    </tr>

                    <tr>
                      <td class="valeur" align="center">
                        <?php echo $donnees['temp']; ?>
                      </td>
                      <td>
                        <p></p>
                      </td>
                      <td class="valeur" align="center">
                        <?php echo $donnees['debit']; ?>
                      </td>  
                    </tr>

                    <tr>
                      <td align="center">
                        <p>°C</p>
                      </td>
                      <td>
                        <p>&nbsp;</p>
                      </td>
                      <td align="center">
                        <p>L/h</p>
                      </td>  
                    </tr>

                    <tr>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-secondary">-</button>
                      </td>
                      <td>
                        <p class="card-text">Régl. débit</p>
                      </td>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-secondary">+</button>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>