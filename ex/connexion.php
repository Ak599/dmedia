<?php
$conn = mysqli_connect("localhost","adminbk","passer","galsenBK");
if (!$conn) {
echo "Erreur : Impossible de se connecter à MySQL." ;
exit;
}
else
echo "Succès : Une connexion correcte à MySQL a été faite! " ;

 mysqli_close($conn);

?>
