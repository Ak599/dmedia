<!DOCTYPE html>
<html>
<head>
 <!-- <link rel="stylesheet" href="style.css" />  -->
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="..public/css/bootstrap.min.css">
    <link rel="stylesheet" href="..public/css/Loader.css">
    <link rel="stylesheet" href="..public/js/Loader.js">
    <link rel="stylesheet" href="../public/css/styles.css" />


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</head>
<body>
<?php
require('config.php');
session_start(); 

if (isset($_POST['login'])){
  $login = stripslashes($_REQUEST['login']);
  $login = mysqli_real_escape_string($conn, $login);
  $pass = stripslashes($_REQUEST['pass']);
  $pass = mysqli_real_escape_string($conn, $pass);
    $query = "SELECT * FROM `utilisateurs` WHERE login='$login' and pass='".hash('sha256', $pass)."'";
  $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['login'] = $login;
      header("Location: ../inc/navbar.php");
  }else{
    $message = "L'email ou le mot de passe est incorrect.";
  }
}
?>
<form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title">Veuillez vous identifier svp!!</h1>
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="login" placeholder="Example@gmail.com">
<input type="password" class="box-input" name="pass" placeholder="Password">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Je suis nouveau!! <a href="inscription.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>