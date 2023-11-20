<?php

include '../Conf/db.php';

$r = "DELETE FROM client WHERE idClient = '" . $_GET["idClient"] . "'";
$connexion->query($r);
echo $r;
if ($r) {
    $location = $_SERVER['HTTP_REFERER'];
    header('Location:../Listes/ListeClient.php?delete=1');
}
?>
