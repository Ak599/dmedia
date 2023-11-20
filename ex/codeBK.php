<?php

function database()
       {
         $conn=mysqli_connect("localhost","adminBK","passer","galsenBK");
        return $conn;
       }

function create($prenom,$nom,$numcompte,$code,$solde)
       {
        $conn=database();
        $req="insert into client(prenom,nom,numcompte,code,solde) values ('$prenom','$nom','$numcompte','$code','$solde')";
	$result=mysqli_query($conn,$req);
        $tableau="<table border='4px'>
              <tr><td>prenom</td><td>nom</td><td>numero de compte</td><td>code confidentiel</td><td>solde</td><tr>
              <tr><td>$prenom</td><td>$nom</td><td>$numcompte</td><td>$code</td><td>$solde</td><tr>";
     echo $tableau;
     return $tableau;
        mysqli_close($conn);
        echo "Nouveau compte creer avec succes!";
       }

function reade()
      {
       $conn=database();
       $req="select * from client";
       $result=mysqli_query($conn,$req);
       $tab=mysqli_fetch_all($result);
       mysqli_close($conn);

      }
function versement($prenom,$nom,$numcompte,$somme)
     {
      $conn=database();
      $req1="select solde from client where numcompte='$numcompte' and prenom='$prenom' and nom='$nom'";
      $result1=mysqli_query($conn,$req1);
      if (mysqli_num_rows($result1) > 0)
           {
              $tab1=mysqli_fetch_all($result1);
              $nouveau_solde=$tab1[0][0]+$somme;
    $req2="update client set solde='$nouveau_solde' where numcompte='$numcompte' and prenom='$prenom' and nom='$nom'";
    $result2=mysqli_query($conn,$req2);

  $tableau1="<table border='none'>
              <tr><td>prenom</td><td>nom</td><td>numero de compte</td><td>solde</td><tr>
              <tr><td>$prenom</td><td>$nom</td><td>$numcompte</td><td>$nouveau_solde</td><tr>";
     echo $tableau1;
     return $tableau1;

    echo "Versement effectué!";
           }
    else
     {
        echo "Donner erroner!";
      }
    mysqli_close($conn);

}

function retrait($prenom,$nom,$numcompte,$somme)
     {
      $conn=database();
      $req1="select solde from client where numcompte='$numero_compte' and prenom='$prenom' and nom='$nom'";
      $result1=mysqli_query($conn,$req1);
      if (mysqli_num_rows($result1) > 0)
           {
              $tab1=mysqli_fetch_all($result1);
              if($tab1[0][0] > $somme)
              {
              $nouveau_solde=$tab1[0][0]-$somme;
    $req2="update client set solde='$nouveau_solde' where numcompte='$numcompte' and prenom='$prenom' and nom='$nom'";
    $result2=mysqli_query($conn,$req2);

    $tableau="<table border='4px'>
              <tr><td>prenom</td><td>nom</td><td>numero de compte</td><td>solde</td><tr>
              <tr><td>$prenom</td><td>$nom</td><td>$numcompte</td><td>$nouveau_solde</td><tr>";
     echo $tableau;

    echo "Retrait effectué!";
             }
          }
    else
     {
        echo "Donner erroner!";
      }
    mysqli_close($conn);
  
}

function supprimer($numcompte,$prenom,$nom)
{
        $conn=database();
        $req= "delete from client where numcompte='$numcompte' and prenom='$prenom' and nom='$nom'";
        $result=mysqli_query($conn,$req);
        mysqli_close($conn);
        echo "Suppression du compte!"." ". $numcompte ." "."Reussie avec succes!" ;

}

?>
