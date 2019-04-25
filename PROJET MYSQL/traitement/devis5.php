<?php 

 require 'database1.php';

 if ($_POST) {
 	$valeur1=$_POST['valeur1'];
 	$valeur2=$_POST['valeur2'];
 	$valeur3=$_POST['valeur3'];
    $valeur4=$_POST['valeur4'];
    $valeur5=$_POST['valeur5'];


 $donnee = $bdd->prepare('INSERT INTO plomb (ouvrage,unite,quantiter,prixunitaire,prix) VALUES (?,?,?,?,?)');
 $donnee->execute(array($valeur1,$valeur2,$valeur3,$valeur4,$valeur5));
 header('location:../login.php');
 }
/*
$calcul=$bdd->query('SELECT ouvrage SUM(prix) FROM generalite GROUP BY ouvrage ');


echo $calcul;
*/
 ?>