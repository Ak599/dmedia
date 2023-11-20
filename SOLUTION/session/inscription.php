<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../public/css/styles.css" />
</head>
<body>
<?php
// include ('config.php');
require('config.php');
//session_start();

if (isset($_REQUEST['nom'],$_REQUEST['prenom'],$_REQUEST['naiss'],$_REQUEST['login'], $_REQUEST['pass'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($conn, $nom); 

  // récupérer le prenom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $prenom = stripslashes($_REQUEST['prenom']);
  $prenom = mysqli_real_escape_string($conn, $prenom); 

  // récupérer la naissance d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $naiss = stripslashes($_REQUEST['naiss']);
  $naiss = mysqli_real_escape_string($conn, $naiss); 
  

  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $login = stripslashes($_REQUEST['login']);
  $login = mysqli_real_escape_string($conn, $login);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $pass = stripslashes($_REQUEST['pass']);
  $pass = mysqli_real_escape_string($conn, $pass);
  //requéte SQL + mot de passe crypté
    $query = "INSERT into `utilisateurs` (nom,prenom,naiss, login, pass)
              VALUES ('$nom','$prenom','$naiss', '$login', '".hash('sha256', $pass)."')";
  // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{
?>
<form class="box" action="" method="post">
  <h1 class="box-logo box-title">Soyez la binevenue à Sen HIJAB STYLE</h1>
    <h1 class="box-title">S'inscrire</h1>
    <input type="text" class="box-input" name="nom" placeholder="Votre nom" required />
    <input type="text" class="box-input" name="prenom" placeholder="Votre prenom" required />
    <input type="date" class="box-input" name="naiss" placeholder="Date de Naissance" required />
    <input type="text" class="box-input" name="login" placeholder="Adresse Email" required />
    <input type="password" class="box-input" name="pass" placeholder="Mot de passe" required />
    <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit(e)? <a href="login.php">S'identifier</a></p>
</form>
<?php } ?>
</body>
</html>