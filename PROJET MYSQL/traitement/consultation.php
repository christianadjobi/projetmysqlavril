<?php 
$bdd = new pdo('mysql:host=localhost;dbname=gestionclientbat','root','');
if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    $name=htmlspecialchars($_POST['name']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $email=htmlspecialchars($_POST['email']);
    $tel=htmlspecialchars($_POST['tel']);
    $projet=htmlspecialchars($_POST['projet']);
    $message=htmlspecialchars($_POST['message']);

      if (!empty($_POST['name']) AND !empty($_POST['prenom']) AND !empty($_POST['email'])  AND !empty($_POST['tel']) AND !empty($_POST['projet']) AND !empty($_POST['message'])){

              if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
     $reqmail=$bdd->prepare("SELECT * FROM nonclient");
           $reqmail->execute();
   $donnee=$bdd->prepare("INSERT INTO nonclient (nom,prenom,email,numero,projet,message) VALUES (?,?,?,?,?,?)");
          $donnee->execute(array($name,$prenom,$email,$tel,$projet,$message));
          header('location:../client.php');
          $error="<p>information enregistrer,
          consultation en cours de traitement...(delais 24h)
          nous vous confirmons la requette par mail ou par contact.<br>Merci de bien vouloir prendre un rendez vous apres confirmation...!!! .</p>";
                } else{
                  $error="entre un email valide";
                } 

      }else{
       $error='veuillez renseigner tous les champs';

             }
}

?>