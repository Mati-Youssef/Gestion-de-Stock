<?php session_start();
include("../../connexion_PDO.php");


$v=$_GET['id'];


 $req="DELETE FROM sortie WHERE id_de_sortie =$v";
 $conn->exec($req);

 
 header("location:../lister_sortie.php");

 ?>