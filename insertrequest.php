<?php 
require_once('connexiondb.php');
session_start();


$msg=isset($_POST['message'])?$_POST['message']:"";
$free=isset($_POST['id_freelancer'])?$_POST['id_freelancer']:"0";

if (isset($_SESSION['user'])){


$requete="INSERT INTO REQUEST (ID_USER,ID_FREELANCER,IFOS) VALUES ('$_SESSION['ID']','$free','$msg')";
$resutat=
header('location:freelancers.php');

?>


