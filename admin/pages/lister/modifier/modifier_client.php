
<?php 
  include("../../connexion_PDO.php"); ?>

<?php 

 @$nom=$_POST["nom"];
 @$cin=$_POST["cin"];
 @$ntele=$_POST["ntele"];
 @$nom_de_magazine=$_POST["nom_de_magazine"];
 @$nfix=$_POST["nfix"];
 @$valider=$_POST["valider"];
$v=$_GET["id"];
?>
<?php 
        
 $req1="UPDATE client SET nom_prenom=\"$nom\",cin=\"$cin\",N_télé=\"$ntele\",N_fix=\"$nfix\",nom_de_magazine=\"$nom_de_magazine\" WHERE id_client =\"$v\"";
if (isset($valider)){

   $conn->exec($req1);
   header("location:../lister_client.php");
 }
 


$req2="SELECT * FROM client WHERE id_client =\"$v\"";


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

     <!-------------form ------------------------------------->
<form class="needs-validation" action="" method="post" style="margin-left: 15%" novalidate>
  <?php 
         $reponse=$conn->query($req2);
         while($user=$reponse->fetch()){
    
         ?>
  <fieldset>
  <h3>Espace de Client :</h3> <br>
  <div class="form-row" >
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Nom et prenom de client :</label>
      <input type="text" value=" <?php echo $user[1]; ?> " name="nom" class="form-control" placeholder="Nom  ?" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">CIN de client :</label>
      <input type="text" name="cin" value=" <?php echo $user[2]; ?> "  class="form-control" placeholder="Cin ?" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">N-télé de client :</label>
      <input type="text" value=" <?php echo $user[3]; ?> " class="form-control" placeholder="N-télé ?" name="ntele" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip05">Fix de client :</label>
      <input type="text" value=" <?php echo $user[4]; ?> " name="nfix" class="form-control" placeholder="Fix ?" required>
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip05">Nom de magazine :</label>
      <input type="text" value=" <?php echo $user[5]; ?> " class="form-control" name="nom_de_magazine" 
       placeholder="Nom de magazine ?" required>
    </div>
    <input  class="btn btn-primary" name="valider" type="submit" value="Ajoute">
  </div>
  </fieldset>
<?php } ?>
</form>
        <!--===== MAIN JS =====-->
        <script src="../../assets/js/main.js"></script>
    </body>
</html>