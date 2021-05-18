<?php
    include_once "connection.php"
?>
<div id="signup" class="modal">
    <form method="post" class="modal-content animate">
        <div class="imgcontainer">
          <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
          <h1 class="h3 mb-3 font-weight-normal">Please sign Up</h1>
          <label for="user_name"><b>Username</b></label>
          <input type="text" name="user_name" class="form-control" placeholder="Name" required autofocus>
          <label for="user_email"><b>Email address</b></label>
          <input type="email" name="user_email" class="form-control" placeholder="Email address" required autofocus>
          <label for="user_password"><b>Password</b></label>
          <input type="password" name="user_password" class="form-control" placeholder="Password" required>
          <button name="signup" type="submit">Sign Up</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" name="signup" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>


<?php
    if(isset($_POST['signup'])){
        $user_name=mysqli_real_escape_string($conn, $_POST['user_name']);
        $user_email=mysqli_real_escape_string($conn, $_POST['user_email']);
        $user_password=mysqli_real_escape_string($conn, $_POST['user_password']);
        
        //check for empty fields
        if(empty($user_name) OR empty($user_email) OR empty($user_password)){
            echo '<div class="alert alert-danger" role="alert">Empty Fields</div>';
            exit();
        }
        
        //checking for validity of email
        if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
            echo '<div class="alert alert-danger" role="alert">Please Enter A Valid Email</div>';
            exit();
        } else{
            //if email exists
            $sql = "SELECT * FROM `user` WHERE `user_email`='$user_email'";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                echo '<div class="alert alert-danger" role="alert">Email Already Exist</div>';
                exit();
            } else{
                //hashing password
                $hash = password_hash($user_password, PASSWORD_DEFAULT);
                //signing up the user
                $sql="INSERT INTO `user`(`user_name`, `user_email`, `user_password`) VALUES ('$user_name', '$user_email', '$hash')";
                if(mysqli_query($conn, $sql)){
                     echo '<div class="alert alert-danger" role="alert">Successfully Registered</div>';
                    exit();
                } else{
                    echo '<div class="alert alert-danger" role="alert">Registeration failed</div>';
                }
            }
        }
    }
?>