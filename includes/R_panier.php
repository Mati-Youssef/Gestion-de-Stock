<?php session_start();
include("connection.php");


$v=$_GET['id'];


 $req="DELETE FROM panier WHERE id_panier =$v";
 $s=mysqli_query($conn, $req);

 
 header("location:panier.php");



 ?>