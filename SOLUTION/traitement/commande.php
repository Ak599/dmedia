<?php
if(isset($_POST['valider'])){
    include ('../conf/db.php');

    $numF = $_POST['numF'];
    $designation = $_POST['designation'];
    $idBF = $_POST['idBF'];
   

    $r = "INSERT INTO commande (idBF,numF,designation)
    values ('$numF','$designation','$idBF' )";
    
    $connexion->exec($r);
    $location = $_SERVER['HTTP_REFERER'];
    if ($r) {
    $success = "commande ajouté avec succès...";
    header('Location: ../pages/commande.php?success=1');
    }
}
?>