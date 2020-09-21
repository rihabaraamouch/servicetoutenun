<?php include('menu.php')?>


<?php require_once('connexiondb.php') ?>

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
    <link rel="stylesheet" href="assets/css/LinkedIn-like-Profile-Box.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="text-center border rounded-0 shadow-sm profile-box" style="width: 600px;height: 700px;background-color: #ffffff;margin: 5px;margin-left: 300px; margin-top:62.5px;">
        <div style="height: 50px;background-image: url(&quot;assets/img/bg-pattern.png&quot;);background-color: rgba(54,162,177,0);"></div>
        <div></div>
        <div style="height: 80px; margin-top:100px;">
            
    
            <h4><strong>NOM:</strong><?php session_start();
 echo $_SESSION['user']['NOM'] ?>
</h4>
            
            <h4><strong>PRENOM:</strong><?php session_start();
 echo $_SESSION['user']['PRENOM'] ?>
            
</h4>
         <h4><strong>NOM D'UTILISATEUR:</strong><?php session_start();
 echo $_SESSION['user']['LOGIN'] ?>
</h4>
            <h4><strong>EMAIL:</strong><?php session_start();
 echo $_SESSION['user']['EMAIL'] ?>
</h4>
             <h4><strong>VILLE:</strong><?php session_start();
 echo $_SESSION['user']['VILLE'] ?>
</h4>
            
            
            
            
            
            
            
            
            
            
            
            <p style="font-size: 12px;">SERVICE TOUT-EN-UN</p>
        </div>
    </div>
    ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>