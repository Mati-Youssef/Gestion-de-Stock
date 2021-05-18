<?php session_start();
include("../../connexion_PDO.php");


$v=$_GET['id'];


 $req="DELETE FROM entrer WHERE id_de_preduit =$v";
 $conn->exec($req);

 
 header("location:../lister_entrer.php");

 ?>