<?php session_start(); ?>
<div id="topbar" >
    
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
       
        <form action="search.php"  class="form-inline">
          <input name="s"  type="search" placeholder="Rechrcher">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>


<div id="header" style="background-color:white;">
   <nav id="nav-bar" class="navbar navbar-expand-md ">
      <a class="navbar-header" href="index.php"><img src="images/fpo-fifel.png"></a>
      <button class="navbar-toggler navbar-header" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span style="font-size:22px"><i class="fa fa-bars"></i></span></button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div id="search">
           <a href="#"><i class="fa fa-facebook"></i></a>
           <a href="#"><i class="fa fa-twitter"></i></a>
           <a href="#"><i class="fa fa-google-plus"></i></a>
           <a href="#"><i class="fa fa-instagram"></i></a>
            <form action="search.php" class="form-inline">
              <input name="s" type="search" placeholder="Search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
         <ul style="clear:both" class="navbar-nav mr-auto" id="nav-menu">
          <li class="nav-item"> <a class="nav-link" href="index.php">Accueil</a></li>    
          <li class="nav-item"> <a class="nav-link" href="products.php">Produits</a></li>
          <li class="nav-item"> <a class="nav-link" href="about.php"> à propos</a></li>
          <li class="nav-item"> <a class="nav-link" href="contact.php">Contacter</a></li>
         

        </ul>        
      </div>

      
       <div style="margin-right:50px;"><a href="/FPO-fifel/includes/panier.php" ><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"  fill="currentColor" class="bi bi-cart4" viewBox="0 0 20 20">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg> </a></div>
    </nav>
</div>



