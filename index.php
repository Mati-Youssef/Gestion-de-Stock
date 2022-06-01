<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fpo-fifel</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/newarrivals.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
   <?php  include_once "includes/header.php" ?>
   
   <div id="mainImage">
       <img id="mainImage" src="images/photo104.png" alt="Main Image">
       <div id="text" style="margin-left: 160px;">
           <p><h1 style="color:black;">FPO-FIFEL</h1>
           </p>
           <button style="padding: 5px 25px" ><a href="about.php" style="color:white;">A propos de nous</a></button>
           <button style="padding: 5px 15px"><a href="contact.php" style="color:white;">Contacter nous</a></button>
       </div>
   </div>
   <div class="row" id="facts">
       <div class="col-md-4">
           <i class="fa fa-car"></i>
           <h6>GRATUIT ACHAT </h6>
           <p> Vous pouvez toujours damander des produits disponible sur la page de produit </p>
       </div>
       <div class="col-md-4">
           <i class="fa fa-headphones"></i>
           <h6>24/7 CONTACT SUPPORT</h6>
           <p>nous essayons de repondre à toutes vos questions autant que possible.</p>
       </div>
       <div class="col-md-4">
           <i class="fa fa-fighter-jet"></i>
           <h6>LIVRAISON LE MÊME JOUR</h6>
           <p>vous recevrez votre commande le même jour. </p>
           
       </div>
       <?php include_once "includes/footer.php" ?>
       
   </div>
   
  
   
   <script>
    $(function() {
        $('#spectre').css('display', 'contents');
        $('#envy').css('display', 'none');  
        $('#eliteg3').css('display', 'none');
        $('#ebookg1').css('display', 'none');
        $('#zbook').css('display', 'none');
        $('#p1').on('click', function() {
            $('#spectre').css('display', 'contents');
            $('#envy').css('display', 'none');  
            $('#eliteg3').css('display', 'none');
            $('#ebookg1').css('display', 'none');
            $('#zbook').css('display', 'none');
            $('#spectre').classList.add("active");
            $('#envy').classList.remove("active");
            $('#eliteg3').classList.remove("active");
            $('#ebookg1').classList.remove("active");
            $('#zbook').classList.remove("active");
        });
        $('#p2').on('click', function() {
            $('#spectre').css('display', 'none');
            $('#envy').css('display', 'contents');  
            $('#eliteg3').css('display', 'none');
            $('#ebookg1').css('display', 'none');
            $('#zbook').css('display', 'none');
            $('#spectre').classList.remove("active");
            $('#envy').classList.add("active");
            $('#eliteg3').classList.remove("active");
            $('#ebookg1').classList.remove("active");
            $('#zbook').classList.remove("active");
        });
        $('#p4').on('click', function() {
            $('#spectre').css('display', 'none');
            $('#envy').css('display', 'none');  
            $('#eliteg3').css('display', 'contents');
            $('#ebookg1').css('display', 'none');
            $('#zbook').css('display', 'none');
            $('#spectre').classList.remove("active");
            $('#envy').classList.remove("active");
            $('#eliteg3').classList.add("active");
            $('#ebookg1').classList.remove("active");
            $('#zbook').classList.remove("active");
        });
        $('#p5').on('click', function() {
            $('#spectre').css('display', 'none');
            $('#envy').css('display', 'none');  
            $('#eliteg3').css('display', 'none');
            $('#ebookg1').css('display', 'contents');
            $('#zbook').css('display', 'none');
            $('#spectre').classList.remove("active");
            $('#envy').classList.remove("active");
            $('#eliteg3').classList.remove("active");
            $('#ebookg1').classList.add("active");
            $('#zbook').classList.remove("active");
        });
        $('#p6').on('click', function() {
            $('#spectre').css('display', 'none');
            $('#envy').css('display', 'none');  
            $('#eliteg3').css('display', 'none');
            $('#ebookg1').css('display', 'none');
            $('#zbook').css('display', 'contents');
            $('#spectre').classList.remove("active");
            $('#envy').classList.remove("active");
            $('#eliteg3').classList.remove("active");
            $('#ebookg1').classList.remove("active");
            $('#zbook').classList.add("active");
        });    
    });
    </script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/script.js"></script>

   
</body>
</html>