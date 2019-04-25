<?php 

$bdd= new PDO ('mysql:host=localhost;dbname=gestionclientbat','root','');

$membre = $bdd->query('SELECT * FROM nonclient ORDER BY id_nonClient');
if (isset($_GET['confirm']) AND !empty($_GET['confirm'])) {
	$confirm = (int) $_GET['confirm'];

	$req=$bdd->prepare('UPDATE nonclient SET confirm = 1 WHERE id_nonClient = ?');
	$req->execute(array($confirm));
}


if (isset($_GET['annuler']) AND !empty($_GET['annuler'])) {
	$supprimer = (int) $_GET['annuler'];

	$req=$bdd->prepare(' DELETE  FROM nonclient WHERE id_nonClient = ?');
	$req->execute(array($annuler));
}
$membre = $bdd->query('SELECT * FROM nonclient ORDER BY id_nonClient');



if (isset($_GET['supprimer']) AND !empty($_GET['supprimer'])) {
  $supprimer = (int) $_GET['supprimer'];

  $req=$bdd->prepare(' DELETE  FROM nonclient WHERE id_nonClient = ?');
  $req->execute(array($supprimer));
}
$membre = $bdd->query('SELECT * FROM nonclient ORDER BY id_nonClient');

?>
<!DOCTYPE html>
<html>
<head>
	 <title>Systeme administration</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css">
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="admin/css/bootstrap.css">
     <script src="admin/css/bootstrap.js"></script> 
     <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" type="text/css" href="css/aliment.css">
</head>
<body >

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
          <div class="view" style="background-color:#96b7ba; background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light align-items-center">
              <!-- Content -->
              <div class="container">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-12 mb-4 white-text text-center" style="margin-top: 200px;">
                    <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>Systeme d'administration</strong></h1>
                    <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                    <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>DG & INGENIEUR</strong></h5>
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
      <th scope="col">Numero</th>
      <th scope="col">Projet</th>
      <th scope="col">Message</th>
      <th scope="col">Valide</th>
       <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <?php while($m=$membre->fetch()) { ?>
    <tr>
      <th scope="row">1</th>
      <td> <?= $m['id_nonClient']?></td>
      <td> <?= $m['nom']?></td>
      <td> <?= $m['prenom']?></td>
      <td><?= $m['email']?> </td>
      <td> <?= $m['numero']?></td>
      <td> <?= $m['projet']?></td>
      <td> <?= $m['message']?></td>
      <td> <?= $m['confirm']?></td>
       <td><a class="btn btn-primary" href="listConfirm.php?confirm=<?= $m['id_nonClient']?>">confirmation</a> </td>
      <td> <a   class="btn btn-danger" href="listConfirm.php?annuler=<?= $m['id_nonClient']?>">annulation</a> </td>
      <td><a class="btn btn-dark" href="listConfirm.php?supprimer=<?= $m['id_nonClient']?>">suppression</a> </td>
      annulation</a> </td>
      <td><a class="btn btn-warning" href="mailto:<?php echo $m['email'] ?>"">reponse</a> </td>
    </tr>
   
  <?php } ?>

  </tbody>
</table>
</body>

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





 