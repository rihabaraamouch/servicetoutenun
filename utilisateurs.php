

<?php
	require_once('connexiondb.php');
	
	$LOGIN=isset($_GET['LOGIN'])?$_GET['LOGIN']:"";

$requeteUser="select * from UTILISATEUR where LOGIN like '%$LOGIN%'";
$requetCount="select count(*) as countUser from UTILISATEUR";


$resultatUser =$pdo->query($requeteUser);
$resultatCount=$pdo->query($requetCount);
$nbrUser=$tabCount['countUser'];



?>





<! DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>Les utilisateurs du site</title>
        <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
        
    
    
    
    </head>
    
<body>
<?php include("menu.php");?>

<div class="container" >
        <div class="card" style="margin-left: 15px; margin-right: 15px;">
            <div class="card-header" style="height: 55px; margin-top: 70px;  ">
                <h5 class="mb-0" style="color: rgb(245,130,130);font-size: 18px;text-align: left;">Chercher un utilisateur:</h5>
            </div>
            
            <div class="card-body" style="margin-bottom: 4px; margin-left: 10px; margin-right: 10px;">
                
                <form method="get" action="utilisateurs.php" class="form-inline">
                    <div class="form-group">
                    <input type="text" name="LOGIN" placeholder="tapez un mot clé..." class="form-control"
                           value="<?php echo $LOGIN ?>"/>
                    </div>
                <button type="submit" style="height:30px;" class="btn btn-light">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
</svg>
								Chercher...
							</button>
                    
                </form>
        </div>
    </div>
    
    
    
    
    
    <div class="container">
        <div class="card">
            <div class="card-header" style="margin-bottom: -8px;">
                <h5 class="mb-0" style="color: rgb(245,130,130);font-size: 18px;">Liste des utilisateurs:(<?php echo $nbrUser ?> utilisateurs)</h5>
            </div>
                        </div>
            <div class="card-body">
                <p class="card-text"></p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>login</th>
                                <th>Email</th>
                                <th>Role</th>                                <th>Actions</th>

                                

                                
                            </tr>
                        </thead>
                        <tbody>
                            
                                <?php while($user=$resultatUser->fetch()){ ?>
                                <tr class="<?php echo $user['ETAT']==0?'danger':''?>">

                                <td><?php echo $user['LOGIN'] ?></td>            <td><?php echo $user['EMAIL'] ?></td>            <td><?php echo $user['ROLE'] ?></td>
                                    <td> 
                                        
                                        <a onclick="return confirm('Etes vous sur de vouloir supprimer cet utilisateur')" href="supprimerUtilisateur.php?ID=<?php echo $user['ID'] ?>" >
                                            
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:black;">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>
    <a/>
    
    
                                    
                                    </td>
                                    </tr>
                                <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    
    
    </body>



</HTML>



    


