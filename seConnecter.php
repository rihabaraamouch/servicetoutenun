<?php
    session_start();
	require_once('connexiondb.php');

	
	$login=isset($_POST['login'])?$_POST['login']:"";
	$pwd=($_POST['pwd'])?$_POST['pwd']:"";
	
	
	$requete="select * from UTILISATEUR where LOGIN='$login' and PWD=MD5('$pwd')";

	$resultat=$pdo->query($requete);	
	
	if($user=$resultat->fetch()){
		
			if($user['ETAT']==1){
				$_SESSION['user']=$user;
				header("Location:home.php");
			}else{
			
				$_SESSION['erreurLogin']="<strong>Erreur!</strong> Votre compte est désactivé.<br> veuillez contacter l'administrateur!!!";
				header("Location:login.php");
			}
    }else{
		 $_SESSION['erreurLogin']='<strong>Erreur!</strong> Login ou mot de passe incorrect!!!';
         header("Location:login.php");
    } 
	
?>