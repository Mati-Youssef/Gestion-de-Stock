<?php session_start();
include("../../connexion_PDO.php");


$v=$_GET['id'];


 $req="DELETE FROM products WHERE product_id =$v";
 $conn->exec($req);

 
 header("location:../lister_entrer.php");

 ?>