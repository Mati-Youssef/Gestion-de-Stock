<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fpo-fifel</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/loginModal.css">
</head>
<body>
   <?php include_once "includes/header.php" ?>
   
   <div id="about">
       <div id="banner">
          <img src="images/about.jpg" alt="About Image">
          <div id="text">
              <p id="heading">A propos de nous</p>
              <hr>
              <p>Si vous souhhaitez en savoir plus sur nous,vous êtes au bon endroit. lire pour aprendre comment nous  avons réussi à développer notre entreprise si vite .</p>
          </div>
      </div>
      <div id="media" class="row">
          <div class="col-md-3">
              <i class="fa fa-facebook"></i>
              <h4>Facebook</h4>
              <p>page facebook permet de partage nos produits a vendre .</p>
          </div>
          <div class="col-md-3">
              <i class="fa fa-twitter"></i>
              <h4>Twitter</h4>
              <p>Sur cette plateforme y a des informations pour notre societé. </p>
          </div>
          <div class="col-md-3">
              <i class="fa fa-youtube"></i>
              <h4>Youtube</h4>
              <p>des vidéos pour comment gérer notre stock .</p>
          </div>
      </div>
      <div id="story" style="background-image: url('images/videoBackground.jpg'); height: 280px; ">
          <div id="storyText">
              <h1 style="color: white">notre statut</h1>
              <i class="fa fa-heart"></i>
              <div class="row">
                  <div style="text-align:left" class="col-md-6"><p>cette platforme permet de publier les produits disponible pour les utilisateurs </p></div>
                  <div style="text-align:right" class="col-md-6"><p>tout utilisateur permet de demander un produit, par remplir un formulaire complitement </p></div>
              </div>
          </div>
          
           
      </div>
   </div>
   
   <?php include_once "includes/footer.php" ?>
   
   
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/script.js"></script>
</body>
</html>