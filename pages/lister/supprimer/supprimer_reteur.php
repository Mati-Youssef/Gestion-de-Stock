<?php session_start();
include("../../connexion_PDO.php");


$v=$_GET['id'];


 $req="DELETE FROM reteur WHERE id_reteur =$v";
 $conn->exec($req);

 
 header("location:../lister_reteur.php");

 ?>