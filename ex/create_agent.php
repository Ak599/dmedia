<?php
	session_start();
	require_once("connexion.php");
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$email = $_POST['email'];
 	$passwd = $_POST['passwd'];
	$req = "insert into agent(prenom,nom,email,passwd) values('$prenom','$nom','$email','$passwd');";
        $res = mysqli_query($conn,$req);
//        $rows = mysqli_fetch_assoc($res);
//        if($email == $rows['email']){
//                header("Location: index.php");
//                }
//        else{
//		$req = "insert into agent(prenom,nom,email,passwd) values('$prenom','$nom','$email','$passwd');";
//                $result = mysqli_query($conn,$req);
//                if ($result){
//                        header("Location: index.php");
//			echo "Erreur";
//                }
//        }

?>
