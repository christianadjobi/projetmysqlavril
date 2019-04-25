<?php 
session_start();

if ($_SESSION['id']) {
  ?>


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
  <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="aos-master/dist/aos.css">
<style type="text/css">
    .img{
      border-radius: 100px;
      height: 100%;
    }
  </style>
</head>

<body>

<?php 
       include'header.php';
 
 ?>


                <div class="container">
                  <!--Grid row-->
                  <div class="row py-5">
                    <!--Grid column-->
                    <div class="col-md-6 text-center">
                         <img src="image/cl.jpg" class="img">
                    </div>
                     <div class="col-md-6 text-center">

                    <h2>NOS SERVICE</h2>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
                    </div>

                 </div>

               </div>


                <div class="container-fluid" style="background-color: #96b7ba">
                  <div class="container">
                  <div class="row py-5">
                    <!--Grid column-->
                    <div class="col-md-6 text-center"  >
                       <h2>QUI SOMMES NOUS ?</h2>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
                    </div>

                    <div class="col-md-6 text-center"  >
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
          <h1 class="h1-responsive font-weight-bold text-center my-4" id="projet">VOTRE PROJET</h1>
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
                                  <input type="tel" id="tel" name="phone" class="form-control">
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
<?php }
else{


}


 ?>