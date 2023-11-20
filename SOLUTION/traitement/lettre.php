<?php
if(isset($_POST['valider'])){
    include ('../conf/db.php');

   
   
    $idCl = $_POST['idCl'];
    $type = $_POST['type'];
   

    $r = "INSERT INTO lettre (idCl,type)
    values ('$idCl','$type' )";
    
    $connexion->exec($r);
    $location = $_SERVER['HTTP_REFERER'];
    if ($r) {
    $success = "lettre ajouté avec succès...";
    header('Location: ../pages/lettre.php?success=1');
    }
}
?>