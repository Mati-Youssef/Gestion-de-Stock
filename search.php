<?php
include_once "includes/connection.php";
if(!isset($_GET['s'])){
    header("Location: index.php");
} else{
    $search=mysqli_real_escape_string($conn, $_GET['s']);
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> FPO-FIFEL</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
   <?php include_once "includes/header.php" ?>
   
   <div id="blog">
       <h1>Affichage de tous les résultats pour " <?php echo $search; ?> " </h1>
        <div class="card-columns">
         <?php
            
            $sql2="SELECT * FROM `products` WHERE `product_name` LIKE '%$search%' OR `product_details` LIKE '%$search%' OR `product_summary` LIKE '%$search%'";
           
            $result2=mysqli_query($conn, $sql2);
            if( mysqli_num_rows($result2)<=0){
                echo "No Results Found";
            }else {
                while($row=mysqli_fetch_assoc($result2)){
                    $product_id=$row['product_id'];  
                    $product_image=$row['product_image'];  
                    $product_name=$row['product_name'];  
                    $product_summary=$row['product_summary'];  
                ?>
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo $product_image ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $product_name ?></h5>
                    <p class="card-text"><?php echo $product_summary ?></p>
                    <a href="product.php?id= <?php echo $product_id; ?> " class="btn btn-primary">lire plus</a>
                  </div>
                </div>
                <?php
            }} ?>
        </div>
   </div>
   
   <?php include_once "includes/footer.php" ?>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/script.js"></script>
</body>
</html>
    
    <?php
}
    ?>