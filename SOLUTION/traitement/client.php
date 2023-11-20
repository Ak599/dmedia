<?php
if(isset($_POST['valider'])){
    include ('../conf/db.php');

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $BP = $_POST['BP'];
    $Rue= $_POST['Rue'];
    $r = "INSERT INTO client (nom,prenom,tel,email,BP,Rue)
    values ('$nom','$prenom','$tel','$email','$BP','$Rue' )";
    $connexion->exec($r);
    $location = $_SERVER['HTTP_REFERER'];
    if ($r) {
    $success = "client ajouté avec succès...";
    header('Location: ../pages/client.php?success=1');
    }
}
?>