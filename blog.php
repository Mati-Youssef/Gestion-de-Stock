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
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
   <?php include_once "includes/header.php" ?>
   
   <div id="blog" class="row">
       <div class="col-md-9" id="content">
       
<!--       ----------------slider------------------->
       
        <div id="carousel" class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner"> 
              <div class="carousel-item active">
                <img src="images/post5.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <i><h2>First slide label</h2></i>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/post4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <i><h2>Second slide label</h2></i>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/post3.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <i><h2>Third slide label</h2></i>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
       
<!--       -------------------slider ends---------------->
      
<!--      ---------------latest posts------------------------>
      
      <div class="row" id="latest">
        <div id="heading"><h4>ALL <span style="color:gray">Latest</span></h4><hr></div>
        
         <?php
            $sql="SELECT * FROM `posts` ORDER BY `post_date` DESC LIMIT 4";
            $result=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result)){
                $post_title=$row['post_title'];
                $post_image=$row['post_image'];
                $post_date=$row['post_date'];
                $post_id=$row['post_id'];         
            ?>
            
          <div class="col-md-3">
             <a href="post.php?id= <?php echo $post_id; ?> ">
              <img src="<?php echo $post_image ?>" alt="">
              <i><h5><?php echo $post_title ?></h5></i>
              <h7><?php echo $post_date ?></h7>
              </a>
          </div>
          <?php } ?>
      </div>
      
<!--      ------------------latest posts ends----------------------->
      
<!--      -----------------all posts---------------------------->
       
       <div id="allposts">
           <div id="heading"><i><h4 style="font-weight:bold">ALL POSTS</h4></i><hr></div>
            <div class="card-columns">
             <?php
                $sql="SELECT * FROM `posts` ORDER BY `post_date` DESC";
                $result=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result)){
                    $post_title=$row['post_title'];
                    $post_image=$row['post_image'];
                    $post_author=$row['post_author'];
                    $post_content=$row['post_content'];
                    $post_id=$row['post_id'];         
                ?>
              <div class="card" style="width: 90%;">
                  <img src="<?php echo $post_image ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $post_title ?></h5>
                    <p class="card-text"><?php echo substr($post_content, 0, 100)."..."; ?></p>
                    <a href="post.php?id= <?php echo $post_id; ?> " class="btn btn-primary">Read More</a>
                  </div>
              </div>
              <?php } ?>
            </div>
       </div>
       
<!--       ----------------all posts ends------------------->
      </div>
       
        <div id="sidebar" class="col-md-3">
            <div id="recentposts">
                <i><h5 id="heading">RECENT POSTS</h5></i>
                <?php
                $sql="SELECT * FROM `posts` ORDER BY `post_date` DESC LIMIT 10";
                $result=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result)){
                    $post_title=$row['post_title'];
                    $post_image=$row['post_image'];
                    $post_date=$row['post_date'];
                    $post_id=$row['post_id'];         
                ?>
              <div id="posts" class="row">
                  <img class="col-sm-4" src="<?php echo $post_image ?>" alt="">
                  <div class="col-sm-8">
                      <p style="font-size:17px; margin-bottom:0"><?php echo $post_title ?></p>
                      <p style="color:gray"><?php echo $post_date ?></p>
                  </div>
              </div>
              <?php } ?>
            </div>
            <div id="sponsers" style="margin-top: 30px;">
              <i><h5 id="heading">SPONSORS</h5></i>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
   
   <?php include_once "includes/footer.php" ?>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/script.js"></script>
</body>
</html>