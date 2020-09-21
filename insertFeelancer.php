
<?php require_once("menu.php");?>



<?php
	require_once('connexiondb.php');
    session_start();
	 $iduser=$_SESSION['user']['ID'];
	


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$nom = $_POST['nom'];
		
		$prenom = $_POST['prenom'];
		
		$id_categorie = $_POST['id_categorie'];
		
		$civilite = $_POST['civilite'];
        
        $profession = $_POST['profession'];
        $frais_mois = $_POST['frais_mois'];
        $frais_service = $_POST['frais_service'];

$stmt = $pdo->prepare('INSERT INTO FREELANCER(NOM, PRENOM,ID_CATEGORIE, CIVILITE,PROFESSION,FRAIS_MOIS,FRAIS_SERVICE,DISPONIBILITE) VALUES (:Pnom,:Pprenom,:Pid_categorie, :Pcivilite,:Pprofession, :Pfrais_mois,:Pfrais_service,:Pdisponibilite)');
$stmt->execute(array(
				
						'Pnom' 	=> $nom,
						'Pprenom' 		=> $prenom,
						'Pid_categorie'	=>$id_categorie,
						'Pcivilite' 	=> $civilite,
						'Pprofession'	=>$profession,
                        'Pfrais_mois'   => $frais_mois,
                        'Pfrais_service'=> $frais_service,
                        'Pdisponibilite' => 1));
        
 $req1 = $pdo->prepare("UPDATE UTILISATEUR SET ROLE='FREELANCER' WHERE id=$iduser");
 $req1->execute();
    
        
 header('Location: sucessfreelancer.php');
               }



    

                               
                               
                
			
	
	
	?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Service tout-en-un</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-142-1.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-142.css">
    <link rel="stylesheet" href="assets/css/Button-Icon-Round.css">
    <link rel="stylesheet" href="assets/css/card-3-column-animation-shadows-images.css">
    <link rel="stylesheet" href="assets/css/cards.css">
    <link rel="stylesheet" href="assets/css/Different-Styled---Cards-1.css">
    <link rel="stylesheet" href="assets/css/Different-Styled---Cards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Jumbotron-Circular-Addon.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Search-Field-With-Icon.css">
    <link rel="stylesheet" href="assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Tricky-Grid---2-Column-on-Desktop--Tablet-Flip-Order-of-12-Column-rows-on-Mobile.css">
</head>

<body>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            
            <form class="custom-form" method="post" >
                
                <h1><img src="assets/img/logo2.PNG">SERVICE TOUT-EN-UN</h1>
                <div class="form-row form-group">
                   
                    
                    <div class="col-sm-4 label-column"><label class="input-container">NOM</label></div>
                    <div class="col-sm-6 input-column"><input pattern=".{4,}"
							title="Le login doit contenir au moins 4 caractères"
							class="form-control"
							type="text"
							name="nom"
							autocomplete="off"
							placeholder="Taper votre Nom"
							required="required"></div>
                </div>
                
                <div class="form-row form-group">
                    
                    
                    <div class="col-sm-4 label-column"><label class="col-form-label" >PRENOM</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control"
							type="text"
							name="prenom"
							placeholder="Taper votre Prenom"></div>
                </div>
                    
                    
                
                                <div class="form-row form-group">
                                    <div class="col-sm-4 label-column" ><label class="col-form-label" ></label>Categorie</div>
                    <div class="col-sm-6 input-column"><input class="form-control"
							type="text"
							name="id_categorie"
							placeholder="numero de la categorie"></div>
                    </div>
                    
                    
                    
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" >Civilité</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control"
							type="text"
							name="civilite"
							placeholder="Taper votre civilité"></div>
                    </div>
                
                    
                    
                    
                    
                    
                    
                    
                    
                    
                                    <div class="form-row form-group">

                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Profession</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control"
							name="profession"
                            type="text"
							placeholder="Taper votre profession"></div>
                </div>
                
                
                
                
                
                
                
                
                
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Frais par mois:(Dhs)</label></div>
                    <div class="col-sm-6 input-column"><input 
							class="form-control"
							type="text"
							name="frais_mois"
							placeholder="Taper votre frais par mois"
							required></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Frais par service:(Dhs)</label></div>
                    <div class="col-sm-6 input-column"><input 
							class="form-control"
							type="text"
							name="frais_service"
							
							placeholder="taper les frais de service"
							required>
                    </div>
                
                    
                    
                    
                    
                    
                    
                    
                </div><button class="btn btn-light submit-button" type="submit" style="margin-top: -9px;background: rgb(245,130,130);" value="Enregistrer">Devenir un Freelancer</button>
            </form>
            
            <div class="the-errors text-center">
			 
				
				
			</div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>