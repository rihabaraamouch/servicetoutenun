<?php require_once("menu.php");?>

<?php require_once("connexiondb.php");

session_start();

$nom= $_SESSION['user']['NOM'];
$prenom=$_SESSION['user']['PRENOM'];



$req="SELECT F.NOM , F.PRENOM,U.VILLE , U.NOM,U.PRENOM , R.IFOS,R.ID 
FROM REQUEST AS R 
LEFT JOIN FREELANCER AS F ON R.ID_FREELANCER = F.ID LEFT JOIN UTILISATEUR AS U ON R.ID_USER = U.ID WHERE ID_FREELANCER = (SELECT F.ID FROM FREELANCER F LEFT JOIN UTILISATEUR ON F.NOM = UTILISATEUR.NOM AND F.PRENOM = UTILISATEUR.PRENOM WHERE UTILISATEUR.NOM = '$nom' AND UTILISATEUR.PRENOM='$prenom' ); ";
$resultat=$pdo->query($req);








    
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/LinkedIn-like-Profile-Box.css">
    <link rel="stylesheet" href="assets/css/Modern-Contact-Form.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/project-card.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
    
    

<body>
    
    
    <div style="margin-top:70px">
    
      <?php while($re=$resultat->fetch()){ ?>
        <container>
    <div  class="card border-white border rounded shadow-lg" style="width: 460px;height: 369px; margin-left:450px;">
        <div class="card">
        <div class="card-body" style="width: 205px;height: 350px;padding: 0px;margin: 10px;">
            <h4 class="card-title" style="margin-top: 5px;">Nouvelle Demande!</h4>
            <h6 class="text-muted card-subtitle mb-2" style="margin-top: 0px;">NOM et PRENOM demandeur</h6>
            <p class="card-text" style="width: 180px;margin-top: 15px;margin-bottom: 20px;"><?php echo $re['NOM'] ?> <?php echo $re['PRENOM'] ?></p>
            <h6 class="text-muted card-subtitle mb-2" style="margin-top: 0px;">Ville:</h6>
            
            
            
             <p class="card-text" style="width: 180px;margin-top: 15px;margin-bottom: 20px;"><?php echo $re['VILLE'] ?></p>
             <h6 class="text-muted card-subtitle mb-2" style="margin-top: 0px;">Information sur la demande:</h6>
            
            
            
             <p class="card-text" style="width: 180px;margin-top: 15px;margin-bottom: 20px;"><?php echo $re['IFOS'] ?></p>
            
            <div class="btn-group" role="group" style="margin-top: 0px;"><button class="btn btn-primary" type="button" style="background-color: rgb(72,72,72);height: 41px;">Accepter</button><button class="btn btn-primary" type="button" style="margin-left: 7px;background-color: rgb(245,130,130);">Refuser</button></div>
        </div>
            </div>
        </div>
            </container>
        
                                        <?php }
       
     
        ?>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>



    
    
    
    
    
     
     
     
    
                            
                       






