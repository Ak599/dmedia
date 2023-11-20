
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des commandes</title>
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
    include ('../conf/db.php');
    include('../inc/navbar.php') ;

    $selection = "SELECT * FROM commande";
    $execut = $connexion->query($selection);
    $donne = $execut->fetchAll(PDO::FETCH_ASSOC);
?>
<center>
    <h1>*commande Enregistrés*</h1>
    <br>
  <!--  <table class = "table" align = "center">  
    <table class="table-primary">-->
  <table class="table table-striped table-hover" id="tab">
  

        <tr class="table-primary">
            <td align = "center" ><h3>id_Com</h3></td>
            <td align = "center" ><h3>id_BF</h3></td>
            <td align = "center" ><h3>Num_Facture</h3></td>
            <td align = "center" ><h3>Désignation</h3></td>
        </tr>
        <?php
            foreach ($donne as $value) {
        ?>
        <?php
      if (!isset($_GET['edite']) || $_GET['edite'] !== $value['idCom']) { ?>
                             
            <td align = "center" ><h5> <?=$value['idCom']; ?></h5></td>
            <td align = "center" ><h5> <?=$value['idBF']; ?></h5></td>
            <td align = "center" ><h5> <?=$value['numF']; ?></h5></td>
            <td align = "center" ><h5> <?=$value['designation']; ?></h5></td>
            

            <td><button type="button" class="btn btn-danger"><a href="?delete=<?= $value['idCom'] ?> " style="color:white;">Supprimer<a></button>
            <td><button type="button" class="btn btn-info"><a href="?edite=<?= $value['idCom'] ?> " style="color:white;">Modifier</a></button></td>

                                    </tr>
       <!-- </tfoot>  -->
      
        <?php } else { ?>
                                    <form action="" method="POST"></form> 
                                    <td><input required="true" class="form-control input-md" name="idCom"  type="hidden" value="<?= $value['idCom'] ?> "></td>
                                    <td><input required="true" class="form-control input-md" name="idBF"  type="hidden" value="<?= $value['idBF'] ?> "></td>
                                    <td><input required="true" class="form-control input-md" name="numF"  type="hidden" value="<?= $value['numF'] ?> "></td>
                                    <td><input required="true" class="form-control input-md" name="designation"  type="text" value="<?= $value['designation'] ?> "></td>
                                    



                                    <td><input type="submit" class="btn btn-success" name="valider" value="Valider"></td>
                                        <td><a href="../pages/listerCom.php" class="btn btn-danger">Annuler</a></td>
                                        <?php } ?>
       

        <?php  if (isset($_GET['delete'])) {
                        $supp = $connexion->prepare("DELETE FROM client WHERE idCl=:idCl");
                        $supp->bindValue(":idCl", $_GET['delete'], PDO::PARAM_INT);
                        $supp->execute();
                        } ?>
                        
        <tr>
            <?php
            if(isset($_GET['valider'])){
$edite=$connexion->prepare("UPDATE commande set designation=:designation where idCom=:idCom");
$edite->bindvalue("idCom",$_GET['idCom'],PDO::PARAM_INT);
$edite->bindvalue("idBF",$_GET['idBF'],PDO::PARAM_INT);
$edite->bindvalue("numF",$_GET['numF'],PDO::PARAM_INT);
$edite->bindvalue(":designation",$_GET['designation'],PDO::PARAM_STR);

$edite->execute();
            }?>

                <tr>
       
<!--             <td align = "center" ><?php echo $value['idCom']; ?></td>
            <td align = "center" ><?php echo $value['idBF']; ?></td>
            <td align = "center" ><?php echo $value['numF']; ?></td>
            <td align = "center" ><?php echo $value['designation']; ?></td>
           
            <td><button type="button" class="btn btn-danger"><a href="?delete=<?= $value['idCom'] ?> " style="color:white;">Supprimer<a></button>
            <td><button type="button" class="btn btn-info"><a href="?edite=<?= $value['idCom'] ?> " style="color:white;">Modifier</a></button></td>
        </tr>
        <?php }?>   -->
          
</center>
</table> 
      
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html> 