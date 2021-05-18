<?php 
  include("../../connexion_PDO.php"); ?>

<?php 
 @$ncategorie=$_POST["ncategorie"];
 $v=$_GET["id"];
 @$valider=$_POST["valider"];


 $req1="UPDATE catégorie SET nom_catégorie=\"$ncategorie\" WHERE id_catégorie =\"$v\"";
if (isset($valider)){

   $conn->exec($req1);
   header("location:../lister_catégorie.php");
 }
 


$req2="SELECT * FROM catégorie WHERE id_catégorie =\"$v\"";


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
<body id="body-pd">
       <?php include('../../../include/head.php'); ?>

        <form method="post" action="" class="needs-validation cate" novalidate>
  <fieldset>
  <h1>Catégorie :</h1> <br>

<?php 
         $reponse=$conn->query($req2);
         while($user=$reponse->fetch()){
    
         ?>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip05">Nom de catégorie :</label>
      <input type="text" class="form-control" value="<?php  echo $user[0]?> " name="ncategorie" placeholder="Nom de catégorie ?" required>
    </div>
    <input value="Ajoute" name="valider" class="btn btn-primary" type="submit">
    
  </div>


<?php } ?>




   </fieldset>
</form>

 
        <!--===== MAIN JS =====-->
        <script src="../../assets/js/main.js"></script>
    </body>
<!--------form categore------------>

</html>