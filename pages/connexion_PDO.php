<?php 
      $servername="localhost";
  $username="root";
  $password="";
  $db="gestion_stock";

  try{
   $conn = new PDO("mysql:host=$servername;dbname=$db",$username,$password);
       $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      
                      
}catch(Exception $e){
  	die("something was wrong".$e->getMessage());
  }

?>
