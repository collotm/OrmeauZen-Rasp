<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="#">Menu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="/OrmeauZen-Rasp-master-I/visualisation.php">Visualisation</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/OrmeauZen-Rasp-master-I/historique.php">Historique des bassins</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion</a>
                      <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="/OrmeauZen-Rasp-master-I/ajoutBassin.php">Ajouter un bassin</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                      <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="/OrmeauZen-Rasp-master-I/signinAdmin.php">Espace Administrateur</a>
                      </div>
                    </li>                   
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Autre</a>
                      <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Qu'est-ce que OrmeauZen ?</a>
                        <a class="dropdown-item" href="#">Contact</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/OrmeauZen-Rasp-master-I/logout.php">Déconnexion</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0" method="GET" action="/OrmeauZen-Rasp-master-I/historique.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="N° de bassin" aria-label="Search" name="bassin">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
                  </form>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="/OrmeauZen-Rasp-master-I/visualisation.php" class="navbar-brand d-flex align-items-center">

            <strong>OrmeauZen</strong>
          </a>

          <a>
          <img src="/OrmeauZen-Rasp-master-I/images/fra.jpg">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>