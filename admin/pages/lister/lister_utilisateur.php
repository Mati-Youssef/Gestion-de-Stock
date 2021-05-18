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
<body id="body-pd">
        <?php include('../../include/head.php'); ?>
<?php 

        include("../connexion_PDO.php");
   $req="SELECT * FROM utilisateur";

   $reponse=$conn->query($req);
   
    ?>
   
    <table class="content-table" >
   
    <?php 
    
    echo "<tr><th>id_user</th><th>nom_prenom</th><th>cin</th><th>mot de passe </th><th>email</th><th>Numéro de téléphone</th></tr>";
    
   
     while ($user=$reponse->fetch()) {
  

	 echo "<tr>";
     echo "<td>";
	 echo $user['id_user']."</td><td>".$user['nom_prenom']."</td><td>".$user['cin']."</td><td>".$user['passwd']."</td><td>".$user['email']."</td><td>".$user['N_télé']."</td>";
	  ?>
	   <td><button class="btn btn-outline-danger" onclick="confirmer(<?php echo $user[0] ?>)">supprimer</button></td>
	  	<?php
     echo "<td><a  href='modifier/modifier_utilisateur.php?id=$user[0]'><button class=\"btn btn-outline-success\">modifier</button></a></td></tr>";
 }?>
 <script type="text/javascript">
  	
function confirmer(v){
    var res = confirm("Êtes-vous sûr de vouloir supprimer?");
   
    if(res){
        
        window.location.href="supprimer/supprimer_utilisateur.php?id="+v+'';

}
}


  </script>
 <!--===== MAIN JS =====-->
        <script src="../assets/js/main.js"></script>


  
</body>
</html>