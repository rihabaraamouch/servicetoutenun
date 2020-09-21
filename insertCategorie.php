<?php 
require_once('connexiondb.php');

$nomC=isset($_POST['nomC'])?$_POST['nomC']:"";


$requete="INSERT INTO CATEGORIE (NOM_CATEGORIE) VALUES ('$nomC')";
mysqli_query($requete);

header('location:categories.php');

?>
