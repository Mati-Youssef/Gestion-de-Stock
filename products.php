<?php include_once "includes/connection.php"?>
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
    <link rel="stylesheet" type="text/css" href="css/products.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
   <?php include_once "includes/header.php" ?>
   
   <div id="products">
      
       
       <div id="gaming">
           <h3 style="width:100%;">notre produit</h3>
           <div class="row">
             <?php
                $sql="SELECT * FROM `products` WHERE product_id>6 AND product_id<11 ORDER BY `product_id` DESC";
                $result=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result)){
                    $product_id=$row['product_id'];
                    $product_name=$row['product_name'];         
                    $product_image=$row['product_image'];         
                ?>
              <div class="col-md-3">
                <a href="product.php?id= <?php echo $product_id; ?> ">
                  <img src="<?php echo $product_image ?>" class="card-img-top" alt="...">
                </a>
              </div>
              <?php } ?>
            </div>
       </div>
       <hr>
       
       <div id="topselling">
           <h3 style="width:100%;">Top Selling</h3>
           <div class="row">
             <?php
                $sql="SELECT * FROM `products` ORDER BY `product_ratings` DESC LIMIT 4";
                $result=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result)){
                    $product_id=$row['product_id'];
                    $product_name=$row['product_name'];         
                    $product_image=$row['product_image'];         
                    $product_price=$row['product_price'];         
                    $product_summary=$row['product_summary'];         
                ?>
              <div class="col-md-3">
                <a href="product.php?id= <?php echo $product_id; ?> ">
                  <img src="<?php echo $product_image ?>" class="card-img-top" alt="...">
                  <h5 style="font-weight:bold; margin:0 5%;"><?php echo $product_name ?></h5>
                  <p style="margin:5%"><?php echo $product_summary ?></p>
                  <p style="color:red; font-weight:bold; margin:0 5%;">$<?php echo $product_price ?></p>
                </a>
              </div>
              <?php } ?>
            </div>
       </div>
       <hr>
       
        <div id="allproducts">
           <h3 style="width:100%;">All Products</h3>
           <div class="row">
             <?php
                $sql="SELECT * FROM `products` ORDER BY `product_id` DESC";
                $result=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result)){
                    $product_id=$row['product_id'];
                    $product_name=$row['product_name'];         
                    $product_image=$row['product_image'];         
                    $product_price=$row['product_price'];         
                    $product_summary=$row['product_summary'];         
                ?>
              <div class="col-md-3">
                <a href="product.php?id= <?php echo $product_id; ?> ">
                  <img src="<?php echo $product_image ?>" class="card-img-top" alt="...">
                  <h5 style="font-weight:bold; margin:0 5%;"><?php echo $product_name ?></h5>
                  <p style="margin:5%"><?php echo $product_summary ?></p>
                  <p style="color:red; font-weight:bold; margin:0 5%;">$<?php echo $product_price ?></p>
                  <a href="product.php?id= <?php echo $product_id; ?> " class="btn btn-primary">Buy Now</a>
                </a>
              </div>
              <?php } ?>
            </div>
       </div>
       
   </div>
   
   <?php include_once "includes/footer.php" ?>
   
   
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/script.js"></script>
</body>
</html>