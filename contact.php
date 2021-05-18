<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Viator Laptops</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/loginModal.css">
</head>
<body>
   <?php include_once "includes/header.php" ?>
   
   <div id="contact">
      <div id="banner">
          <img src="images/contact1.jpg" alt="Contact Image">
          <div id="text"><p>Contact Us</p></div>
      </div>
      <div id="content" class="row">
          <div class="col-lg-6" id="left">
              <h1>Find <span id="blueColor">Us</span></h1>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquet eget neque vel ultrices. Integer efficitur sem.</p>
              <div class="row">
                  <div class="col-lg-6">
                      <div><i class="fa fa-phone"></i>&nbsp;+92 437 0292257</div>
                      <div><i class="fa fa-envelope"></i>info@example.com</div>
                      <div><i class="fa fa-history"></i>&nbsp;8:50 AM – 5:00 PM</div>
                  </div>
                  <div class="col-lg-6">
                      <div><i class="fa fa-print"></i>+92 437 0292257</div>
                      <div><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;&nbsp;P.O. BOX#12345, PK.</div>
                      <div><i class="fa fa-briefcase"></i>Viator, Sea Breeze <span style="margin-left:75px;"></span> SuperstarAppt, PK</div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6" id="right">
              <h1>Get a <span id="blueColor">Call</span></h1>
              <hr>
              <form action="#" method="post">
                  <input type="text" placeholder="Name"><br>
                  <input type="email" placeholder="Email Address"><br>
                  <input type="number" placeholder="Phone Number"><br>
                  <textarea cols="66" rows="7" placeholder="Message"></textarea>
                  <button type="submit">Submit</button>
              </form>
          </div>
      </div>
   </div>
   
   <?php include_once "includes/footer.php" ?>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/script.js"></script>
</body>
</html>