<?php
    /* 
     * selon les choix de navigation
     * j'affiche ceci les articles correspondant
     
     * si @choixPage renvoie une valeur alors
     * on affecte la valeur à la variable @choix 
     * sinon on renvoi false
     * et on affiche alors la page par default
     */ 


    if (isset($_GET["choixPage"])) // ici on suppose que @choixPage à deja été defini dans url.
    {
        $choix = $_GET["choixPage"]; 
    }
    else
    {
        $choix = null;   
    }

    switch($choix){
        case 1:
            include("./content/vues/profil2.php");
            break;
        case 2: 
            include("./content/vues/resume.php");
            break;
        case 3:
            include("./content/vues/portfolio.php");
            break;
        case 4:
            include("./content/vues/contact.php");
            break;
//        case 5:
//          include("./content/vues/caroussel.php");
//            break;
        }


?>
