<?php
	
	require_once('connexiondb.php');
	
	if(isset($_GET['motCle']))
		$mc=$_GET['motCle'];
	else
		$mc="";
	
	if(isset($_GET['NOM_CATEGORIE']))
		$niveau=$_GET['NOM_CATEGORIE'];
	else
		$niveau="all";

   if(isset($_GET['size']))
		$size=$_GET['size'];
	else
		$size=5;   
		
	if(isset($_GET['page']))
		$page=$_GET['page'];
	else
		$page=1;
			
	$offset=($page-1)*$size;
	
	if($niveau=="all"){// TOUS LES Categorie
		$resultat1 = $con->query("SELECT * FROM FREELANCER
									WHERE  NOM like '%$mc%' 
									ORDER BY ID
									OFFSET $offset");

		$resultat2 = $con->query("select count(*) as nbrFreelancer
									from FREELANCER
									where NOM like '%$mc%'");
	}else{
		$resultat1 = $con->query("SELECT * FROM FREELANCER
									WHERE  NOM like '%$mc%'
									AND NOM_CATEGORIE='$niveau'
									ORDER BY ID
									LIMIT $size
									OFFSET $offset");

		$resultat2 = $con->query("select count(*) as nbrCategorie
									from FREELANCER
									where NOM_CATEGORIE like '%$mc%'
									AND NIVEAU='$niveau'");
	}
	
	
	$nbr=$resultat2->fetch();
	
	$nbrF=$nbr['nbrCategorie'];
	
	$reste=$nbrF % $size; //l'operateur % (modulo) retourne le reste de la 
						// devision euclidienne de $nbrF sur $size
	if($reste==0)
		$nbrPage=$nbrF/$size;
	else
		$nbrPage=floor($nbrF/$size)+1;// floor retourne la partie entière d'un nombre 
										// decimale
	
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Gestion des Filières</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	</head>
	<body>
			
		<div class="container">
			<div class="panel panel-success espace60">
				<div class="panel-heading">Rechercher des filières</div>
				<div class="panel-body">
					<form method="get" action="freelancer.php" class="form-inline">
						<div class="form-group">													
							
							<input type="text" name="motCle" 
									placeholder="Taper un mot clé"
									id="motCle" class="form-control" 
									value="<?php echo $mc; ?>"/>
							
							<label for="NIVEAU" class="control-label">Categorie</label>

							<button type="submit" class="btn btn-success">
								<i class="glyphicon glyphicon-search"></i>
								Chercher...
							</button>
							
							&nbsp&nbsp&nbsp
							
						</div>
							
					</form>
				</div>
			</div>
			<div class="panel panel-primary ">
				<div class="panel-heading">Liste des filières (<?php echo $nbrCategorie ?>&nbsp Filière) </div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>NOM DE LA FILIERE</th>
								<th>NIVEAU</th>								
								
							</tr>
						</thead>
						<tbody>
							<?php while($FREELANCER=$resultat1->fetch()){?>
								<tr>
									<td><?php echo $FREELANCER['ID'] ?></td>
									<td><?php echo $FREELANCER['NOM_FILIERE'] ?></td>
									<td><?php echo $FREELANCER['NIVEAU'] ?></td>
									
									<td>