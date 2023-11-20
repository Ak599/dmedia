<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barre_de_navigation</title>

        </li><link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../public/js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="../public/css/style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../public/CSS/diapositive.css">

<!--<nav  class="navbar navbar-expand-lg navbar-dark bg-dark" >-->
<nav class="navbar navbar-light" style="background-color:#e3f2fd">
  <div class="container">
  <button type="button" class="btn btn-primary"> <a class="navbar-brand" href="../index2.php"><h1>ACCEUIL</h1></a></button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <div class="row" id="lines">
        <div class="col">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Client          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="../pages/client.php">Ajouter_Client</a></li>
            <li><a class="dropdown-item" href="../pages/listerClient.php">Liste </a></li>
          </ul>
        </li>
        </div>

        <div class="col">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            commande
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="../pages/commande.php">Ajouter_Commande</a></li>
            <li><a class="dropdown-item" href="../pages/listerCom.php">Liste </a></li>
          </ul>
        </li>
      </div>

      <div class="col">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ligne_Commande
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="../pages/ligne_com.php">Ajouter_LC</a></li>
            <li><a class="dropdown-item" href="../pages/listeligneCom.php">Liste </a></li>
          </ul>
        </li>
      </div>

      <div class="col">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Facture
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="../pages/facture.php">Ajouter_Facture</a></li>
            <li><a class="dropdown-item" href="../pages/listerFact.php">Liste </a></li>
          </ul>
        </li>
      </div>

      <div class="col">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Bon_Facturation
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="../pages/bon_Fact.php">Ajouter_BF</a></li>
            <li><a class="dropdown-item" href="../pages/listerBF.php">Lister </a></li>
          </ul>
        </li>
      </div>

      <div class="col">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Réglement
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="../pages/reglement.php">Ajouter_Reglement</a></li>
            <li><a class="dropdown-item" href="../pages/listerReglement.php">Liste </a></li>
          </ul>
        </li>
      </div>

      <div class="col">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lettre
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="../pages/lettre.php">Ajouter_Lettre</a></li>
            <li><a class="dropdown-item" href="../pages/listerLettre.php">Liste </a></li>
          </ul>
        </li>
      </div>
          
      </div>



  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<body>
    </div>
  </div>
</div>
  </div>
</body>
</html>
