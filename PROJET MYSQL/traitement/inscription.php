<?php 

 require 'database.php';

 if ($_POST) {
 	$nom=$_POST['nom'];
 	$prenom=$_POST['prenom'];
 	$email=$_POST['email'];
 	$phone=$_POST['phone'];
 	$mdp=$_POST['mdp'];
 	$mdp1=$_POST['mdp1'];

 $donnee = $bdd->prepare('INSERT INTO user (nom,prenom,email,telephone,motdepasse) VALUES (?,?,?,?,?)');
 $donnee->execute(array($nom,$prenom,$email,$phone,$mdp));
 header('location:../index.php');

 }
/*
$calcul=$bdd->query('SELECT COUNT(id) AS membre FROM user');
$affiche=$calcul->fetch();

echo $affiche['membre'];
*/
 ?>