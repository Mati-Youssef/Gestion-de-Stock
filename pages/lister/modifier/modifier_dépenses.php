
<?php 
  include("../../connexion_PDO.php"); ?>

<?php 

 @$année=$_POST["année"];
 @$Mois=$_POST["Mois"];
 @$idproduit=$_POST["idproduit"];
 @$quantité=$_POST["quantité"];
 @$valider=$_POST["valider"];

$v=$_GET["id"];
?>
<?php 






        
 $req1="UPDATE dépenses  SET année=\"$année\",mois=\"$Mois\",id_produit=\"$idproduit\",quantité=\"$quantité\" WHERE id_dépenses =\"$v\"";
if (isset($valider)){

   $conn->exec($req1);
   header("location:../lister_dépenses.php");
 }
 


$req2="SELECT * FROM dépenses WHERE id_dépenses =\"$v\"";


  ?>
<!DOCTYPE html>
<html lang="en">
<head>

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
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <!-- ===== BOX ICONS ===== -->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

<!-- ===== CSS ===== -->
<link rel="stylesheet" href="../../assets/css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body id="body-pd">   

        
    
        <?php include('../../../include/head.php'); ?>

<!--form ------------------------------------------------>
<form method="post" action="" class="needs-validation" style=" margin:180px 20%" novalidate>
  <fieldset><?php 
         $reponse=$conn->query($req2);
         while($user=$reponse->fetch()){
    
         ?>
  <h3>Espace de dépenses</h3> <br>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">l'année :</label>
      <input type="text" value=" <?php echo $user[0]; ?> " class="form-control" name="année" placeholder="l'année ?" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Mois :</label>
      <input type="text" value=" <?php echo $user[1]; ?> " class="form-control" name="Mois" placeholder="Mois ?" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">ID de Produit</label>
      <input type="text" value=" <?php echo $user[2]; ?> " class="form-control" name="idproduit" placeholder="Entre id.." value="" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip05">Quantité :</label>
      <input type="text" value="  <?php echo $user[3]; ?> " class="form-control" name="quantité" placeholder="quantité ?" required>
    </div><?php } ?>
    <input id="va" value="Ajoute" name="valider" class="btn btn-primary" type="submit">
  </div>
  </fieldset>

</form>
<script src="../../assets/js/main.js"></script>
  </body>
</html>