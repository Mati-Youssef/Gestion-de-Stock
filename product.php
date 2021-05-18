<?php
include_once "includes/connection.php";
if(!isset($_GET['id'])){
    header("Location: products.php");
} else{
    $id=mysqli_real_escape_string($conn, $_GET['id']);
    if(!is_numeric($id)){
        header("Location: products.php");
        exit();
    } else if(is_numeric($id)){
        $sql="SELECT * FROM `products` WHERE `product_id`='$id'";
        $result=mysqli_query($conn, $sql);
        
        //check if post exists
        if(mysqli_num_rows($result)<=0){
            //no posts
            header("Location: products.php?Message=no+result");
        } else if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $product_name=$row['product_name'];
                $product_price=$row['product_price'];
                $product_details=$row['product_details'];
                $product_summary=$row['product_summary'];
                $product_ratings=$row['product_ratings'];
                $product_image=$row['product_image'];
                $product_id=$row['product_id'];
                ?>
                
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
   
   <div class="row" id="singleproduct">
      <div class="col-md-5"><img src="<?php echo $product_image; ?>" alt=""></div>
       <div class="col-md-7">
            <h1><?php echo $product_name; ?></h1>
            <p><?php echo $product_summary; ?></p>
            <p style="margin-top:25px">Product Price: <span id="price">$<?php echo $product_price; ?></span></p>
            <p style="margin-top:10px">Product Ratings: <span id="rating"><?php echo $product_ratings; ?></span></p>
            <a class="btn btn-primary" href="#" onclick="document.getElementById('signup').style.display='block'" class="nav-link">Buy Now</a>
       </div>
       <h3>Product Description:</h3>
       <p><?php echo $product_details; ?></p>
   </div>
   
   <div id="signup" class="modal">
    <form action="#" class="modal-content animate">
        <div class="imgcontainer">
          <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
          <h1 class="h3 mb-3 font-weight-normal">Please Enter Details</h1>
          <label for="user_name"><b>Name</b></label>
          <input type="text" name="user_name" class="form-control" placeholder="Name" required autofocus>
          <label for="user_email"><b>Email address</b></label>
          <input type="email" name="user_email" class="form-control" placeholder="Email address" required autofocus>
          <label for="user_password"><b>Address</b></label>
          <input type="text" name="user_password" class="form-control" placeholder="Address" required>
          <button name="signup" type="submit">Done</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" name="signup" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>
   
   <?php include_once "includes/footer.php" ?>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/script.js"></script>
</body>
</html>
                
                <?php
            }
        }
    }
}
?>