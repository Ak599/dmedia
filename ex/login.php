<?php
require('connexion.php');
session_start();
	$email = stripslashes($_REQUEST['email']);
	$passwd = stripslashes($_REQUEST['passwd']);
	$query = "SELECT * FROM agent WHERE email='$email'";
	$result = mysqli_query($conn,$query);
	if(!$result) {
		echo "Erreur : Impossible de se connecter à MySQL." ;
			}
	else
		header("Location: index.php");
?>
