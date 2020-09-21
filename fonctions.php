<?php
   
  
    function rechercher_par_login($login){
        
        global $pdo;
        
        $requete=$pdo->prepare("SELECT LOGIN FROM UTILISATEUR WHERE LOGIN=?");
        
        $requete->execute(array($login));
        
        return $requete->rowCount();
        
    }

	
	 function recherche_par_email($email){
	     
        global $pdo;
        
        $statement=$pdo->prepare("SELECT EMAIL FROM UTILISATEUR WHERE EMAIL=?");
        
        $statement->execute(array($email));
                
        return $statement->rowCount();
        
    }
?>

     