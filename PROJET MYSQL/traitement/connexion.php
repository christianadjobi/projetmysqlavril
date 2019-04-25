<?php
session_start();



require 'database.php';

if ($_POST) {
	$email=$_POST['email'];
	$mdp=$_POST['mdp'];
	

$reqdonne=$bdd->prepare('SELECT * FROM user WHERE email=? AND  motdepasse=?');
$reqdonne->execute(array($email,$mdp));
$affiche=$reqdonne->fetch();
$verifie=$reqdonne->rowcount();
if ($verifie==1) {
$_SESSION['id']=$affiche['id'];
$_SESSION['nom']=$affiche['nom'];
$_SESSION['prenom']=$affiche['prenom'];
$_SESSION['email']=$affiche['email'];
header('location: ../client.php');

}else{
	header('location: ../index.php');

}




}
 ?>