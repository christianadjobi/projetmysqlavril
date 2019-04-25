<?php 

require'database.php';

if ($_POST) {
    $id=$_POST['id'];
	$nom=$_POST['nom'];
 	$prenom=$_POST['prenom'];
 	$email=$_POST['email'];
 	$telephone=$_POST['phone'];
 	$mdp=$_POST['mdp'];
 	


$donnee=$bdd->prepare('UPDATE user SET nom=?,prenom=?,email=?,telephone=?, motdepasse=? WHERE id=?');
$donnee->execute(array($nom,$prenom,$email,$telephone,$mdp,$id));
header('location:../profil.php');


}

 ?>