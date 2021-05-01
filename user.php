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
  width: 350px;
  height: 45px;
  margin-top: 28px;
  margin-left: 90px;
}
  </style>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>User</title>
</head>
<body>
<?php
?>
<!--form ------------------------------------------------>


<form class="needs-validation" novalidate>
  <fieldset>
  <h1>user :</h1> <br>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">ID de user :</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="ID  ?" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Nom de user :</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Nom ?" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    
    </div>
  </div>


  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip05">N-télé de user :</label>
      <input type="number" class="form-control" id="validationTooltip05" placeholder="N-télé ?" required>
            <div class="valid-tooltip">
                looks good!
              </div>
            </div>

               
      <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">CIN de user :</label>
      <input type="text" class="form-control" id="validationTooltipUsername" placeholder="CIN ?" value="" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
      
    </div>

<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Email :</label>
      <input type="Email" class="form-control" id="validationTooltip01" placeholder="Email  ?" value="" required>
      <div class="valid-tooltip">
        Looks good!
</div>
</div>
 <div class="col-md-4 mb-3">
      <label for="validationTooltip02">password :</label>
      <input type="password" class="form-control" id="validationTooltip02" placeholder="mot de passe ?" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    
    </div>
  </div>


    <button class="btn btn-primary" type="submit">Ajoute</button>
  </div>
  </fieldset>
</form>
  
  
  
</body>
</html>