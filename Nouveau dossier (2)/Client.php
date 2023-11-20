<?php
if (isset($_POST['benrg'])) {
    include '../Conf/db.php';
    $nomClient = $_POST['nomClient'];
    $tel= $_POST['tel'];
    $email = $_POST['email'];
    $bp = $_POST['bp'];
    $rue = $_POST['rue'];

    $r = "INSERT INTO client (nomClient,tel,email,bp,rue) 
        values ('$nomClient','$tel','$email','$bp','$rue')";
    $connexion->exec($r);

    $location = $_SERVER['HTTP_REFERER'];
    if ($r) {
        $success = "Client ajouté avec succès...";
        header('Location:../Formulaires/Client.php?success=1');
    }
}

