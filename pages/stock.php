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
  width: 90px;
  height: 45px;
  margin-top: 28px;
  margin-left: 90px;
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
<!--form ------------------------------------------------>
<form class="needs-validation" novalidate>
  <fieldset>
  <h3>Stock :</h3> <br>
  
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">ID de produit :</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="ID de produit ?" required>
      
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">la quantité :</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="la quantité ?" required>
    </div>
    <button class="btn btn-primary" type="submit">Ajoute</button>
  </div>
  </fieldset>
</form>
  
  
  
</body>
</html>