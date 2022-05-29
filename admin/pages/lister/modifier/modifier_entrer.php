<?php 
  include("../../connexion_PDO.php"); ?>

<?php 
 @$id_de_categourie=$_POST["id_de_categourie"];
 @$Nom_de_preduit=$_POST["Nom_de_preduit"];
 @$date_d_entrer=$_POST["date_d_entrer"];
 @$product_summary=$_POST["product_summary"];
 @$Prix=$_POST["Prix"];
 @$quantité=$_POST["quantité"];
 @$titre_pro=$_POST["titre_pro"];
 @$note=$_POST["note"];
 $id=$_GET['id'];
 
 @$valider=$_POST["valider"];

if (isset($valider)) {

    //!!!!!!!!!!!!importance  d'image ************

    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    $fileExt=explode('.', $fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed=array('jpg','png','jpeg');
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError===0) {
            $fileNameNew=uniqid('',true).".".$fileActualExt;
            $fileDestination='../../../../images/'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);



            
        }else{ echo "you cannot uptoid  a image in thise type /1";}
        
    }else{ echo "you cannot uptoid  a image in thise type /2";}


//indertion des autres champs§§§§§§§§§§§§§§§§§

$fileNameNew="images/".$fileNameNew;


    $req="UPDATE products SET  product_name=$Nom_de_preduit,product_price=$Prix,product_details=$titre_pro,product_summary=$product_summary,product_ratings=$note,product_image=$fileNameNew,id_catégorie=$id_de_categourie,quantité=$quantité, date_entrer=$date_d_entrer WHERE product_id=$id";
      $conn->exec($req);
      header("location:../lister_entrer.php");
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
  <!-- ===== BOX ICONS ===== -->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

<!-- ===== CSS ===== -->
<link rel="stylesheet" href="../../assets/css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>gestion des produits</title>
</head>
<body id="body-pd" style="background-color: #cccccc">
<?php include('../../../include/head.php'); ?>

<div class="form" style="margin: 100px auto ; width: 84%; ">

     <form method="post" action="" enctype="multipart/form-data">
      <h1>les produits :</h1><hr>
 
<?php $req2="SELECT * FROM products WHERE product_id =\"$id\"";
      $reponse=$conn->query($req2);
         while($user=$reponse->fetch()){



 ?>
 <div class="form-row">
         <div class="col-md-4 mb-3">
                    <label for="validationServer01">ID de categourie</label>
                    <input type="text" name="id_de_categourie" class="form-control" id="validationServer01" placeholder="ID de categourie" value="<?php  echo $user[7]?> " required>
      
         </div>

         <div class="col-md-4 mb-3">
              <label for="validationServer01">Nom de preduit</label>
              <input type="text" name="Nom_de_preduit" class="form-control" id="validationServer01" placeholder="Nom de preduit" value="<?php  echo $user[1]?> " required>
      
         </div>
         <div class="col-md-4 mb-3">
                          <label for="validationServer03">quantité</label>
                          <input type="number" class="form-control" name="quantité"  placeholder="quantité"  value="<?php  echo $user[8]?> " required>
         </div>
   </div> 
   <div class="form-row">     
             
                   <div class="col-md-4 mb-3">
                        <label for="validationServer02">data d'entrer</label>   
                        <input type="date" name="date_d_entrer" class="form-control"  placeholder="data d'entrer" value="<?php  echo $user[9]?> "  required>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                         <label for="validationServerUsername">produit into</label>
                         <input type="text"  name="product_summary" class="form-control"  placeholder="introduction produits" value="<?php  echo $user[4]?> " aria-describedby="inputGroupPrepend3" required>
       
                    </div>
                    <div class="col-md-4 mb-3">
                         <label for="validationServer04">Prix de produit</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroupPrepend3">DH</span>
                              </div>
                            <input type="text" name="Prix" class="form-control" id="validationServer04" placeholder="Prix" value="<?php  echo $user[2]?> " required>
           
                          </div>
                   </div>
    <div class="form-row">
         <div class="col-md-4 mb-3" >
                    <label for="validationServer01">détail de produit</label>
                    <input type="text" name="titre_pro" class="form-control" id="validationServer01" placeholder="détail du produit" value="<?php  echo $user[3]?> " required>
      
         </div>

         <div class="col-md-4 mb-3" >
              <label for="validationServer01">Note sur 5</label>
              <input type="text" name="note" class="form-control" id="validationServer01" placeholder="Nom de preduit" value="<?php  echo $user[0]?> " required>
      
         </div>
         <div class="col-md-4 mb-3" >
                          <label for="validationServer03">image de produit</label>
                          <input type="file" class="form-control" name="file"  value=""     required>
         </div>
   </div>               
                     
         
 <?php } ?>
                   
      </div>
  <div class="form-row"> 
                   

  
            <div class="col-md-4 mb-3"><br>
                  <input class="btn btn-primary" name="valider" type="submit" value="Enregistrer">
 </div> </div>
 <a href="/FPO-fifel/admin/pages/lister/lister_entrer.php">Lister des produits</a> 
</form>

</div>

<!--===== MAIN JS =====-->
            <script src="../../assets/js/main.js"></script>
    </body>
<!--------form categore------------>

</html>