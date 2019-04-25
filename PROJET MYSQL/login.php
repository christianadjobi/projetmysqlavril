<?php 
session_start();

if ($_SESSION['id']) {
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
<header>
          <!--Navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
              <a class="navbar-brand" href="#"><strong>CONSTRU BAT</strong></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="client.php">ACCUEIL <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">PASSER LE DEVIS</a>
                  </li>

              
                <li class="nav-item">
                    <a class="nav-link" href="plan.php">PLAN</a>
                  </li>

                <li class="nav-item">
                    <a class="nav-link" href="dashclient.php">RESERVATION</a>
                  </li>

                </ul>
                  <div class="md-form my-0">
                  <li><a href="profil.php"  class="lien"><span class="glyphicon glyphicon-user" ></span>profil</a></li>
                  </div>

                    <div class="md-form my-0">
                  <li><a  href="traitement/deconnection.php" class="lien">deconnexion</a></li>
                  </div>
                
              </div>
            </div>
          </nav>
         <!-- Navbar -->
          <!-- Full Page Intro -->
          <div class="view" style="background-image: url('image/dev.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light align-items-center">
              <!-- Content -->
              <div class="container">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-12 mb-4 white-text text-center" style="margin-top: 200px;">
                    <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>DEVIS</strong></h1>
                    <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                    <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Obtener les meilleur devis proposer par votre  & ingenieur</strong></h5>
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
      
      

 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">designation des ouvrages</th>
      <th scope="col">unite</th>
      <th scope="col">quantiter</th>
      <th scope="col">prix unitaire</th>
       <th scope="col">prix</th>
       <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>Generalite</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <form method="POST" action="traitement/devis.php">
      <td><input type="text" name="valeur1"></td>
      <td><input type="text" name="valeur2"></td>
      <td><input type="text" name="valeur3"></td>
      <td><input type="text" name="valeur4"></td>
      <td><input type="text" name="valeur5"></td>
      <td><input type="submit" class="form-control" value="Soumettre"></td>
      </form>
    </tr>
  
     <tr>
      <th scope="row"></th>
      <td>sous total :</td>
      <td><?php if (isset($message)) {
        echo "$message";
      } ?></td>
    </tr>
  </tbody>
   <tr>
      <th scope="row"></th>
      <td>terrassement generaux</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
       <form method="POST" action="traitement/devis1.php">
      <td><input type="text" name="valeur1"></td>
      <td><input type="text" name="valeur2"></td>
      <td><input type="text" name="valeur3"></td>
      <td><input type="text" name="valeur4"></td>
      <td><input type="text" name="valeur5"></td>
      <td><input type="submit" class="form-control" value="Soumettre"></td>
      </form>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>sous total 1 :</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>gros oeuvre</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
     <form method="POST" action="traitement/devis2.php">
      <td><input type="text" name="valeur1"></td>
      <td><input type="text" name="valeur2"></td>
      <td><input type="text" name="valeur3"></td>
      <td><input type="text" name="valeur4"></td>
      <td><input type="text" name="valeur5"></td>
      <td><input type="submit" class="form-control" value="Soumettre"></td>
      </form>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>sous total 2:</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Menuserie Alluminuim</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <form method="POST" action="traitement/devis3.php">
      <td><input type="text" name="valeur1"></td>
      <td><input type="text" name="valeur2"></td>
      <td><input type="text" name="valeur3"></td>
      <td><input type="text" name="valeur4"></td>
      <td><input type="text" name="valeur5"></td>
      <td><input type="submit" class="form-control" value="Soumettre"></td>
      </form>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>sous total 3 :</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Serrurie Ferronerie</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">5</th>
     <form method="POST" action="traitement/devis4.php">
      <td><input type="text" name="valeur1"></td>
      <td><input type="text" name="valeur2"></td>
      <td><input type="text" name="valeur3"></td>
      <td><input type="text" name="valeur4"></td>
      <td><input type="text" name="valeur5"></td>
      <td><input type="submit" class="form-control" value="Soumettre"></td>
      </form>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>sous total 4 :</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>plomberie</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">6</th>
       <form method="POST" action="traitement/devis5.php">
      <td><input type="text" name="valeur1"></td>
      <td><input type="text" name="valeur2"></td>
      <td><input type="text" name="valeur3"></td>
      <td><input type="text" name="valeur4"></td>
      <td><input type="text" name="valeur5"></td>
      <td><input type="submit" class="form-control" value="Soumettre"></td>
      </form>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>sous total 5 :</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>revertement durs</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">7</th>
    <form method="POST" action="traitement/devis6.php">
      <td><input type="text" name="valeur1"></td>
      <td><input type="text" name="valeur2"></td>
      <td><input type="text" name="valeur3"></td>
      <td><input type="text" name="valeur4"></td>
      <td><input type="text" name="valeur5"></td>
      <td><input type="submit" class="form-control" value="Soumettre"></td>
      </form>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>sous total 6 :</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>Electricite</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">8</th>
     <form method="POST" action="traitement/devis7.php">
      <td><input type="text" name="valeur1"></td>
      <td><input type="text" name="valeur2"></td>
      <td><input type="text" name="valeur3"></td>
      <td><input type="text" name="valeur4"></td>
      <td><input type="text" name="valeur5"></td>
      <td><input type="submit" class="form-control" value="Soumettre"></td>
      </form>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>sous total 7 :</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>Peinture</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <form method="POST" action="traitement/devis8.php">
      <td><input type="text" name="valeur1"></td>
      <td><input type="text" name="valeur2"></td>
      <td><input type="text" name="valeur3"></td>
      <td><input type="text" name="valeur4"></td>
      <td><input type="text" name="valeur5"></td>
      <td><input type="submit" class="form-control" value="Soumettre"></td>
      </form>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>sous total 7 :</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>



       

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="query.js"></script>
  <script type="text/javascript">// Animations init
  new WOW().init();$('.carousel-3d-basic').mdbCarousel3d();</script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
<?php }
else{

header('location:index.php');

}


 ?>