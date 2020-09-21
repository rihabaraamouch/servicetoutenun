<! DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <tit>Nouvelle Categorie</tit>
        <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
    
    
    </head>
    
<body>
    <?php include("menu.php");?>
    
    <div class="container"  style="margin-top:-30px">
        <div class="card" style="margin-left: 15px; margin-right: 15px;">
            <div class="card-header" style="height: 55px; margin-top: 70px;  ">
                <h5 class="mb-0" style="color: rgb(245,130,130);font-size: 16px;text-align: left;">Veuillez saisir les données de la nouvelle Catégorie:</h5>
            </div>
            
            <div class="card-body" style="margin-bottom: 4px; margin-left: 10px; margin-right: 10px;">
                
                <form method="post" action="insertCategorie.php" class="form-inline">
                   
                    
                    
                    <div class="form-group">
                        <label >Categorie:</label>
                     &nbsp
                     &nbsp

                    <input type="text" name="nomC" placeholder="Nom de la Catégorie" class="form-control"/>
                    </div>
                    &nbsp &nbsp
                    
                    
                    
                <button type="submit" style="height:30px;" class = "btn btn-light" style="margin-right:55px;">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-top:-5px">
  <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
								Enregistrer
							</button>
                </form>
        </div>
    
    
    
    
    
    
    
    
   

    
    
    
    
    
    </body>

</HTML>