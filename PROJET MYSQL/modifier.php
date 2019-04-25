<?php 

require'traitement/database.php';

if (isset($_GET)) {
	$id=$_GET['id'];

	$donnee=$bdd->prepare('SELECT * FROM user WHERE id=? ');
	$donnee->execute(array($id));
	$affiche=$donnee->fetch();
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <form id="contact-form" method="post" action="traitement/update.php" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="prenom" class="couleur-form">Prénom <span class="blue">*</span></label>
                                <input id="prenom" type="text" name="prenom" class="form-control" placeholder="Votre prénom" value="<?php echo $affiche['prenom']; ?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="couleur-form">Nom <span class="blue">*</span></label>
                                <input id="nom" type="text" name="nom" class="form-control" placeholder="Votre Nom" value="<?php echo $affiche['nom']; ?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="couleur-form">Email <span class="blue">*</span></label>
                                <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email" value="<?php echo $affiche['email']; ?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="couleur-form">Téléphone<span class="blue">*</span></label>
                                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone" value="<?php echo $affiche['telephone']; ?>">
                                <p class="comments"></p>
                            </div>

                              <div class="col-md-6">
                              
                                <input  type="text" name="id" class="form-control"  value="<?php echo $affiche['id']; ?>">
                                
                            </div>

                            <div class="col-md-6">
                                <label for="password" class="couleur-form">mot de passe<span class="blue">*</span></label>
                                <input id="mdp" type="password" name="mdp" class="form-control" placeholder="Votre Téléphone">
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                <label for="password1" class="couleur-form">mot de passe<span class="blue">*</span></label>
                                <input id="password1" type="password" name="mdp1" class="form-control" placeholder="Votre Téléphone">
                                <p class="comments"></p>
                            </div>

                            
                            <div class="col-md-12">
                                <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                            </div>
                            
                        </div>
                  
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-default button-form"><span class="glyphicon glyphicon-user"> envoyer</span></button>
          <button type="button" class="btn btn-default button-form" data-dismiss="modal"><span class="glyphicon glyphicon-remove"> Fermer</span></button>
            </form>
        </div>
</body>
</html>