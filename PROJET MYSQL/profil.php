<?php 
session_start();
 if ($_SESSION['id']) {
   ?>
 


<?php 

require'traitement/database.php';



if ($_GET) {

  $id=$_GET['id'];

$aff=$bdd->prepare('SELECT * FROM user WHERE id=?');
$aff->execute(array($id));
$affiche=$aff->fetch();

}

 ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>PROFIL Constru Bat</title>
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
    
    h1{
      color:black;
      font-weight: bold;
      font-size:20px; 
    }
    span{
      color: white;
    }
  </style>
    </head>
    
    <body>


           <header>
          <!--Navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
              <a class="navbar-brand" href="#"><strong>Mon profil</strong></a>
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
                  <li><a  href="traitement/deconnection.php" class="lien">deconnexion</a></li>
                  </div>
                
              </div>
            </div>
          </nav>
         <!-- Navbar -->
          <!-- Full Page Intro -->
          <div class="view" style="background-image: url('image/banne.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light align-items-center">
              <!-- Content -->
              <div class="container">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-12 mb-4 white-text " style="margin-top: 200px;">
                    
                 <div>
          <?php 

            $voir=$bdd->query('SELECT * FROM user ORDER BY nom');
            $m=$voir->fetch();

           ?>
          

                   <h1>nom : <span><?php echo $m['nom'];?></span></h1>
                    <br>
                    <form>
                      
                      <div class="form-group">
                        <h1>prenom:<span><?php echo $m['prenom'];?></span></h1>
                      </div>
                      <div class="form-group">
                        <h1>email:<span><?php echo $m['email'];?></span></h1>
                      </div>
                      <div class="form-group">
                        <label></label>
                      </div>
                    </form>
                    <br>
                    <div class="form-actions">
                      <a class="btn btn-primary" href="modifier.php?id=<?= $m['id']?>"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>
                    </div>
                          
                  
                       <?php  ?>
                       </div>  
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
                </div> 
                <div class="col-sm-6 site">
                    <div class="thumbnail">
                    </div>
                </div>
            </div>
        </div>   
    </body>
</html>
<?php }
else{


}


 ?>
