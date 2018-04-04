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

        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="card mb-5 box-shadow">
                <div class="card-body">
                  <table>

                    <tr> 
                      <th>
                        <p class="temp"><img src="images/temp.png" /></p>
                      </th>
                      <th>
                        <p class="nbassin" align="center"><a href="historique.php?bassin=''">Bassin n°</a></p>
                      </th>
                      <th>
                        <p class="deb"><img src="images/deb.png" /></p>
                      </th>
                    </tr>

                    <tr>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-secondary">-</button>
                      </td>
                      <td class="valeur" align="center">
                      </td>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-secondary">+</button>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">
                        <p>&nbsp;</p>
                      </td>
                      <td align="center">
                      	<p>&nbsp;</p>
                      </td>
                      <td align="center">
                        <p>&nbsp;</p>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">
                        <p></p>
                      </td>
                      <td align="center">
        				<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">ok</button>
                      </td>
                      <td align="center">
                       <p></p>
                      </td>
                    </tr>                    

                  </table>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card mb-5 box-shadow">
                <div class="card-body">
                  <table>
                    <tr> 
                      <th>
                        <p class="temp"><img src="images/temp.png" /></p>
                      </th>
                      <th>
                        <p class="nbassin" align="center"><a href="historique.php?bassin=''">Bassin n°</a></p>
                      </th>
                      <th>
                        <p class="deb"><img src="images/deb.png" /></p>
                      </th>
                    </tr>

                    <tr>
                      <td class="valeur" align="center">
                      </td>
                      <td>
                        <p></p>
                      </td>
                      <td class="valeur" align="center">
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
