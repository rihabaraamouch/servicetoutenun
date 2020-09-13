<?php require_once("connexiondb.php");
if(isset($_GET['nomF']))
    $nomG= $_GET['nomF'];
else 
    $nomG="";
$requete="select * from CATEGORIE
           where NOM_CATEGORIE like '%$nomF%'";
$resultatF=$pdo->query($requete);
