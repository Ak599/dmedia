<?php
if(isset($_POST['valider'])){
    include ('../conf/db.php');

    $idCl = $_POST['idCl'];
    $numR = $_POST['numR'];


    $r = "INSERT INTO facture (idCl,numR)
    values ('$idCl','$numR' )";
    
    $connexion->exec($r);
    $location = $_SERVER['HTTP_REFERER'];
    if ($r) {
    $success = "facture ajouté avec succès...";
    header('Location: ../pages/facture.php?success=1');
    }
}
?>