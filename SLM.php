<?php
    $couleur_bulle_classe = "rouge";
    $page = "medias";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sur les médias • BUT MMI - IUT de Cergy Pontoise</title>
    <link rel="shortcut icon" href="ressources/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/footer.css">
    <link rel="stylesheet" href="ressources/css/slm.css">
    <meta property="og:title" content="Sur les médias • BUT MMI - IUT de Cergy Pontoise">
    <meta property="og:description" content="Découvrez plusieurs vidéos traitant du DUT/BUT MMI au sein de l'IUT de Cergy-Pontoise.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo'https://' . $_SERVER['HTTP_HOST'] . '/sae105/ressources/images/favicon.png'?>">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>
        <main class="conteneur-principal">
            <h1 class="titre-page">Les actualités et les évènements importants du BUT et de l'IUT CY Paris Université dans les médias</h1>


            <div class = "flex">
                <div class = "video">
                    <p>La nouvelle réforme : le BUT MMI</p>
                    <iframe src ="https://www.youtube.com/embed/oiEbQF7qfBU" title ="Youtube video player"></iframe>
                </div> 
                <div class = "video">
                    <p>Pourquoi étudier à l'IUT CYU ?</p>
                    <iframe src ="https://www.youtube.com/embed/SyjF4h2Zb7Q" title ="Youtube video player"></iframe>
                </div>                 
                <div class = "video">
                    <p>Job interview en anglais au département MMI</p>
                    <iframe src ="https://www.youtube.com/embed/t72pdxpNjyc" title ="Youtube video player"></iframe>
                </div>                 
                <div class = "video">
                    <p>L'importance de l'IUT dans les études supérieures</p>
                    <iframe src ="https://www.youtube.com/embed/xD4wshE0hEg" title ="Youtube video player"></iframe>
                </div>                 

        
        </div>

            
         

<footer>
    <img src="ressources/images/logo-cyu-couleur.svg" alt="Logo de Cergy Paris Université">
    <div id="footer-bordure"></div>  
    <div id="footer-texte">
        <p>Certains textes sont issus de Wikipédia</p>
        <ul id="footer-liens">
            <li><a href="https://fr-fr.facebook.com/CYCergyParisUniversite/" target="_blank">Facebook</a></li>
            <li><a href="https://twitter.com/universitecergy?lang=fr" target="_blank">Twitter</a></li>
            <li><a href="https://www.cyu.fr/" target="_blank">CY Paris Université</a></li>
            <li>|</li>
            <li><a href="#ancre">Remonter</a></li>
        </ul>
        <p>© 2013-2021 - BUT MMI - CY Paris Université - SAE 105</p>
    </div>
</footer>
    </section>
</body>

</html>