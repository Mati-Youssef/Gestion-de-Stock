<?php session_start();
   include_once "../admin/pages/connexion_PDO.php";
@$email_Admin=$_POST["email"];
@$password_Admin=$_POST["pass"];
@$valider=$_POST["submit"];
  $erreur="";
  $req="SELECT email,passwd FROM utilisateur";
  $req1="SELECT Email,password FROM client";
  $reponse=$conn->query($req);
  $reponse1=$conn->query($req1);
 if (isset($valider)) {
    # code...
 
 while ($admins=$reponse->fetch()) {

      if ($email_Admin==$admins['email'] && $password_Admin==$admins['passwd']) {
        $_SESSION["exist_admin"]="oui";
                header("location:../admin/pages/index.php");
      }
      else{
        $erreur='<h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg> mot de passe ou email incorrect vullez réssayez! </h4>';
      }
  }
  while ($admins=$reponse1->fetch()) {

      if ($email_Admin==$admins['Email'] && password_verify($password_Admin, $admins['password'])) {
        
        $req2="SELECT * FROM `client` WHERE `Email`='$email_Admin'";
          $reponse2=$conn->query($req2);
          while ($admins=$reponse2->fetch()) {
     
        $_SESSION["id_client"]=$admins['id_client'];
        $_SESSION["Email"]=$admins['Email'];
        $_SESSION["nom_prenom"]=$admins['nom_prenom'];
        $_SESSION["cin"]=$admins['cin'];
        $_SESSION["N_télé"]=$admins['N_télé'];

      }
                header("location:/FPO-fifel/index.php");}
      else{
        $erreur='<h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg> mot de passe ou email incorrect vullez réssayez! </h4>';
      }
  }

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pfo-fifel</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/newarrivals.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
</head>
<body style="background: url('../images/jjj.png'); background-size: cover ">
   <div id="topbar">
    <div style="float:right" style="color: white;">
       <a href="login.php" style="color:white;">Connexion</a>
       
       
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








 
<!-- ###########################################################"" -->
 <div style="width: 60%; height: 400px; margin:50px auto; background-color: #2286; border-radius: 60px "> <form action="" method="post" >

  <div class="form-group row">
    <h2 style="margin: auto auto auto 200px;" >Connexion</h2>
    <div class="col-sm-7">
      <input style="margin-top:130px; margin-left: -185px "  type="email" name="email" class="form-control" id="staticEmail" placeholder="email@example.com">
    </div><br>
  </div>
  <div class="form-group row">
   
    <div class="col-sm-7">
      <input type="password" style="margin-left: 170px; margin-top: 30px" class="form-control" name="pass" id="inputPassword" placeholder="mot de passe">
    </div><br>
    
    <div><input type="submit" name="submit" style="width: 345px; margin-top: 30px ;margin-left:240px" class="btn btn-primary" value="connexion"></div>
  </div>
  <div><span style="color:white; margin-top: 70px; margin-left: 170px"><?php echo"$erreur"; ?></span></div>
   <a href="signup.php"><h4  style="margin-left: 28%;width: 100px;border-radius: 30px; text-align: center; background-color: linen; color: blue">s'inscrire</h4></a>
</form>
 </div>

    <script src="../js/bootstrap.min.js"></script> 
    <script src="../js/jquery-3.3.1.min.js"></script> 
    <script src="../js/script.js"></script>


</body>
</html>