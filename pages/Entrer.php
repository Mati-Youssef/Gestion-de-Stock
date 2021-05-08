<?php 
  include("connexion_PDO.php"); ?>

<?php 
 @$id_de_categourie=$_POST["id_de_categourie"];
 @$Nom_de_preduit=$_POST["Nom_de_preduit"];
 @$date_d_entrer=$_POST["date_d_entrer"];
 @$date_d_expiration=$_POST["date_d_expiration"];
 @$Prix=$_POST["Prix"];
 @$quantité=$_POST["quantité"];
 @$valider=$_POST["valider"];

if (isset($valider)) {
    
    $req="INSERT INTO entrer(id_de_categourie,nom_de_preduit,date_d_entrer,date_d_experation,quantité,Prix) VALUES(?,?,?,?,?,?)";
    $insert=$conn->prepare($req); 
    $insert->execute(array($id_de_categourie,$Nom_de_preduit,$date_d_entrer,$date_d_expiration,$quantité,$Prix));
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
<link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
	<title>Entrer</title>
</head>
<body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="assets/img/perfil.jpg" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bx-layer nav__logo-icon'></i>
                        <span class="nav__logo-name">Gestion de stock</span>
                    </a>

                    <div class="nav__list">
                        <a href="#" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="/Gestion-de-Stock/pages/user.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Utilisateur</span>
                        </a>
                        
                        <a href="/Gestion-de-Stock/pages/Categoure.php" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">catégorie</span>
                        </a>

                        <a href="/Gestion-de-Stock/pages/entrer.php" class="nav__link">
                            <i class='bx bxl-foursquare nav__icon' ></i>
                            <span class="nav__name"> Entrer</span>
                        </a>

                        <a href="/Gestion-de-Stock/pages/sortie.php" class="nav__link">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__name">Sortie</span>
                        </a>

                        <a href="/Gestion-de-Stock/pages/CL.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">ajouter client</span>
                        </a>

                        <a href="/Gestion-de-Stock/pages/routeur.php" class="nav__link">
                            <i class='bx bx-upside-down nav__icon' ></i>
                            <span class="nav__name">ajouter Roteur</span>
                        </a>

                        <a href="/Gestion-de-Stock/pages/DEPONCE.php" class="nav__link">
                            <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                            <span class="nav__name">Deponce</span>
                        </a>

                    </div>
                </div>

                <a href="#" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
  

<div class="form" style="margin: 100px auto ; width: 84%; ">

     <form method="post" action="">
      <table><tr> <td><h1>les Entrer :</h1></td></tr></table>
 

 <div class="form-row">
         <div class="col-md-4 mb-3">
                    <label for="validationServer01">ID de categourie</label>
                    <input type="text" name="id_de_categourie" class="form-control" id="validationServer01" placeholder="ID de categourie" value="" required>
      
         </div>

         <div class="col-md-4 mb-3">
              <label for="validationServer01">Nom de preduit</label>
              <input type="text" name="Nom_de_preduit" class="form-control" id="validationServer01" placeholder="Nom de preduit" value="" required>
      
         </div>
         <div class="col-md-4 mb-3">
                          <label for="validationServer03">quantité</label>
                          <input type="number" class="form-control" name="quantité"  placeholder="quantité"   required>
         </div>
   </div> 
   <div class="form-row">     
             
                   <div class="col-md-4 mb-3">
                        <label for="validationServer02">data d'entrer</label>   
                        <input type="date" name="date_d_entrer" class="form-control"  placeholder="data d'entrer"  required>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                         <label for="validationServerUsername">date d'expiration</label>
                         <input type="date"  name="date_d_expiration" class="form-control"  placeholder="date d'expiration" aria-describedby="inputGroupPrepend3" required>
       
                    </div>
                    <div class="col-md-4 mb-3">
                         <label for="validationServer04">Prix</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroupPrepend3">DH</span>
                              </div>
                            <input type="text" name="Prix" class="form-control" id="validationServer04" placeholder="Prix" required>
           
                          </div>
                   </div>
                     
         
 
                   
      </div>
  <div class="form-row"> 
                   

  
            <div class="col-md-4 mb-3"><br>
                  <input class="btn btn-primary" name="valider" type="submit" value="Enregistrer">
 </div> </div> 
</form>

</div>

<!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
<!--------form categore------------>

</html>