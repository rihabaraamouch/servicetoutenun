<?php require_once("connexiondb.php");
if(isset($_GET['nomG']))
    $nomG= $_GET['nomG'];
else 
    $nomG="";
$requete="select * from CATEGORIE
           where NOM_CATEGORIE like '%$nomG%'";
$resultatF=$pdo->query($requete);


?>
<?php include("menu.php");?>
<div class="container" >
        <div class="card" style="margin-left: 15px; margin-right: 15px;">
            <div class="card-header" style="height: 55px; margin-top: 70px;  ">
                <h5 class="mb-0" style="color: rgb(245,130,130);font-size: 18px;text-align: left;">Chercher une catégorie:</h5>
            </div>
            
            <div class="card-body" style="margin-bottom: 4px; margin-left: 10px; margin-right: 10px;">
                
                <form method="get" action="categories.php" class="form-inline">
                    <div class="form-group">
                    <input type="text" name="nomG" placeholder="tapez un mot clé..." class="form-control"/>
                    </div>
                <button type="submit" style="height:30px;">
								<i class="glyphicon glyphicon-search"></i>
								Chercher...
							</button>
                </form>
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
                                <th>ID Catégorie</th>
                                <th>Catégorie</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <?php while($CATEGORIE=$resultatF->fetch()){ ?>
                                <tr>

                                <td><?php echo $CATEGORIE['ID_CATEGORIE'] ?></td>
                                <td><?php echo $CATEGORIE['NOM_CATEGORIE'] ?></td>
                                    </tr>
                                <?php }?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>