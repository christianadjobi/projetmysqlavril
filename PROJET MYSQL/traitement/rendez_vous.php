<?php 

$bdd= new PDO ('mysql:host=localhost;dbname=gestionclientbat','root','');

$membre = $bdd->prepare('SELECT * FROM nonclient WHERE id_nonClient =:num');
$membre->bindValue(':num',$_GET['numValide']);
$executeisOk = $membre->execute();
$m = $membre->fetch();


?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>liste client non isncrit</title>
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
      

  <div class="edge-header deep-purple"></div>

<!-- Main Container -->
<div class="container free-bird">
  <div class="row">
    <div class="col-md-8 col-lg-7 mx-auto float-none white z-depth-1 py-2 px-2">

      <!--Naked Form-->
      <div class="card-body">
        <h2 class="h2-responsive"><strong>Material Design Edge Headers</strong></h2>
        <p class="pb-4">Prendre un rendez vous</p>

        <!--Body-->
        <form method="POST" action="edit.php">
<input type="text" name="numValide" value="<?= $m['id_nonClient']?>">  

          <div class="md-form">
            <input type="text" id="jour" name="jourB" class="form-control">
            <label for="jour">Jour</label>
          </div>
             

          <div class="text-xs-left">
            <button class="btn btn-primary">Submit</button>
          </div>
        </form>

        <div class="my-2">
          <p style="font-weight:300;font-size:0.75rem">Never submit your passwords here</p>
        </div>

      </div>
      <!--Naked Form-->

    </div>
  </div>
</div>


   

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