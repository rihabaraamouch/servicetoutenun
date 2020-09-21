<?php include("menu.php");?>

<?php 
require_once("connexiondb.php");

$requete="select * from FREELANCER;";
$resultaF=$pdo->query($requete);

$nomf=isset($_GET['nomF'])?$_GET['nomF']:"";
$profession=isset($_GET['profession'])?$_GET['profession']:"all";

if($profession=="all"){
    $requete="select * from FREELANCER;";
    
}else{
    $requete="select * from FREELANCER
          where NOM like '%$nomF%'
          and PROFESSION='$profession'";
    
}
$resultaF=$pdo->query($requete);


    
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
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
    <link rel="stylesheet" href="assets/css/Search-Field-With-Icon.css">
    <link rel="stylesheet" href="assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div class="container" style="margin-top: 100px;">
<div class="jumbotron-circular-addon-wrapper">
<div class="jumbotron-addon jumbotron-addon-top jumbotron-addon-circle">
<div></div><i class="fa fa-heart" style="color: rgb(245,130,130);"></i></div>
<div class="jumbotron" style="background: url(&quot;assets/img/christopher-burns-8KfCR12oeUM-unsplash.jpg&quot;);">
<h2 class="display-3" style="color: rgb(255,255,255);">Trouver un Freelancer!</h2>
<p style="color: rgb(255,255,255);">Demandez de l'aide sans contact pour obtenir l'assistance dont vous avez besoin tout en maintenant une distance sociale.<br></p>

<div >
    <form method="get" action="freelancers.php" class="form-inline" style="margin-left: 25%;">
        <div class="form-group">
    <input type="text" class="search-control" name="nomF" placeholder="Chercher profession..." value="<?php echo $nomF ?>"/>
        <a style="margin-left: 15px; color: white; ">Profession:</a>
        </div>
        <select name="profession" class="form-control" id="niveau" onchange="this.form.submit()">
            <option value="all" <?php if($profession==="all") echo "selected" ?>> Toutes les professions</option>
            <option value="livreur"<?php if($profession==="livreur") echo "selected" ?>>Livreur</option>
            <option value="docteur"<?php if($profession==="docteur") echo "selected" ?>>Docteur</option>
            <option value="plombier" <?php if($profession==="plombier") echo "selected" ?>>Plombier</option>
            <option value="electricien" <?php if($profession==="electricien") echo "selected" ?>>Electricien</option>
            <option value="professeur" <?php if($profession==="professeur") echo "selected" ?>>Professeur</option>
            <option value="femme" <?php if($profession==="femme") echo "selected" ?>>Femme de menage</option>
            <option value="programmer" <?php if($profession==="programmer") echo "selected" ?>>Programmer</option>
            
        </select>
        <button type="submit"  class="btn btn-light">
            <span class="glyphicon glyphicon-search">chercher...</span>
            </button>
            &nbsp &nbsp
            <a href="nouvelleprofession.php" style="color:white;">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>                Nouvelle Profession </a>
            
        
        
        

         </form>
        
        </div>
</div>
<div class="jumbotron-addon jumbotron-addon-bottom jumbotron-addon-circle"><i class="fa fa-star" style="border-color: rgb(245,130,130);color: rgb(245,130,130);"></i></div>
</div>
</div>

<div class="container">
        <div class="card">
            <div class="card-header" style="margin-bottom: -8px;">
                <h5 class="mb-0" style="color: rgb(245,130,130);font-size: 18px;">Liste des catégories:</h5>
            </div>
                        </div>
            <div class="card-body">
                <p class="card-text"></p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>Profession</th>
                                <th>ID_Categorie</th>
                                <th>Frais moyens de service (DHS)</th>
                                <th>Sex</th>
                                <th>Disponibilité</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                                <tr>
                                    <?php while($fifi= $resultaF ->fetch()){?>
                                    <tr>
                                    

                                <td><?php echo $fifi['NOM'] ?> </td>
                                <td><?php echo $fifi['PRENOM'] ?> </td>
                                <td><?php echo $fifi['PROFESSION'] ?> </td>
                                <td><?php echo $fifi['ID_CATEGORIE'] ?> </td>
                                        
                                <td><?php echo $fifi['FRAIS_SERVICE'] ?></td>
                                <td><?php echo $fifi['CIVILITE'] ?> </td>
                                <td><?php echo $fifi['DISPONIBILITE'] ?> </td>
                                <td>
<form method='get' action='requeste.php'><input type=hidden name='id_freelancer' value=<?php echo $fifi['ID']; ?> >
<button type='submit'>Demander</button></form>
                                    <a  onclick ="return confirm('êtes vous sur d entretenir ce Freelancer')" href="bookfreelancer.php">
                                    <
                                        </td>
                                        
                                        
                                    </tr>
   
                                <?php } ?>

                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    
   

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>
