<?php
if(isset($_POST['valider'])){
    include ('../conf/db.php');

    $libelle = $_POST['libelle'];
    $designation = $_POST['designation'];
    $signature = $_POST['signature'];

    $r = "INSERT INTO reglement (libelle,designation,signature)
    values ('$libelle','$designation','$signature' )";
    
    $connexion->exec($r);
    $location = $_SERVER['HTTP_REFERER'];
    if ($r) {
    $success = "reglement ajouté avec succès...";
    header('Location: ../pages/reglement.php?success=1');
    }
}
?>