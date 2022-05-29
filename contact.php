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
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/loginModal.css">
</head>
<body>
   <?php include_once "includes/header.php" ?>
   
   <div id="contact">
      <div id="banner">
          <img src="images/contact1.jpg" alt="Contact Image">
          <div id="text"><p>Contacter nous</p></div>
      </div>
      <div id="content" class="row">
          <div class="col-lg-6" id="left">
              <h1>Trouve <span id="blueColor">Nous</span></h1>
              <hr>
              <p>vous pouvez nous contacter utilisant</p>
              <div class="row">
                  <div class="col-lg-6">
                      <div><i class="fa fa-phone"></i>&nbsp;+2126 8231 8296</div>
                      <div><i class="fa fa-envelope"></i>fpo@gmail.com</div>
                      <div><i class="fa fa-history"></i>&nbsp;9:00  – 18:00 GMT</div>
                  </div>
                  <div class="col-lg-6">
                      <div><i class="fa fa-print"></i>+2127 6610 2519</div>
                      <div><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;&nbsp; hayy mohammadey </div>
                      <div><i class="fa fa-briefcase"></i>FPO, ouarzazat <span style="margin-left:75px;"></span></div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6" id="right">
              <h1>Recevoir <span id="blueColor">Un appel</span></h1>
              <hr>
              <form action="#" method="post">
                  <input type="text" placeholder="Nom"><br>
                  <input type="email" placeholder="Email "><br>
                  <input type="number" placeholder="Numéro de téléphone"><br>
                  <textarea cols="66" rows="7" placeholder="votre message"></textarea>
                  <button type="submit">Envoyer</button>
              </form>
          </div>
      </div>
   </div>
   
   <?php include_once "includes/footer.php" ?>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/script.js"></script>
</body>
</html>