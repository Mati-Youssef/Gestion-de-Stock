<?php 

 include("connexion_PDO.php"); ?>

<?php 

 @$nom=$_POST["nom"];
 @$cin=$_POST["cin"];
 @$ntele=$_POST["ntele"];
 @$nom_de_magazine=$_POST["nom_de_magazine"];
 @$nfix=$_POST["nfix"];
 @$valider=$_POST["valider"];

if (isset($valider)) {
    
    $req="INSERT INTO client(nom_prenom,cin,N_télé,N_fix,nom_de_magazine) VALUES(?,?,?,?,?)";
    $insert=$conn->prepare($req); 
    $insert->execute(array($nom,$cin,$ntele,$nfix,$nom_de_magazine));
    $conn=NULL;
 
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  width: 200px;
  height: 35px;
  margin-top: 33px;
  margin-left: 5px;
}
  </style>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>Routeurs</title>
</head>
<body>
<?php
?>
<!-------------form ------------------------------------->
<form class="needs-validation" action="" method="post" novalidate>
  <fieldset>
  <h3>Espace de Client :</h3> <br>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Nom et prenom de client :</label>
      <input type="text" name="nom" class="form-control" placeholder="Nom  ?" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">CIN de client :</label>
      <input type="text" name="cin" class="form-control" placeholder="Cin ?" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">N-télé de client :</label>
      <input type="text" class="form-control" placeholder="N-télé ?" name="ntele" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip05">Fix de client :</label>
      <input type="number" name="nfix" class="form-control" placeholder="Fix ?" required>
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip05">Nom de magazine :</label>
      <input type="text"  class="form-control" name="nom_de_magazine" 
       placeholder="Nom de magazine ?" required>
    </div>
    <input  class="btn btn-primary" name="valider" type="submit" value="Ajoute">
  </div>
  </fieldset>
</form>
  
  
  
</body>
</html>