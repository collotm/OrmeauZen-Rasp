<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/iconf.ico">

    <title>Visualisation des bassins</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap4/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="visualisation.css" rel="stylesheet">
  </head>

  <body>

<?php require_once("header.php"); ?>

    <main role="main">

      <section class="starter-template">
        <div class="container">
          <h1>Visualisation des bassins</h1>
          <p class="lead text-muted"></p>
          <p class="lead">Aujourd'hui nous sommes le <?php echo date('d/m/Y'); ?></p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
           <?php

              for($i=1 ; $i<61 ; $i++){
              echo '
            <div class="col-md-3">
              <div class="card mb-5 box-shadow">
                <div class="card-body">
                  <table>
                    <tr> 
                      <th>
                        <p class="temp"><img src="images/temp.png" /></p>
                      </th>
                      <th>
                        <p class="nbassin" align="center"><a href="historique.php?bassin='.$i.'">Bassin n°' .$i. '</a></p>
                      </th>
                      <th>
                        <p class="deb"><img src="images/deb.png" /></p>
                      </th>
                    </tr>

                    <tr>
                      <td class="valeur" aligne="center">
                        #valeur
                      </td>
                      <td>
                        <p></p>
                      </td>
                      <td class="valeur" align="center">
                        #valeur
                      </td>  
                    </tr>

                    <tr>
                      <td>
                        <p>&nbsp;</p>
                      </td>
                      <td>
                        <p>&nbsp;</p>
                      </td>
                      <td>
                        <p>&nbsp;</p>
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
            </div>';
            }
            ?>
           </div> 
        </div>
      </div>

    </main>

<?php require_once("footer.php"); ?>

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
