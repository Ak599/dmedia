<?php
if(isset($_POST['valider'])){
    include ('../conf/db.php');

   
    $nom = $_POST['nom'];
    $description = $_POST['description'];

    $r = "INSERT INTO bon_facturation (nom,description)
    values ('$nom','$description' )";
    
    $connexion->exec($r);
    $location = $_SERVER['HTTP_REFERER'];
    if ($r) {
    $success = "bon_Fact ajouté avec succès...";
    header('Location: ../pages/bon_Fact.php?success=1');
    }
}
?>