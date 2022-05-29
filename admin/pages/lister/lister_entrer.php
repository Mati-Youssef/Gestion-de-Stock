<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- ===== BOX ICONS ===== -->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

<!-- ===== CSS ===== -->
<link rel="stylesheet" href="../assets/css/styles.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style type="text/css">td,tr{
	border-bottom: 1px solid mediumturquoise;
	font-family:  sans-serif; 
	size: 20;
}
.content-table thead tr{
	background-color: mediumturquoise;
	color: #FFFFFF;
	text-align: left;
	font-weight: bold;
	font-family:  sans-serif; 

}

.content-table th{
	padding: 12px 15px;
	background-color: mediumturquoise;
	color: white;
	font-family:  sans-serif; 

}
.content-table td {
	padding: 12px 15px;
}</style>

	<title></title>
</head>
<h1 style="border-bottom: 2px solid black; width: 25%">liste des produits :</h1><hr>
<body id="body-pd">
        <?php include('../../include/head.php'); ?>
        <?php 

        include("../connexion_PDO.php");
   $req="SELECT * FROM products";

   $reponse=$conn->query($req);
   
    ?>
   
    <table class="content-table" >
   
    <?php 
    



    echo "<tr><th>id de produit</th><th>nom de preduit</th><th>prix</th><th>description des produits</th><th>résumer à propos des produits</th><th>notation</th><th>quantité</th><th>dete d'entrer</th><th>photo</th></tr>";
    
   
     while ($user=$reponse->fetch()) {
  

	 echo "<tr>";
     echo "<td>";
	 echo $user['product_id']."</td><td>".$user['product_name']."</td><td>".$user['product_price']."</td><td>".$user['product_details']."</td><td>".$user['product_summary']."</td><td>".$user['product_ratings']."</td><td>".$user['quantité']."<td>".$user['date_entrer']."</td>";
	  ?>
    <td><img style="width: 50px;height: 50px;" src="../../../<?php echo $user['product_image']; ?>"></td>
	   <td><button class="btn btn-outline-danger" onclick="confirmer(<?php echo $user[0] ?>)">supprimer</button></td>
	  	<?php


 


     echo "<td><a  href='modifier/modifier_entrer.php?id=$user[0]'><button class=\"btn btn-outline-success\">modifier</button></a></td>";?>
      <td><a  href='../Entrer.php'><button class="btn btn-outline-primary">ajouter</button></a></td></tr>
      
      <?php }?>
<script type="text/javascript">
  	
function confirmer(v){
    var res = confirm("Êtes-vous sûr de vouloir supprimer?");
   
    if(res){
        
        window.location.href="supprimer/supprimer_entrer.php?id="+v+'';

}
}


  </script>

  
 

<!--===== MAIN JS =====-->
        <script src="../assets/js/main.js"></script>
</body>
</html>