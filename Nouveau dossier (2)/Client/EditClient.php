<?php
include '..///Conf/db.php';
$q = $connexion->query("SELECT * FROM client WHERE idClient='" . $_GET["idClient"] . "'");

while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
    $nomClient = $row['nomClient'];
    $tel = $row['tel'];
    $email = $row['email'];
    $bp= $row['bp'];
    $rue= $row['rue'];
}

if (isset($_POST['update'])) {

    $nomClient= $_POST['nomClient'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $bp = $_POST['bp'];
    $rue= $_POST['rue'];



    $r = "UPDATE client SET nomClient='$nomClient',tel='$tel',email='$email',bp='$bp',rue'$rue' WHERE idClient= '" . $_GET["idClient"] . "'";
    $connexion->exec($r);

    if ($r) {        $success = "Client modifié avec succès...";
        header('Location:../Listes/ListeClient.php?success=1');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adherant</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
    <div class='alert alert-success corner-radius container'>
    <p>Adherant ajouté avec succés</p>
    </div>
    <?php unset($_GET['success']);
    } ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-success text-white">
                Gestion Adherant
            </div>
            <fieldset>
      <legend ><b>Client</b></legend>
      <table>
      <tr><td><b>Nom Client</b></td><td><input type="text" name="nomClient" value="<?php echo $nomClient; ?>"></td></tr>
      <tr><td><b>Telephone</b></td><td><input type="text" name="tel" value="<?php echo $tel; ?>"></td></tr>
      <tr><td><b>Email</b></td><td><input type="text" name="email"> value="<?php echo $email; ?>"</td></tr>
      <tr><td><b>Boite Postale</b></td><td><input type="text" name="bp" value="<?php echo $bp; ?>"></td></tr>
      <tr><td><b>Rue</b></td><td><input type="text" name="rue" value="<?php echo $rue; ?>"></td></tr>
      <tr><td></td><td><input type="submit" name="benrg" value="ENREGISTRER" class="bouton"></td></tr>
      <tr><td></td><td><input type="submit" name="bsupp" value="SUPPRIMER" class="bouton"></td></tr>
      </table>
      </fieldset>
      </form>
            </form>
        </div>
        </div>
    </div>

</body>

</html>


