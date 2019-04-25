<?php 
$bdd = new pdo('mysql:host=localhost;dbname=gestionclientbat','root','');
if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    $name=htmlspecialchars($_POST['name']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $email=htmlspecialchars($_POST['email']);
    $phone=htmlspecialchars($_POST['phone']);
    $projet=htmlspecialchars($_POST['projet']);
    $message=htmlspecialchars($_POST['message']);

      if (!empty($_POST['name']) AND !empty($_POST['prenom']) AND !empty($_POST['email'])  AND !empty($_POST['phone']) AND !empty($_POST['projet']) AND !empty($_POST['message'])){

              if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
     $reqmail=$bdd->prepare("SELECT * FROM nonclient");
           $reqmail->execute();
   $donnee=$bdd->prepare("INSERT INTO nonclient (nom,prenom,email,numero,projet,message) VALUES (?,?,?,?,?,?)");
          $donnee->execute(array($name,$prenom,$email,$phone,$projet,$message));
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Constru Bat</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="aos-master/dist/aos.css">

  <link href="css/style.css" rel="stylesheet">
  <style type="text/css">
    .img{
      border-radius: 100px;
      height: 100%;
    }
  </style>
</head>

<body>

<header>
          <!--Navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
              <a class="navbar-brand" href="#"><strong>Constru Bat</strong></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">ACCUEIL <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">DEVIS</a>
                  </li>

                 
                <li class="nav-item">
                    <a class="nav-link" href="#">PLAN</a>
                  </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">RESERVATION</a>
                  </li>

                </ul>
                  <div class="md-form my-0">
                  <li><a href="#connexion" data-toggle="modal" class="lien"><span ></span>connexion</a></li>
                  </div>

                    <div class="md-form my-0">
                  <li><a href="#inscription" data-toggle="modal" class="lien"><span class="glyphicon glyphicon-user" ></span>inscrption</a></li>
                  </div>
                
              </div>
            </div>
          </nav>
                   

 <div class="modal fade" id="inscription">
    <div class="modal-dialog modal-md">
      <div class="modal-content border-form">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title couleur-form titre-form">Inscription</h4>
          <div class="taille-form-titre"></div>
        </div>
        <div class="modal-body">
         <form id="contact-form" method="post" action="traitement/inscription.php" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname" class="couleur-form">Prénom <span class="blue">*</span></label>
                                <input id="prenom" type="text" name="prenom" class="form-control" placeholder="Votre prénom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="couleur-form">Nom <span class="blue">*</span></label>
                                <input id="nom" type="text" name="nom" class="form-control" placeholder="Votre Nom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="couleur-form">Email <span class="blue">*</span></label>
                                <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="couleur-form">Téléphone<span class="blue">*</span></label>
                                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone">
                                <p class="comments"></p>
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
            <button type="submit" class="btn btn-default button-form"><span class="glyphicon glyphicon-user"> S'incrire</span></button>
          <button type="button" class="btn btn-default button-form" data-dismiss="modal"><span class="glyphicon glyphicon-remove"> Fermer</span></button>
            </form>
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="connexion">
    <div class="modal-dialog modal-sm">
      <div class="modal-content border-form">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title couleur-form titre-form" >Connexion</h4>
           <div class="taille-form-titre2"></div>
        </div>
        <div class="modal-body">
          <form id="contact-form" method="post" action="traitement/connexion.php" role="form">
                        <div class="row">
                            
                            
                            <div class="col-md-6">
                                <label for="email" class="couleur-form">Email <span class="blue">*</span></label>
                                <input id="email" type="text" name="email" class="form-control" placeholder=" Email">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="passe" class="couleur-form">Mot de passe <span class="blue">*</span></label>
                                <input id="mdp" type="password" name="mdp" class="form-control" placeholder="Mot de passe ">
                                <p class="comments"></p>
                            </div>
                            
                            <div class="col-md-12">
                                <p class="blue"><?php  if(isset($error)) {echo $error;} ?></p>
                            </div>
                            
                        </div>
                  
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default button-form"><span class="glyphicon glyphicon-log-in"> Se connecter</span></button>
          <button type="button" class="btn btn-default button-form" data-dismiss="modal"><span class="glyphicon glyphicon-remove"> Fermer</span></button>
           
        </div>
         </form>
      </div>
    </div>
  </div>

          <!-- Navbar -->
          <!-- Full Page Intro -->
          <div class="view" style="background-image: url('image/focus.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light align-items-center">
              <!-- Content -->
              <div class="container">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-12 mb-4 white-text text-center" style="margin-top: 200px;">
                    <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>cONSTRU BAT </strong></h1>
                    <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                    <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>devis & online</strong></h5>
                   
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
          <!-- Full Page Intro -->
</header>
        <!-- Main navigation -->
        <!--Main Layout-->


                <div class="container">
                  <!--Grid row-->
                  <div class="row py-5">
                    <!--Grid column-->
                    <div class="col-md-6 text-center">
                         <img src="image/cl1.jpg" class="img">
                    </div>
                     <div class="col-md-6 text-center">

                    <h2>NOS SERVICE</h2>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
                    </div>

                 </div>

               </div>


                <div class="container-fluid" style="background-color:#96b7ba">
                  <div class="container">
                  <div class="row py-5">
                    <!--Grid column-->
                    <div class="col-md-6 text-center">
                       <h2>QUI SOMMES NOUS ?</h2>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
                    </div>

                    <div class="col-md-6 text-center">
                      <img src="image/cl2.jpg" class="img">
                  
                    </div>

                    </div>

                 </div>

               </div>

           <div class="container">
                  <!--Grid row-->
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <h2>ILS NOUS FONT CONFIANCE</h2>
                    </div>
                  </div>
                  <div class="row py-5">
                    <!--Grid column-->
                    <div class="col-md-4 text-center">
                     <img src="image/cons.jpg">
                    </div>
                     <div class="col-md-4 text-center">
                      <img src="image/cons1.jpg">
                    </div>
                     <div class="col-md-4 text-center">
                      <img src="image/cons2.jpg">
                    </div>


                 </div>

                 </div>

               </div>

      <main>
                <div class="container">
                  <!--Grid row-->
                  <div class="row py-5">
                    <!--Grid column-->
                    <div class="col-md-12 text-center">
                   
                  <!--NOS REALISATION ESPACE A REMPLIR-->


      <section class="mb-4">

          <!--Section heading-->
          <h1 class="h1-responsive font-weight-bold text-center my-4">VOTRE PROJET</h1>
          <!--Section description-->
          <p class="text-center w-responsive mx-auto mb-5">Proposez votre projet pour une premieres analyse et une  consultation gratuite.</p>

          <div class="row">

              <!--Grid column-->
              <div class="col-md-9 mb-md-0 mb-5">
                  <form id="contact-form" name="contact-form" action="" method="POST">

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="name" name="name" class="form-control">
                                  <label for="name" class="">Nom</label>
                              </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="email" name="email" class="form-control">
                                  <label for="email" class="">Email</label>
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>

                        <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="prenom" name="prenom" class="form-control">
                                  <label for="prenom" class="">Prenom</label>
                              </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="tel" id="tel" name="tel" class="form-control">
                                  <label for="tel" class="">Numero</label>
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>
                      <!--Grid
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="projet" name="projet" class="form-control">
                                  <label for="projet" class="">Projet</label>
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-12">

                              <div class="md-form">
                                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Comment peut-on se rendre utile ?"></textarea>
                                  <label for="message">Message</label>
                              </div>

                          </div>
                      </div>
                      <!--Grid row-->

                  </form>

                  <div class="text-center text-md-left">
                      <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
                  </div>
                  <div class="status"></div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-3 text-center">
                  <ul class="list-unstyled mb-0">
                      <li><i class="fas fa-map-marker-alt fa-2x"></i>
                          <p>San Francisco, CA 94126, USA</p>
                      </li>

                      <li><i class="fas fa-phone mt-4 fa-2x"></i>
                          <p>(+225) 87085834</p>
                      </li>

                      <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                          <p>christianadjobi@gmail.com</p>
                      </li>
                  </ul>
              </div>
              <!--Grid column-->
        <div class="my-2">
          <p style="font-weight:300;font-size:0.85rem;color: red"> 
            <?php 
          if (isset($error)) {
            echo "$error";
          } ?>
            
          </p>
        </div>
          </div>

      </section>
      <!--Section: Contact v.2-->
                    
         </div>
                    <!--Grid column-->
      </div>
                  <!--Grid row-->
    </div>
</main>











       

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="query.js"></script>
  <script type="text/javascript">// Animations init
  new WOW().init();$('.carousel-3d-basic').mdbCarousel3d();</script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->     
      <script src="aos-master/dist/aos.js"></script>

  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>