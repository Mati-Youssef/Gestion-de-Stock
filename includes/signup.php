<?php
    include_once "connection.php";
    $erreur="";
?>



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
   
</head>
<body style="background: url('../images/photo104.png'); background-size:cover;">
   <div id="topbar">
    <div style="float:right">
       <a href="login.php">Connexion</a>
       
       
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
    </nav>
</div>


<!--  ccccccccccccccccccccccccccccoooodeddddddddddddddddddd -->



 <div class="form-row" style="  height: 490px; width: 50%; margin: auto; border-radius: 33px;"> 
    <form action="" method="post">

  <fieldset>
  <h1 style="text-align:center;">S'inscrire :</h1> <br>
  <div class="form-row" style=" margin-left: 177px; height:350px; width:350px">
    <div class="col-sm-10">
      <label for="validationTooltip01">Nom et prenom de client :</label>
      <input type="text" name="user_name" class="form-control" placeholder="Nom et prenom  ?" required>
    </div>
    <div class="col-sm-10">
      <label for="validationTooltip02">CIN de client :</label>
      <input type="text" name="cin" class="form-control" placeholder="Cin ?" required>
    </div>
    <div class="col-sm-10">
      <label for="validationTooltipUsername">N-télé de client :</label>
      <input type="text" class="form-control" placeholder="N-télé ?" name="N_télé" required>
      </div>
    
  
  <div class="form-row">
    <div class="col-sm-10">
      <label for="validationTooltip05">Email de client :</label>
      <input  type="email" name="user_email" class="form-control" placeholder="Email de client ?" required>
      
    </div>
    <div class="col-sm-10">
      <label for="validationTooltip05">mot de passe:</label>
      <input type="password"  class="form-control" name="user_password" 
       placeholder="mot de passe ?" required>
    <br>
    <input style="margin-left:50px;" class="btn btn-primary" name="valider" type="submit" value="Ajoute">
  </div></div>
  </fieldset>
  <br><hr>
   <a href="login.php"><h4  style="margin-left: 28%; color: blue">déjà un compte</h4></a>
</div> </div></form>


<?php
    if(isset($_POST['valider'])){
        @$user_name=mysqli_real_escape_string($conn, $_POST['user_name']);
        @$user_email=mysqli_real_escape_string($conn, $_POST['user_email']);
        @$user_password=mysqli_real_escape_string($conn, $_POST['user_password']);
        @$cin=$_POST['cin'];
        @$N_télé=$_POST['N_télé'];    
        //check for empty fields
        if(empty($user_name) OR empty($user_email) OR empty($user_password)OR empty($cin)OR empty($N_télé)){
            echo '<div class="alert alert-danger" role="alert">remplir toutes les cases</div>';
            exit();
        }
        
        //checking for validity of email
        if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
            echo '<div class="alert alert-danger" role="alert">s\'il vous plait entrer  un vrai email</div>';
            exit();
        } else{
            //if email exists
            $sql = "SELECT * FROM `client` WHERE `Email`='$user_email'";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                echo '<br><div style="background-color:red; height:30px; width:50%; margin:auto; text-align:center;" role="alert"><h3>Email déjà Existe</h3></div>';
                exit();
            } else{
                //hashing password
                $hash = password_hash($user_password, PASSWORD_DEFAULT);
                //signing up the user

                $sql="INSERT INTO `client`(`nom_prenom`, `Email`, `password`,`cin`,`N_télé`) VALUES ('$user_name', '$user_email', '$hash', '$cin', '$N_télé')";
                if(mysqli_query($conn, $sql)){
                     echo '<Script>alert("bien enregistrer")</Script>';
                   
                } else{
                    echo '<Script>alert("echec de l\'enregestrement")</Script>';
                }
            }
        }
    }
?>


 <script src="../js/bootstrap.min.js"></script> 
    <script src="../js/jquery-3.3.1.min.js"></script> 
    <script src="../js/script.js"></script>


</body>
</html>
