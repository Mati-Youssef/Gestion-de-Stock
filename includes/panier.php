<?php session_start(); 
if (!$_SESSION['id_client']) {
    // code...
  header("location:login.php");
}

 include"connection.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fpo-fifel</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/newarrivals.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
     <style type="text/css">
         td,th{
         border-bottom: 2px solid blue;
         padding: 5px 15px;
         border-left: darkslateblue;
         }
         #total{
            color: green;
            background-color: lightblue;
         }

     </style>
	<title>fpo-fifel</title>
</head>
<body style="background: url('../images/mainpic.png'); "> 
	<!--   ###############  header   #############-->

	  <div id="topbar">
    
       <?php if (!empty($_SESSION['nom_prenom'])) {
            // code...?>
       
<label style='color:white; margin-left: 60px;'><h4>   Mr : <?php echo $_SESSION['nom_prenom'];?>
        
    </h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg><a href='/FPO-fifel/includes/logout.php' style='color:white'>Deconnexion</a></label>
      <?php } 
       else{
        ?><div style="float:right"> <?php 
         echo '<a href="includes/login.php">Se connecter</a>';

       }
        ?> 
        <form action="../search.php" class="form-inline">
          <input name="s"  type="search" placeholder="Rechercher">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>


<div id="header" style="background-color:white;">
   <nav id="nav-bar" class="navbar navbar-expand-md ">
      <a class="navbar-header" href="/FPO-fifel/index.php"><img src="../images/fpo-fifel.png"></a>
      <button class="navbar-toggler navbar-header" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span style="font-size:22px"><i class="fa fa-bars"></i></span></button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div id="search">
           <a href="#"><i class="fa fa-facebook"></i></a>
           <a href="#"><i class="fa fa-twitter"></i></a>
           <a href="#"><i class="fa fa-google-plus"></i></a>
           <a href="#"><i class="fa fa-instagram"></i></a>
            <form action="../search.php" class="form-inline">
              <input name="s" type="search" placeholder="Search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
         <ul style="clear:both" class="navbar-nav mr-auto" id="nav-menu">
          <li class="nav-item"> <a class="nav-link" href="../index.php">Accueil</a></li>
          
          <li class="nav-item"> <a class="nav-link" href="../products.php">Produits</a></li>
          <li class="nav-item"> <a class="nav-link" href="../about.php"> à propos </a></li>
          <li class="nav-item"> <a class="nav-link" href="../contact.php">Contacter</a></li>
        </ul>        
      </div>   
         <div style="margin-right:0px;"><a href="/FPO-fifel/includes/panier.php" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  fill="currentColor" class="bi bi-cart4" viewBox="0 0 20 20">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg> panier</a></div>
    </nav>    
    </nav>
</div>




<hr>
<div style="margin-left: 10%;">
    <h1>liste des achats selectionner</h1><br>
<table style="">
    <tr><th>notes de produit</th><th>nom produit </th><th>prix de produit</th></tr>
<?php 
$idcl=$_SESSION['id_client'];
$req1="SELECT id_de_produit,id_panier FROM panier WHERE id_client=$idcl AND situation!='oui'";
$some=0;
 $result=mysqli_query($conn, $req1);
  while($row=mysqli_fetch_assoc($result)){
    $s=$row['id_de_produit'];
      
    $req2="SELECT * FROM `products` WHERE `product_id`=$s";
    $result2=mysqli_query($conn, $req2);
     while($usr=mysqli_fetch_assoc($result2)){
        ?>
    
        
         <?php 
     
         echo "<tr><td>".$usr['product_ratings']." </td><td>".$usr['product_name']."</td><td>".$usr['product_price']." DH</td>";
     if ($usr['product_price']!=0) {
         // code...
        @$some+=$usr['product_price'];
     } else { $some=0;}
     @$id_panier=$row['id_panier'];
        ?>
       <td><a href="R_panier.php?id=<?php echo $id_panier; }?>"><button  class="btn btn-outline-danger">retirer</button></a></td></tr>
       <?php }  ?>



<tr><td></td><td>TOTAL :</td><td id="total"> <?php echo $some; ?> DH</td></tr>
</table>

     


 <div style="margin-left:10%; margin-top:2%;">

<form action="" method="post"><button name="valider" class="btn btn-outline-success">valider</button>

<button class="btn" onclick="window.print()"  style="width: 50px;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>imprimer
</svg></button></form></div></div>


 <script src="../js/bootstrap.min.js"></script> 
    <script src="../js/jquery-3.3.1.min.js"></script> 
    <script src="../js/script.js"></script>


	<div style="margin-top: 15%"> <?php include'footer.php'; ?></div>
</body>
</html>
<?php 
if (isset($_POST['valider'])) {
    $quantité=$_POST['quantité'];
  $req3="UPDATE panier SET  situation='oui' , quantité=\"$quantité\" WHERE id_client=$idcl";
   $s=mysqli_query($conn, $req3);
   
    echo "<scripte> alert(\"commande valider\") </scripte>";
       // code...
    header("location:../panier.php");
   

   
    // code...
}
 ?>

