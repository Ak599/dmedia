<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des lettres</title>
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/js/bootstrap.min.js">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php include '../inc/navbar.php' ?>

<?php if (isset($_GET['delete']) && $_GET['delete'] == 1) { ?>
<div class='alert alert-danger corner-radius container mt-4'>
    <p>lettre supprimé avec succés</p>
</div>
<?php unset($_GET['delete']);
} ?>

<?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
<div class='alert alert-success corner-radius container mt-4'>
    <p>lettre modifié avec succés</p>
</div>
<?php unset($_GET['success']);
} ?>
<div class="container mt-3">
    <div class="card">
        <div class="card-header bg-success text-white">
            Liste lettre
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>NumL</th>
                    <th>IdCl</th>
                    <th>type</th>
                    
                </tr>
                <tr>
                    <?php
                    include '../conf/db.php';
                    $stmt = $connexion->query("SELECT * FROM lettre");

                    while ($row = $stmt->fetch()) { ?>

                <tr>
                    <td><?php echo $row["NumL"]; ?></td>
                    <td><?php echo $row["nom"]; ?></td>
                    <td><?php echo $row["IdCl"]; ?></td>
                   
                    <td><a class="btn btn-warning"
                            href="editAdherant.php?id=<?php echo $row['numL']; ?>">
                            Modifier</a></td>
                    <td><a class="btn btn-danger"
                            href="../pages/deletelettre.php?id=<?php echo $row['numL']; ?>"
                            onclick="return confirm('Vous êtes sur le point de supprimer , vous voulez vraiment supprimer');">Supprimer</a>
                    </td>

                </tr>

                <?php
                    }

            ?>
                </tr>
            </table>
        </div>
    </div>
</div>







      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      </body>
    </html>       