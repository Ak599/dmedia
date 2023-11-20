<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>

<?php
session_start();


?>
<form class="box" action="create_agent.php" method="post">
        <h1 class="box-logo box-title">Galsen Bank</h1>
    <h1 class="box-title">S'inscrire</h1>
    <input type="text" class="box-input" name="prenom" placeholder="Votre Prenom" required />
    <input type="text" class="box-input" name="nom" placeholder="Votre Nom" required />
    <input type="text" class="box-input" name="numcni" placeholder="Votre Email" required />
    <input type="password" class="box-input" name="passwd" placeholder="Mot de passe" required />
    <input type="submit" class="box-button" name="submit" value="S'inscrire" />
    <p class="box-register" >Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>

</body>
</html>
