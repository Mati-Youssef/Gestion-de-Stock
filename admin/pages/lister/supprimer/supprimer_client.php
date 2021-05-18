<?php session_start();
include("../../connexion_PDO.php");


$v=$_GET['id'];


 $req="DELETE FROM client WHERE id_client =$v";
 $conn->exec($req);

 
 header("location:../lister_client.php");

 ?>