<?php 

 include("connexion_PDO.php"); ?>

<?php 

 @$nom=$_POST["nom"];
 @$cin=$_POST["cin"];
 @$ntele=$_POST["ntele"];
 @$email=$_POST["email"];
 @$psswd=$_POST["psswd"];
 @$valider=$_POST["valider"];

if (isset($valider)) {
    
    $req="INSERT INTO utilisateur(nom_prenom,cin,N_télé,email,passwd) VALUES(?,?,?,?,?)";
    $insert=$conn->prepare($req); 
    $insert->execute(array($nom,$cin,$ntele,$email,$psswd));
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
  margin-top: 100px;
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
  height: 40px;
  margin-top: 30px;
  margin-left: 20px;
}
  </style>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>User</title>
</head>
<body>
<!----------------------------form ----------------------------------->


<form class="needs-validation" action="" method="post" novalidate>
  <fieldset>
  <h1>user :</h1> <br>
  <div class="form-row">
    
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Nom et prenom de l'utilisateur :</label>
      <input type="text" name="nom" class="form-control" id="validationTooltip02" placeholder="Nom ?" value="" required>
      
    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">CIN de l'utilisateur :</label>
      <input type="text" name="cin" class="form-control" id="validationTooltipUsername" placeholder="CIN ?" value="" required>
        
      </div>

  </div>


  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip05">N-télé de l'utilisateur :</label>
      <input type="number" name="ntele" class="form-control" id="validationTooltip05" placeholder="N-télé ?" required>
            
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Email :</label>
      <input type="Email" name="email" class="form-control" id="validationTooltip01" placeholder="Email  ?" value="" required>
     
    </div>          
  </div>

<div class="form-row">
    
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">mot de passe  :</label>
      <input type="password" name="psswd" class="form-control" id="validationTooltip02" placeholder="mot de passe ?" value="" required>
      
    </div>
    <div class="col-md-2 mb-3">
    <input type="submit" class="btn btn-primary" value="Ajouter" name="valider">
    </div>
</div>


    
  </div>
  </fieldset>
</form>
  
  
  
</body>
</html>