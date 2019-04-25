<?php 

require'database.php';

if ($_GET)  {
   $id =  $_GET['id'];

   $supprimer = $bdd->prepare('DELETE FROM user WHERE id=?');
   $supprimer->execute(array($id));
}



 ?>