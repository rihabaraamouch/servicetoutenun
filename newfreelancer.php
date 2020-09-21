<?php include("menu.php");?>
<?php require_once("connexiondb.php")?>
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
    <link rel="stylesheet" href="assets/css/Competences-Grid---3-Columns---Hover-Effect-Float-Down.css">
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
    <section>
        <div class="jumbotron" style="background: url(&quot;assets/img/handshake-4002834_1920.jpg&quot;) center / cover; margin-top:50px">
            <h1 class="text-center" style="border-color: rgb(255,255,255);color: rgb(255,255,255);">Devenir un Freelancer</h1>
            <p class="text-center" style="color: rgb(255,255,255);">Vous apportez la compétence. Nous vous faciliterons la tâche.<br></p>
    
    <p class="text-center">
    <?php session_start();

if(isset($_SESSION)){include("newfreesess.php");} else {include("newfreenosess.php");}

                    ?>

    

    
    
    
    
    
   </p>
            
            
            
            
        </div>
    </section>
    <header></header>
    <h1 class="text-center" style="font-family: Oswald, sans-serif;margin-bottom: 26px;">Rejoignez notre communauté indépendante</h1>
    <div style="text-align: center;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 competencesboxesdown"><i class="fas fa-list competencesicons" style="color: #ef7070;"></i>
                    <h2 class="competencestitles"><strong>1. Créez votre profil</strong><br></h2>
                    <p class="competencesparagraph">Sélectionnez les services que vous souhaitez offrir et où.<br></p>
                </div>
                <div class="col-md-4 competencesboxesdown"><i class="far fa-check-square competencesicons" style="color: #ef7070;"></i>
                    <h2 class="competencestitles"><strong>2. Définissez votre horaire et votre zone de travail</strong><br></h2>
                    <p class="competencesparagraph">Définissez votre disponibilité&nbsp; et acceptez de recevoir des emplois le jour même.<br></p>
                </div>
                <div class="col-md-4 competencesboxesdown"><i class="fas fa-money-bill competencesicons" style="color: #ef7070;"></i>
                    <h2 class="competencestitles"><strong>3. Commencez à trouver des emplois</strong><br></h2>
                    <p class="competencesparagraph">Développez votre entreprise selon vos propres conditions.<br></p>
                </div>
            </div>
        </div>
    </div>
    
     <?php session_start();

if(!isset($_SESSION)){include("newfreenosess2");} 
                    ?>

    
    
    
     <footer>
        <div class="container" >
            <div class="row" style="margin-top:60px">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><a href="#">SERVICE TOUT-EN-UN</a></h3>
                    <p class="links"><a href="#">Service</a><strong> · </strong><a href="#">Pricing </a><strong> · </strong><a href="#">Order </a><strong> </strong></p>
                    <p class="company-name">Servuce tout-en-un © 2020</p>
                </div>
                <div class="col-sm-6 col-md-4 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span"></span>Rabat,MAROC</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left">0634897459</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="#" target="_blank" style="color: rgb(237,82,83);">rihab.araamouch@company.com</a></p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 footer-about">
                    <h4>About the company</h4>
                    <p><br>Crée en 2020 , notre objectif est de connecter les entreprises à notre communauté d'experts indépendants qui sont disponibles à la location à l'heure ou par projet, fournir la flexibilité de travailler quand cela vous convient</p>
                    <div
                        class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>