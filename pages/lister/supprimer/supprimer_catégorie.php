<?php session_start();
include("../../connexion_PDO.php");


$v=$_GET['id'];


 $req="DELETE FROM catégorie WHERE id_catégorie =$v";
 $conn->exec($req);

 
 header("location:../lister_catégorie.php");

 ?>