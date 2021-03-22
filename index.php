<?php
    

    include("./structureHTML/hautPage.php");

    include("./structureHTML/navPage.php");

    /*ajout d'une condition pour l'affichage du bas de page
     *
     * si il y a navigation alors on affiche le BP
     * sinon il est cacher.
     */

    if(isset($_GET["choixPage"]))
    {
      include("./structureHTML/basPage.php");  
    }

?>