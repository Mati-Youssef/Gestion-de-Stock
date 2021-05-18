<div id="topbar">
    <i id="trending">TRENDING:</i>
    <div style="float:right">
       <a href="#"><i class="fa fa-facebook"></i></a>
       <a href="#"><i class="fa fa-twitter"></i></a>
       <a href="#"><i class="fa fa-google-plus"></i></a>
       <a href="#"><i class="fa fa-instagram"></i></a>
        <form class="form-inline">
          <input type="search" placeholder="Search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>


<div id="header">
   <nav id="nav-bar" class="navbar navbar-expand-md ">
      <a class="navbar-header" href="#"><img src="images/viator.jpg"></a>
      <button class="navbar-toggler navbar-header" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span style="font-size:22px"><i class="fa fa-bars"></i></span></button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div id="search">
           <a href="#"><i class="fa fa-facebook"></i></a>
           <a href="#"><i class="fa fa-twitter"></i></a>
           <a href="#"><i class="fa fa-google-plus"></i></a>
           <a href="#"><i class="fa fa-instagram"></i></a>
            <form class="form-inline">
              <input type="search" placeholder="Search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
         <ul style="clear:both" class="navbar-nav mr-auto" id="nav-menu">
          <li class="nav-item"> <a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"> <a class="nav-link" href="blog.php">Blog</a></li>
          <li class="nav-item"> <a class="nav-link" href="products.php">Products</a></li>
          <li class="nav-item"> <a class="nav-link" href="about.php"> About</a></li>
          <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
        <?php
          if(isset($_SESSION['user_name'])){
            ?>
            <ul class="navbar-nav" id="forms">
                <li class="nav-item" id="login"><a onclick="document.getElementById('id01').style.display='block'" class="nav-link" href="#">Login</a></li>
                <li class="nav-item" id="signup"><a onclick="document.getElementById('signup').style.display='block'" class="nav-link" href="#">Sign Up</a></li>
            </ul>
            <?php
            }else{
              ?>
            <ul class="navbar-nav" id="forms">
                <li class="nav-item" id="logout"><a href="includes/logout.php">Logout</a></li>
            </ul>
            <?php
            }
          ?>
        
      </div>
    </nav>
</div>

<?php include_once "login.php" ?>
<?php include_once "signup.php" ?>



