












<?php include("menu.php");?>

<?php require_once("connexiondb.php");
    session_start();
if(isset($_GET['id_freelancer']))
    $IDf= $_GET['id_freelancer'];
else 
    $IDf="";
$requete="select * from FREELANCER
           where ID ='$IDf'";
$resultatF=$pdo->query($requete);
$msg = $_POST['message'];

    
    

    if ($_SERVER['REQUEST_METHOD']=='POST' AND (isset($_SESSION['user'])) ){
        $stmt = $pdo->prepare('INSERT INTO REQUEST(ID_USER, ID_FREELANCER,IFOS) VALUES (:pId_user,:pId_freelancer,:pIfos)');
        $stmt->execute(array(
                       
                             'pId_user' => $_SESSION['user']['ID'],
                             'pId_freelancer' =>  $IDf,
                             'pIfos' => $msg)
                       );
        $succesMsg = "Félicitation , vous avez passé la demande";

        
        
    }
    
    
    
        
    
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
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/LinkedIn-like-Profile-Box.css">
    <link rel="stylesheet" href="assets/css/Modern-Contact-Form.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="getintouch" style="margin-top:60px">
        <div class="container modern-form">
            <div class="text-center">
                <h4 style="color: black;font-size: 45px;">Détail demande:</h4>
            </div>
            <hr >
            <div class="modern-form__form-container">
                <form   method="post" >
                    <div class="form-row">
                        <div class="col col-contact">
                            <?php while($free=$resultatF->fetch()){ ?>
                               

                            <div ><h5 style="font-family:Georgia">Nom Freelancer:  <?php echo $free['NOM'];?> <?php echo $free['PRENOM'] ?></h5>
                                
                                <h5 style="font-family:Georgia">Profession Freelancer:  <?php echo $free['PROFESSION'] ?></h5>
                                <?php }?>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group modern-form__form-group--padding-t"><input class="form-control input modern-form__form-control--textarea" name="message" typr="text" placeholder="Message">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <input type=hidden name='id_freelancer' value=<?php echo $free['ID']; ?> >
                        <div class="col text-center"><button class="btn btn-primary submit-now" type="submit"
                                    style="background: rgb(245,130,130);">LANCER </button></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
<div class="the-errors text-center">

<?php
  
    
    if (!empty($succesMsg)) {
        
        echo '<div class="alert alert-success" role="alert">' . $succesMsg . '</div>';
        
        header("refresh:3;url=home.php");
        
        exit();
    }
    
    
    ?>

</div>




    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
                            


















