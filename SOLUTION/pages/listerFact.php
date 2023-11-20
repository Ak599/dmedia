<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des factures</title>
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
    echo "<br>";
    include ( '../conf/db.php');
    include('../inc/navbar.php') ;

    $selection = "SELECT * FROM facture";
    $execut = $connexion->query($selection);
    $donne = $execut->fetchAll(PDO::FETCH_ASSOC);
?>
<center>
    <h1>*filiere Enregistré*</h1>
    <br>
    <table class="table table-striped table-hover" id="tab">
        <tr class="table-primary">
            <td align = "center" ><h3>Num_facture</h3></td>
            <td align = "center" ><h3>id_Client</h3></td>
            <td align = "center" ><h3>num_Reglement</h3></td>
      </tr>
         <?php
            foreach ($donne as $value) {
         ?>
         <?php
               if (!isset($_GET['edite']) || $_GET['edite'] !== $value['numF']) { ?>
                <td align = "center" ><h6><?php echo $value['numF']; ?></h6></td>               
               <td align = "center" ><h6><?php echo $value['idCl']; ?></h6></td>
               <td align = "center" ><h6><?php echo $value['numR']; ?></h6></td>

                
                             
            <td align = "center" ><button type="button" class="btn btn-danger"><a href="?delete=<?= $value['numF'] ?> " style="color:white;">Supprimer<a></button>
            <td align = "center" ><button type="button" class="btn btn-info"><a href="?edite=<?= $value['numF'] ?> " style="color:white;">Modifier</a></button></td>

      </tr>
        <?php } else { ?>
                                    <form action="" method="POST"></form> 
                                    <td><input required="true" class="form-control input-md" name="numF"  type="hidden" value="<?= $value['numF'] ?> "></td>
                                    <td><input required="true" class="form-control input-md" name="idCl"  type="text" value="<?= $value['idCl'] ?> "></td>
                                    <td><input required="true" class="form-control input-md" name="numR"  type="text" value="<?= $value['numR'] ?> "></td>
                                    <td><input type="submit" class="btn btn-success" name="Valider" value="Valider"></td>
                                        <td><a href="../pages/listefiliere.php" class="btn btn-danger">Annuler</a></td>
                                        <?php } ?>
       

        <?php  if (isset($_GET['delete'])) {
                        $supp = $connexion->prepare("DELETE FROM facture WHERE numF=:numF");
                        $supp->bindValue(":numF", $_GET['delete'], PDO::PARAM_INT);
                        $supp->execute();
                        } ?>
        <tr>
            <?php
            if(isset($_GET['Valider'])){
$edite=$connexion->prepare("UPDATE numF set numF=:numF,
idCl=:idCl,numR=:numR where numF=:numF");
$edite->bindvalue(":numF",$_GET['numF'],PDO::PARAM_INT);
$edite->bindvalue(":idCl",$_GET['idCl'],PDO::PARAM_STR);
$edite->bindvalue(":numR",$_GET['numR'],PDO::PARAM_INT);
$edite->execute();
            }?>


       
        
        </tr>
        <?php }?>
</center>
        
</table> 
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      </body>
    </html>       