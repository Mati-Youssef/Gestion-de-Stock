<?php 
  include("connexion_PDO.php"); ?>

<?php 
 @$ncategorie=$_POST["ncategorie"];
 
 @$valider=$_POST["valider"];

if (isset($valider)) {
    
    $req="INSERT INTO Catégorie(nom_catégorie) VALUES(?)";
    $insert=$conn->prepare($req); 
    $insert->execute(array($ncategorie));
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
  <title>Document</title>

</head>
<body>
<form method="post" action="" class="needs-validation cate" novalidate>
  <fieldset>
  <h1>Catégorie :</h1> <br>


  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip05">Nom de catégorie :</label>
      <input type="text" class="form-control" name="ncategorie" placeholder="Nom de catégorie ?" required>
    </div>
    <input value="Ajoute" name="valider" class="btn btn-primary" type="submit">
  </div>







   </fieldset>
</form>
 
</body>
</html>