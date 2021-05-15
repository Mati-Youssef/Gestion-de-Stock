<?php 

 include("connexion_PDO.php"); ?>

<?php 

 @$id_de_client=$_POST["id_de_client"];
 @$id_de_user=$_POST["id_de_user"];
 @$date_de_sortie=$_POST["date_de_sortie"];
 @$id_de_preduit=$_POST["id_de_preduit"];
 @$Prix=$_POST["Prix"];
 @$quantité=$_POST["quantité"];
 @$valider=$_POST["valider"];

if (isset($valider)) {
    
    $req="INSERT INTO sortie(id_de_preduit,id_de_user,id_de_client,Prix_de_sortie,quantité,date_de_sortie) VALUES(?,?,?,?,?,?)";
    $insert=$conn->prepare($req); 
    $insert->execute(array($id_de_preduit,$id_de_user,$id_de_client,$Prix,$quantité,$date_de_sortie));
    $conn=NULL;
 
} ?>




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
   <title>Sortie</title>
</head>
<body id="body-pd">
       <?php include('../include/head.php'); ?>
  


  <div class="form" style=" margin:100px 20%">


<form method="post" action="">
  <table><tr> <td><h1>les Sorties :</h1></td></tr></table>
  <div class="form-row">
    

     <div class="col-md-4 mb-3">

      <label for="validationServer01">ID de produit</label>
      <input type="text" name="id_de_preduit" class="form-control" id="validationServer01" placeholder="ID de produit" value="" required>
      
     </div>

    
     <div class="col-md-4 mb-3">
      <label for="validationServer01">ID de User</label>
      <input type="text" name="id_de_user" class="form-control" id="validationServer01" placeholder="ID de user" value="" required>
      
     </div>
     <div class="col-md-4 mb-3">
      
      <label for="validationServer03">quantité</label>
      <input type="number"  class="form-control" name="quantité"  id="validationServer03" placeholder="quantité"  required>
      
    </div>


   </div>
    

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">id de client</label>
      <input type="text" name="id_de_client" class="form-control" id="validationServer01" placeholder="Nom de preduit" value="" required>
      
    </div>

   
    <div class="col-md-4 mb-3">
      <label for="validationServer02">date de sortie</label>
           
      <input type="date" name="date_de_sortie" class="form-control" id="validationServer02" placeholder="date de sortie"  required>
     </div>
   
     <div class="col-md-4 mb-3">

     <label for="validationServer04">Prix de sortie</label>
      <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroupPrepend3">DH</span>
                              </div>
      <input type="number" name="Prix" class="form-control" id="validationServer04" placeholder="Prix" required> 
    </div>
   </div>
  </div>
  <div class="form-row">
   
       
      
  <div class="col-md-3 mb-3"><br>
    <input class="btn btn-primary" name="valider" type="submit" value="Enregistrer">
  </div>
</div>
</form>
</div>

<!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
<!--------form categore------------>

</html>