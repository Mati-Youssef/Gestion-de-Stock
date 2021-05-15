<?php 
  include("connexion_PDO.php"); ?>

<?php 
 @$dreteur=$_POST["dreteur"];
 @$idclient=$_POST["idclient"];
 @$idproduit=$_POST["idproduit"];
 @$quantité=$_POST["quantité"];
 //@$idreteur=$_POST["idreteur"];
 @$valider=$_POST["valider"];

if (isset($valider)) {
    
    $req="INSERT INTO reteur(date_reteur,id_client,id_produit,quantité) VALUES(?,?,?,?)";
    $insert=$conn->prepare($req); 
    $insert->execute(array($dreteur,$idclient,$idproduit,$quantité));
    $conn=NULL;
 
}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
  <!-- ===== BOX ICONS ===== -->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

<!-- ===== CSS ===== -->
<link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
  *{
  margin: 0%;
  padding: 0%;
}
form{
  width: 60%;
  height: 190px;
  position:absolute;
  margin-top: 200px;
  margin-left: 360px;
}
body{
  background-image: url('');
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.btn{
  width: 150px;
  height: 35px;
  margin-top: 32px;
  margin-left: 5px;
}
  </style>
  
  <title>Routeurs</title>
</head>
<body id="body-pd">
       <?php include('../include/head.php'); ?>

<!--form ------------------------------------------------>
<form method="post" action="" class="needs-validation" style=" margin:180px 20%" novalidate>
  <fieldset>
  <h3>Espace de Routeur :</h3> <br>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Date de Routeur :</label>
      <input type="Date" class="form-control" name="dreteur" placeholder="Date de Routeur ?" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">ID Client  :</label>
      <input type="text" class="form-control" name="idclient" placeholder="Entre id .." value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">ID de Produit</label>
      <input type="text" class="form-control" name="idproduit" placeholder="Entre id.." value="" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip05">Quantité :</label>
      <input type="text" class="form-control" name="quantité" placeholder="quantité ?" required>
    </div>
    <input value="Ajoute" name="valider" class="btn btn-primary" type="submit">
  </div>
  </fieldset>
</form>
  <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
  
  
  
</body>
</html>