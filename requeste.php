
<?php session_start();

    
if (isset($_SESSION['user'])){ include("requestelogged.php");
                    } else {
                        include("seConnecter.php");
                    }

                    ?>




