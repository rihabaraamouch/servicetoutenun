<? php require_once("connexiondb.php");?>




<nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">"
        <div class="container">"
            <div><a class="navbar-brand" href="home.php"><img id="logo" src="assets/img/logo2.PNG"><strong>Service tout-en-un</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="categories.php" style="background-color: rgb(245,130,130);">catégories</a></li>
                     <li class="nav-item" role="presentation"><a href="freelancers.php" class="nav-link">Freelancers</a></li>
                    
                    
                    
                    <li class="nav-item" role="presentation"><a href="Notifications.php" class="nav-link"><i class="far fa-bell"></i>
                        
                        
                        Notification</a></li>
                    

                   <li class="nav-item" role="presentation"> <a class="nav-link" href="newfreelancer.php">
                       <?php
    session_start();

    
if($_SESSION['user']['ROLE']=='VISITEUR'){include("yesfreelancer.php");} else {include("nofreelancer.php");}

                    ?>
                       </a>
                    </li>
        
        
        
        
    <li class="nav-item" role="presentation"><a class="nav-link"   href="Monprofil.php"><i class="fas fa-user mdb-gallery-view-icon"></i>
     <li class="nav-item" role="presentation" style="margin-left:-10px;">Mon Profil</a></li>
                    
                    
                    
                    <li class="nav-item" role="presentation">                            
        
                        <a class="nav-link" href="seDeconnecter.php" style="color: rgb(231,40,40);">
                            <i class="fas fa-sign-out-alt mdb-gallery-view-icon"></i>
                            se Déconnecter</a></li>


                    
                </ul>
        </div>
        </div>
    </nav>