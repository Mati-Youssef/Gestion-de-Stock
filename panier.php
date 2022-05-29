<?php  session_start(); 
include_once "includes/connection.php";

  $valider3=$_GET['add_to_card']; 
if (isset($valider3)) {

     $idcl=$_SESSION["id_client"];
     $date=date("y.m.d");
     $product_id=$_SESSION['product_id'];


    $req0="INSERT INTO `panier`(`id_client`, `id_de_produit`, `date_ajou`) VALUES ('$idcl', '$product_id', '$date')";
    if(mysqli_query($conn, $req0)){
                     echo '<Script>alert("bien ajouter")</Script>';
                     header("location:/FPO-fifel/products.php");
                   
                }else{
                    echo '<Script>alert("echec de l\'ajout")</Script>';
                    header("location:/FPO-fifel/products.php");
                }
            
}  ?>



?>