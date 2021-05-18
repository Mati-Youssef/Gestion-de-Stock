<?php
include_once "includes/connection.php";
if(!isset($_GET['id'])){
    header("Location: blog.php");
} else{
    $id=mysqli_real_escape_string($conn, $_GET['id']);
    if(!is_numeric($id)){
        header("Location: blog.php");
        exit();
    } else if(is_numeric($id)){
        $sql="SELECT * FROM `posts` WHERE `post_id`='$id'";
        $result=mysqli_query($conn, $sql);
        
        //check if post exists
        if(mysqli_num_rows($result)<=0){
            //no posts
            header("Location: blog.php?Message=no+result");
        } else if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $post_title=$row['post_title'];
                $post_content=$row['post_content'];
                $post_date=$row['post_date'];
                $post_image=$row['post_image'];
                $post_keywords=$row['post_keywords'];
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
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <style>
        .col-md-9{
            background-color: white;
            padding: 0;
            text-align: center;
        }
        .col-md-9 img{
            width: 100%;
        }
        .col-md-9 h2{
            font-weight: bold;
            margin-top: 50px;
        }
        .col-md-9 h6{
            color: gray;
            margin-bottom: 50px;
        }
        .col-md-9 p{
            margin: 50px 6% 100px 6%;
            color: gray;
            text-align: left;
        }
    </style>
</head>
<body>
   <?php include_once "includes/header.php" ?>
   
   <div class="row" id="post">
       <div class="col-md-9">
            <i><h2><?php echo $post_title; ?></h2></i>
            <h6>Posted On: <?php echo $post_date; ?></h6>
           <img src="<?php echo $post_image; ?>" alt="">
            <p><?php echo $post_content; ?></p>
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
                
                <?php
            }
        }
    }
}
?>