<?php 
  include("../../connexion_PDO.php"); ?>

<?php 
 @$id_de_categourie=$_POST["id_de_categourie"];
 @$Nom_de_preduit=$_POST["Nom_de_preduit"];
 @$date_d_entrer=$_POST["date_d_entrer"];
 @$date_d_expiration=$_POST["date_d_expiration"];
 @$Prix=$_POST["Prix"];
 @$quantité=$_POST["quantité"];
 @$valider=$_POST["valider"];

$v=$_GET["id"];
?>
<?php  
 $req1="UPDATE entrer SET id_de_categourie=\"$id_de_categourie\",nom_de_preduit=\"$Nom_de_preduit\",date_d_entrer=\"$date_d_entrer\",date_d_experation=\"$date_d_expiration\",quantité=\"$quantité\" ,prix=\"$Prix\" WHERE id_de_preduit =\"$v\"";
if (isset($valider)){

   $conn->exec($req1);
   header("location:../lister_entrer.php");
 }
 


$req2="SELECT * FROM entrer WHERE id_de_preduit =\"$v\"";


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
<link rel="stylesheet" href="../../assets/css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


   
	<title>Entrer</title>
</head>
<body id="body-pd" style="background-color: #cccccc">
<?php include('../../../include/head.php'); ?>

<div class="form" style="margin: 100px auto ; width: 84%; ">

     <form method="post" action="">
    <?php 
         $reponse=$conn->query($req2);
         while($user=$reponse->fetch()){
    
         ?>
      <table><tr> <td><h1>les Entrer :</h1></td></tr></table>
 

 <div class="form-row" >
         <div class="col-md-4 mb-3">
                    <label for="validationServer01">ID de categourie</label>
                    <input type="text" name="id_de_categourie" class="form-control" value=" <?php echo $user[1]; ?> " id="validationServer01" placeholder="ID de categourie" value="" required>
      
         </div>

         <div class="col-md-4 mb-3">
              <label for="validationServer01">Nom de preduit</label>
              <input type="text" name="Nom_de_preduit" class="form-control" value=" <?php echo $user[2]; ?> " id="validationServer01" placeholder="Nom de preduit" value="" required>
      
         </div>
         <div class="col-md-4 mb-3">
                          <label for="validationServer03">quantité</label>
                          <input type="text" value=" <?php echo $user[5]; ?> " class="form-control" name="quantité"  placeholder="quantité"   required>
         </div>
   </div> 
   <div class="form-row">     
             
                   <div class="col-md-4 mb-3">
                        <label for="validationServer02">data d'entrer</label>   
                        <input type="date" name="date_d_entrer" class="form-control" value=" <?php echo $user[3]; ?> "  placeholder="data d'entrer"  required>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                         <label for="validationServerUsername">date d'expiration</label>
                         <input type="date" value=" <?php echo $user[4]; ?> "  name="date_d_expiration" class="form-control"  placeholder="date d'expiration" aria-describedby="inputGroupPrepend3" required>
       
                    </div>
                    <div class="col-md-4 mb-3">
                         <label for="validationServer04">Prix</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroupPrepend3">DH</span>
                              </div>
                            <input value=" <?php echo $user[6]; ?> " type="text" name="Prix" class="form-control" id="validationServer04" placeholder="Prix" required>
           
                          </div>
                   </div>
                     
         
 
                   
      </div>
  <div class="form-row"> 
                   

  
            <div class="col-md-4 mb-3"><br>
                  <input class="btn btn-primary" name="valider" type="submit" value="Enregistrer">
 </div> </div>
 <?php  } ?>   
</form>

</div>

<!--===== MAIN JS =====-->
        <script src="../../assets/js/main.js"></script>
    </body>
<!--------form categore------------>

</html>