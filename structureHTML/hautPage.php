<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <!--- attention ne pas oublier cette meta sous peine de ne pas afficher correctement  ses grille bootstrap --->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./fontAwesome/css/all.css">
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">

    <title>PortFolio</title>
</head>


<body>

    <section class="container">
        <header class="row">
            <div class="invisibleImg ">
                <img id="photo-inner" src="./content/media/images/moi.jpg" alt="un homme" height="150" width="150">
            </div>

            <!--            /********************* partie info personnel *****************************/-->

            <div class="col" id="info-personnel">
                <h3 class="col">Yan-Sin-Ha-Yeung Jean Laily</h3>
                <p class="col">
                    Stagiaire en Digital Codeur au centre AFPAR
                </p>
                <p class="col-10 justify-content">
                    Étant un passionné de nouvelle technologie et de l'informatique, il était naturel pour moi de me diriger vers le métier de développeur. Grâce à l'AFPAR et leur formation passerelle cela m'a permis de découvrir les bases du développement et peut être pouvoir continuer vers la formation titrante.
                </p>
            </div>
<br>
           <br>
<!-- ********************************** instruction php d'affichage ***** **************************************** -->

            <?php
                
            /* si $choixPage existe et n'est pas null & egal au paramatre "1" alors j'affiche
             * l'include 
             */
            
            if(isset($_GET["choixPage"]) and $_GET["choixPage"] == 1)
            {                
                include("./content/vues/profil.php");
               
            }
            else /* si $choixPage est null alors on affiche autre chose */
            {
                include("./content/vues/accueil.php");
            }
            
            ?>

        </header>
</section>