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
  <title>plan</title>
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
    img{
      width: 100%;
      margin-top: 40px;
    }
    h2{
      text-transform: uppercase;
      font-weight: bold;
      font-size:20px;
      text-align: center;
      margin-top: 5px;
      border:1px solid black; 
    }
  </style>
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
                    <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>PLAN DE VOS MAISON</strong></h1>
                    <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                    <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>CHOISIR & MAINTENANT</strong></h5>
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
      
      
<div class="col-lg-10 offset-1">
  <div class="row">
    <div class="col-md-4">
      <a href="client.php#projet"><img src="image/plan.jpg"></a>
      <h2>villa basse toiture et charpente</h2>
    </div>
     <div class="col-md-4">
       <a href="client.php#projet"><img src="image/plan1.jpg"></a>
         <h2>villa basse toiture</h2>
    </div>
     <div class="col-md-4">
       <a href="client.php#projet"><img src="image/plan2.jpg"></a>
        <h2>batiment R+1</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <a href="client.php#projet"><img src="image/plan3.jpg"></a>
       <h2>villa basse</h2>
    </div>
     <div class="col-md-4">
       <a href="client.php#projet"><img src="image/plan4.jpg"></a>
         <h2>villa toiture en duie</h2>
    </div>
  </div>
</div>



       
  <script src="aos-master/dist/aos.js"></script>
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