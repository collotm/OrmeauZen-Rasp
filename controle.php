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
            <div class="col-md-3">
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
                      </td>
                      <th width="200"  height="40">
                        <p></p>
                      </th> 
                    </tr>

                    <tr>
                      <th width="200">
                        <p></p>
                      </th>
                      <td align="center">
                        <p>°C</p>
                      </td>
                      <th width="200">
                        <p></p>
                      </th> 
                    </tr>

                  </table>
                </div>
              </div>
            </div>

    	<!-- Control only !!! -->
            <div class="col-md-3" align="center">
              <div class="card mb-5 box-shadow">
                <div class="card-body">
                  <table>
                    <tr>
                      <td colspan="3" align="center">
                        <p>Veuillez entrer le débit désiré</p>
                      </td>
                    </tr>

                    <tr>
                      <td  width="200" align="center">
                        <button type="button" class="btn btn-sm btn-outline-secondary">-</button>
                      </td>
                      <td class="valeur" align="center">
                      </td>
                      <td  width="200" align="center">
                        <button type="button" class="btn btn-sm btn-outline-secondary">+</button>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">
                        <p>&nbsp;</p>
                      </td>
                      <td align="center">
                      	<p>L/h</p>
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
        				        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" href="supprMsg.php" onclick="return confirm('Voulez-vous vraiment changer le débit ?');">Ok</button>
                      </td>
                      <th width="200">
                        <p></p>
                      </th>
                    </tr>                    

                  </table>
                </div>
              </div>
            </div>

    	<!-- Effective time only !!! -->
            <div class="col-md-3" align="center">
              <div class="card mb-5 box-shadow">
                <div class="card-body">
                  <table>
                    <tr>
                      <td colspan="3" align="center">
                        <p>Prise en compte dans : X secondes</p>
                      </td>
                    </tr>

                    <tr>
                      <td  width="200" align="center">
                        <p></p>
                      </td>
                      <td class="valeur" align="center">
                      </td>
                      <td  width="200" align="center">
                        <p></p>
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
        				<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Ok</button>
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
            <div class="col-md-3">
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
                      </td>
                      <th width="200"  height="40">
                        <p></p>
                      </th> 
                    </tr>

                    <tr>
                      <th width="200">
                        <p></p>
                      </th>
                      <td align="center">
                        <p>L/h</p>
                      </td>
                      <th width="200">
                        <p></p>
                      </th> 
                    </tr>

                  </table>
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
