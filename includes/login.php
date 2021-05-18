<?php
    session_start();
    include_once "connection.php"
?>

<div id="id01" class="modal">
    <form method="post" class="modal-content animate">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
          <label for="user_email"><b>Email Address</b></label>
          <input type="email" placeholder="Enter Email" name="user_email" required>
          <label for="user_password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="user_password" required>
          <button name="login" type="submit">Login</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>


<?php
    if(isset($_POST['login'])){
        $user_email=mysqli_real_escape_string($conn, $_POST['user_email']);
        $user_password=mysqli_real_escape_string($conn, $_POST['user_password']);
        
        //check for empty fields
        if(empty($user_email) OR empty($user_password)){
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
            if(mysqli_num_rows($result)<=0){
                echo '<div class="alert alert-danger" role="alert">Login Error</div>';
                exit();
            } else{
                //signing up the user
                while($row=mysqli_fetch_assoc($result)){
                    //checking if password matches
                    if(!password_verify($user_password, $row['user_password'])){
                        echo '<div class="alert alert-danger" role="alert">Login Error</div>';
                        exit();
                    } else if (password_verify($user_password, $row['user_password'])){
                        $_SESSION['user_id']=$row['user_id'];
                        $_SESSION['user_name']=$row['user_name'];
                        $_SESSION['user_email']=$row['user_email'];
                        header("Location: ../index.php");
                       
                    }
                }
            }
        }
    }
?>