<?php session_start();
include("../../connexion_PDO.php");


$_SESSION['mav']=$_GET['id'];
$v=$_SESSION['mav'];


 $req="DELETE FROM utilisateur WHERE id_user =$v";
 $conn->exec($req);

 
 header("location:../lister_utilisateur.php");

 ?>