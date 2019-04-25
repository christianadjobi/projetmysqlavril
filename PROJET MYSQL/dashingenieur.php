<?php 
session_start();

if ($_SESSION['id']) {
 ?>
 
<?php 

require'traitement/database.php';

$donnee=$bdd->prepare('SELECT * FROM user WHERE id=?');
$donnee->execute(array($_SESSION['id']));
$affiche = $donnee->fetch();
 ?>


<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>admin</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="aos-master/dist/aos.css">
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
          <div class="view" style="background-image: url('image/banner.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light align-items-center">
              <!-- Content -->
              <div class="container">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-12 mb-4 white-text text-center" style="margin-top: 200px;">
                    <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>systeme admin ingenieur</strong></h1>
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
      
          

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">#</th>
      <th scope="col">#</th>
      <th scope="col">#</th>
       <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
       <?php 
     $voir=$bdd->query('SELECT*FROM user ORDER BY nom');
   while ($m=$voir->fetch()) {
       ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $m['nom'] ?></td>
      <td><?php echo $m['prenom'] ?></td>
      <td><?php echo $m['email'] ?></td>
      <td>  <a class="btn btn-primary" href="modifier.php?id=<?= $m['id']?>"><span class="glyphicon glyphicon-pencil"></span> Modifier</a></td>
      <td>
     <a class="btn btn-danger" href= "traitement/supprimer.php?id=<?= $m['id']?>"><span class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
     <td>
     <a class="btn btn-primary"  href="mailto:<?php echo $affiche['email'] ?>">envoie</a></td>
    </tr>

      <button onclick="window.print();"></button>
                         
       <?php } ?>
   
  </tbody>
</table>
	
</body>
</html>
<?php }
else{


}


 ?>