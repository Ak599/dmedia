<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ligne_Commande</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/js/bootstrap.min.js">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php 
  include('../inc/navbar.php');
    
    if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
    <div class='alert alert-success corner-radius container mt-3'>
      <p>ligne_Commande ajouté avec succes !!</p>
    </div>
    <?php unset($_GET['success']);
    } ?>

          <div class="conatainer mt-3">
            <div class="card-body">
               <form method = "POST" action = "../traitement/ligne_Com.php" >
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">id_Client</label>
                    <input type="number" class="form-control" name="idCl"  >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">id_Com</label>
                    <input type="number" name="idCom" class="form-control" >
                </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">date Commande</label>
                <input type="date" name="dateC" class="form-control">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Quantité</label>
                <input type="text" name="email" class="form-control">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prix</label>
                <input type="text" name="prix" class="form-control">
              </div>


              

          <button type="submit" name="valider" id="bouton" class="btn btn-primary">ENREGISTRER</button>
        
      </div>

    </div>
    </form>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>