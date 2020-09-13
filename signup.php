
<?php include("menu.php");?>

<?php
	require_once('connexiondb.php');
	
	include 'fonctions.php'; 
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$validationErrors = array();
		
		$login = $_POST['login'];
		
		$pwd1 = $_POST['pwd1'];
		
		$pwd2 = $_POST['pwd2'];
		
		$email = $_POST['email'];

			if (isset($login)) {
				
				$filtredLogin = filter_var($login, FILTER_SANITIZE_STRING);
				
				if (strlen($filtredLogin) < 4) {
					
					$validationErrors[] = "Erreur de validation: Le login doit contenir au moins 4 caractères";
				
				}
			}

			if (isset($pwd1) && isset($pwd2)) {
				
				if (empty($pwd1)) {
					
					$validationErrors[] = "Erreur de validation: Le mot ne doit pas être vide!";
				}

				if (md5($pwd1) !== md5($pwd2)) {
					
					$validationErrors[] = "Erreur de validation: Les deux mots de passe ne sont pas identiques";
				}
			}

			if (isset($email)) {
				
				$filtredEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
				
				if (filter_var($filtredEmail, FILTER_VALIDATE_EMAIL) != true) {
					
					$validationErrors[] = "Erreur de validation: Email non valid";
					
				}
			}
		

		if (empty($validationErrors)) {
			
			if (findUserByLogin($login) == 0 && findUserByEmail($email) == 0) {
				
				$stmt = $con->prepare('INSERT INTO UTILISATEUR(login, pwd,role, email,etat)
										VALUES (:pLogin,:pPwd,:pRole, :pEmail,:pEtat)');
										
				$stmt->execute(array(
				
						'pLogin' 	=> $login,
						'pPwd' 		=> md5($pwd1),
						'pRole'		=>'VISITEUR',
						'pEmail' 	=> $email,
						'pEtat'		=>0)
				);
				
				$succesMsg = "Félicitation , vous avez créer votre nouveau compte";
				
			} else if(findUserByLogin($login) >0){

				$validationErrors[] = 'Désolé ce login existe déja';
				
			}else if(findUserByEmail($email) >0){

				$validationErrors[] = 'Désolé cet Email existe déja';
			}

		}
	}
	
	?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Bakery (BS 4) (Backup 1598298330423)</title>
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
            <form class="custom-form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <h1><img src="assets/img/logo2.PNG">SERVICE TOUT-EN-UN</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="input-container">login</label></div>
                    <div class="col-sm-6 input-column"><input pattern=".{4,}"
							title="Le login doit contenir au moins 4 caractères"
							class="form-control"
							type="text"
							name="login"
							autocomplete="off"
							placeholder="Taper votre Login"
							required="required"></div>
                </div>
                
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control"
							type="email"
							name="email"
							placeholder="Taper votre Email"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">MOT DE PASSE</label></div>
                    <div class="col-sm-6 input-column"><input minlength=4
							class="form-control"
							type="password"
							name="pwd1"
							autocomplete="new-password"
							placeholder="Taper votre mot de passe"
							required>></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">CONFIRMER MOT DE PASSE</label></div>
                    <div class="col-sm-6 input-column"><input minlength=4
							class="form-control"
							type="password"
							name="pwd2"
							autocomplete="new-password"
							placeholder="Retaper votre mot de passe pour le confirmer"
							required>
                        </div>
                </div><button class="btn btn-light submit-button" type="submit" style="margin-top: -9px;background: rgb(245,130,130);" value="Enregistrer">s'inscrire</button></form>
            
            <div class="the-errors text-center">
			 
				<?php
				
					if (isset($validationErrors) && !empty($validationErrors)) {
					    
						foreach ($validationErrors as $error) {
						    
							echo '<div class="msg error">' . $error . '</div>';
							
						}
					}

					if (!empty($succesMsg)) {
						
						echo '<div class="msg succes">' . $succesMsg . '</div>';

						header("refresh:3;url=login.php");
						
						exit();
					}

				
				?>
				
			</div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>