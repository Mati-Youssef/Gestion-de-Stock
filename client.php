<!DOCTYPE html>
<html long="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
	<title>client</title>
</head>
<body>
  <!--
	<form>
  <fieldset >
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">ID de client:</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Entrez votre ID ..." required>
</div>
<div class="col-md-4 mb-3">
<label for="validationCustom05">Nom de client:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Entrez votre Nom ..." required>
</div>
      
<div class="col-md-4 mb-3">
      <label for="validationCustom05">CIN de client:</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Entrez votre  CIN ..." required>
      </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-4 mb-3">
      
      <label for="validationCustom05">Numéro de téléphone de client:</label>
      <input type="number" class="form-control" id="validationCustom05" placeholder="Entrez votre  Numéro de téléphone ..." required>
    </div>

</div>

<div class="form-row">

    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Fix de client:</label>
      <input type="number" class="form-control" id="validationCustom05" placeholder="Entrez votre  Fix-Numéro  ..." required>
      <label for="validationCustom05">Nom de magazine:</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Entrez le Nom de magazine  ..." required>
      <button type="submit" class="btn btn-primary">Submit</button>
      <div class="invalid-feedback">
      </div>
    </div>

</div>
-->
<form class="needs-validation" novalidate>
  <fieldset>
  <h3>Espace de Routeur :</h3> <br>
  <div class="form-row">
    <div class="col-md-4 mb-3">
    <label for="validationCustom05">ID de client:</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Entrez votre ID ..." required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationCustom05">Nom de client:</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Entrez votre Nom ..." required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationCustom05">CIN de client:</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Entrez votre  CIN ..." required>
        <div class="invalid-tooltip">
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
    <label for="validationCustom05">N-télé de client:</label>
      <input type="number" class="form-control" id="validationCustom05" placeholder="Entrez votre  Numéro de téléphone ..." required>
    </div>
    <button class="btn btn-primary" type="submit">Ajoute</button>
  </div>
  

   
  </fieldset>
</form>


</body>
</html>