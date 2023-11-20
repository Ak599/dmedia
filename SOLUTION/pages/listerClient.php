
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des clients</title>
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
    //include('index2.php') ;

    $selection = "SELECT * FROM client";
    $execut = $connexion->query($selection);
    $donne = $execut->fetchAll(PDO::FETCH_ASSOC);
?>
<center>
    <h1>*clients Enregistrés*</h1>
    <br>
  <!--  <table class = "table" align = "center">  
    <table class="table-primary">-->
  <table class="table table-striped table-hover" id="tab">
  

        <tr class="table-primary">
            <td align = "center" ><h3>id</h3></td>
            <td align = "center" ><h3>Nom</h3></td>
            <td align = "center" ><h3>Prenom</h3></td>
            <td align = "center" ><h3>Tel</h3></td>
            <td align = "center" ><h3>EMAIL</h3></td>
            <td align = "center" ><h3>BP</h3></td>
            <td align = "center" ><h3>Rue</h3></td>
            
        </tr>
        <?php
            foreach ($donne as $value) {
        ?>
        <?php
      if (!isset($_GET['edite']) || $_GET['edite'] !== $value['idCl']) { ?>
                             
            <td align = "center" ><h5> <?=$value['idCl']; ?></h5></td>     
            <td align = "center" ><h5> <?=$value['nom']; ?></h5></td>
            <td align = "center" ><h5><?=$value['prenom']; ?></h5></td>
            <td align = "center" ><h5> <?=$value['tel']; ?></h5></td>
            <td align = "center" ><h5> <?=$value['email']; ?></h5></td>
            <td align = "center" ><h5> <?=$value['BP']; ?></h5></td>
            <td align = "center" ><h5> <?=$value['Rue']; ?></h5></td>
            

            <td><button type="button" class="btn btn-danger"><a href="?delete=<?= $value['idCl'] ?> " style="color:white;">Supprimer<a></button>
            <td><button type="button" class="btn btn-info"><a href="?edite=<?= $value['idCl'] ?> " style="color:white;">Modifier</a></button></td>

                                    </tr>
       <!-- </tfoot>  -->
      
        <?php } else { ?>
                                    <form action="" method="POST"></form> 
                                    <td><input required="true" class="form-control input-md" name="idCl"  type="hidden" value="<?= $value['idCl'] ?> "></td>
                                    <td><input required="true" class="form-control input-md" name="nom"  type="text" value="<?= $value['nom'] ?> "></td>
                                    <td><input required="true" class="form-control input-md" name="prenom"  type="text" value="<?= $value['prenom'] ?> "></td>
                                    <td><input required="true" class="form-control input-md" name="tel"  type="date" value="<?= $value['tel'] ?> "></td>
                                    <td><input required="true" class="form-control input-md" name="BP"  type="text" value="<?= $value['BP'] ?> "></td>
                                    <td><input required="true" class="form-control input-md" name="Rue"  type="text" value="<?= $value['Rue'] ?> "></td>
                                    


                                    <td><input type="submit" class="btn btn-success" name="valider" value="Valider"></td>
                                        <td><a href="../pages/listerClient.php" class="btn btn-danger">Annuler</a></td>
                                        <?php } ?>
       

        <?php  if (isset($_GET['delete'])) {
                        $supp = $connexion->prepare("DELETE FROM client WHERE idCl=:idCl");
                        $supp->bindValue(":idCl", $_GET['delete'], PDO::PARAM_INT);
                        $supp->execute();
                        } ?>
                        
        <tr>
            <?php
            if(isset($_GET['valider'])){
$edite=$connexion->prepare("UPDATE client set nom=:nom,
prenom=:prenom,Tel=:Tel,email=:email,BP=:BP,Rue:Rue where idCl=:idCl");
$edite->bindvalue("idCl",$_GET['idCl'],PDO::PARAM_INT);
$edite->bindvalue(":nom",$_GET['nom'],PDO::PARAM_STR);
$edite->bindvalue(":prenom",$_GET['prenom'],PDO::PARAM_STR);
$edite->bindvalue(":tel",$_GET['tel'],PDO::PARAM_INT);
$edite->bindvalue(":email",$_GET['email'],PDO::PARAM_STR);
$edite->bindvalue(":,BP",$_GET[',BP'],PDO::PARAM_STR);
$edite->bindvalue(":,Rue",$_GET[',Rue'],PDO::PARAM_STR);

$edite->execute();
            }?>

                <tr>
       
<!--             <td align = "center" ><?php echo $value['idCl']; ?></td>
            <td align = "center" ><?php echo $value['nom']; ?></td>
            <td align = "center" ><?php echo $value['prenom'];?></td>
            <td align = "center" ><?php echo $value['tel'];?></td>
            <td align = "center" ><?php echo $value['email'];?></td>
            <td align = "center" ><?php echo $value[',BP'];?></td>
            <td align = "center" ><?php echo $value['Rue'];?></td>
           
            <td><button type="button" class="btn btn-danger"><a href="?delete=<?= $value['idClient'] ?> " style="color:white;">Supprimer<a></button>
            <td><button type="button" class="btn btn-info"><a href="?edite=<?= $value['idClient'] ?> " style="color:white;">Modifier</a></button></td>
        </tr>
        <?php }?>   -->
          
</center>
</table> 
      
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html> 