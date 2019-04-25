<?php 

$bdd= new PDO ('mysql:host=localhost;dbname=gestionclientbat','root','');
if ($_SERVER['REQUEST_METHOD']=='POST') {
   $email=htmlspecialchars($_POST['email']);
   $jour=htmlspecialchars($_POST['jour']);
   $heure=htmlspecialchars($_POST['heure']);
   $date=htmlspecialchars($_POST['date']);
   $val=htmlspecialchars($_POST['numValide']);
   if (!empty($_POST['jour']) AND !empty($_POST['numValide']) AND !empty($_POST['heure']) AND !empty($_POST['email']) AND !empty($_POST['date'])) {

   	$membre = $bdd->prepare('INSERT INTO reservation (id_nonClient,jour,heure,email,date) VALUES (?,?,?,?,?)');
$membre->execute(array($val,$jour,$heure,$email,$date));
header('location:dashreservation.php');

   }
}

?>