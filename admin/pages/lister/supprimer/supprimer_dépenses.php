<?php session_start();
include("../../connexion_PDO.php");


$v=$_GET['id'];


 $req="DELETE FROM dépenses WHERE id_four =$v";
 $conn->exec($req);

 
 header("location:../lister_dépenses.php");

 ?>