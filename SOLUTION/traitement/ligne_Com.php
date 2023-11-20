<?php
if(isset($_POST['valider'])){
    include ('../conf/db.php');

    $idCl = $_POST['idCl'];
    $idCom = $_POST['idCom'];
    $dateC = $_POST['dateC'];
    $quantite = $_POST['quantite '];
    $prix = $_POST['prix'];

    $r = "INSERT INTO ligne_commande (idCl,idCom,dateC?quantite ,prix)
    values ('$idCl','$idCom','$dateC','$quantite ','$prix' )";
    
    $connexion->exec($r);
    $location = $_SERVER['HTTP_REFERER'];
    if ($r) {
    $success = "ligne_commande ajouté avec succès...";
    header('Location: ../pages/ligne_com.php?success=1');
    }
}
?>