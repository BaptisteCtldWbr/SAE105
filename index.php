<?php
    $couleur_bulle_classe = "rose";
    $page="index";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil • BUT MMI - IUT de Cergy Pontoise</title>
   
    <link rel="shortcut icon" href="ressources/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-accueil.css">
    <link rel="stylesheet" href="ressources/css/footer.css">
    <link rel="stylesheet" href="ressources/css/index.css">
    <meta property="og:title" content="BUT MMI - IUT de Cergy Pontoise">
    <meta property="og:description" content="Découvrez le BUT MMI">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo'https://' . $_SERVER['HTTP_HOST'] . '/sae105/ressources/images/favicon.png'?>">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>
        <main class="conteneur-principal">

            <h1 class="titre-page">Articles sur le BUT MMI </h1>

        <article class="forme">
          <div>
                
            <section class="text">
                <img src="ressources/images/IMG_6897.png" alt="Article 1 Image">
                <h2 class="titre"> Le BUT MMI</h2>
             <p class="container"> BUT MMI (anciennement DUT MMI) est un diplôme universitaire délivré par les Instituts Universitaires de Technologie (IUT) en France. Il vise à former des professionnels polyvalents dans le domaine du multimédia, de l'internet et de la communication numérique. Il existe aujourd’hui dans 30 IUT en France, dont l’admission se fait sur dossier scolaire via Parcoursup & fait partie des formations les plus demandées.</p>
            
            </section>

            
            <section class="text">
                <img src="ressources/images/IMG_6897.png" alt="Article 2 Image">
                <h2 class="titre">Les Formations</h2>
              <p class="container">Le Bachelor Digital est une formation de niveau bac +3 dispensée par MyDigitalSchool. Il se concentre sur les domaines du marketing digital, de création numérique & de contenu et de la gestion de projet web. Il contient une troisième année de spécialisation, en alternance, avec 7 options possibles. L’alternance, liée à la spécialisation, garantit une employabilité du même niveau que les grandes écoles. L’admission se fait sur dossier de candidature suivi d’un entretien. Il vous sera demandé votre dernier diplôme obtenu (bac), une lettre de motivation & de présentation du projet professionnel, toute expérience professionnelle & associative sera également valorisée.</p>
             </section>



            <section class="text">
                <img src="ressources/images/IMG_6897.png" alt="Article 3 Image">
                <h2 class="titre">La Spécialisation</h2>
                <p class="container"> Le BUT MMI propose une formation équilibrée entre les aspects techniques et créatifs. Les étudiants sont formés sur des matières telles que la conception web, l'infographie, le développement web, le marketing numérique, la communication, la gestion de projet et la culture digitale. Ils acquièrent ainsi une polyvalence appréciée dans l'industrie.Le Bachelor Digital de l'école MyDigitalSchool se construit autour d’un premier cycle web & multimédia, qui permet de découvrir l’ensemble des métiers du web : le référencement, les médias sociaux, le marketing digital, la gestion de projet web, le développement web et les stratégies de communication digitale.</p>
           
            </section>
           
          </div>
        
                <a class="jpo-banniere" title="Ouverture dans un nouvel onglet" href="https://www.cyu.fr/salons-journee-portes-ouvertes" target="_blank">
                    <img src="ressources/images/logo-cyu-blanc.png" width="200" class="logo" alt="">
                    <section class="textes">
                        <p class="txt-petit">Journée portes ouvertes</p>
                        <p class="txt-grand">
                            27/01/2024, <br/>
                            de 10h à 17h
                        </p>
                        <p class="en-savoir-plus">EN SAVOIR PLUS</p>
                    </section>
                </a>
        </article>
        </main>

    </section>

    <?php require_once('./ressources/includes/footer.php'); ?>
</body>


</html>